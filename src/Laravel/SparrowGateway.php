<?php

namespace SparrowSDK\Laravel;

use SparrowSDK\SparrowMerchantClient;
use SparrowSDK\SparrowServiceClient;

use SparrowSDK\Exceptions\SDKInvalidArgException;

/**
 * This is the Sparrow gateway class, which centralizes access to both Service and Merchant functions
 */
class SparrowGateway
{
    public $merchant;
    public $service;

    /**
     * SparrowGateway constructor
     *
     * @param string $merchantKey An optional merchant key to set
     */
    public function __construct($merchantKey = null)
    {
        $this->merchant = new SparrowMerchantClient($merchantKey);
        $this->service  = new SparrowServiceClient($merchantKey);
    }
}
