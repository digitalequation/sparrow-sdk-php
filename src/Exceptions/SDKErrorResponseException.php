<?php

namespace SparrowSDK\Exceptions;

class SDKErrorResponseException extends SDKBaseException
{
    public function __construct($message = null)
    {
        $message = is_null($message)
            ? 'Unknown remote error'
            : 'Got error response: ' . $message;

        parent::__construct($message);
    }
}
