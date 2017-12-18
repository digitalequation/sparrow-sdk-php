<?php

namespace SparrowSDK\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Thus is the Sparrow SDK Service facade class
 */
class SparrowService extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'sparrow-sdk.service';
    }
}
