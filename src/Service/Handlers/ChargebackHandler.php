<?php

namespace SparrowSDK\Service\Handlers;

use SparrowSDK\Service\Classes\MethodHandler;

class ChargebackHandler extends MethodHandler
{
    public function markTransaction($fields)
    {
        $fields['transtype'] = 'chargeback';

        $supports = [
            'transid' => true,
            'reason'  => true
        ];

        return $this->quickRequest($fields, $supports);
    }
}
