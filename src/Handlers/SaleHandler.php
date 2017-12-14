<?php

namespace SparrowSDK\Handlers;

use SparrowSDK\SparrowClient;
use SparrowSDK\Classes\MethodHandler;

class SaleHandler extends MethodHandler
{
    public function simpleCard($fields)
    {
        $fields['transtype'] = 'sale';

        $supports = [
            'cardnum' => true,
            'cardexp' => true,
            'amount'  => true,
            'zip'     => true,

            'cvv' => false
        ];

        return $this->quickRequest($fields, $supports);
    }

    public function advancedCard($fields, $skus = [], $optAmounts = [])
    {
        $fields['transtype'] = 'sale';

        $supports = [
            'cardnum' => true,
            'cardexp' => true,
            'amount'  => true,
            'zip'     => true, // TODO: check requirement

            'cvv'                          => false,
            'currency'                     => false,
            'firstname'                    => false,
            'lastname'                     => false,
            'orderdesc'                    => false,
            'orderid'                      => false,
            'cardipaddress'                => false,
            'tax'                          => false,
            'shipamount'                   => false,
            'ponumber'                     => false,
            'company'                      => false,
            'address1'                     => false,
            'address2'                     => false,
            'city'                         => false,
            'state'                        => false,
            'country'                      => false,
            'phone'                        => false,
            'fax'                          => false,
            'email'                        => false,
            'shipfirstname'                => false,
            'shiplastname'                 => false,
            'shipcompany'                  => false,
            'shipaddress1'                 => false,
            'shipaddress2'                 => false,
            'shipcity'                     => false,
            'shipstate'                    => false,
            'shipzip'                      => false,
            'shipcountry'                  => false,
            'shipphone'                    => false,
            'shipemail'                    => false,
            'sendtransreceipttobillemail'  => false,
            'sendtransreceipttoshippemail' => false,
            'sendtransreceipttoemails'     => false,
            'token'                        => false,
            'saveclient'                   => false,
            'updateclient'                 => false,
            'groupid'                      => false,
            'pinlessdebitindicator'        => false,
            'sendpaymentdesc'              => false,
            'electrcommind'                => false,
            'securecavv'                   => false,
            'securexid'                    => false,
            'threedsecparesstatus'         => false,
            'signatureverification'        => false,
            'threedsecuretransactionid'    => false
        ];

        $skuSupports = [
            'skunumber'   => false,
            'description' => false,
            'amount'      => false,
            'quantity'    => false
        ];

        $optAmountSupports = [
            'opt_amount_type'       => false,
            'opt_amount_value'      => false,
            'opt_amount_percentage' => false
        ];

        $this->enforce($fields, $supports);

        $i = 1;
        foreach ($skus as $sku) {
            if (!count($sku)) {
                continue;
            }

            $this->enforce($sku, $skuSupports);

            foreach ($sku as $k => $v) {
                $fields[$k . '_' . $i] = $v;
            }

            $i++;
        }

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

    public function simpleStarCard($fields)
    {
        $fields['transtype'] = 'sale';

        $supports = [
            'cardnum' => true,
            'cardexp' => true,
            'amount'  => true,
            'zip'     => true, // TODO: check requirement
            'CID'     => true
        ];

        return $this->quickRequest($fields, $supports);
    }

    public function advancedStarCard($fields, $skus = [])
    {
        $fields['transtype'] = 'sale';

        $supports = [
            'cardnum' => true,
            'cardexp' => true,
            'amount'  => true,
            'zip'     => true, // TODO: check requirement
            'CID'     => true,

            'currency'                     => false,
            'firstname'                    => false,
            'lastname'                     => false,
            'orderdesc'                    => false,
            'orderid'                      => false,
            'cardipaddress'                => false,
            'tax'                          => false,
            'shipamount'                   => false,
            'ponumber'                     => false,
            'company'                      => false,
            'address1'                     => false,
            'address2'                     => false,
            'city'                         => false,
            'state'                        => false,
            'country'                      => false,
            'phone'                        => false,
            'fax'                          => false,
            'email'                        => false,
            'shipfirstname'                => false,
            'shiplastname'                 => false,
            'shipcompany'                  => false,
            'shipaddress1'                 => false,
            'shipaddress2'                 => false,
            'shipcity'                     => false,
            'shipstate'                    => false,
            'shipzip'                      => false,
            'shipcountry'                  => false,
            'shipphone'                    => false,
            'shipemail'                    => false
        ];

        $skuSupports = [
            'skunumber'   => false,
            'description' => false,
            'amount'      => false,
            'quantity'    => false
        ];

        $this->enforce($fields, $supports);

        $i = 1;
        foreach ($skus as $sku) {
            if (!count($sku)) {
                continue;
            }

            $this->enforce($sku, $skuSupports);

            foreach ($sku as $k => $v) {
                $fields[$k . '_' . $i] = $v;
            }

            $i++;
        }

        $req = new APIRequest($this->origin, '', 'POST', ['params' => $fields]);
        return $req->exec();
    }

    public function simpleAch($fields)
    {
        $fields['transtype'] = 'sale';

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
        $fields['transtype'] = 'sale';

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
        $fields['transtype'] = 'sale';

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
        $fields['transtype'] = 'sale';

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
}
