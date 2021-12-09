@extends('layouts.app-dosen')

@section('content-dosen')

    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <form method="post" action="/surat/dosen/updatedsper/{{ $srt->id }}">
                    @csrf               <!-- {{ csrf_field() }} -->
                    @method('PUT')      <!-- {{ method_field('PUT') }} -->
                    <div class="row d-flex justify-content-center mt-5">
                    <div class="col-md-3">
                            <main class="form-signin">
                                <form>
                                    <h1 class="h1 mb-3 fw-normal d-flex justify-content-center">Edit Surat Permohonan</h1>

                                     <div class="form-floating mb-2">
                                            <input type="date" class="form-control btn-black" name="tgl_pembuatan" id="floatingInput" value="{{ $srt->tgl_pembuatan }}">
                                            <label for="floatingInput">Tanggal Pembuatan</label>
                                            </div>

                                            <div class="form-floating mb-2">
                                            <input type="text" class="form-control btn-black" name="kepada" id="floatingInput" value="{{ $srt->kepada }}">
                                            <label for="floatingInput">Kepada</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                            <input type="date" class="form-control btn-black" name="tgl_pelaksanaan" id="floatingInput" value="{{ $srt->tgl_pelaksanaan }}">
                                            <label for="floatingInput">Tanggal Pelaksanaan</label>
                                            </div>

                                            <div class="form-floating mb-2">
                                            <input type="text-area" class="form-control btn-black" name="nama_kegiatan" id="floatingInput" value="{{ $srt->nama_kegiatan }}">
                                            <label for="floatingInput">Nama Kegiatan</label>
                                            </div>

                                            <div class="form-floating mb-2">
                                            <input type="text-area" class="form-control btn-black" name="tujuan" id="floatingInput" value="{{ $srt->tujuan }}">
                                            <label for="floatingInput">Tujuan</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                            <input type="text" class="form-control btn-black" name="waktu" id="floatingInput" value="{{ $srt->waktu }}">
                                            <label for="floatingInput">Waktu</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                            <input type="text" class="form-control btn-black" name="tempat" id="floatingInput" value="{{ $srt->tempat }}">
                                            <label for="floatingInput">Tempat</label>
                                            </div>

                                            <div class="form-floating mb-2">
                                            <input type="text-area" class="form-control btn-black" name="keperluan" id="floatingInput" value="{{ $srt->keperluan }}">
                                            <label for="floatingInput">Keperluan</label>
                                            </div>


                                            <button class="w-100 btn btn-lg btn-primary btn-success text-dark" type="submit" value="Simpan">Kirim</button>
                                </div>
                                </form>

                </div>
            </div>
        </div>
    </div>

@endsection


