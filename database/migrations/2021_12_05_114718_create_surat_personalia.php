<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratPersonalia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_personalia', function (Blueprint $table) {
            $table->id();
            $table->string('tujuan');
            $table->string('nama');
            $table->integer('nik');
            $table->string('kepada');
            $table->string('keperluan');
            $table->date('tanggal');
            $table->string('pejabat');
            $table->string('namattd');
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
        Schema::dropIfExists('surat_personalia');
    }
}
