<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;

trait CanLogin
{
    public function login($credentials, $remember = false)
    {
        if (Auth::attempt($credentials, $remember))
        {
            Auth::login(Auth::getLastAttempted());
        }
    }
}
