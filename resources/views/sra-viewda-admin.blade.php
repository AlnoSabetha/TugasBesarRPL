@extends('layouts.app')

@section('content')

    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <form method="post" action="/suratkept/admin/setuju/{{$srt->id}}">
                    @csrf               <!-- {{ csrf_field() }} -->
                    @method('PUT')      <!-- {{ method_field('PUT') }} -->
                    <div class="row d-flex justify-content-center mt-5">
                    <div class="col-md-3">
                            <main class="form-signin">
                                <form>
                                    <h1 class="h1 mb-3 fw-normal d-flex justify-content-center">Detail Daftar Hadir</h1>

                                   <div class="form-floating mb-2">
                                            <input type="text" class="form-control btn-black" name="nama_kegiatan" id="floatingInput" value="{{$srt->nama_kegiatan}}" readonly>
                                            <label for="floatingInput">Nama Kegiatan</label>
                                            </div>

                                            <div class="form-floating mb-2">
                                            <input type="date" class="form-control btn-black" name="tanggal_pelaksanaan" id="floatingInput" value="{{$srt->tanggal_pelaksanaan}}" readonly>
                                            <label for="floatingInput">Tanggal</label>
                                            </div>

                                            <div class="form-floating mb-2">
                                            <input type="text" class="form-control btn-black" name="waktu" id="floatingInput" value="{{$srt->waktu}}" readonly>
                                            <label for="floatingInput">Waktu</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                            <input type="text" class="form-control btn-black" name="tempat" id="floatingInput" value="{{$srt->tempat}}" readonly>
                                            <label for="floatingInput">Tempat</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                            <input type="text" class="form-control btn-black" name="pembicara" id="floatingInput" value="{{$srt->pembicara}}" readonly>
                                            <label for="floatingInput">Pembicara</label>
                                            </div>

                                            <a href="/surat/admin/templateda/{{$srt->id}}" class="btn btn-info"><img src="/img/logoprint.png" alt="Print" width="34" height="25"></a>
                                </div>
                                </form>

                </div>
            </div>
        </div>
    </div>

@endsection


