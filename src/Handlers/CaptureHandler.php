<?php

namespace SparrowSDK\Handlers;

use SparrowSDK\SparrowClient;
use SparrowSDK\Classes\MethodHandler;

class CaptureHandler extends MethodHandler
{
    public function simple($fields)
    {
        $fields['transtype'] = 'capture';

        $supports = [
            'transid' => true,
            'amount'  => true,

            'sendtransreceipttobillemail' => false,
            'sendtransreceipttoshipemail' => false,
            'sendtransreceipttoemails'    => false
        ];

        // TODO
    }

    public function simpleOffline($fields)
    {
        $fields['transtype'] = 'offline';

        $supports = [
            'cardnum'  => true,
            'cardexp'  => true,
            'amount'   => true,
            'authcode' => true,
            'authdate' => true,
            // 'zip'      => true, // TODO: check requirement

            'cvv' => false
        ];

        // TODO
    }

    public function advanced($fields)
    {
        $fields['transtype'] = 'capture';

        $supports = [
            'transid' => true,
            'amount'  => true,

            'sendtransreceipttobillemail' => false,
            'sendtransreceipttoshipemail' => false,
            'sendtransreceipttoemails'    => false,
            'shiptracknum'                => false,
            'shipcarrier'                 => false,
            'orderid'                     => false

            // 'opt_amount_type_#'       => false,
            // 'opt_amount_value_#'      => false,
            // 'opt_amount_percentage_#' => false
        ];

        // TODO
    }
}
