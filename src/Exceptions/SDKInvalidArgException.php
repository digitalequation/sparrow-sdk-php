<?php

namespace SparrowSDK\Exceptions;

class SDKInvalidArgException extends SDKException
{
    private $baseMessage = 'Invalid argument';

    public function __construct($message = null)
    {
        $message = is_null($message)
            ? $this->baseMessage
            : $this->baseMessage . ': ' . $message;

        parent::__construct($message);
    }
}
