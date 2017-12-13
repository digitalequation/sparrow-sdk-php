<?php

namespace SparrowSDK\Classes;

use SparrowSDK\SparrowClient;

/**
 *
 * MethodHandler
 *
 */
abstract class MethodHandler
{
    protected $origin; // Reference to originating SparrowClient instance

    public function __construct(SparrowClient $origin)
    {
        $this->origin = $origin;
    }
}
