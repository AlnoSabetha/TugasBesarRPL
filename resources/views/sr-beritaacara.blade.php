@extends('layouts.app-mahasiswa')

@section('content-mhs')

    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="width: 95rem;">

                    <div class="card-body">
                        <form action="/surat/simpan" method="POST">
                            @csrf
                            <div class="row d-flex justify-content-center mt-5">
                            <div class="col-md-5">
                                    <main class="form-signin">
                                        <form>
                                            <h1 class="h1 mb-3 fw-normal d-flex justify-content-center">Buat Surat Berita Acara</h1>

                                            <div class="form-floating mb-2">
                                            <input type="text" class="form-control btn-black" name="tujuan" id="floatingInput">
                                            <label for="floatingInput">Tujuan</label>
                                            </div>

                                            <div class="form-floating mb-2">
                                            <input type="text" class="form-control btn-black" name="namaacara" id="floatingInput">
                                            <label for="floatingInput">Nama Acara</label>
                                            </div>

                                            <div class="form-floating mb-2">
                                            <input type="text" class="form-control btn-black" name="tempat" id="floatingInput">
                                            <label for="floatingInput">Tempat</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                            <input type="text" class="form-control btn-black" name="pembicara" id="floatingInput">
                                            <label for="floatingInput">Pembicara</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                            <input type="text" class="form-control btn-black" name="namamitra" id="floatingInput">
                                            <label for="floatingInput">Nama Mitra</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                            <input type="text" class="form-control btn-black" name="namepengurusmitra" id="floatingInput">
                                            <label for="floatingInput">Nama Pengurus Mitra</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                            <input type="date" class="form-control btn-black" name="tanggal" id="floatingInput">
                                            <label for="floatingInput">Tanggal</label>
                                            </div>

                                            <button class="w-100 btn btn-lg btn-primary btn-success text-dark" type="submit" value="Simpan">Kirim</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


