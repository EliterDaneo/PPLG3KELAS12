<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JurusanController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('admin.jurusan.index', compact('user'));
    }
}
