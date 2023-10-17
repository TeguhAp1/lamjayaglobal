<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id('id');
             $table->string('nama_pegawai');
             $table->string('tempat_lahir');
             $table->string('tanggal_lahir');
             $table->string('jenis_kelamin');
             $table->string('agama');
             $table->string('alamat');
             $table->foreignId('id_kelurahan');
             $table->foreignId('id_kecamatan');
             $table->foreignId('id_provinsi');
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
        Schema::dropIfExists('pegawai');
    }
}
