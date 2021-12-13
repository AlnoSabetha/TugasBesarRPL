<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Surat;
use App\SuratKet;
use App\SuratBA;
use App\SuratSper;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //validasi surat tugas
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
