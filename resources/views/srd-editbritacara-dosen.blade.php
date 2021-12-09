@extends('layouts.app-dosen')

@section('content-dosen')

    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <form method="post" action="/surat/dosen/updatedba/{{ $srt->id }}">
                    @csrf               <!-- {{ csrf_field() }} -->
                    @method('PUT')      <!-- {{ method_field('PUT') }} -->
                    <div class="row d-flex justify-content-center mt-5">
                    <div class="col-md-3">
                            <main class="form-signin">
                                <form>
                                    <h1 class="h1 mb-3 fw-normal d-flex justify-content-center">Edit Surat Berita Acara</h1>

                                    <div class="form-floating mb-2">
                                            <input type="text" class="form-control btn-black" name="tujuan" id="floatingInput" value="{{ $srt->tujuan }}">
                                            <label for="floatingInput">Tujuan</label>
                                            </div>

                                            <div class="form-floating mb-2">
                                            <input type="text" class="form-control btn-black" name="nama_acara" id="floatingInput" value="{{ $srt->nama_acara }}">
                                            <label for="floatingInput">Nama Acara</label>
                                            </div>

                                            <div class="form-floating mb-2">
                                            <input type="text" class="form-control btn-black" name="tempat" id="floatingInput" value="{{ $srt->tempat }}">
                                            <label for="floatingInput">Tempat</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                            <input type="text" class="form-control btn-black" name="pembicara" id="floatingInput" value="{{ $srt->pembicara }}">
                                            <label for="floatingInput">Pembicara</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                            <input type="text" class="form-control btn-black" name="nama_mitra" id="floatingInput" value="{{ $srt->nama_mitra }}">
                                            <label for="floatingInput">Nama Mitra</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                            <input type="text" class="form-control btn-black" name="nama_p_mitra" id="floatingInput" value="{{ $srt->nama_p_mitra }}">
                                            <label for="floatingInput">Nama Pengurus Mitra</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                            <input type="date" class="form-control btn-black" name="tanggal" id="floatingInput" value="{{ $srt->tanggal }}">
                                            <label for="floatingInput">Tanggal</label>
                                            </div>

                                            <button class="w-100 btn btn-lg btn-primary btn-success text-dark" type="submit" value="Simpan">Kirim</button>
                                </div>
                                </form>

                </div>
            </div>
        </div>
    </div>

@endsection


