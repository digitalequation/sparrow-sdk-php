<?php

namespace SparrowSDK\Handlers;

use SparrowSDK\SparrowClient;
use SparrowSDK\Classes\MethodHandler;

class AuthorizationHandler extends MethodHandler
{
    public function simple($fields)
    {
        $fields['transtype'] = 'auth';

        $supports = [
            'cardnum' => true,
            'cardexp' => true,
            'amount'  => true,
            // 'zip'     => true, // TODO: check requirement

            'cvv' => false
        ];

        // TODO
    }

    public function verifyAccount($fields)
    {
        $fields['transtype'] = 'auth';

        $supports = [
            'cardnum' => true,
            'cardexp' => true,
            'amount'  => true,
            // 'zip'     => true, // TODO: check requirement

            'cvv' => false,
            'zip' => false
        ];

        // TODO
    }
}