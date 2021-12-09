<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Surat;
use App\SuratKet;
use App\SuratBA;
use App\SuratSper;
use Illuminate\Support\Facades\Auth;

class DosenController extends Controller
{
    //surat tugas dosen
    public function daftarTugas()
    {
        $nim = Auth::user()->nim;
        $srt = surat::where('nim', '=', $nim)->get();
        return view ('srd-daftar-dosen', ['srt' => $srt]);
    }

    public function tambahTugas()
    {
        return view ('srd-tambah-dosen');
    }

    public function simpanTugas(Request $request)
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
        return redirect('/surattgs/dosen');
    }

    public function editTugas($id)
    {
        $srt = surat::find($id);
        return view ('srd-edittugas-dosen', ['srt' => $srt]);
    }

    public function updatedTugas($id, Request $request)
    {
        $srt = surat::find($id);
         $srt->tujuan_surat = $request->tujuan_surat;
         $srt->nama_mitra = $request->nama_mitra;
         $srt->alamat_mitra = $request->alamat_mitra;
         $srt->keterangan = $request->keterangan;
         $srt->save();
        return redirect('/surattgs/dosen');
    }

    public function templateTugas($id)
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

    //surat keterangan dosen
    public function daftarKeterangan()
    {
        $nim = Auth::user()->nim;
        $srt = SuratKet::where('nim', '=', $nim)->get();
        return view ('srd-daftarket-dosen', ['srt' => $srt]);
    }

    public function tambahKeterangan()
    {
        return view ('srd-tambahket-dosen');
    }

    public function simpanKeterangan(Request $request)
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
        return redirect('/suratket/dosen');
    }

    public function editKeterangan($id)
    {
        $srt = SuratKet::find($id);
        return view ('srd-editketerangan-dosen', ['srt' => $srt]);
    }

    public function updatedKeterangan($id, Request $request)
    {
        $srt = SuratKet::find($id);
         $srt->jabatan = $request->jabatan;
         $srt->periode = $request->periode;
         $srt->kota = $request->kota;
         $srt->tanggal = $request->tanggal;
         $srt->save();
        return redirect('/suratket/dosen');
    }

    public function templateKeterangan($id)
    {
        $nama = Auth::user()->name;
        $srt = SuratKet::find($id);
        return view('templateketerangan', ['name' => $srt->nama_mitra,
        'jabatan' => $srt->jabatan,
        'periode' => $srt->periode,
        'kota' => $srt->kota,
        'tanggal' => $srt->tanggal,
        'nim' => $srt->nim,
        'nama' => $nama,
        'nosur' => $srt->no_surat]);
    }

    //surat berita acara dosen
    public function daftarBeritaAcara()
    {
        $nim = Auth::user()->nim;
        $srt = SuratBA::where('nim', '=', $nim)->get();
        return view ('srd-daftarba-dosen', ['srt' => $srt]);
    }

    public function tambahBeritaAcara()
    {
        return view ('srd-tambahba-dosen');
    }

    public function simpanBeritaAcara(Request $request)
    {
        $nim = Auth::user()->nim;
        $nama = Auth::user()->name;
        SuratBA::create([
            'tujuan' => $request->tujuan,
            'nama_acara' => $request->nama_acara,
            'tempat' => $request->tempat,
            'pembicara' => $request->pembicara,
            'nama_mitra' => $request->nama_mitra,
            'nama_p_mitra' => $request->nama_p_mitra,
            'tanggal' => $request->tanggal,
            'nim' => $nim,
            'nama' => $nama
        ]);
        return redirect('/suratba/dosen');
    }

    public function editBeritaAcara($id)
    {
        $srt = SuratBA::find($id);
        return view ('srd-editbritacara-dosen', ['srt' => $srt]);
    }

    public function updatedBeritaAcara($id, Request $request)
    {
        $srt = SuratBA::find($id);
         $srt->tujuan = $request->tujuan;
         $srt->nama_acara = $request->nama_acara;
         $srt->tempat = $request->tempat;
         $srt->pembicara = $request->pembicara;
         $srt->nama_mitra = $request->nama_mitra;
         $srt->nama_p_mitra = $request->nama_p_mitra;
         $srt->tanggal = $request->tanggal;
         $srt->save();
        return redirect('/suratba/dosen');
    }

    public function templateBeritaAcara($id)
    {
        $nama = Auth::user()->name;
        $srt = SuratBA::find($id);
        return view('templateberitaacara', ['name' => $srt->nama_mitra,
        'tujuan' => $srt->tujuan,
        'nama_acara' => $srt->nama_acara,
        'tempat' => $srt->tempat,
        'pembicara' => $srt->pembicara,
        'nama_mitra' => $srt->nama_mitra,
        'nama_p_mitra' => $srt->nama_p_mitra,
        'tanggal' => $srt->tanggal,
        'nim' => $srt->nim,
        'nama' => $nama,
        'nosur' => $srt->no_surat]);
    }

    //surat permohonan dosen
    public function daftarPermohonan()
    {
        $nim = Auth::user()->nim;
        $srt = SuratSper::where('nim', '=', $nim)->get();
        return view ('srd-daftarsper-dosen', ['srt' => $srt]);
    }

    public function tambahPermohonan()
    {
        return view ('srd-tambahsper-dosen');
    }

    public function simpanPermohonan(Request $request)
    {
        $nim = Auth::user()->nim;
        $nama = Auth::user()->name;
        SuratSper::create([
            'tgl_pembuatan' => $request->tgl_pembuatan,
            'kepada' => $request->kepada,
            'tgl_pelaksanaan' => $request->tgl_pelaksanaan,
            'waktu' => $request->waktu,
            'tempat' => $request->tempat,
            'keperluan' => $request->keperluan,
            'tujuan' => $request->tujuan,
            'nama_kegiatan' => $request->nama_kegiatan,
            'nim' => $nim,
            'nama' => $nama
        ]);
        return redirect('/suratsper/dosen');
    }

    public function editPermohonan($id)
    {
        $srt = SuratSper::find($id);
        return view ('srd-editsper-dosen', ['srt' => $srt]);
    }

    public function updatedPermohonan($id, Request $request)
    {
        $srt = SuratSper::find($id);
         $srt->tgl_pembuatan = $request->tgl_pembuatan;
         $srt->kepada = $request->kepada;
         $srt->tgl_pelaksanaan = $request->tgl_pelaksanaan;
         $srt->waktu = $request->waktu;
         $srt->tempat = $request->tempat;
         $srt->keperluan = $request->keperluan;
         $srt->tujuan = $request->tujuan;
         $srt->nama_kegiatan = $request->nama_kegiatan;
         $srt->save();
        return redirect('/suratsper/dosen');
    }

    public function templatePermohonan($id)
    {
        $nama = Auth::user()->name;
        $srt = SuratSper::find($id);
        return view('templatepermohonan', ['name' => $srt->nama_mitra,
        'tgl_pembuatan' => $srt->tgl_pembuatan,
        'kepada' => $srt->kepada,
        'tgl_pelaksanaan' => $srt->tgl_pelaksanaan,
        'waktu' => $srt->waktu,
        'tempat' => $srt->tempat,
        'keperluan' => $srt->keperluan,
        'nama_mitra' => $nama,
        'tujuan' => $srt->tujuan,
        'nama_kegiatan' => $srt->nama_kegiatan,
        'nim' => $srt->nim,
        'nama' => $nama,
        'nosur' => $srt->no_surat]);
    }
}
