<?php

namespace SparrowSDK\Merchant\Handlers;

use SparrowSDK\Merchant\Classes\MethodHandler;

class TerminalHandler extends MethodHandler
{
    /**
     * This action is used to settle all transactions for the specified account which require settlement.
     * @see Merchant Public API pg 8
     */
    public function settle()
    {
        $token       = $this->origin->getAuthToken(true);
        $queryParams = http_build_query(compact('token'));

        return $this->request('POST', '/terminal/settle?' . $queryParams, ['params' => [
            'mkey' => $this->origin->getMerchantKey(true)
        ]]);
    }
}
