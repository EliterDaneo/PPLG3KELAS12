<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        if ($user = Auth::user()) {
            if ($user->level == 'admin') {
                return redirect()->intended('admin');
            } elseif ($user->level == 'siswa') {
                return redirect()->intended('siswa');
            }
        }
        return view('depan.auth.login');
    }

    //proses login form yang berada di depan.auth.login
    public function proses(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $kredensial = $request->only('email', 'password');
        if (Auth::attempt($kredensial)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user->level == 'admin') {
                return redirect()->intended('admin');
            } elseif ($user->level == 'siswa') {
                return redirect()->intended('siswa');
            }
            return redirect()->intended('login');
        }
        return redirect('login')->withInput()
            ->withErrors('errors', 'Lo sok asik deh main masuk segala!');
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