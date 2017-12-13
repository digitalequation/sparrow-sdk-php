<?php

namespace SparrowSDK\Handlers;

use SparrowSDK\SparrowClient;
use SparrowSDK\Classes\MethodHandler;

class EwalletHandler extends MethodHandler
{
    public function simpleCredit($fields)
    {
        $fields['transtype'] = 'credit';

        $supports = [
            'ewalletaccount' => true,
            'amount'         => true,

            'ewallettype' => false,
            'currency'    => false
        ];

        // TODO
    }
}
