<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratBA extends Model
{
    protected $table = 'surat_berita_acra';
    protected $fillable = ['tujuan', 'nama_acara', 'tempat', 'pembicara', 'nama_mitra', 'nama_p_mitra', 'tanggal', 'nim', 'nama', 'ttd'];
}
