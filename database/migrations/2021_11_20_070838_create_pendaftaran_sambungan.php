<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranSambungan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran_sambungan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->string('nomor_pendaftaran')->nullable();
            $table->tinyInteger('flag_pendaftaran')->comment('0:baru; 1:proses; 2:selesai');
            $table->dateTime('tgl_pendaftaran');
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
        Schema::dropIfExists('pendaftaran_sambungan');
    }
}
