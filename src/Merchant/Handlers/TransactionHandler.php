<?php

namespace SparrowSDK\Merchant\Handlers;

use SparrowSDK\Merchant\Classes\MethodHandler;

use SparrowSDK\Exceptions\SDKInvalidArgException;

class TransactionHandler extends MethodHandler
{
    /**
     * This action is used to retrieve details about the particular transaction.
     * @see Merchant Transaction Query API pg 9
     *
     * @param $transactionId int    The identifier of the transaction (transid) which details are requested
     * @param $token         string The authentication token
     *
     * @throws SDKInvalidArgException if $transactionId is non-numeric.
     * @throws SDKInvalidArgException if $token is non-string.
     */
    public function getDetails($transactionId, $token)
    {
        if (!is_string($token)) {
            throw new SDKInvalidArgException('`$token` must be a string');
        } elseif (!is_numeric($transactionId)) {
            throw new SDKInvalidArgException('`$transactionId` must be a number');
        }

        $queryParams = http_build_query(compact('token'));

        return $this->request('GET', '/transactions/detail/' . intval($transactionId) . '?' . $queryParams);
    }
}
