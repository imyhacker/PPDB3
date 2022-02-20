<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\SekolahController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['prefix' => '/'], function(){
    Route::get('/', [ClientController::class, 'index'])->name('index');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'home/file'], function($id = null){
    Route::get('/{id}/download', [HomeController::class, 'download_file'])->name('download', $id);
    Route::get('/{id}/hapus', [HomeController::class, 'hapus_file'])->name('hapus_file', $id);

});

Route::group(['prefix' => 'home/jurusan'], function($id = null){
    Route::get('/{id}/hapus_jurusan', [HomeController::class, 'hapus_jurusan'])->name('hapus_jurusan', $id);
});

Route::group(['prefix' => 'home/video'], function($id = null){
    Route::get('/{id}/hapus_video', [HomeController::class, 'hapus_video'])->name('hapus_video', $id);
});
Route::group(['prefix' => 'home/akun'], function($id = null){
    Route::get('/{id}/hapus_akun', [HomeController::class, 'hapus_akun'])->name('hapus_akun', $id);
});

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


Route::group(['prefix' => 'home/sekolah'], function(){
    Route::post('/takun', [SekolahController::class, 'takun'])->name('takun');
});