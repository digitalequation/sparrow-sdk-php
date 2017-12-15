<?php

namespace SparrowSDK\Service\Handlers;

use SparrowSDK\Service\Classes\MethodHandler;

class CustomFieldHandler extends MethodHandler
{
    public function decrypt($fields)
    {
        $fields['transtype'] = 'decrypt';

        $supports = [
            'fieldname' => true,
            'token'     => true
        ];

        return $this->quickRequest($fields, $supports);
    }
}
