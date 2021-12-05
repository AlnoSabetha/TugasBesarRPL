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
                                    <h1 class="h1 mb-3 fw-normal d-flex justify-content-center">Edit Surat Keterangan</h1>

                                    <div class="form-floating mb-2">
                                    <input type="text" class="form-control btn-black" name="jabatan" id="floatingInput" value="{{ $srt->jabatan }}">
                                    <label for="floatingInput">Jabatan</label>
                                    </div>

                                    <div class="form-floating mb-2">
                                    <input type="text" class="form-control btn-black" name="periode" id="floatingInput" value="{{ $srt->periode }}">
                                    <label for="floatingInput">Periode</label>
                                    </div>

                                    <div class="form-floating mb-2">
                                    <input type="text" class="form-control btn-black" name="kota" id="floatingInput" value="{{ $srt->kota }}">
                                    <label for="floatingInput">Kota</label>
                                    </div>

                                    <div class="form-floating mb-2">
                                    <input type="date" class="form-control btn-black" name="tanggal" id="floatingInput" value="{{ $srt->tanggal }}">
                                    <label for="floatingInput">Tanggal</label>
                                    </div>

                                    <button class="w-100 btn btn-lg btn-success text-dark" type="submit" value="Simpan">Simpan</button>
                                    </div>
                                </div>
                                </form>

                </div>
            </div>
        </div>
    </div>

@endsection


