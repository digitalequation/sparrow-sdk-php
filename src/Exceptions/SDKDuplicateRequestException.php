<?php

namespace SparrowSDK\Exceptions;

class SDKDuplicateRequestException extends SDKException
{
    private $baseMessage = 'Duplicate request data';

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
            : $this->baseMessage . ' - multiple ' . $message;

        parent::__construct($message);
    }
}
