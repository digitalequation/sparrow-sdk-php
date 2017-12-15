<?php

namespace SparrowSDK\Merchant\Handlers;

use SparrowSDK\Merchant\Classes\MethodHandler;

class AuthHandler extends MethodHandler
{
    /**
     * This action is used to obtain the authentication token for the specified user.
     * @see Merchant Public API pg 7,8
     *
     * @param string $username
     * @param string $password
     */
    public function getToken($username, $password)
    {
        // TODO
    }
}
