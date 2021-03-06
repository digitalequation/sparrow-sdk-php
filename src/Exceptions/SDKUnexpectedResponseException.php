<?php

namespace SparrowSDK\Exceptions;

class SDKUnexpectedResponseException extends SDKException
{
    private $baseMessage = 'Got unexpected remote response';

    public function __construct($message = null)
    {
        $message = is_null($message)
            ? $this->baseMessage
            : $this->baseMessage . ' - ' . $message;

        parent::__construct($message);
    }
}
