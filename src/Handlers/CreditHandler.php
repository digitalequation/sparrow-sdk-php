<?php

namespace SparrowSDK\Handlers;

use SparrowSDK\SparrowClient;
use SparrowSDK\Classes\MethodHandler;

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

        // TODO
    }

    public function advancedAch($fields)
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

            // 'opt_amount_type_#'       => false,
            // 'opt_amount_value_#'      => false,
            // 'opt_amount_percentage_#' => false
        ];

        // TODO
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

        // TODO
    }

    public function advancedEcheck($fields)
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

            // 'opt_amount_type_#'       => false,
            // 'opt_amount_value_#'      => false,
            // 'opt_amount_percentage_#' => false
        ];

        // TODO
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

        // TODO
    }
}
