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
        Schema::create('penduduks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('nik')->unique();
            $table->unsignedBigInteger('data_kks_id');
            $table->foreign('data_kks_id')->references('id')->on('data_kks')->onDelete('cascade');
            $table->enum('gender',['Perempuan','Laki-laki']);
            $table->string('usia');
            $table->string('tmp_lahir');
            $table->date('tgl_lahir');
            $table->enum('agama',['Islam','Katolik','Protestan','Konghucu','Buddha','Hindu']);
            $table->longtext('alamat');
            $table->enum('status_pernikahan',['Kawin','Belum Kawin','Cerai']);
            $table->enum('status_keluarga',['Kepala Rumah Tangga','Isteri','Anak','Lainnya']);
            $table->string('pekerjaan');
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
        Schema::dropIfExists('penduduks');
    }
};