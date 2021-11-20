<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Surat;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $srt = Surat::all();
        return view ('/sra-daftar-admin', ['srt' => $srt]);
    }

    public function dashboard()
    {
        return view ('/admin');
    }
}
