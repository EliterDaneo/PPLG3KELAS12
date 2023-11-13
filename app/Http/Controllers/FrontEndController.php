<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        $judul = "Selamat Datang di Halaman Utama";
        return view('home', compact('judul'));
    }

    public function guru()
    {
        $judul = "Selamat Datang di Halaman Guru";
        return view('depan.guru.index', compact('judul'));
    }

    public function mapel()
    {
        $judul = "Selamat Datang di Halaman Mapel";
        return view('depan.mapel.index', compact('judul'));
    }

    public function siswa()
    {
        $judul = "Selamat Datang di Halaman Siswa";
        return view('depan.siswa.index', compact('judul'));
    }

    public function kelas()
    {
        $judul = "Selamat Datang di Halaman Kelas";
        return view('depan.kelas.index', compact('judul'));
    }

    public function jurusan()
    {
        $judul = "Selamat Datang di Halaman Jurusan";
        return view('depan.jurusan.index', compact('judul'));
    }
}
