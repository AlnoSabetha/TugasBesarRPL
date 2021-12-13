@extends('layouts.app')

@section('content')

    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <form method="post" action="/suratsper/admin/setuju/{{$srt->id}}">
                    @csrf               <!-- {{ csrf_field() }} -->
                    @method('PUT')      <!-- {{ method_field('PUT') }} -->
                    <div class="row d-flex justify-content-center mt-5">
                    <div class="col-md-3">
                            <main class="form-signin">
                                <form>
                                    <h1 class="h1 mb-3 fw-normal d-flex justify-content-center">Detail Surat Permohonan</h1>

                                     <div class="form-floating mb-2">
                                            <input type="date" class="form-control btn-black" name="tgl_pembuatan" id="floatingInput" value="{{ $srt->tgl_pembuatan }}" readonly>
                                            <label for="floatingInput">Tanggal Pembuatan</label>
                                            </div>

                                            <div class="form-floating mb-2">
                                            <input type="text" class="form-control btn-black" name="kepada" id="floatingInput" value="{{ $srt->kepada }}" readonly>
                                            <label for="floatingInput">Kepada</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                            <input type="date" class="form-control btn-black" name="tgl_pelaksanaan" id="floatingInput" value="{{ $srt->tgl_pelaksanaan }}" readonly>
                                            <label for="floatingInput">Tanggal Pelaksanaan</label>
                                            </div>

                                            <div class="form-floating mb-2">
                                            <input type="text-area" class="form-control btn-black" name="nama_kegiatan" id="floatingInput" value="{{ $srt->nama_kegiatan }}" readonly>
                                            <label for="floatingInput">Nama Kegiatan</label>
                                            </div>

                                            <div class="form-floating mb-2">
                                            <input type="text-area" class="form-control btn-black" name="tujuan" id="floatingInput" value="{{ $srt->tujuan }}" readonly>
                                            <label for="floatingInput">Tujuan</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                            <input type="text" class="form-control btn-black" name="waktu" id="floatingInput" value="{{ $srt->waktu }}" readonly>
                                            <label for="floatingInput">Waktu</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                            <input type="text" class="form-control btn-black" name="tempat" id="floatingInput" value="{{ $srt->tempat }}" readonly>
                                            <label for="floatingInput">Tempat</label>
                                            </div>

                                            <div class="form-floating mb-2">
                                            <input type="text-area" class="form-control btn-black" name="keperluan" id="floatingInput" value="{{ $srt->keperluan }}" readonly>
                                            <label for="floatingInput">Keperluan</label>
                                            </div>

                                            <select class="form-select mb-3" name="ttd" id="ttd" aria-label="Default select example">
                                            <option selected>yang Bertandatangan</option>
                                            <option value="Ir. Henry Feriadi, M.Sc., Ph.D.">Ir. Henry Feriadi, M.Sc., Ph.D.</option>
                                            <option value="Restyandito, S.Kom, MSIS., Ph.D">Restyandito, S.Kom, MSIS., Ph.D</option>
                                            <option value="Drs. Jong Jek Siang, M.Sc.">Drs. Jong Jek Siang, M.Sc.</option>
                                            </select>
                                            <button class="btn btn-lg btn-primary btn-success text-dark" type="submit" value="Simpan"><img src="/img/konfirm.png" alt="disetujui" height="20" width="20"></button>
                                            <a href="/suratsper/admin/tolak/{{$srt->id}}" class="btn btn-danger"><img src="/img/rejected.png" alt="ditolak" height="34" width="25"></a>

                                </div>
                                </form>

                </div>
            </div>
        </div>
    </div>

@endsection


