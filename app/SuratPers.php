<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratPers extends Model
{
    protected $table = 'surat_personalia';
    protected $fillable = ['tujuan', 'nama', 'nim', 'nama_mitra', 'kepada', 'keperluan', 'tanggal', 'ttd', 'status'];
}
