<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInputSurat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('input_surat_tugas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tujuan_surat');
            $table->string('nama_mitra');
            $table->string('alamat_mitra');
            $table->string('keterangan');
            $table->date('tanggal');
            $table->string('waktu');
            $table->string('tempat');
            $table->integer('nim');
            $table->string('nama');
            $table->string('jenis_surat');
            $table->string('status');
            $table->string('no_surat');
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
        Schema::dropIfExists('input_surat_tugas');
    }
}
