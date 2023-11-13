<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(FrontEndController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/guru', 'guru')->name('guru');
    Route::get('/siswa', 'siswa')->name('siswa');
    Route::get('/mapel', 'mapel')->name('mapel');
    Route::get('/kelas', 'kelas')->name('kelas');
    Route::get('/jurusan', 'jurusan')->name('jurusan');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::get('/logout', 'logout')->name('logout');
    Route::post('/proses', 'proses')->name('proses');
});

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['user_access:admin']], function () {
        Route::controller(AdminController::class)->group(function () {
            Route::get('/admin', 'index')->name('admin');
        });
        Route::controller(SiswaController::class)->group(function () {
            Route::get('/siswa', 'index')->name('siswa');
        });
        Route::controller(KelasController::class)->group(function () {
            Route::get('/dataKelas', 'index')->name('dataKelas');
        });
    });
    Route::group(['middleware' => ['user_access:siswa']], function () {
        Route::controller(UserController::class)->group(function () {
            Route::get('/siswa', 'index')->name('siswa');
        });
    });
});