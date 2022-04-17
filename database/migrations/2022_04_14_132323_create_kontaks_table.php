<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontak', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('email')->nullable();
            $table->enum('kepada', ['Customer Service (CS)', 'Technical Support'])->nullable();
            $table->longText('pesan')->nullable();
            $table->enum('status', ['Sudah Di Balas', 'Sudah Dibaca', 'Belum Di Baca'])->nullable();
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
        Schema::dropIfExists('kontak');
    }
};
