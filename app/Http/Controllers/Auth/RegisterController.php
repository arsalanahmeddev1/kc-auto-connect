<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use App\Traits\CanLogin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    use CanLogin;

    public function registerForm()
    {
        return view('screens.auth.signup');
    }

    public function register(UserStoreRequest $request)
    {
        $user = User::create($request->sanitized());

        if ($user instanceof Model)
        {
            $this->login(['email' => $request->email, 'password' => $request->password]);
        }

        return redirect()->intended('/dashboard');
    }
}
