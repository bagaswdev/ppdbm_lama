<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataPendaftarController;
use App\Http\Controllers\VerifikasiBerkas;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [AuthController::class, 'pengumuman'])->name('login')->middleware('isGuest');
Route::get('/tes2024', [AuthController::class, 'tes2024'])->name('tes2024')->middleware('isGuest');
Route::get('/monitoring', [AuthController::class, 'monitoring'])->name('monitoring')->middleware('isGuest');
Route::get('/reguler', [AuthController::class, 'reguler'])->name('reguler')->middleware('isGuest');
// Route::get('/', [AuthController::class, 'login'])->name('login')->middleware('isGuest');
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard')->middleware('isLogin');
Route::post('/ProsesOtentikasi', [AuthController::class, 'otentikasi'])->name('otentikasi')->middleware('isGuest');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('isLogin');

Route::get('/detail', [DataPendaftarController::class, 'detail'])->name('detail')->middleware('isLogin');
Route::post('/cari', [DataPendaftarController::class, 'cari'])->middleware('isLogin');
Route::post('/cariNext', [DataPendaftarController::class, 'cariNext'])->middleware('isLogin');
Route::post('/cariBack', [DataPendaftarController::class, 'cariBack'])->middleware('isLogin');

// PROSES VERIFIKASI
Route::put('/proses_verifikasi', [VerifikasiBerkas::class, 'proses_verifikasi'])->name('proses_verifikasi')->middleware('isLogin');
