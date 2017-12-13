<?php

namespace SparrowSDK\Handlers;

use SparrowSDK\SparrowClient;
use SparrowSDK\Classes\MethodHandler;

class RefundHandler extends MethodHandler
{
    public function simple($fields)
    {
        $fields['transtype'] = 'refund';

        $supports = [
            'transid' => true,
            'amount'  => true
        ];

        // TODO
    }

    public function advanced($fields)
    {
        $fields['transtype'] = 'refund';

        $supports = [
            'transid' => true,
            'amount'  => true,

            'sendtransreceipttobillemail' => false,
            'sendtransreceipttoshipemail' => false,
            'sendtransreceipttoemails'    => false

            // 'opt_amount_type_#'  => false,
            // 'opt_amount_value_#' => false
        ];

        // TODO
    }
}
