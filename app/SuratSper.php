<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratSper extends Model
{
    protected $table = 'surat_permohonan';
    protected $fillable = ['tujuan', 'kepada', 'nama', 'nim', 'keperluan', 'tgl_pelaksanaan', 'tgl_pembuatan', 'waktu', 'tempat', 'nama_kegiatan', 'ttd'];
}
