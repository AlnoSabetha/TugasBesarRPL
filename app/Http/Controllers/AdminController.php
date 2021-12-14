<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Surat;
use App\SuratKet;
use App\SuratBA;
use App\SuratSper;
use App\SuratSkept;
use App\SuratDa;
use App\SuratPers;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //surat tugas
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
            'ttd' => $request->ttd,
            'nama' => $nama
        ]);
        return redirect('/surat/admin');
    }

    public function templatetugas($id)
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
        'nosur' => $srt->no_surat]);
    }

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

    public function confirmtugas($id, Request $request)
    {
        $srt = Surat::find($id);
        $srt->no_surat = $srt->id . '/D/FTI/2021';
        $srt->status = 'disetujui';
        $srt->ttd = $request->ttd;
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

    //validasi surat keterangan
    public function tambahKet()
    {
        return view ('sra-tambahket-admin');
    }

    public function simpanKet(Request $request)
    {
        $nim = Auth::user()->nim;
        $nama = Auth::user()->name;
        SuratKet::create([
            'jabatan' => $request->jabatan,
            'periode' => $request->periode,
            'kota' => $request->kota,
            'tanggal' => $request->tanggal,
            'nim' => $nim,
            'ttd' => $request->ttd,
            'nama' => $nama
        ]);
        return redirect('/suratket/admin');
    }

    public function templateKet($id)
    {
        $nama = Auth::user()->name;
        $srt = SuratKet::find($id);
        return view('templateketerangan', [
        'jabatan' => $srt->jabatan,
        'tahun' => $srt->periode,
        'kota' => $srt->kota,
        'tanggal' => $srt->tanggal,
        'nim' => $srt->nim,
        'nama' => $nama,
        'ttd' => $srt->ttd,
        'update' => $srt->updated_at,
        'nosur' => $srt->no_surat]);
    }

    public function daftarket()
    {
        $srt = SuratKet::all();
        return view ('sra-keterangan-admin', ['srt' => $srt]);
    }

    public function viewKet($id)
    {
        $srt = SuratKet::find($id);
        return view('sra-viewket-admin' , ['srt' => $srt]);
    }

    public function confirmket($id, Request $request)
    {
        $srt = SuratKet::find($id);
        $srt->no_surat = $srt->id . '/B/FTI/2021';
        $srt->status = 'disetujui';
        $srt->ttd = $request->ttd;
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

    //validasi surat berita acara
    public function tambahBa()
    {
        return view ('sra-tambahba-admin');
    }

    public function simpanBa(Request $request)
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
            'ttd' => $request->ttd,
            'nama' => $nama
        ]);
        return redirect('/suratba/admin');
    }

    public function templateBa($id)
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
        'ttd' => $srt->ttd,
        'update' => $srt->updated_at,
        'nosur' => $srt->no_surat]);
    }

    public function daftarBa()
    {
        $srt = SuratBA::all();
        return view ('sra-suratba-admin', ['srt' => $srt]);
    }

    public function viewBa($id)
    {
        $srt = SuratBA::find($id);
        return view('sra-viewba-admin' , ['srt' => $srt]);
    }

    public function confirmBa($id, Request $request)
    {
        $srt = SuratBA::find($id);
        $srt->no_surat = $srt->id . '/E/FTI/2021';
        $srt->status = 'disetujui';
        $srt->ttd = $request->ttd;
        $srt->save();
        return redirect('/suratba/admin');
    }

    public function rejectBa($id)
    {
        $srt = SuratBA::find($id);
        $srt->no_surat = '';
        $srt->status = 'ditolak';
        $srt->save();
        return redirect('/suratba/admin');
    }

    //validasi surat Permohonan
    public function tambahSper()
    {
        return view ('sra-tambahsper-admin');
    }

    public function simpanSper(Request $request)
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
            'ttd' => $request->ttd,
            'nama' => $nama
        ]);
        return redirect('/suratsper/admin');
    }

     public function templateSper($id)
    {
        $nama = Auth::user()->name;
        $srt = SuratSper::find($id);
        return view('templatepermohonan', ['name' => $nama,
        'tgl_pembuatan' => $srt->tgl_pembuatan,
        'nama_mitra' => $srt->kepada,
        'tgl_pelaksanaan' => $srt->tgl_pelaksanaan,
        'waktu' => $srt->waktu,
        'tempat' => $srt->tempat,
        'keperluan' => $srt->keperluan,
        'tujuan' => $srt->tujuan,
        'nama_kegiatan' => $srt->nama_kegiatan,
        'nim' => $srt->nim,
        'nama' => $nama,
        'ttd' => $srt->ttd,
        'update' => $srt->updated_at,
        'nosur' => $srt->no_surat]);
    }

    public function daftarSper()
    {
        $srt = SuratSper::all();
        return view ('sra-suratsper-admin', ['srt' => $srt]);
    }

    public function viewSper($id)
    {
        $srt = SuratSper::find($id);
        return view('sra-viewsper-admin' , ['srt' => $srt]);
    }

    public function confirmSper($id, Request $request)
    {
        $srt = SuratSper::find($id);
        $srt->no_surat = $srt->id . '/F/FTI/2021';
        $srt->status = 'disetujui';
        $srt->ttd = $request->ttd;
        $srt->save();
        return redirect('/suratsper/admin');
    }

    public function rejectSper($id)
    {
        $srt = SuratSper::find($id);
        $srt->no_surat = '';
        $srt->status = 'ditolak';
        $srt->save();
        return redirect('/suratsper/admin');
    }

    //validasi surat keputusan
    public function daftarSkept()
    {
        $srt = SuratSkept::all();
        return view ('sra-suratskept-admin', ['srt' => $srt]);
    }

    public function tambahSkept()
    {
        return view ('sra-tambahskept-admin');
    }

    public function simpanSkept(Request $request)
    {
        $nim = Auth::user()->nim;
        $nama = Auth::user()->name;
        SuratSkept::create([
            'tujuan' => $request->tujuan,
            'membimbing' => $request->membimbing,
            'mengingat' => $request->mengingat,
            'menetapkan' => $request->menetapkan,
            'kota' => $request->kota,
            'tanggal' => $request->tanggal,
            'ttd' => $request->ttd,
            'nim' => $nim,
            'nama' => $nama
        ]);
        return redirect('/suratskept/admin');
    }

    public function viewSkept($id)
    {
        $srt = SuratSkept::find($id);
        return view('sra-viewskept-admin' , ['srt' => $srt]);
    }

    public function templateSkept($id)
    {
        $srt = SuratSkept::find($id);
        return view ('templatesuratkeputusan', [
            'tujuan' => $srt->tujuan,
            'membimbimbing' => $srt->menimbang,
            'mengingat' => $srt->mengingat,
            'menetapkan' => $srt->menetapkan,
            'kota' => $srt->kota,
            'tanggal' => $srt->tanggal,
            'pejabat' => $srt->ttd
        ]);
    }

}
