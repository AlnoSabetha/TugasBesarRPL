<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Surat;

class AdminController extends Controller
{
    public function indexAdmin()
    {
        $srt = Surat::all();
        return view ('sra-daftar-admin', ['srt' => $srt]);
    }

    public function dashboard()
    {
        $srt = surat::all();
        return view ('admin', ['srt' => $srt]);
    }

    public function view($id)
    {
        $srt = surat::find($id);
        return view('sra-view' , ['srt' => $srt]);
    }

    public function confirm($id)
    {
        $srt = Surat::find($id);
        $srt->no_surat = 'ST-' . $srt->id;
        $srt->status = 'Disetujui';
        $srt->save();
        return redirect('/surat/admin');
    }

    public function reject($id)
    {
        $srt = Surat::find($id);
        $srt->no_surat = '';
        $srt->status = 'Ditolak';
        $srt->save();
        return redirect('/surat/admin');
    }
}
