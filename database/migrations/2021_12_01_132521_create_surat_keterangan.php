<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratKeterangan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_keterangan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jabatan');
            $table->string('periode');
            $table->string('kota');
            $table->date('tanggal');
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
        Schema::dropIfExists('surat_keterangan');
    }
}
