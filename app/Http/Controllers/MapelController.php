<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MapelController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('admin.mapel.index', compact('user'));
    }
}