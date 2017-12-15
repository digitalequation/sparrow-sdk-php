<?php

namespace SparrowSDK\Merchant\Handlers;

use SparrowSDK\Merchant\Classes\MethodHandler;

class TerminalHandler extends MethodHandler
{
    /**
     * This action is used to settle all transactions for the specified account which require settlement.
     * @see Merchant Public API pg 8
     *
     * @param string $token The authentication token
     */
    public function settle($token)
    {
        // TODO
    }
}
