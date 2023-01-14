<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'admin']], function(){
    Route::resource('lahan', App\Http\Controllers\LahanController::class);
    Route::resource('user', App\Http\Controllers\UserController::class);
    Route::resource('alatb', App\Http\Controllers\Alat_BahanController::class);
    Route::resource('obath', App\Http\Controllers\ObathController::class);
    Route::resource('paket-tanam', App\Http\Controllers\PaketTanamController::class);
});

//Update Alat Bahan
Route::post('alatb2/update/{id}', 'App\Http\Controllers\Alat_BahanController@update');

//Update Obat Hama
Route::post('obath2/update/{id}', 'App\Http\Controllers\ObathController@update');
