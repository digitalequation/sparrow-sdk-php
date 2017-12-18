<?php

namespace SparrowSDK\Merchant\Handlers;

use SparrowSDK\Merchant\Classes\MethodHandler;

use SparrowSDK\Exceptions\SDKInvalidArgException;

class AuthHandler extends MethodHandler
{
    /**
     * This action is used to obtain an authentication token for the specified user.
     * @see Merchant Public API pg 7,8
     * @see Merchant Transaction Query API pg 8
     *
     * @param string $username
     * @param string $password
     *
     * @throws SDKInvalidArgException if $username or $password are non-string.
     */
    public function getToken($username, $password)
    {
        if (!is_string($username)) {
            throw new SDKInvalidArgException('`$username` must be a string');
        } elseif (!is_string($password)) {
            throw new SDKInvalidArgException('`$password` must be a string');
        }

        return $this->request('POST', '/account', ['params' => [
            'Username' => $username,
            'Password' => $password
        ]]);
    }
}
