<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTanggapanKeluhanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanggapan_keluhan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_id');
            $table->unsignedBigInteger('pengaduan_keluhan_id');
            $table->text('keterangan')->nullable();
            $table->dateTime('tgl_tanggapan');
            $table->timestamps();

            $table->foreign("admin_id")->references('id')->on('admin');
            $table->foreign("pengaduan_keluhan_id")->references('id')->on('pengaduan_keluhan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tanggapan_keluhan');
    }
}
