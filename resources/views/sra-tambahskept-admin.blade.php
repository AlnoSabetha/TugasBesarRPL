@extends('layouts.app-mahasiswa')

@section('content-mhs')

    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="width: 95rem;">

                    <div class="card-body">
                        <form action="/surat/admin/simpanskept" method="POST">
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
                                            <input type="textarea" class="form-control btn-black" name="menimbang" id="floatingInput">
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

                                            <select class="form-select mb-3" name="ttd" id="ttd" aria-label="Default select example">
                                            <option selected>yang Bertandatangan</option>
                                            <option value="Ir. Henry Feriadi, M.Sc., Ph.D.">Ir. Henry Feriadi, M.Sc., Ph.D.</option>
                                            <option value="Restyandito, S.Kom, MSIS., Ph.D">Restyandito, S.Kom, MSIS., Ph.D</option>
                                            <option value="Drs. Jong Jek Siang, M.Sc.">Drs. Jong Jek Siang, M.Sc.</option>
                                            </select>


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


