<?php

namespace SparrowSDK\Handlers;

use SparrowSDK\SparrowClient;
use SparrowSDK\Classes\MethodHandler;

class VoidHandler extends MethodHandler
{
    public function simple($fields)
    {
        $fields['transtype'] = 'void';

        $supports = [
            'transid' => true
        ];

        // TODO
    }

    public function advanced($fields)
    {
        $fields['transtype'] = 'void';

        $supports = [
            'transid' => true,

            'sendtransreceipttobillemail' => false,
            'sendtransreceipttoshipemail' => false,
            'sendtransreceipttoemails'    => false
        ];

        // TODO
    }
}