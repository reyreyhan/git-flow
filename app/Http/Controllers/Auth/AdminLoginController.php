<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
    use AuthenticatesUsers;
    protected $guard = 'admin';
    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.adminLogin');
    }

    public function login(Request $request)
    {
        if (auth()->guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            dd(auth()->guard('admin')->user());
        }
        return back()->withErrors(['email' => 'Email or password are wrong.']);
    }

}
