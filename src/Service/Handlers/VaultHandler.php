<?php

namespace SparrowSDK\Service\Handlers;

use SparrowSDK\Service\Classes\MethodHandler;

class VaultHandler extends MethodHandler
{
    public function addCustomer($fields, $payTypes = [])
    {
        $fields['transtype'] = 'addcustomer';

        $supports = [
            'firstname' => true,
            'lastname'  => true,

            // 'token'           => false, // NOTE: confirm this field should not exist in add scope (poor docs)
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
        ];

        $payTypeSupports = [
            // Common:
            'paytype'   => true,
            'firstname' => true,
            'lastname'  => true,

            'company'  => false,
            'address1' => false,
            'address2' => false,
            'city'     => false,
            'state'    => false,
            'zip'      => false,
            'country'  => false,
            'phone'    => false,
            'email'    => false,
            'payno'    => false,

            // Card & Star Card:
            'cardnum' => false,

            // Card:
            'cardexp' => false,

            // ACH:
            'bankname'          => false,
            'routing'           => false,
            'account'           => false,
            'achaccounttype'    => false,
            'achaccountsubtype' => false,

            // Star Card:
            'CID' => false,

            // eWallet:
            'ewalletaccount' => false,
            'ewallettype'    => false
        ];

        $this->enforce($fields, $supports);

        $i = 1;
        foreach ($payTypes as $payType) {
            if (!count($payType)) {
                continue;
            }

            $this->enforce($payType, $payTypeSupports);

            foreach ($payType as $k => $v) {
                $fields[$k . '_' . $i] = $v;
            }

            $i++;
        }

        $req = new APIRequest($this->origin, '', 'POST', ['params' => $fields]);
        return $req->exec();
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

        return $this->quickRequest($fields, $supports);
    }

    public function addPaymentType($fields, $payTypes = [])
    {
        $fields['transtype'] = 'updatecustomer';

        $supports = [
            'token' => true
        ];

        $payTypeSupports = [
            // Common:
            'paytype'   => true,
            'firstname' => true,
            'lastname'  => true,

            'company'  => false,
            'address1' => false,
            'address2' => false,
            'city'     => false,
            'state'    => false,
            'zip'      => false,
            'country'  => false,
            'phone'    => false,
            'email'    => false,
            'payno'    => false,

            // Card & Star Card:
            'cardnum' => false,

            // Card:
            'cardexp' => false,

            // ACH:
            'bankname'          => false,
            'routing'           => false,
            'account'           => false,
            'achaccounttype'    => false,
            'achaccountsubtype' => false,

            // Star Card:
            'CID' => false,

            // eWallet:
            'ewalletaccount' => false,
            'ewallettype'    => false
        ];

        $this->enforce($fields, $supports);

        $i = 1;
        foreach ($payTypes as $payType) {
            if (!count($payType)) {
                continue;
            }

            $this->enforce($payType, $payTypeSupports);

            $fields['operationtype_' . $i] = 'addpaytype';
            foreach ($payType as $k => $v) {
                $fields[$k . '_' . $i] = $v;
            }

            $i++;
        }

        $req = new APIRequest($this->origin, '', 'POST', ['params' => $fields]);
        return $req->exec();
    }

    public function updatePaymentType($fields, $payTypes = [])
    {
        $fields['transtype'] = 'updatecustomer';

        $supports = [
            'token' => true
        ];

        $payTypeSupports = [
            // Common:
            'token' => true,

            'firstname' => false,
            'lastname'  => false,
            'company'   => false,
            'address1'  => false,
            'address2'  => false,
            'city'      => false,
            'state'     => false,
            'zip'       => false,
            'country'   => false,
            'phone'     => false,
            'email'     => false,
            'payno'     => false,

            // Card & Star Card:
            'cardnum' => false,

            // Card:
            'cardexp' => false,

            // ACH:
            'bankname'          => false,
            'routing'           => false,
            'account'           => false,
            'achaccounttype'    => false,
            'achaccountsubtype' => false,

            // Star Card:
            'CID' => false,

            // eWallet:
            'ewalletaccount' => false,
            'ewallettype'    => false
        ];

        $this->enforce($fields, $supports);

        $i = 1;
        foreach ($payTypes as $payType) {
            if (!count($payType)) {
                continue;
            }

            $this->enforce($payType, $payTypeSupports);

            $fields['operationtype_' . $i] = 'updatepaytype';
            foreach ($payType as $k => $v) {
                $fields[$k . '_' . $i] = $v;
            }

            $i++;
        }

        $req = new APIRequest($this->origin, '', 'POST', ['params' => $fields]);
        return $req->exec();
    }

    public function deletePaymentType($fields, $payTypes = [])
    {
        $fields['transtype'] = 'updatecustomer';

        $supports = [
            'token' => true
        ];

        $payTypeSupports = [
            'token' => true
        ];

        $this->enforce($fields, $supports);

        $i = 1;
        foreach ($payTypes as $payType) {
            if (!count($payType)) {
                continue;
            }

            $this->enforce($payType, $payTypeSupports);

            $fields['operationtype_' . $i] = 'deletepaytype';
            foreach ($payType as $k => $v) {
                $fields[$k . '_' . $i] = $v;
            }

            $i++;
        }

        $req = new APIRequest($this->origin, '', 'POST', ['params' => $fields]);
        return $req->exec();
    }

    public function deleteCustomer($fields)
    {
        $fields['transtype'] = 'deletecustomer';

        $supports = [
            'token' => true
        ];

        return $this->quickRequest($fields, $supports);
    }

    public function getCustomer($fields)
    {
        $fields['transtype'] = 'getcustomer';

        $supports = [
            'token' => true
        ];

        return $this->quickRequest($fields, $supports);
    }

    public function getPaymentType($fields)
    {
        $fields['transtype'] = 'getcustomer';

        $supports = [
            'token' => true
        ];

        return $this->quickRequest($fields, $supports);
    }

    public function decryptPaymentType($fields)
    {
        $fields['transtype'] = 'decrypt';

        $supports = [
            'token' => true
        ];

        return $this->quickRequest($fields, $supports);
    }
}
