<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetilKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detil_karyawan', function (Blueprint $table) {
            $table->increments('kode_karyawan_detail');
            $table->string('kode_karyawan');
            $table->string('nomor_ktp');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('alamat_ktp');
            $table->string('kota_ktp');
            $table->string('provinsi_ktp');
            $table->string('kode_pos_ktp');
            $table->string('nomor_telepon');
            $table->string('email');
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
        Schema::dropIfExists('detil_karyawan');
    }
}