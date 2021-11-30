<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\surat;
use App\User;
use Illuminate\Support\Facades\Auth;

class SuratController extends Controller
{
    //Controller Mahasiswa
    public function daftarsrt()
    {
        $nim = Auth::user()->nim;
        $srt = surat::where('nim', '=', $nim)->get();
        return view ('sr-daftar', ['srt' => $srt]);
    }

    /* public function srtkeluar()
    {
        $srt = surat::all();
        return view ('sk-mhs', ['srt' => $srt]);
    } */

    public function dashboardsrt()
    {
        $nim = Auth::user()->nim;
        $srt = surat::where('nim', '=', $nim)->get();
        return view ('mahasiswa', ['srt' => $srt]);
    }

    public function tambah()
    {
        return view ('sr-tambah');
    }

    public function simpan(Request $request)
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

    public function template($id)
    {
        $nama = Auth::user()->name;
        $srt = surat::find($id);
        return view('template', ['name' => $srt->nama_mitra,
        'tujuan' => $srt->tujuan_surat,
        'alamat' => $srt->alamat_mitra,
        'keterangan' => $srt->keterangan,
        'nim' => $srt->nim,
        'nama' => $nama,
        'nosur' => $srt->no_surat]);
    }

        //Barcode
    public function index()
    {
      return view('template');
    }
}

