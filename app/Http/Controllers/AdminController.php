<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Surat;
use App\SuratKet;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //validasi surat tugas mahasiswa
    public function daftartugas()
    {
        $srt = Surat::all();
        return view ('sra-daftar-admin', ['srt' => $srt]);
    }

    public function view($id)
    {
        $srt = surat::find($id);
        return view('sra-view' , ['srt' => $srt]);
    }

    public function confirmtugas($id)
    {
        $srt = Surat::find($id);
        $srt->no_surat = $srt->id . '/D/FTI/2021';
        $srt->status = 'disetujui';
        $srt->save();
        return redirect('/surat/admin');
    }

    public function rejecttugas($id)
    {
        $srt = Surat::find($id);
        $srt->no_surat = '';
        $srt->status = 'ditolak';
        $srt->save();
        return redirect('/surat/admin');
    }

    //validasi surat keterangan mahasiswa
    public function daftarket()
    {
        $srt = SuratKet::all();
        return view ('sra-keterangan-admin', ['srt' => $srt]);
    }

    public function confirmket($id)
    {
        $srt = SuratKet::find($id);
        $srt->no_surat = $srt->id . '/B/FTI/2021';
        $srt->status = 'disetujui';
        $srt->save();
        return redirect('/suratket/admin');
    }

    public function rejectket($id)
    {
        $srt = SuratKet::find($id);
        $srt->no_surat = '';
        $srt->status = 'ditolak';
        $srt->save();
        return redirect('/suratket/admin');
    }

    //surat tugas admin
    public function tambahtugas()
    {
        return view ('sra-tambah-admin');
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
        return redirect('/surat/admin');
    }
}
