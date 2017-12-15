<?php

namespace SparrowSDK\Service\Handlers;

use SparrowSDK\Service\Classes\MethodHandler;

class CreditHandler extends MethodHandler
{
    //
    // TODO Check if there are also credit methods for Credit Card
    //

    public function simpleAch($fields)
    {
        $fields['transtype'] = 'credit';

        $supports = [
            'bankname'          => true,
            'routing'           => true,
            'account'           => true,
            'achaccounttype'    => true,
            'achaccountsubtype' => true,
            'amount'            => true,

            'company' => false
        ];

        return $this->quickRequest($fields, $supports);
    }

    public function advancedAch($fields, $optAmounts = [])
    {
        $fields['transtype'] = 'credit';

        $supports = [
            'bankname'          => true,
            'routing'           => true,
            'account'           => true,
            'achaccounttype'    => true,
            'achaccountsubtype' => true,
            'amount'            => true,

            'company'                     => false,
            'orderdesc'                   => false,
            'orderid'                     => false,
            'firstname'                   => false,
            'lastname'                    => false,
            'address1'                    => false,
            'address2'                    => false,
            'city'                        => false,
            'state'                       => false,
            'zip'                         => false,
            'country'                     => false,
            'phone'                       => false,
            'email'                       => false,
            'shipfirstname'               => false,
            'shiplastname'                => false,
            'shipcompany'                 => false,
            'shipaddress1'                => false,
            'shipaddress2'                => false,
            'shipcity'                    => false,
            'shipstate'                   => false,
            'shipzip'                     => false,
            'shipcountry'                 => false,
            'shipphone'                   => false,
            'shipemail'                   => false,
            'saveclient'                  => false,
            'updateclient'                => false,
            'birthdate'                   => false,
            'checknumber'                 => false,
            'driverlicensenumber'         => false,
            'driverlicensecountry'        => false,
            'driverlicensestate'          => false,
            'courtesycardid'              => false,
            'sendtransreceipttobillemail' => false,
            'sendtransreceipttoshipemail' => false,
            'sendtransreceipttoemails'    => false
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

    public function simpleEcheck($fields)
    {
        $fields['transtype'] = 'credit';

        $supports = [
            'bankname'       => true,
            'routing'        => true,
            'account'        => true,
            'achaccounttype' => true,
            'amount'         => true,
            'firstname'      => true,
            'lastname'       => true,
            'address1'       => true,
            'city'           => true,
            'state'          => true,
            'zip'            => true,
            'country'        => true,

            'company' => false
        ];

        return $this->quickRequest($fields, $supports);
    }

    public function advancedEcheck($fields, $optAmounts = [])
    {
        $fields['transtype'] = 'credit';

        $supports = [
            'bankname'       => true,
            'routing'        => true,
            'account'        => true,
            'achaccounttype' => true,
            'amount'         => true,
            'firstname'      => true,
            'lastname'       => true,
            'address1'       => true,
            'city'           => true,
            'state'          => true,
            'zip'            => true,
            'country'        => true,

            'company'                     => false,
            'address2'                    => false,
            'phone'                       => false,
            'email'                       => false,
            'shipfirstname'               => false,
            'shiplastname'                => false,
            'shipcompany'                 => false,
            'shipaddress1'                => false,
            'shipaddress2'                => false,
            'shipcity'                    => false,
            'shipstate'                   => false,
            'shipzip'                     => false,
            'shipcountry'                 => false,
            'shipphone'                   => false,
            'shipemail'                   => false,
            'orderdesc'                   => false,
            'orderid'                     => false,
            'saveclient'                  => false,
            'updateclient'                => false,
            'sendtransreceipttobillemail' => false,
            'sendtransreceipttoshipemail' => false,
            'sendtransreceipttoemails'    => false
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

    public function simpleEwallet($fields)
    {
        $fields['transtype'] = 'credit';

        $supports = [
            'ewalletaccount' => true,
            'amount'         => true,

            'ewallettype' => false,
            'currency'    => false
        ];

        return $this->quickRequest($fields, $supports);
    }
}
