<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        // if ($user = Auth::user()) {
        //     if ($user->level == 'admin') {
        //         return redirect()->intended('admin');
        //     } elseif ($user->level == 'siswa') {
        //         return redirect()->intended('siswa');
        //     }
        // }
        if (Auth::user()) {
            return redirect()->intended('dashboard');
        }
        return view('depan.auth.login');
    }

    //proses login form yang berada di depan.auth.login
    public function proses(Request $request)
    {
        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ]);

        // $kredensial = $request->only('email', 'password');
        // if (Auth::attempt($kredensial)) {
        //     $request->session()->regenerate();
        //     $user = Auth::user();
        //     if ($user->level == 'admin') {
        //         return redirect()->intended('admin');
        //     } elseif ($user->level == 'siswa') {
        //         return redirect()->intended('siswa');
        //     }
        //     return redirect()->intended('login');
        // }
        // return redirect('login')->withInput()
        //     ->withErrors('errors', 'Lo sok asik deh main masuk segala!');

        $request->validate(
            [
                'email' => 'required',
                'password' => 'required'
            ],
            [
                'email.required' => 'Email tidak boleh kosong',
                'password.required' => 'Password tidak boleh kosong',
            ]
        );

        $kredensial = $request->only('email', 'password');

        if (Auth::attempt($kredensial)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user) {
                return redirect()->intended('dashboard');
            }
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'Maaf Salah Oi',
        ])->onlyInput('email');
    }

    //ini untuk logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}