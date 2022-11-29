<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserController extends Controller
{
    public function login(){

        return view("/auth/login");
    }
    public function registrasi(){

        return view("/auth/registrasi");
    }

    public function storeAkun(Request $request){

        $dataUser = $request->validate([
            'name' => 'required|unique:users',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:3'
        ]);
        $dataUser['password'] = Hash::make($dataUser['password']);

        User::create($dataUser);

        return redirect('/login')->with('succes', 'Akun Berhasil di buat');
    }
    public function log(Request $request)
    {
        $loginData = $request->validate([
            'email' => 'required|email|',
            'password' => 'required'
        ]);

        if(Auth::attempt($loginData))
        {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->with('loginError', 'Login gagal!!');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with('logout', 'Akun anda telah Logout.');

    }
}
