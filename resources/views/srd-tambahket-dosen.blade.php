@extends('layouts.app-dosen')

@section('content-dosen')

    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="width: 95rem;">

                    <div class="card-body">
                        <form action="/surat/dosen/simpanket" method="POST">
                            @csrf
                            <div class="row d-flex justify-content-center mt-5">
                            <div class="col-md-5">
                                    <main class="form-signin">
                                        <form>
                                            <h1 class="h1 mb-3 fw-normal d-flex justify-content-center">Buat Surat Keterangan</h1>


                                            <div class="form-floating mb-2">
                                            <input type="text" class="form-control btn-black" name="jabatan" id="floatingInput">
                                            <label for="floatingInput">Jabatan</label>
                                            </div>

                                            <div class="form-floating mb-2">
                                            <input type="text" class="form-control btn-black" name="periode" id="floatingInput">
                                            <label for="floatingInput">Periode</label>
                                            </div>

                                            <div class="form-floating mb-2">
                                            <input type="text" class="form-control btn-black" name="kota" id="floatingInput">
                                            <label for="floatingInput">Kota</label>
                                            </div>

                                            <div class="form-floating mb-2">
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


