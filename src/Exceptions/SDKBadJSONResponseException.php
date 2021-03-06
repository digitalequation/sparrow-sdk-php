<?php

namespace SparrowSDK\Exceptions;

class SDKBadJSONResponseException extends SDKException
{
    private $baseMessage = 'Remote JSON response is inconsistent or invalid';

    public function __construct($message = null)
    {
        $message = is_null($message)
            ? $this->baseMessage
            : $this->baseMessage . ' - ' . $message;

        parent::__construct($message);
    }
}
