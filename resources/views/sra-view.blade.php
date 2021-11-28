@extends('layouts.app-mahasiswa')

@section('content-mhs')

    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <form method="post" action="/surat/updated/{{ $srt->id }}">
                    @csrf               <!-- {{ csrf_field() }} -->
                    @method('PUT')      <!-- {{ method_field('PUT') }} -->
                    <div class="row d-flex justify-content-center mt-5">
                    <div class="col-md-3">
                            <main class="form-signin">
                                <form>
                                    <h1 class="h1 mb-3 fw-normal d-flex justify-content-center">Detail Surat</h1>

                                    <div class="form-floating mb-2">
                                    <input type="text" class="form-control btn-black" name="tujuan_surat" id="floatingInput" value="{{ $srt->tujuan_surat }}">
                                    <label for="floatingInput">tujuan_surat</label>
                                    </div>

                                    <div class="form-floating mb-2">
                                    <input type="text" class="form-control btn-black" name="nim" id="floatingInput" value="{{ $srt->nim }}">
                                    <label for="floatingInput">Nim</label>
                                    </div>

                                    <div class="form-floating mb-2">
                                    <input type="text" class="form-control btn-black" name="nama" id="floatingInput" value="{{ $srt->nama }}">
                                    <label for="floatingInput">Nama</label>
                                    </div>

                                    <div class="form-floating mb-2">
                                    <input type="text" class="form-control btn-black" name="nama_mitra" id="floatingInput" value="{{ $srt->nama_mitra }}">
                                    <label for="floatingInput">Nama Mitra</label>
                                    </div>

                                    <div class="form-floating mb-2">
                                    <input type="text" class="form-control btn-black" name="alamat_mitra" id="floatingInput" value="{{ $srt->alamat_mitra }}">
                                    <label for="floatingInput">Alamat Mitra</label>
                                    </div>

                                    </div>
                                </div>
                                </form>

                </div>
            </div>
        </div>
    </div>

@endsection
