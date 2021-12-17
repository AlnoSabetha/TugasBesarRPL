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
                                            <h1 class="h1 mb-3 fw-normal d-flex justify-content-center">Buat Surat Tugas</h1>

                                            <div class="form-floating mb-2">
                                            <input type="text" class="form-control btn-black" name="tujuan_surat" id="floatingInput">
                                            <label for="floatingInput">Tujuan Surat</label>
                                            </div>


                                            <div class="form-floating mb-2">
                                            <input type="text" class="form-control btn-black" name="nama_mitra" id="floatingInput">
                                            <label for="floatingInput">Nama Mitra</label>
                                            </div>

                                            <div class="form-floating mb-2">
                                            <input type="text" class="form-control btn-black" name="alamat_mitra" id="floatingInput">
                                            <label for="floatingInput">Alamat Mitra</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                            <input type="text" class="form-control btn-black" name="keterangan" id="floatingInput">
                                            <label for="floatingInput">Keterangan</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                            <input type="date" class="form-control btn-black" name="tanggal_pelaksanaan" id="floatingInput">
                                            <label for="floatingInput">Tanggal Pelaksanaan</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                            <input type="text" class="form-control btn-black" name="tempat" id="floatingInput">
                                            <label for="floatingInput">Tempat</label>
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


