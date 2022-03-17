<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PPKController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/auth/login', [AuthController::class, 'login'])->name('login');

Route::get('/admin/dashboard', [AdminController::class, 'Dashboard'])->name('admin_dashboard');
Route::get('/admin/laporanmasuk', [AdminController::class, 'LaporanMasuk'])->name('admin_laporanmasuk');


Route::get('/ppk/dashboard', [PPKController::class, 'Dashboard'])->name('ppk_dashboard');
Route::get('/ppk/laporansaya/upload', [PPKController::class, 'UploadLaporan'])->name('ppk_uploadlaporan');
