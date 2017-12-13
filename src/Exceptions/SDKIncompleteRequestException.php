<?php

namespace SparrowSDK\Exceptions;

class SDKIncompleteRequestException extends SDKException
{
    private $baseMessage = 'Incomplete request data';

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
            : $this->baseMessage . ' - missing required ' . $message;

        parent::__construct($message);
    }
}
