<?php

namespace SparrowSDK\Handlers;

use SparrowSDK\SparrowClient;
use SparrowSDK\Classes\MethodHandler;

class ChargebackHandler extends MethodHandler
{
    public function markTransaction($fields)
    {
        $fields['transtype'] = 'chargeback';

        $supports = [
            'transid' => true,
            'reason'  => true
        ];

        // TODO
    }
}
