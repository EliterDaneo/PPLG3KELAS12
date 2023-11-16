<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class GuruController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('admin.guru.index', compact('user'));
    }
}
