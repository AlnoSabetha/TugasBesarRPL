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
                                            <h1 class="h1 mb-3 fw-normal d-flex justify-content-center">Buat Surat Keputusan</h1>

                                            <div class="form-floating mb-2">
                                            <input type="textarea" class="form-control btn-black" name="tujuan" id="floatingInput">
                                            <label for="floatingInput">Tujuan</label>
                                            </div>

                                            <div class="form-floating mb-2">
                                            <input type="textarea" class="form-control btn-black" name="membimbimbing" id="floatingInput">
                                            <label for="floatingInput">Membimbing</label>
                                            </div>

                                            <div class="form-floating mb-2">
                                            <input type="textarea" class="form-control btn-black" name="mengingat" id="floatingInput">
                                            <label for="floatingInput">Mengingat</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                            <input type="textarea" class="form-control btn-black" name="menetapkan" id="floatingInput">
                                            <label for="floatingInput">Menetapkan</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                            <input type="textarea" class="form-control btn-black" name="kota" id="floatingInput">
                                            <label for="floatingInput">Kota</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                            <input type="date" class="form-control btn-black" name="tanggal" id="floatingInput">
                                            <label for="floatingInput">Tanggal</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                            <input type="text" class="form-control btn-black" name=" nameygtdd " id="floatingInput">
                                            <label for="floatingInput">Nama Penandatanganan</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                            <input type="text" class="form-control btn-black" name=" nik " id="floatingInput">
                                            <label for="floatingInput">Nik</label>
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


