<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratKeputusan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_keputusan', function (Blueprint $table) {
            $table->id();
            $table->string('tujuan');
            $table->string('menimbang');
            $table->string('mengingat');
            $table->string('menetapkan');
            $table->string('kota');
            $table->integer('nik');
            $table->date('tanggal');
            $table->string('pejabat');
            $table->string('namaygttd');
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
        Schema::dropIfExists('surat_keputusan');
    }
}
