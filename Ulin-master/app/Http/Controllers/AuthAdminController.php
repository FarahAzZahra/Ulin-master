<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthAdminController extends Controller
{
    public function login()
    {
        return view('auth.login-admin');
    }
    public function loginProcess(Request $request)
    {
        if(Auth::guard('admin')->attempt($request->only('username', 'password'))){
            return redirect('/');
        }
        return redirect('/login');
    }
}
