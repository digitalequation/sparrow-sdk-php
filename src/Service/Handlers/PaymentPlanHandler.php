<?php

namespace SparrowSDK\Service\Handlers;

use SparrowSDK\Service\Classes\MethodHandler;

class PaymentPlanHandler extends MethodHandler
{
    public function add($fields, $sequences = [])
    {
        $fields['transtype'] = 'addplan';

        $supports = [
            'planname'  => true,
            'plandesc'  => true,
            'startdate' => true,

            'defaultachmkey'                  => false,
            'defaultcreditcardmkey'           => false,
            'defaultecheckmkey'               => false,
            'defaultstartcardmkey'            => false,
            'defaultewalletmkey'              => false,
            'userecycling'                    => false,
            'notifyfailures'                  => false,
            'retrycount'                      => false,
            'retrytype'                       => false,
            'retryperiod'                     => false,
            'retrydayofweek'                  => false,
            'retryfirstdayofmonth'            => false,
            'retryseconddayofmonth'           => false,
            'autocreateclientaccounts'        => false,
            'reviewonassignment'              => false,
            'processimmediately'              => false,
            'overridesender'                  => false,
            'senderemail'                     => false,
            'notifyupcomingpayment'           => false,
            'notifydaysbeforeupcomingpayment' => false,
            'notifyplansummary'               => false,
            'notifyplansummaryinterval'       => false,
            'notifyplansummaryemails'         => false,
            'notifydailystats'                => false,
            'notifydailystatsemails'          => false,
            'notifyplancomplete'              => false,
            'notifyplancompleteemails'        => false,
            'notifydecline'                   => false,
            'notifydeclineemails'             => false,
            'notifyviaftp'                    => false,
            'notifyviaftpurl'                 => false,
            'notifyviaftpusername'            => false,
            'notifyviaftppassword'            => false,
            'notifyflagged'                   => false,
            'notifyflaggedemails'             => false
        ];

        $sequenceSupports = [
            'sequence'     => true,
            'amount'       => true,
            'scheduletype' => true,
            'scheduleday'  => true,
            'duration'     => true,

            'productid'   => false,
            'description' => false
        ];

        $this->enforce($fields, $supports);

        $i = 1;
        foreach ($sequences as $sequence) {
            if (!count($sequence)) {
                continue;
            }

            $this->enforce($sequence, $sequenceSupports);

            foreach ($sequence as $k => $v) {
                $fields[$k . '_' . $i] = $v;
            }

            $i++;
        }

        $req = new APIRequest($this->origin, '', 'POST', ['params' => $fields]);
        return $req->exec();
    }

    public function update($fields)
    {
        $fields['transtype'] = 'updateplan';

        $supports = [
            'token' => true,

            'planname'                        => false,
            'plandesc'                        => false,
            'startdate'                       => false,
            'defaultachmkey'                  => false,
            'defaultcreditcardmkey'           => false,
            'defaultecheckmkey'               => false,
            'defaultstartcardmkey'            => false,
            'defaultewalletmkey'              => false,
            'userecycling'                    => false,
            'notifyfailures'                  => false,
            'retrycount'                      => false,
            'retrytype'                       => false,
            'retryperiod'                     => false,
            'retrydayofweek'                  => false,
            'retryfirstdayofmonth'            => false,
            'retryseconddayofmonth'           => false,
            'autocreateclientaccounts'        => false,
            'reviewonassignment'              => false,
            'processimmediately'              => false,
            'overridesender'                  => false,
            'senderemail'                     => false,
            'notifyupcomingpayment'           => false,
            'notifydaysbeforeupcomingpayment' => false,
            'notifyplansummary'               => false,
            'notifyplansummaryinterval'       => false,
            'notifyplansummaryemails'         => false,
            'notifydailystats'                => false,
            'notifydailystatsemails'          => false,
            'notifyplancomplete'              => false,
            'notifyplancompleteemails'        => false,
            'notifydecline'                   => false,
            'notifydeclineemails'             => false,
            'notifyviaftp'                    => false,
            'notifyviaftpurl'                 => false,
            'notifyviaftpusername'            => false,
            'notifyviaftppassword'            => false,
            'notifyflagged'                   => false,
            'notifyflaggedemails'             => false
        ];

        return $this->quickRequest($fields, $supports);
    }

