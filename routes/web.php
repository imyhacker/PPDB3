<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PpdbController;

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

Route::group(['prefix' => 'home/file'], function($id = null){
    Route::get('/{id}/download', [HomeController::class, 'download_file'])->name('download', $id);
    Route::get('/{id}/hapus', [HomeController::class, 'hapus_file'])->name('hapus_file', $id);

});

// Route::get('/home/yy', function(){
//    
// });

Route::group(['prefix' => 'home/siswa'], function($kode_pendaftaran = NULL){
    Route::get('{kode_pendaftaran}/terima', [PpdbController::class, 'terima'])->name('terima', $kode_pendaftaran);
    Route::get('{kode_pendaftaran}/ditolak', [PpdbController::class, 'ditolak'])->name('ditolak', $kode_pendaftaran);
    Route::get('{kode_pendaftaran}/edit', [PpdbController::class, 'edit'])->name('edit', $kode_pendaftaran);
    Route::post('{kode_pendaftaran}/edit/update', [PpdbController::class, 'update'])->name('update', $kode_pendaftaran);
    Route::get('{kode_pendaftaran}/lihat', [PpdbController::class, 'lihat'])->name('lihat', $kode_pendaftaran);
    Route::get('{kode_pendaftaran}/stream', [PpdbController::class, 'stream'])->name('stream', $kode_pendaftaran);
});


Route::group(['prefix' => 'home/ppdb'], function(){

    Route::post('/tjurusan', [PpdbController::class, 'tjurusan'])->name('tjurusan');
    Route::post('/tgelombang', [PpdbController::class, 'tgelombang'])->name('tgelombang');
    Route::post('/tfinfo', [PpdbController::class, 'tfinfo'])->name('tfinfo');
    Route::post('/tvideo', [PpdbController::class, 'tvideo'])->name('tvideo');
});

// PENDAFTAR
Route::group(['prefix' => 'home/ppdb/pendaftar'], function(){
    Route::get('/', [PpdbController::class, 'pendaftar'])->name('pendaftar');
    Route::post('/daftar', [PpdbController::class, 'daftar'])->name('daftar');
});