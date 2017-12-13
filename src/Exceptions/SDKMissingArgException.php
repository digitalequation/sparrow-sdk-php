<?php

namespace SparrowSDK\Exceptions;

class SDKMissingArgException extends SDKException
{
    private $baseMessage = 'Missing argument';

    public function __construct($message = null)
    {
        $message = is_null($message)
            ? $this->baseMessage
            : $this->baseMessage . ' `' . $message . '`';

        parent::__construct($message);
    }
}
