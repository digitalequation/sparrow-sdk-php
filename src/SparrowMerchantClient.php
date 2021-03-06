<?php

namespace SparrowSDK;

use SparrowSDK\Exceptions\SDKAuthErrorException;
use SparrowSDK\Exceptions\SDKInvalidArgException;

use SparrowSDK\Merchant\Handlers\AuthHandler;
use SparrowSDK\Merchant\Handlers\TerminalHandler;
use SparrowSDK\Merchant\Handlers\TransactionHandler;

/**
 *
 * Sparrow PHP Client for Merchant Public API + Merchant Transaction Query API
 *
 * @link http://sparrowone.com/wp-content/uploads/2016/09/SPARROW-Merchant-Public-API-v3.2.pdf
 * @link http://sparrowone.com/wp-content/uploads/2017/03/SPARROW-Merchant-Public-Services-Transaction-Query-API.pdf
 * @link http://sparrowone.com/wp-content/uploads/2017/03/SPARROW-Merchant-Public-Services-Settlement-API-1.pdf
 *
 */
class SparrowMerchantClient
{
    public const API_BASE_URI = 'https://secure.sparrowone.com/api/public/merchant';

    protected $merchantKey = null;
    protected $authToken   = null;

    public $auth;
    public $terminal;
    public $transactions;

    public $debugReturn = null;

    /**
     * SparrowMerchantClient constructor
     *
     * @param  string $merchantKey An optional merchant key to set
     *
     * @throws SDKInvalidArgException if $merchantKey is set and is not a string
     */
    public function __construct($merchantKey = null)
    {
        if (!is_null($merchantKey) && !is_string($merchantKey)) {
            throw new SDKInvalidArgException('`$merchantKey` must be a string');
        }

        $this->merchantKey = $merchantKey;

        $this->auth         = new AuthHandler($this);
        $this->terminal     = new TerminalHandler($this);
        $this->transactions = new TransactionHandler($this);
    }

    /**
     * Retrieve the currently attached merchant key
     *
     * @param $force boolean Whether or not to throw an exception if the merchant key is null
     *
     * @throws SDKAuthErrorException If $force is set to true and merchant key is null
     *
     * @return string|null The attached merchant key or null if it is not set
     */
    public function getMerchantKey($force = false)
    {
        if ($force === true && is_null($this->merchantKey)) {
            throw new SDKAuthErrorException('merchant key must be set');
        }

        return $this->merchantKey;
    }

    /**
     * Attach a merchant key to the client instance. Key changes are dynamic - all objects/entities originating
     * from an instance which has had its key updated will utilize the new key automatically.
     *
     * @param  string $merchantKey The new string type merchant key to attach
     *
     * @throws SDKInvalidArgException if provided $merchantKey param is not a string
     */
    public function setMerchantKey($merchantKey)
    {
        if (!is_string($merchantKey)) {
            throw new SDKInvalidArgException('`$merchantKey` must be a string');
        }

        $this->merchantKey = $merchantKey;
    }

    /**
     * Retrieve the currently attached authentication token
     *
     * @param $force boolean Whether or not to throw an exception if the auth token is null
     *
     * @throws SDKAuthErrorException If $force is set to true and auth token is null
     *
     * @return string|null The attached auth token or null if it is not set
     */
    public function getAuthToken($force = false)
    {
        if ($force === true && is_null($this->authToken)) {
            throw new SDKAuthErrorException('auth token must be set');
        }

        return $this->authToken;
    }

    /**
     * Attach an auth token to the client instance. Token changes are dynamic - all objects/entities originating
     * from an instance which has had its token updated will utilize the new token automatically.
     *
     * @param  string $authToken The new string type auth token to attach
     *
     * @throws SDKInvalidArgException if provided $authToken param is not a string
     */
    public function setAuthToken($authToken)
    {
        if (!is_string($authToken)) {
            throw new SDKInvalidArgException('`$authToken` must be a string');
        }

        $this->authToken = $authToken;
    }
}
