<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\surat;

class SuratController extends Controller
{
    //Controller Mahasiswa
    public function index()
    {
        $srt = surat::all();
        return view ('sr-daftar', ['srt' => $srt]);
    }

    public function tambah()
    {
        return view ('sr-tambah');
    }

    public function simpan(Request $request)
    {
        surat::create([
            'tujuan_surat' => $request->tujuan_surat,
            'nama_mitra' => $request->nama_mitra,
            'alamat_mitra' => $request->alamat_mitra,
            'keterangan' => $request->keterangan
        ]);
        return redirect('/surat');
    }

    public function hapus($id)
    {
        $srt = surat::find($id)->delete();
        return redirect ('/surat');
    }

    public function edit($id)
    {
        $srt = surat::find($id);
        return view ('sr-edit', ['srt' => $srt]);
    }

    public function updated($id, Request $request)
    {
        $srt = surat::find($id);
         $srt->tujuan_surat = $request->tujuan_surat;
         $srt->nama_mitra = $request->nama_mitra;
         $srt->alamat_mitra = $request->alamat_mitra;
         $srt->keterangan = $request->keterangan;
         $srt->save();
        return redirect('/surat');
    }

    //Controller Admin
    public function indexAdmin()
    {
        $srt = surat::all();
        return view ('sra-daftar-admin', ['srt' => $srt]);
    }
}
