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
                                    <h1 class="h1 mb-3 fw-normal d-flex justify-content-center">Detail Surat Keputusan</h1>

                                    <div class="form-floating mb-2">
                                            <input type="textarea" class="form-control btn-black" name="tujuan" id="floatingInput" value="{{$srt->tujuan}}" readonly>
                                            <label for="floatingInput">Tujuan</label>
                                            </div>

                                            <div class="form-floating mb-2">
                                            <input type="textarea" class="form-control btn-black" name="membimbing" id="floatingInput" value="{{$srt->membimbing}}" readonly>
                                            <label for="floatingInput">Membimbing</label>
                                            </div>

                                            <div class="form-floating mb-2">
                                            <input type="textarea" class="form-control btn-black" name="mengingat" id="floatingInput" value="{{$srt->mengingat}}" readonly>
                                            <label for="floatingInput">Mengingat</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                            <input type="textarea" class="form-control btn-black" name="menetapkan" id="floatingInput" value="{{$srt->menetapkan}}" readonly>
                                            <label for="floatingInput">Menetapkan</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                            <input type="textarea" class="form-control btn-black" name="kota" id="floatingInput" value="{{$srt->kota}}" readonly>
                                            <label for="floatingInput">Kota</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                            <input type="date" class="form-control btn-black" name="tanggal" id="floatingInput" value="{{$srt->tanggal}}" readonly>
                                            <label for="floatingInput">Tanggal</label>
                                            </div>

                                            <a href="/surat/admin/templateskept/{{$srt->id}}" class="btn btn-info"><img src="/img/logoprint.png" alt="Print" width="34" height="25"></a>
                                </div>
                                </form>

                </div>
            </div>
        </div>
    </div>

@endsection


