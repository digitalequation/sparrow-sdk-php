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

        return $this->quickRequest($fields, $supports);
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

        return $this->quickRequest($fields, $supports);
    }

    public function advanced($fields, $optAmounts = [])
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
        ];

        $optAmountSupports = [
            'opt_amount_type'       => false,
            'opt_amount_value'      => false,
            'opt_amount_percentage' => false
        ];

        $this->enforce($fields, $supports);

        $i = 1;
        foreach ($optAmounts as $optAmount) {
            if (!count($optAmount)) {
                continue;
            }

            $this->enforce($optAmount, $optAmountSupports);

            foreach ($optAmount as $k => $v) {
                $fields[$k . '_' . $i] = $v;
            }

            $i++;
        }

        $req = new APIRequest($this->origin, '', 'POST', ['params' => $fields]);
        return $req->exec();
    }
}
