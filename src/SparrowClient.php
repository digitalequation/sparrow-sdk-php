<?php

namespace SparrowSDK;

use SparrowSDK\Exceptions\SDKInvalidArgException;

/**
 *
 * Sparrow PHP Client
 *
 * @link http://foresight.sparrowone.com/ Follows the Sparrow One Service API documentation
 *
 */
class SparrowClient
{
    public static $apiBaseUri = 'https://secure.sparrowone.com/Payments/Services_api.aspx';

    protected $merchantKey = null;

    /**
     * SparrowClient constructor
     */
    public function __construct()
    {
        // ...
    }

    /**
     * Retrieve the currently attached merchant key
     *
     * @return string|null The attached merchant key or null if it is not set
     */
    public function getMerchantKey()
    {
        return $this->merchantKey;
    }

    /**
     * Attach merchant key to SDK client instance. Key changes are dynamic - all objects/entities originating
     * from an instance which has had its key updated will utilize the new key automatically.
     *
     * @param  string $merchantKey The new string type merchant key to attach
     *
     * @throws SDKInvalidArgException If provided $merchantKey param is not a string
     */
    public function attachMerchantKey($merchantKey)
    {
        if (!is_string($merchantKey)) {
            throw new SDKInvalidArgException('`$merchantKey` must be a string');
        }

        $this->merchantKey = $merchantKey;
    }

}
