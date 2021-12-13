<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratKet extends Model
{
    protected $table = 'surat_keterangan';
    protected $fillable = ['jabatan', 'periode', 'kota', 'tanggal', 'nim', 'nama', 'ttd'];
}
