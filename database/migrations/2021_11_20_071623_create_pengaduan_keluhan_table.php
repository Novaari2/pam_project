<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaduanKeluhanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduan_keluhan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->string('nomor_pengaduan')->nullable();
            $table->dateTime('tgl_pengaduan');
            $table->dateTime('tgl_penanganan');
            $table->dateTime('keterangan');
            $table->tinyInteger('flag_kerusakan')->comment('0:ringan; 1:sedang; 2:berat');
            $table->string('foto');
            $table->tinyInteger('flag_proses')->comment('0:baru; 1:proses; 2:selesai');
            $table->timestamps();

            $table->foreign("users_id")->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengaduan_keluhan');
    }
}
