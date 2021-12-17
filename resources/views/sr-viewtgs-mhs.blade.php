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
                                    <h1 class="h1 mb-3 fw-normal d-flex justify-content-center">Detail Surat Tugas</h1>

                                    <div class="form-floating mb-2">
                                    <input type="text" class="form-control btn-black" name="tujuan_surat" id="floatingInput" value="{{ $srt->tujuan_surat }}" readonly>
                                    <label for="floatingInput">Tujuan Surat</label>
                                    </div>

                                    <div class="form-floating mb-2">
                                    <input type="text" class="form-control btn-black" name="nama_mitra" id="floatingInput" value="{{ $srt->nama_mitra }}" readonly>
                                    <label for="floatingInput">Nama Mitra</label>
                                    </div>

                                    <div class="form-floating mb-2">
                                    <input type="text" class="form-control btn-black" name="alamat_mitra" id="floatingInput" value="{{ $srt->alamat_mitra }}" readonly>
                                    <label for="floatingInput">Alamat Mitra</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                    <input type="date" class="form-control btn-black" name="tgl_pelaksanaan" id="floatingInput" value="{{ $srt->tgl_pelaksanaan }}" readonly>
                                    <label for="floatingInput">Tanggal Pelaksanaan</label>
                                    </div>

                                    <div class="form-floating mb-2">
                                    <input type="text" class="form-control btn-black" name="keterangan" id="floatingInput" value="{{ $srt->keterangan }}" readonly>
                                    <label for="floatingInput">Keterangan</label>
                                    </div>

                                    </div>
                                </div>
                                </form>

                </div>
            </div>
        </div>
    </div>

@endsection


