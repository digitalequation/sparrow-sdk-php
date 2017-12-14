<?php

namespace SparrowSDK\Handlers;

use SparrowSDK\SparrowClient;
use SparrowSDK\Classes\MethodHandler;

class BalanceHandler extends MethodHandler
{
    public function inquire($fields)
    {
        $fields['transtype'] = 'balanceinquire';

        $supports = [
            'cardnum' => true,
            'cardexp' => true
        ];

        return $this->quickRequest($fields, $supports);
    }
}
