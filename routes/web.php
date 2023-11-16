<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\SiswaController;
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

Route::get('/dashboard', [AdminController::class, 'index'])->middleware('auth');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['user_access:admin']], function () {
        Route::resource('dataKelas', KelasController::class);
        Route::resource('dataSiswa', SiswaController::class);
        Route::resource('dataMapel', MapelController::class);
        Route::resource('dataGuru', GuruController::class);
        Route::resource('dataJurusan', JurusanController::class);
    });
});

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['user_access:siswa']], function () {
        Route::resource('dataKelasUser', KelasController::class);
        Route::resource('dataSiswaUser', SiswaController::class);
        Route::resource('dataMapelUser', MapelController::class);
        Route::resource('dataGuruUser', GuruController::class);
        Route::resource('dataJurusanUser', JurusanController::class);
    });
});