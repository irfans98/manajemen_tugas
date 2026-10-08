<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login(){
        return view('admin.auth.login');
    }

    public function loginProses(Request $request){
        $request->validate([
            'email'             => 'required',
            'password'          => 'required|min:6'
        ],
        [
            'email.required'        => 'Email Wajib Diisi',
            'password.required'     => 'Password Wajib Diisi',
            'password.min'          => 'Password Minimal 6 Karakter',
        ]);

        $data = [
            'email'         => $request->email,
            'password'      => $request->password,
        ];
        
        // mengarahkan ketika berhasil atau tidaknya login
        if (Auth::attempt($data)){
            return redirect()->route('dashboard')->with('success', 'Berhasil Login');
        }else{
            return redirect()->back()->with('error', 'Email atau Password Salah');
        }
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('login')->with('success', 'Berhasil Logout');
    }
}
