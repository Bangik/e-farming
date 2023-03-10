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
use Illuminate\Support\Facades\Artisan;

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

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'admin']], function(){
    Route::resource('lahan', LahanController::class, ['except' => ['index','show']]);
    Route::resource('user', UserController::class);
    Route::resource('alatb', Alat_BahanController::class, ['except' => ['index','show','update']]);
    Route::resource('obath', ObathController::class, ['except' => ['index','show','update']]);
    Route::resource('paket-tanam', PaketTanamController::class, ['except' => ['index','show']]);
    Route::resource('laporan', LaporanPanenController::class, ['except' => ['index','show']]);
    Route::resource('jadwal-pupuk', JadwalPupukController::class, ['except' => ['index','show']]);
    //Update Alat Bahan
    Route::post('alatb2/update/{id}', 'App\Http\Controllers\Alat_BahanController@update');
    //Update Obat Hama
    Route::post('obath2/update/{id}', 'App\Http\Controllers\ObathController@update');
});

// Route user
Route::get('/lahan', [LahanController::class, 'index'])->name('lahan.index');
Route::get('/lahan/{lahan}', [LahanController::class, 'show'])->name('lahan.show');
Route::get('alatb', [Alat_BahanController::class, 'index'])->name('alatb.index');
Route::get('alatb/{alatb}', [Alat_BahanController::class, 'show'])->name('alatb.show');
Route::get('obath', [ObathController::class, 'index'])->name('obath.index');
Route::get('obath/{obath}', [ObathController::class, 'show'])->name('obath.show');
Route::get('paket-tanam', [PaketTanamController::class, 'index'])->name('paket-tanam.index');
Route::get('paket-tanam/{paket_tanam}', [PaketTanamController::class, 'show'])->name('paket-tanam.show');
Route::get('laporan', [LaporanPanenController::class, 'index'])->name('laporan.index');
Route::get('laporan/{laporan}', [LaporanPanenController::class, 'show'])->name('laporan.show');
Route::get('jadwal-pupuk', [JadwalPupukController::class, 'index'])->name('jadwal-pupuk.index');
Route::get('jadwal-pupuk/{jadwal_pupuk}', [JadwalPupukController::class, 'show'])->name('jadwal-pupuk.show');
Route::get('ganti-password', [HomeController::class, 'change_password'])->middleware('auth')->name('ganti-password.index');
Route::post('ganti-password', [HomeController::class, 'update_password'])->middleware('auth')->name('ganti-password.update');

