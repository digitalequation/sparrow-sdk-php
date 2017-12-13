<?php

namespace SparrowSDK\Handlers;

use SparrowSDK\SparrowClient;
use SparrowSDK\Classes\MethodHandler;

class VaultHandler extends MethodHandler
{
    public function addCustomer($fields)
    {
        $fields['transtype'] = 'addcustomer';

        $supports = [
            'firstname' => true,
            'lastname'  => true,

            'customerid'      => false,
            'note'            => false,
            'address1'        => false,
            'address2'        => false,
            'city'            => false,
            'state'           => false,
            'zip'             => false,
            'country'         => false,
            'phone'           => false,
            'email'           => false,
            'shipfirstname'   => false,
            'shiplastname'    => false,
            'shipcompany'     => false,
            'shipaddress1'    => false,
            'shipaddress2'    => false,
            'shipcity'        => false,
            'shipstate'       => false,
            'shipzip'         => false,
            'shipcountry'     => false,
            'shipphone'       => false,
            'shipemail'       => false,
            'username'        => false,
            'password'        => false,
            'clientuseremail' => false

            // 'paytype_#'           => false,
            // 'company_#'           => false,
            // 'firstname_#'         => false,
            // 'lastname_#'          => false,
            // 'address1_#'          => false,
            // 'address2_#'          => false,
            // 'city_#'              => false,
            // 'state_#'             => false,
            // 'zip_#'               => false,
            // 'country_#'           => false,
            // 'phone_#'             => false,
            // 'email_#'             => false,
            // 'cardnum_#'           => false,
            // 'cardexp_#'           => false,
            // 'bankname_#'          => false,
            // 'routing_#'           => false,
            // 'account_#'           => false,
            // 'achaccounttype_#'    => false,
            // 'achaccountsubtype_#' => false,
            // 'payno_#'             => false,
            // 'ewalletaccount_#'    => false,
            // 'ewallettype_#'       => false
        ];

        // TODO + by payment type specific field restrictions + split this maybe ?
    }

    public function updateCustomer($fields)
    {
        $fields['transtype'] = 'updatecustomer';

        $supports = [
            'token' => true,

            'firstname'       => false,
            'lastname'        => false,
            'address1'        => false,
            'address2'        => false,
            'city'            => false,
            'state'           => false,
            'zip'             => false,
            'country'         => false,
            'phone'           => false,
            'email'           => false,
            'shipfirstname'   => false,
            'shiplastname'    => false,
            'shipaddress1'    => false,
            'shipaddress2'    => false,
            'shipcity'        => false,
            'shipstate'       => false,
            'shipzip'         => false,
            'shipcountry'     => false,
            'shipphone'       => false,
            'shipemail'       => false,
            'username'        => false,
            'password'        => false,
            'clientuseremail' => false
        ];

        // TODO
    }

    public function addPaymentType($fields)
    {
        // TODO + split this maybe ?
    }

    public function updatePaymentType($fields)
    {
        // TODO + split this maybe ?
    }

    public function deletePaymentType($fields)
    {
        // TODO + split this maybe ?
    }

    public function deleteCustomer($fields)
    {
        $fields['transtype'] = 'deletecustomer';

        $supports = [
            'token' => true
        ];

        // TODO
    }

    public function getCustomer($fields)
    {
        $fields['transtype'] = 'getcustomer';

        $supports = [
            'token' => true
        ];

        // TODO
    }

    public function getPaymentType($fields)
    {
        $fields['transtype'] = 'getcustomer';

        $supports = [
            'token' => true
        ];

        // TODO
    }

    public function decryptPaymentType($fields)
    {
        $fields['transtype'] = 'decrypt';

        $supports = [
            'token' => true
        ];

        // TODO
    }
}
