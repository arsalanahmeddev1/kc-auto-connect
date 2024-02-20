<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginForm()
    {
        return view('screens.auth.signin');
    }

    public function login()
    {
        request()->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt(['email' => request('email'), 'password' => request('password')]))
        {
            Auth::login(Auth::getLastAttempted());
        }

        return back();
    }

    public function logout()
    {
        if (Auth::check())
        {
            Auth::logout();
        }

        return back();
    }
}
