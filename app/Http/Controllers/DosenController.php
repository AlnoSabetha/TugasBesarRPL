<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Surat;
use App\SuratKet;
use Illuminate\Support\Facades\Auth;

class DosenController extends Controller
{
    //surat tugas dosen
    public function surattugas()
    {
        $nim = Auth::user()->nim;
        $srt = surat::where('nim', '=', $nim)->get();
        return view ('srd-daftar-dosen', ['srt' => $srt]);
    }

    public function tambahtugas()
    {
        return view ('srd-tambah-dosen');
    }

    public function simpantugas(Request $request)
    {
        $nim = Auth::user()->nim;
        $nama = Auth::user()->name;
        surat::create([
            'tujuan_surat' => $request->tujuan_surat,
            'nama_mitra' => $request->nama_mitra,
            'alamat_mitra' => $request->alamat_mitra,
            'keterangan' => $request->keterangan,
            'nim' => $nim,
            'nama' => $nama
        ]);
        return redirect('/surat/dosen');
    }
}
