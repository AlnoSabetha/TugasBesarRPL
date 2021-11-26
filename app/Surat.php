<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $table = 'surat_tugas';
    protected $fillable = ['tujuan_surat', 'nama_mitra','alamat_mitra','keterangan', 'nim', 'nama', 'status', 'no_surat'];
}
