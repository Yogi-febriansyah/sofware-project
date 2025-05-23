<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('login/login');
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'nim' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::User()->role == 'mahasiswa') {
                return redirect()->intended('/mahasiswa/dashboard');
            } elseif (Auth::User()->role == 'dospem') {
                return redirect()->intended('/dospem/dashboard');
            }elseif (Auth::User()->role == 'operator') {
                return redirect()->intended('/operator/dashboard');
            }
        } 

            return back()->with('salah', 'Nim atau password salah!');
    }

    public function logout(Request $request) {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/')->with('keluar', 'Anda Berhasil Keluar!');
    }
}
