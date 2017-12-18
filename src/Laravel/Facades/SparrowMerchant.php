<?php

namespace SparrowSDK\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Thus is the Sparrow SDK Merchant facade class
 */
class SparrowMerchant extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'sparrow-sdk.merchant';
    }
}
