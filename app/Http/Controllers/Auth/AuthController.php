<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function storeUser(Request $request)
    {

        $this->validate(request(), [
            'name' => 'required|string|max:100',
            'email' => 'required|string|email|unique:users|max:200',
            'password' => 'required|string|min:3|confirmed',
            'password_confirmation' => 'required',
        ]);
        $user = new User();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = $request['password'];
        $user->save();

        return redirect('home');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $this->validate(request(), [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $userData = array(
            'email' => $request['email'],
            'password' => $request['password'],
        );

        $data = DB::table('users')->where('email', '=', $userData['email'])->get();
        if (($data[0]->password) == ($userData['password'])) {
            return redirect('home');
        } else {
            return redirect('login');
        }
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
