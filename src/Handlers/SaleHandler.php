<?php

namespace SparrowSDK\Handlers;

use SparrowSDK\SparrowClient;
use SparrowSDK\Classes\MethodHandler;

class SaleHandler extends MethodHandler
{
    public function simple($fields)
    {
        $fields['transtype'] = 'sale';

        $supports = [
            'cardnum' => true,
            'cardexp' => true,
            'amount'  => true,
            'zip'     => true,

            'cvv' => false
        ];

        // TODO
    }

    public function advanced($fields)
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

            // 'skunumber_#'   => false,
            // 'description_#' => false,
            // 'amount_#'      => false,
            // 'quantity_#'    => false

            // 'opt_amount_type_#'       => false,
            // 'opt_amount_value_#'      => false,
            // 'opt_amount_percentage_#' => false
        ];

        // TODO
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

        // TODO
    }

    public function advancedStarCard($fields)
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

            // 'skunumber_#'   => false,
            // 'description_#' => false,
            // 'amount_#'      => false,
            // 'quantity_#'    => false
        ];

        // TODO
    }
}
