<?php

namespace SparrowSDK\Service\Handlers;

use SparrowSDK\Service\Classes\MethodHandler;

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
