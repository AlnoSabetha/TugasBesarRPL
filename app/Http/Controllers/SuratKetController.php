<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SuratKet;
use Illuminate\Support\Facades\Auth;

class SuratKetController extends Controller
{
    //Controller Mahasiswa
    public function daftarsrt()
    {
        $nim = Auth::user()->nim;
        $srt = SuratKet::where('nim', '=', $nim)->get();
        return view ('sr-daftarket', ['srt' => $srt]);
    }

    public function dashboardsrt()
    {
        $nim = Auth::user()->nim;
        $srt = SuratKet::where('nim', '=', $nim)->get();
        return view ('mahasiswa', ['srt' => $srt]);
    }

    public function tambah()
    {
        return view ('sr-keterangan');
    }

    public function simpan(Request $request)
    {
        $nim = Auth::user()->nim;
        $nama = Auth::user()->name;
        SuratKet::create([
            'jabatan' => $request->jabatan,
            'periode' => $request->periode,
            'kota' => $request->kota,
            'tanggal' => $request->tanggal,
            'nim' => $nim,
            'nama' => $nama
        ]);
        return redirect('/suratket');
    }

    public function hapus($id)
    {
        $srt = SuratKet::find($id)->delete();
        return redirect ('/suratket');
    }

    public function edit($id)
    {
        $srt = SuratKet::find($id);
        return view ('sr-editketerangan', ['srt' => $srt]);
    }

    public function updated($id, Request $request)
    {
        $srt = SuratKet::find($id);
         $srt->jabatan = $request->jabatan;
         $srt->periode = $request->periode;
         $srt->kota = $request->kota;
         $srt->tanggal = $request->tanggal;
         $srt->save();
        return redirect('/suratket');
    }

    public function template($id)
    {
        $nama = Auth::user()->name;
        $srt = SuratKet::find($id);
        return view('templateketerangan', ['name' => $srt->name,
        'jabatan' => $srt->jabatan,
        'periode' => $srt->periode,
        'kota' => $srt->kota,
        'tahun' => $srt->tanggal,
        'nim' => $srt->nim,
        'nama' => $nama,
        'ttd' => $srt->ttd,
        'update' => $srt->updated_at,
        'nosur' => $srt->no_surat]);
    }

        //Barcode
    public function index()
    {
      return view('templateketerangan');
    }
}

