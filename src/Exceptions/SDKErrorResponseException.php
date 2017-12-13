<?php

namespace SparrowSDK\Exceptions;

class SDKErrorResponseException extends SDKException
{
    public function __construct($message = null)
    {
        $message = is_null($message)
            ? 'Unknown remote error'
            : 'Got error response: ' . $message;

        parent::__construct($message);
    }
}
