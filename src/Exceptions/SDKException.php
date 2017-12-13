<?php

namespace SparrowSDK\Exceptions;

class SDKException extends \Exception
{
    public function __construct($message = null)
    {
        $message = is_null($message)
            ? 'Unknown SDK Error'
            : 'SDK Error: ' . $message;

        parent::__construct($message);
    }
}
