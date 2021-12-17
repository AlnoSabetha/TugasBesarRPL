<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\surat;
use App\SuratKet;
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

    public function dashboardsrt()
    {
        $nim = Auth::user()->nim;
        $srt = surat::where('nim', '=', $nim)->get();
        return view ('mahasiswa', ['srt' => $srt,
         'count' => surat::where('nim', '=', $nim)->count(),
        'count2' => SuratKet::where('nim', '=', $nim)->count()]);
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
            'tgl_pelaksanaan' => $request->tgl_pelaksanaan,
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
         $srt->tgl_pelaksanaan = $request->tgl_pelaksanaan;
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
        'ttd' => $srt->ttd,
        'update' => $srt->updated_at,
        'tanggal' => $srt->tgl_pelaksanaan,
        'nosur' => $srt->no_surat]);
    }

    public function view($id)
    {
        $srt = surat::find($id);
        return view ('sr-viewtgs-mhs', ['srt' => $srt]);
    }

        //Barcode
    public function index()
    {
      return view('template');
    }
}