    public function addSequence($fields, $sequences = [])
    {
        $fields['transtype'] = 'updateplan';

        $supports = [
            'token' => true
        ];

        $sequenceSupports = [
            'sequence'     => true,
            'amount'       => true,
            'scheduletype' => true,
            'scheduleday'  => true,
            'duration'     => true,

            'productid'   => false,
            'description' => false
        ];

        $this->enforce($fields, $supports);

        $i = 1;
        foreach ($sequences as $sequence) {
            if (!count($sequence)) {
                continue;
            }

            $this->enforce($sequence, $sequenceSupports);

            $fields['operationtype_' . $i] = 'addsequence';
            foreach ($sequence as $k => $v) {
                $fields[$k . '_' . $i] = $v;
            }

            $i++;
        }

        $req = new APIRequest($this->origin, '', 'POST', ['params' => $fields]);
        return $req->exec();
    }

    public function updateSequence($fields, $sequences = [])
    {
        $fields['transtype'] = 'updateplan';

        $supports = [
            'token' => true
        ];

        $sequenceSupports = [
            'sequence'     => true,
            'amount'       => true,
            'scheduletype' => true,
            'scheduleday'  => true,
            'duration'     => true,

            'productid'   => false,
            'description' => false,
            'newsequence' => false
        ];

        $this->enforce($fields, $supports);

        $i = 1;
        foreach ($sequences as $sequence) {
            if (!count($sequence)) {
                continue;
            }

            $this->enforce($sequence, $sequenceSupports);

            $fields['operationtype_' . $i] = 'updatesequence';
            foreach ($sequence as $k => $v) {
                $fields[$k . '_' . $i] = $v;
            }

            $i++;
        }

        $req = new APIRequest($this->origin, '', 'POST', ['params' => $fields]);
        return $req->exec();
    }

    public function deleteSequence($fields, $sequences = [])
    {
        $fields['transtype'] = 'updateplan';

        $supports = [
            'token' => true
        ];

        $sequenceSupports = [
            'sequence' => true
        ];

        $this->enforce($fields, $supports);

        $i = 1;
        foreach ($sequences as $sequence) {
            if (!count($sequence)) {
                continue;
            }

            $this->enforce($sequence, $sequenceSupports);

            $fields['operationtype_' . $i] = 'deletesequence';
            foreach ($sequence as $k => $v) {
                $fields[$k . '_' . $i] = $v;
            }

            $i++;
        }

        $req = new APIRequest($this->origin, '', 'POST', ['params' => $fields]);
        return $req->exec();
    }

    public function delete($fields)
    {
        $fields['transtype'] = 'deleteplan';

        $supports = [
            'token' => true,

            'cancelpayments' => false
        ];

        return $this->quickRequest($fields, $supports);
    }

    public function assignToCustomer($fields)
    {
        $fields['transtype'] = 'assignplan';

        $supports = [
            'customertoken' => true,
            'plantoken'     => true,
            'paymenttoken'  => true,

            'startdate'             => false,
            'productid'             => false,
            'description'           => false,
            'amount'                => false,
            'notifyfailures'        => false,
            'userecycling'          => false,
            'retrycount'            => false,
            'retrytype'             => false,
            'retryperiod'           => false,
            'retrydayofweek'        => false,
            'retryfirstdayofmonth'  => false,
            'retryseconddayofmonth' => false,
            'proratedpayment'       => false,
            'routingkey'            => false
        ];

        return $this->quickRequest($fields, $supports);
    }

    public function updateAssignment($fields)
    {
        $fields['transtype'] = 'updateassignment';

        $supports = [
            'assignmenttoken' => true,

            'paymenttoken'          => false,
            'startdate'             => false,
            'productid'             => false,
            'description'           => false,
            'amount'                => false,
            'notifyfailures'        => false,
            'userecycling'          => false,
            'retrycount'            => false,
            'retrytype'             => false,
            'retryperiod'           => false,
            'retrydayofweek'        => false,
            'retryfirstdayofmonth'  => false,
            'retryseconddayofmonth' => false,
            'proratedpayment'       => false,
            'routingkey'            => false
        ];

        return $this->quickRequest($fields, $supports);
    }

    public function cancelAssignment($fields)
    {
        $fields['transtype'] = 'cancelassignment';

        $supports = [
            'assignmenttoken' => true
        ];

        return $this->quickRequest($fields, $supports);
    }
}
