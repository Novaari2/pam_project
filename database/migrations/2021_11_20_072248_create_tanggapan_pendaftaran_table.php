<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTanggapanPendaftaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanggapan_pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_id');
            $table->unsignedBigInteger('pendaftaran_id');
            $table->text('keterangan')->nullable();
            $table->dateTime('tgl_tanggapan');
            $table->timestamps();

            $table->foreign("admin_id")->references('id')->on('admin');
            $table->foreign("pendaftaran_id")->references('id')->on('pendaftaran_sambungan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tanggapan_pendaftaran');
    }
}
