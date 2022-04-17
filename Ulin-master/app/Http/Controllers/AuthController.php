<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function registerProcess(Request $request)
    {
        // dd($request->all());
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token'=>Str::random(60)
        ]);

        return redirect('/login');
    }
    public function loginProcess(Request $request)
    {
        if(Auth::guard('user')->attempt($request->only('username', 'password'))){
            return redirect('/');
        }
        return redirect('/login');
    }
}
