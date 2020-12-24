<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function storeUser(Request $request)
    {
        dd($request->name);
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|email|unique:users|max:200',
            'password' => 'required|string|min:3|confirmed',
            'password_confirmation' => 'required',
        ]);
        return redirect('home');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('home');
        }

        return redirect('login')->with('error', 'Failed to authenticate');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('login');
    }

    public function home()
    {
        return view('home');
    }
}
