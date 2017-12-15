<?php

namespace SparrowSDK\Service\Handlers;

use SparrowSDK\Service\Classes\MethodHandler;

class VoidHandler extends MethodHandler
{
    public function simple($fields)
    {
        $fields['transtype'] = 'void';

        $supports = [
            'transid' => true
        ];

        return $this->quickRequest($fields, $supports);
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

        return $this->quickRequest($fields, $supports);
    }
}
