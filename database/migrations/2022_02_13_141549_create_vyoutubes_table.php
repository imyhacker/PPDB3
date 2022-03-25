<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVyoutubesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vyoutube', function (Blueprint $table) {
            $table->id();
             // TITLE = SNIPPET->TITLE
        // CHANNEL = channelTitle
        // VIDEO = thumbnails->standard->url
        // ID = efRkwGhZycQ
            $table->string('judul')->nullable();
            $table->string('channel')->nullable();
            $table->longText('video')->nullable();
            $table->string('id_video')->nullable();
            $table->enum('status', ['aktif', 'nonaktif'])->default('nonaktif');
     
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
        Schema::dropIfExists('vyoutube');
    }
}
