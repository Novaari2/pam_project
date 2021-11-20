<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PenyesuaianTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users',function(Blueprint $table){
            $table->string('nik')->unique();
            $table->string('username')->unique();
            $table->date('tgl_lahir');
            $table->string('pekerjaan');
            $table->enum('jenkel',["pria","wanita"]);
            $table->string('telephone')->nullable();
            $table->text('alamat')->nullable();
            $table->string('foto_ktp');
            $table->string('foto_kk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('users',function(Blueprint $table){

            $table->dropColumn('nik');
            $table->dropColumn('username');
            $table->dropColumn('tgl_lahir');
            $table->dropColumn('pekerjaan');
            $table->dropColumn('jenkel');
            $table->dropColumn('telephone');
            $table->dropColumn('alamat');
            $table->dropColumn('foto_ktp');
            $table->dropColumn('foto_kk');

         });
    }
}
