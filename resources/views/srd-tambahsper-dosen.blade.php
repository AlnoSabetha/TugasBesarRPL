@extends('layouts.app-dosen')

@section('content-dosen')

    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="width: 95rem;">

                    <div class="card-body">
                        <form action="/surat/dosen/simpansper" method="POST">
                            @csrf
                            <div class="row d-flex justify-content-center mt-5">
                            <div class="col-md-5">
                                    <main class="form-signin">
                                        <form>
                                            <h1 class="h1 mb-3 fw-normal d-flex justify-content-center">Buat Surat Permohonan</h1>

                                            <div class="form-floating mb-2">
                                            <input type="date" class="form-control btn-black" name="tgl_pembuatan" id="floatingInput">
                                            <label for="floatingInput">Tanggal Pembuatan</label>
                                            </div>

                                            <div class="form-floating mb-2">
                                            <input type="text" class="form-control btn-black" name="kepada" id="floatingInput">
                                            <label for="floatingInput">Kepada</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                            <input type="date" class="form-control btn-black" name="tgl_pelaksanaan" id="floatingInput">
                                            <label for="floatingInput">Tanggal Pelaksanaan</label>
                                            </div>

                                            <div class="form-floating mb-2">
                                            <input type="text-area" class="form-control btn-black" name="nama_kegiatan" id="floatingInput">
                                            <label for="floatingInput">Nama Kegiatan</label>
                                            </div>

                                            <div class="form-floating mb-2">
                                            <input type="text-area" class="form-control btn-black" name="tujuan" id="floatingInput">
                                            <label for="floatingInput">Tujuan</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                            <input type="text" class="form-control btn-black" name="waktu" id="floatingInput">
                                            <label for="floatingInput">Waktu</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                            <input type="text" class="form-control btn-black" name="tempat" id="floatingInput">
                                            <label for="floatingInput">Tempat</label>
                                            </div>

                                            <div class="form-floating mb-2">
                                            <input type="text-area" class="form-control btn-black" name="keperluan" id="floatingInput">
                                            <label for="floatingInput">Keperluan</label>
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


