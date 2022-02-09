<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftar', function (Blueprint $table) {
            $table->id();
            // DATA PENDAFTAR
            $table->string('kode_pendaftaran')->nullable();

            $table->string('gelombang')->nullable();
            $table->string('jurusan');
            $table->string('asal_sekolah');

            // DATA PRIBADI
            $table->string('nama_lengkap');
            $table->string('jenis_kelamin');
            $table->string('nisn')->nullable();
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('no_kk');
            $table->string('agama');
            $table->string('kebutuhan_khusus')->nullable();
            $table->longText('alamat');
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('desa')->nullable();
            $table->string('kota')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('tempat_tinggal');


            // DATA AYAH
            $table->string('nama_ayah');
            $table->string('ktp_ayah')->nullable();
            $table->string('status_ayah');
            $table->string('pendidikan_ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();

            // DATA IBU
            $table->string('nama_ibu');
            $table->string('ktp_ibu')->nullable();
            $table->string('status_ibu');
            $table->string('pendidikan_ibu')->nullable();
            $table->string('pekerjaan_ibu')->nullable();

            // DATA WALI
            $table->string('nama_wali')->nullable();
            $table->string('ktp_wali')->nullable();
            $table->string('pendidikan_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();

            // DATA KONTAK
            $table->string('nomor_hp');
            $table->string('email')->nullable();
            $table->string('rekomendasi')->nullable();
            $table->string('no_rekomendasi')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftar');
    }
}
