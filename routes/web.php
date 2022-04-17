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
    Route::get('/tentang', [ClientController::class, 'tentang'])->name('tentang');
    Route::get('/fasilitas_sekolah', [ClientController::class, 'fasilitas_sekolah'])->name('fasilitas');
    Route::get('/infor', [ClientController::class, 'informasi'])->name('informasi');
    Route::get('/video', [ClientController::class, 'video'])->name('video');
    Route::get('/kontak', [ClientController::class, 'kontak'])->name('kontak');
    Route::post('/kontak/send', [ClientController::class, 'kontak_send'])->name('kontak_send');
});

Route::group(['prefix' => '/infor'], function($slug_info = null){
    Route::get('/selengkapnya', [ClientController::class, 'selengkapnya'])->name('selengkapnya');
    Route::get('/{slug_info}', [ClientController::class, 'baca_info'])->name('baca_info', $slug_info);
   
});

Route::group(['prefix' => '/daftar'], function(){
    Route::get('/', [ClientController::class, 'daftar'])->name('daftar_yuk');
    Route::post('/daftarkan', [PpdbController::class, 'daftar'])->name('daftarkan');
});

Route::group(['prefix' => 'cek'], function($kode_pendaftaran = null){
    Route::get('/', [ClientController::class, 'cek'])->name('cek');
    Route::get('/{kode_pendaftaran}/download', [ClientController::class, 'download'])->name('download_datamu');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => '/home/kontak'] , function($id = null){
    Route::get('/', [HomeController::class, 'kontak'])->name('kontak');
    Route::get('/{id}/baca', [HomeController::class, 'baca'])->name('baca', $id);
});



Route::group(['prefix' => 'home/file'], function($id = null){
    Route::get('/{id}/download', [HomeController::class, 'download_file'])->name('download', $id);
    Route::get('/{id}/hapus', [HomeController::class, 'hapus_file'])->name('hapus_file', $id);

});

Route::group(['prefix' => 'home/jurusan'], function($id = null){
    Route::get('/{id}/hapus_jurusan', [HomeController::class, 'hapus_jurusan'])->name('hapus_jurusan', $id);
});

Route::group(['prefix' => 'home/video'], function($id = null){
    Route::get('/{id}/hapus_video', [HomeController::class, 'hapus_video'])->name('hapus_video', $id);
    Route::get('/{id}/aktifkan', [HomeController::class, 'aktifkan_video'])->name('aktifkan_video', $id);
    Route::get('/{id}/nonaktifkan', [HomeController::class, 'nonaktifkan_video'])->name('nonaktifkan_video', $id);

});
Route::group(['prefix' => 'home/akun'], function($id = null){
    Route::get('/{id}/hapus_akun', [HomeController::class, 'hapus_akun'])->name('hapus_akun', $id);
});

Route::group(['prefix' => 'home/info'], function($id = null){
    Route::get('/{id}/edit_info', [SekolahController::class, 'edit_info'])->name('edit_info', $id);
    Route::post('/{id}/edit_info/update', [SekolahController::class, 'update_info'])->name('update_info', $id);
    Route::get('/{id}/hapus_info', [SekolahController::class, 'hapus_info'])->name('hapus_info', $id);
});

Route::group(['prefix' => 'home/siswa'], function($kode_pendaftaran = NULL){
    Route::get('{kode_pendaftaran}/terima', [PpdbController::class, 'terima'])->name('terima', $kode_pendaftaran);
    Route::get('{kode_pendaftaran}/ditolak', [PpdbController::class, 'ditolak'])->name('ditolak', $kode_pendaftaran);
    Route::get('{kode_pendaftaran}/edit', [PpdbController::class, 'edit'])->name('edit', $kode_pendaftaran);
    Route::post('{kode_pendaftaran}/edit/update', [PpdbController::class, 'update'])->name('update', $kode_pendaftaran);
    Route::get('{kode_pendaftaran}/lihat', [PpdbController::class, 'lihat'])->name('lihat', $kode_pendaftaran);
    Route::get('{kode_pendaftaran}/stream', [PpdbController::class, 'stream'])->name('stream', $kode_pendaftaran);
});


Route::group(['prefix' => 'home/slider'] , function($id = null){
    Route::post('/upload_slider', [PpdbController::class, 'upload_slider'])->name('upload_slider');
    Route::get('/{id}/aktifkan', [PpdbController::class, 'aktifkan_slider'])->name('aktifkan_slider', $id);
    Route::get('/{id}/nonaktifkan', [PpdbController::class, 'nonaktifkan_slider'])->name('nonaktifkan_slider', $id);

});




Route::group(['prefix' => 'home/ppdb'], function(){

    Route::post('/tjurusan', [PpdbController::class, 'tjurusan'])->name('tjurusan');
    Route::post('/tgelombang', [PpdbController::class, 'tgelombang'])->name('tgelombang');
    Route::post('/tfinfo', [PpdbController::class, 'tfinfo'])->name('tfinfo');
    Route::post('/tvideo', [PpdbController::class, 'tvideo'])->name('tvideo');
});


Route::group(['prefix' => 'home/ppdb/area'], function(){
    Route::get('/cetak', [PpdbController::class, 'cetak'])->name('cetak_data');
    Route::get('/acc', [PpdbController::class, 'acc'])->name('acc_data');
    Route::post('/acc/update', [PpdbController::class, 'update_acc'])->name('update_acc');

});

// PENDAFTAR
Route::group(['prefix' => 'home/ppdb/pendaftar'], function(){
    Route::get('/', [PpdbController::class, 'pendaftar'])->name('pendaftar');
    Route::post('/daftar', [PpdbController::class, 'daftar'])->name('daftar');
});


Route::group(['prefix' => 'home/sekolah'], function(){
    Route::post('/takun', [SekolahController::class, 'takun'])->name('takun');
    Route::post('/tinfo', [SekolahController::class, 'tinfo'])->name('tinfo');
    Route::post('/ttag', [SekolahController::class, 'ttag'])->name('ttag');

});

Route::group(['prefix' => 'home/tentang'], function(){
    Route::get('/tentang', [SekolahController::class, 'tentang_sekolah'])->name('tentang_sekolah');
    Route::post('/tentang/kirim_tentang', [SekolahController::class, 'kirim_tentang'])->name('kirim_tentang');
});

Route::group(['prefix'=>'home/setting'], function(){
    Route::get('/', [SekolahController::class, 'setting'])->name('setting');
    Route::post('/update_hari', [SekolahController::class, 'update_hari'])->name('update_hari');
    Route::post('/update_jam', [SekolahController::class, 'update_jam'])->name('update_jam');
    Route::post('/update_telpon', [SekolahController::class, 'update_telpon'])->name('update_telpon');
    Route::post('/update_email', [SekolahController::class, 'update_email'])->name('update_email');
    Route::post('/update_facebook', [SekolahController::class, 'update_facebook'])->name('update_facebook');
    Route::post('/update_instagram', [SekolahController::class, 'update_instagram'])->name('update_instagram');
    Route::post('/update_youtube', [SekolahController::class, 'update_youtube'])->name('update_youtube');
    Route::post('/update_whatsapp', [SekolahController::class, 'update_whatsapp'])->name('update_whatsapp');


});