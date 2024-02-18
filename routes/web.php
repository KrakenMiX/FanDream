<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BandController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\KritikController;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\KritikindexController;
use App\Http\Controllers\BandindexController;
use App\Http\Controllers\AnggotaindexController;
use App\Http\Controllers\AboutmeController;



/*
|--------------------------------------------------------------------------
| Web Routes - Identitas Diri
|--------------------------------------------------------------------------
|   Nama : Ilmi Fathurrahman Ghazali
|   NIM : 10121157
|   Kelas : IF4
*/

Route::get('/', [IndexController::class, 'index'])->name('index');

//Function Route Admin :
//LOGIN & LOGOUT
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');


Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('band', [BandController::class, 'index'])->name('band')->middleware('auth');
Route::get('anggota', [AnggotaController::class, 'index'])->name('anggota')->middleware('auth');
Route::get('kritik', [kritikController::class, 'index'])->name('kritik')->middleware('auth');

//REGISTER
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

//BAND
Route::get('tambah_band', [BandController::class, 'tambah_band'])->name('tambah_band');
Route::post('proses_tambah_band', [BandController::class, 'proses_tambah_band'])->name('proses_tambah_band');
Route::post('proses_edit_band', [BandController::class, 'proses_edit_band'])->name('proses_edit_band');
Route::get('edit_band', [BandController::class, 'edit_band'])->name('edit_band');
Route::get('proses_hapus_band', [BandController::class, 'proses_hapus_band'])->name('proses_hapus_band');

//ANGGOTA
Route::get('tambah_anggota', [AnggotaController::class, 'tambah_anggota'])->name('tambah_anggota');
Route::post('proses_tambah_anggota', [AnggotaController::class, 'proses_tambah_anggota'])->name('proses_tambah_anggota');
Route::post('proses_edit_anggota', [AnggotaController::class, 'proses_edit_anggota'])->name('proses_edit_anggota');
Route::get('edit_anggota', [AnggotaController::class, 'edit_anggota'])->name('edit_anggota');
Route::get('proses_hapus_anggota', [AnggotaController::class, 'proses_hapus_anggota'])->name('proses_hapus_anggota');

//KRITIK
Route::get('detail_kritik', [KritikController::class, 'detail_kritik'])->name('detail_kritik');
Route::get('proses_hapus_kritik', [KritikController::class, 'proses_hapus_kritik'])->name('proses_hapus_kritik');


//Function Route User :
Route::get('index', [IndexController::class, 'index'])->name('index');
Route::get('kritikindex', [KritikindexController::class, 'index'])->name('kritikindex');
Route::get('bandindex', [BandindexController::class, 'index'])->name('bandindex');
Route::get('anggotaindex', [AnggotaindexController::class, 'index'])->name('anggotaindex');
Route::get('aboutme', [AboutmeController::class, 'index'])->name('aboutme');

//KRITIK
Route::post('kritikindex/action', [KritikindexController::class, 'actionkritik'])->name('actionkritik');