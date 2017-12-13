<?php

namespace SparrowSDK\Exceptions;

class SDKUnsupportedRequestException extends SDKException
{
    private $baseMessage = 'Unsupported request data';

    public function __construct($message = null)
    {
        if (is_array($message)) {
            foreach ($message as $m) {
                $m = '`' . $m . '`';
            }
            $message = implode(', ', $message);
        }

        $message = is_null($message)
            ? $this->baseMessage
            : $this->baseMessage . ' - invalid ' . $message;

        parent::__construct($message);
    }
}
