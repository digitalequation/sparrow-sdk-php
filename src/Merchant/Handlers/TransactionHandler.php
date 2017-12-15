<?php

namespace SparrowSDK\Merchant\Handlers;

use SparrowSDK\Merchant\Classes\MethodHandler;

use SparrowSDK\Exceptions\SDKInvalidArgException;

class TransactionHandler extends MethodHandler
{
    /**
     * This action is used to retrieve a list of transactions.
     * @see Merchant Transaction Query API pg 11,12
     *
     * @param array $fields Extra fields for use with paginating, filtering or ordering
     *                      @see "OData Protocol" @ Merchant Transaction Query API pg 12-17
     */
    public function getAll($fields = [])
    {
        $supports = [
            '$filter'  => false,
            '$orderby' => false,
            '$skip'    => false,
            '$top'     => false
        ];

        $this->enforce($fields, $supports);

        $fields['token'] = $this->origin->getAuthToken(true);

        return $this->request('GET', '/transactions?' . http_build_query($fields));
    }

    /**
     * This action is used to retrieve details about a particular transaction.
     * @see Merchant Transaction Query API pg 9-11
     *
     * @param $transactionId int The identifier of the transaction (transid) for which to retrieve the details
     *
     * @throws SDKInvalidArgException if $transactionId is non-numeric.
     */
    public function getDetails($transactionId)
    {
        if (!is_numeric($transactionId)) {
            throw new SDKInvalidArgException('`$transactionId` must be a number');
        }

        $token       = $this->origin->getAuthToken(true);
        $queryParams = http_build_query(compact('token'));

        return $this->request('GET', '/transactions/detail/' . intval($transactionId) . '?' . $queryParams);
    }
}
