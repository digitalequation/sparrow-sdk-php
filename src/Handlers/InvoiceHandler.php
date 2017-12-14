<?php

namespace SparrowSDK\Handlers;

use SparrowSDK\SparrowClient;
use SparrowSDK\Classes\MethodHandler;

class InvoiceHandler extends MethodHandler
{
    public function create($fields, $invoiceItems = [])
    {
        $fields['transtype'] = 'createmerchantinvoice';

        $supports = [
            'invoicedate'   => true,
            'invoicestatus' => true,
            'currency'      => true,

            'customertoken'        => false,
            'invoicesource'        => false,
            'invoiceamount'        => false,
            'sendpaymentlinkemail' => false
        ];

        $invoiceItemSupports = [
            'invoiceitemsku'         => false,
            'invoiceitemdescription' => false,
            'invoiceitemprice'       => false,
            'invoiceitemquantity'    => false
        ];

        $this->enforce($fields, $supports);

        $i = 1;
        foreach ($invoiceItems as $invoiceItem) {
            if (!count($invoiceItem)) {
                continue;
            }

            $this->enforce($invoiceItem, $invoiceItemSupports);

            foreach ($invoiceItem as $k => $v) {
                $fields[$k . '_' . $i] = $v;
            }

            $i++;
        }

        $req = new APIRequest($this->origin, '', 'POST', ['params' => $fields]);
        return $req->exec();
    }

    public function update($fields, $invoiceItems = [])
    {
        $fields['transtype'] = 'updateinvoice';

        $supports = [
            'invoicenumber' => true,

            'invoicedate'          => false,
            'invoicestatus'        => false,
            'currency'             => false,
            'customertoken'        => false,
            'invoicesource'        => false,
            'invoiceamount'        => false,
            'sendpaymentlinkemail' => false
        ];

        $invoiceItemSupports = [
            'invoiceitemsku'         => false,
            'invoiceitemdescription' => false,
            'invoiceitemprice'       => false,
            'invoiceitemquantity'    => false
        ];

        $this->enforce($fields, $supports);

        $i = 1;
        foreach ($invoiceItems as $invoiceItem) {
            if (!count($invoiceItem)) {
                continue;
            }

            $this->enforce($invoiceItem, $invoiceItemSupports);

            foreach ($invoiceItem as $k => $v) {
                $fields[$k . '_' . $i] = $v;
            }

            $i++;
        }

        $req = new APIRequest($this->origin, '', 'POST', ['params' => $fields]);
        return $req->exec();
    }

    public function get($fields)
    {
        $fields['transtype'] = 'getinvoice';

        $supports = [
            'invoicenumber' => true,
        ];

        return $this->quickRequest($fields, $supports);
    }

    public function cancel($fields)
    {
        $fields['transtype'] = 'cancelinvoice';

        $supports = [
            'invoicenumber'       => true,
            'invoicestatusreason' => true
        ];

        return $this->quickRequest($fields, $supports);
    }

    public function cancelByCustomer($fields)
    {
        $fields['transtype'] = 'cancelinvoicebycustomer';

        $supports = [
            'invoicenumber'       => true,
            'invoicestatusreason' => true
        ];

        return $this->quickRequest($fields, $supports);
    }

    public function payWithCreditCard($fields)
    {
        $fields['transtype'] = 'payinvoice';

        $supports = [
            'invoicenumber' => true,
            'cardnum'       => true,
            'cardexp'       => true,
            // 'zip'           => true, // TODO: check requirement

            'cvv'           => false,
            'firstname'     => false,
            'lastname'      => false,
            'company'       => false,
            'address1'      => false,
            'address2'      => false,
            'city'          => false,
            'state'         => false,
            'zip'           => false,
            'country'       => false,
            'phone'         => false,
            'fax'           => false,
            'email'         => false,
            'shipfirstname' => false,
            'shiplastname'  => false,
            'shipcompany'   => false,
            'shipaddress1'  => false,
            'shipaddress2'  => false,
            'shipcity'      => false,
            'shipstate'     => false,
            'shipzip'       => false,
            'shipcountry'   => false,
            'shipphone'     => false,
            'shipemail'     => false
        ];

        return $this->quickRequest($fields, $supports);
    }

    public function payWithBankAccount($fields)
    {
        $fields['transtype'] = 'payinvoice';

        $supports = [
            'invoicenumber'     => true,
            'bankname'          => true,
            'routing'           => true,
            'account'           => true,
            'achaccounttype'    => true,
            'achaccountsubtype' => true,

            'firstname'     => false,
            'lastname'      => false,
            'company'       => false,
            'address1'      => false,
            'address2'      => false,
            'city'          => false,
            'state'         => false,
            'zip'           => false,
            'country'       => false,
            'phone'         => false,
            'fax'           => false,
            'email'         => false,
            'shipfirstname' => false,
            'shiplastname'  => false,
            'shipcompany'   => false,
            'shipaddress1'  => false,
            'shipaddress2'  => false,
            'shipcity'      => false,
            'shipstate'     => false,
            'shipzip'       => false,
            'shipcountry'   => false,
            'shipphone'     => false,
            'shipemail'     => false
        ];

        return $this->quickRequest($fields, $supports);
    }
}
