<?php

namespace SparrowSDK\Handlers;

use SparrowSDK\SparrowClient;
use SparrowSDK\Classes\MethodHandler;

class PaymentPlanHandler extends MethodHandler
{
    public function add($fields)
    {
        $fields['transtype'] = 'addplan';

        $supports = [
            'planname'  => true,
            'plandesc'  => true,
            'startdate' => true,

            'defaultachmkey'        => false,
            'defaultcreditcardmkey' => false,
            'defaultecheckmkey'     => false,
            'defaultstartcardmkey'  => false,
            'defaultewalletmkey'    => false
        ];

        // TODO -> REVISIT THIS! (documentation is very bad on this section)
    }

    public function update($fields)
    {
        $fields['transtype'] = 'updateplan';

        $supports = [
            'token' => true,

            'planname'                 => false,
            'plandesc'                 => false,
            'startdate'                => false,
            'defaultachmkey'           => false,
            'defaultcreditcardmkey'    => false,
            'defaultecheckmkey'        => false,
            'defaultstartcardmkey'     => false,
            'defaultewalletmkey'       => false,
            'userecycling'             => false,
            'notifyfailures'           => false,
            'retrycount'               => false,
            'retrytype'                => false,
            'retryperiod'              => false,
            'retrydayofweek'           => false,
            'retryfirstdayofmonth'     => false,
            'retryseconddayofmonth'    => false,
            'autocreateclientaccounts' => false
        ];

        // TODO -> REVISIT THIS! (documentation is very bad on this section)
    }

    public function buildSequence($fields)
    {
        // TODO possibly not a function
    }

    public function notificationSettings($fields)
    {
        // TODO possibly not a function
    }

    public function addSequence($fields)
    {
        // TODO
    }

    public function updateSequence($fields)
    {
        // TODO
    }

    public function deleteSequence($fields)
    {
        // TODO
    }

    public function delete($fields)
    {
        // TODO
    }

    public function assignToCustomer($fields)
    {
        // TODO
    }

    public function updateAssignment($fields)
    {
        // TODO
    }

    public function cancelAssignment($fields)
    {
        // TODO
    }
}
