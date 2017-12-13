<?php

namespace SparrowSDK\Exceptions;

class SDKAuthErrorException extends SDKBaseException
{
    public function __construct($message = null)
    {
        $message = is_null($message)
            ? 'Unknown authorization error'
            : 'Authorization error: ' . $message;

        parent::__construct($message);
    }
}
