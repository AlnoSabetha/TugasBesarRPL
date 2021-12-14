<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratSkept extends Model
{
    protected $table = 'surat_keputusan';
    protected $fillable = ['tujuan', 'menimbang', 'mengingat', 'menetapkan', 'kota', 'nim', 'nama', 'tanggal', 'ttd'];
}
