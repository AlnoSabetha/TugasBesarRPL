<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratDa extends Model
{
    protected $table = 'daftar_hadir';
    protected $fillable = ['nama_kegiatan', 'tanggal_pelaksanaan', 'waktu', 'tempat', 'pembicara', 'ttd', 'nama', 'nim'];
}
