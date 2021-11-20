<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $table = 'input_surat';
    protected $fillable = ['tujuan_surat', 'nama_mitra','alamat_mitra','keterangan'];
}
