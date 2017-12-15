<?php

namespace SparrowSDK\Service\Handlers;

use SparrowSDK\Service\Classes\MethodHandler;

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

        return $this->quickRequest($fields, $supports);
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

        return $this->quickRequest($fields, $supports);
    }
}
