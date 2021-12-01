<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratBeritaAcra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_berita_acra', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tujuan');
            $table->string('nama_acara');
            $table->string('tempat');
            $table->string('pembicara');
            $table->string('nama_mitra');
            $table->string('nama_p_mitra');
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
        Schema::dropIfExists('surat_berita_acra');
    }
}
