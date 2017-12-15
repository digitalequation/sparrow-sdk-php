<?php

namespace SparrowSDK\Merchant\Classes;

use SparrowSDK\SparrowMerchantClient;

use SparrowSDK\Exceptions\SDKBadJSONResponseException;
use SparrowSDK\Exceptions\SDKErrorResponseException;
use SparrowSDK\Exceptions\SDKInvalidArgException;
use SparrowSDK\Exceptions\SDKUnexpectedResponseException;

/**
 *
 * Represents an API Request definition.
 *
 * An APIRequest's parameters can be modified on demand and can be executed multiple times for the same instance.
 *
 */
class APIRequest
{
    public const ALLOWED_METHODS = ['GET', 'POST'];

    protected $defaultOpts = [ // Basic support for extended opts
        'params' => []         // Params to be passed in request
    ];

    protected $origin;
    protected $endpoint;
    protected $method;
    protected $opts;

    /**
     * Constructs API request definition.
     *
     * @param SparrowMerchantClient $origin   Originating SparrowMerchantClient reference
     * @param string                $method   Method for cURL call - supports GET, POST, PUT or DELETE only
     * @param string                $endpoint API endpoint
     * @param mixed[]               $opts     (optional) Additional options to pass to request.
     *                                        Request parameters (if any) must be passed here
     *
     * @throws SDKInvalidArgException if $method is non-string.
     * @throws SDKInvalidArgException if unsupported $method is provided.
     * @throws SDKInvalidArgException if $endpoint is non-string.
     * @throws SDKInvalidArgException if $opts param is not an array.
     */
    public function __construct(SparrowMerchantClient $origin, $method, $endpoint, $opts = [])
    {
        if (!is_string($method)) {
            throw new SDKInvalidArgException('`$method` must be a string');
        } elseif (!in_array($method, self::ALLOWED_METHODS)) {
            throw new SDKInvalidArgException('unsupported ' . $method . ' `$method`');
        } elseif (!is_string($endpoint)) {
            throw new SDKInvalidArgException('`$endpoint` must be a string');
        } elseif (!is_array($opts)) {
            throw new SDKInvalidArgException('`$opts` must be an array');
        }

        $this->opts = $this->defaultOpts;
        $this->updateOpts($opts);

        $this->origin   = $origin;
        $this->endpoint = $endpoint;
        $this->method   = $method;
    }

    /**
     * Updates options list inside API request definition.
     *
     * @param mixed[] $opts (optional) Additional options array to merge with previous option values
     *
     * @throws SDKInvalidArgException if $opts param is not an array.
     * @throws SDKInvalidArgException if provided parameter list is non-array parameter.
     */
    public function updateOpts($opts = [])
    {
        if (!is_array($opts)) {
            throw new SDKInvalidArgException('`$opts` must be an array');
        } elseif (array_key_exists('params', $opts) && !is_array($opts['params'])) {
            throw new SDKInvalidArgException('`$opts[\'params\']` must be an array');
        }

        $this->opts = array_merge($this->opts, $opts);
    }

    /**
     * Executes cURL call as per current API definition state.
     *
     * @return string Returns resulting data response from server (including errors and inconsistencies)
     */
    public function call()
    {
        // Initialize cURL instance
        $ch = curl_init();

        $curlHeaders = [];

        // Set cURL call URL
        $callUrl = SparrowMerchantClient::API_BASE_URI . $this->endpoint;

        // Set request method
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $this->method);

        // Method-oriented parsing
        switch ($this->method) {
            case 'GET':
                $callUrl .= '?' . http_build_query($this->opts['params']);

                break;
            case 'PUT':
            case 'POST':
                // Set request fields to JSON encoded parameters
                $jsonData = json_encode($this->opts['params']);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

                // The Sparrow Merchant Public API supports both JSON and XML. XML is fugly so we'll be using JSON.
                array_push($curl_headers, 'Content-Type: application/json');
                array_push($curl_headers, 'Content-Length: ' . strlen($jsonData));

                break;
        }

        curl_setopt($ch, CURLOPT_HTTPHEADER, $curlHeaders);
        curl_setopt($ch, CURLOPT_URL, $callUrl);

        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $curlData   = curl_exec($ch);
        $curlStatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        // Cleanup cURL instance
        curl_close($ch);
        $ch = null;

        return [
            'data'   => $curlData,
            'status' => $curlStatus
        ];
    }

    /**
     * Does cURL response data interpretation
     *
     * @throws SDKErrorResponseException   if the remote response is an error.
     *         A server response is interpreted as an error if obtained status code differs from expected status code.
     *         Expected status codes are `200 OK` for GET/POST/PUT, `204 No Content` for DELETE.
     * @throws SDKBadJSONResponseException if the remote response contains error or invalid JSON content
     *
     * @return mixed[]|boolean In case of successful request, a URL decoded object is returned. If a DELETE request
     *         is issued, returns true if call is successful (exception otherwise).
     */
    public function exec()
    {
        if ($this->origin->debugReturn != null &&
            array_key_exists('data', $this->origin->debugReturn) &&
            array_key_exists('status', $this->origin->debugReturn)
        ) {

            // If `debugReturn` is present, assume mock response and skip remote API call
            $curlData   = $this->origin->debugReturn['data'];
            $curlStatus = $this->origin->debugReturn['status'];

        } else {
            $call       = $this->call();
            $curlData   = $call['data'];
            $curlStatus = $call['status'];
        }

        $expectedHttpStatus = $this->method === 'DELETE' ? 204 : 200;

        if ($curlStatus !== $expectedHttpStatus) {
            throw new SDKErrorResponseException($curlStatus . ' - ' . $curlData);
        }

        // If DELETE request, expect no output
        if ($this->method === 'DELETE') {
            return true;
        }

        // Normally, expect JSON qualified output
        $responseData = json_decode($curlData, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new SDKBadJSONResponseException($curl_data);
        }

        if (!count($responseData)) {
            throw new SDKUnexpectedResponseException('Empty object received');
        }

        return $responseData;
    }
}
