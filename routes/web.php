<?php

use App\Http\Controllers\PpdbController;
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
Route::group(['prefix' => 'home/ppdb'], function(){

    Route::post('/tjurusan', [PpdbController::class, 'tjurusan'])->name('tjurusan');
    Route::post('/tgelombang', [PpdbController::class, 'tgelombang'])->name('tgelombang');


});

// PENDAFTAR
Route::group(['prefix' => 'home/ppdb/pendaftar'], function(){
    Route::get('/', [PpdbController::class, 'pendaftar'])->name('pendaftar');
    Route::post('/daftar', [PpdbController::class, 'daftar'])->name('daftar');
});