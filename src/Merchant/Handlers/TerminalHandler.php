<?php

namespace SparrowSDK\Merchant\Handlers;

use SparrowSDK\Merchant\Classes\MethodHandler;

use SparrowSDK\Exceptions\SDKInvalidArgException;

class TerminalHandler extends MethodHandler
{
    /**
     * This action is used to settle all transactions for the specified account which require settlement.
     * @see Merchant Public API pg 8
     *
     * @param string $token The authentication token
     *
     * @throws SDKInvalidArgException if $token is non-string.
     */
    public function settle($token)
    {
        if (!is_string($token)) {
            throw new SDKInvalidArgException('`$token` must be a string');
        }

        $queryParams = http_build_query(compact('token'));

        return $this->request('/account?' . $queryParams, 'POST', ['params' => [
            'mkey' => $this->origin->getMerchantKey()
        ]]);
    }
}
