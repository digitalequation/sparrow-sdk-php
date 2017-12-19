<?php

namespace SparrowSDK\Laravel;

use SparrowSDK\SparrowServiceClient;
use SparrowSDK\SparrowMerchantClient;

use SparrowSDK\Exceptions\SDKInvalidArgException;

/**
 * This is the Sparrow gateway class, which centralizes access to both Service and Merchant functions
 */
class SparrowGateway
{
    public $service;
    public $merchant;

    /**
     * SparrowGateway constructor
     *
     * @param string $merchantKey An optional merchant key to set
     */
    public function __construct($merchantKey = null)
    {
        $this->service  = new SparrowServiceClient($merchantKey);
        $this->merchant = new SparrowMerchantClient($merchantKey);
    }
}
