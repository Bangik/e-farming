<?php

use App\Http\Controllers\Alat_BahanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JadwalPupukController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LahanController;
use App\Http\Controllers\LaporanPanenController;
use App\Http\Controllers\ObathController;
use App\Http\Controllers\PaketTanamController;
use App\Http\Controllers\UserController;

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

Auth::routes();

Route::group(['middleware' => ['auth', 'admin']], function(){
    Route::resource('user', UserController::class);
});

Route::group(['middleware' => ['auth']], function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('lahan', LahanController::class);
    Route::resource('alatb', Alat_BahanController::class);
    Route::resource('obath', ObathController::class);
    Route::resource('paket-tanam', PaketTanamController::class);
    Route::resource('laporan', LaporanPanenController::class);
    Route::resource('jadwal-pupuk', JadwalPupukController::class);
    Route::get('ganti-password', [HomeController::class, 'change_password'])->name('ganti-password.index');
    Route::post('ganti-password', [HomeController::class, 'update_password'])->name('ganti-password.update');
});

