@extends('layouts.app')

@section('content')

    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <form method="post" action="/surat/admin/setuju/{{$srt->id}}">
                    @csrf               <!-- {{ csrf_field() }} -->
                    @method('PUT')      <!-- {{ method_field('PUT') }} -->
                    <div class="row d-flex justify-content-center mt-5">
                    <div class="col-md-3">
                            <main class="form-signin">
                                <form>
                                    <h1 class="h1 mb-3 fw-normal d-flex justify-content-center">Detail Surat Tugas</h1>

                                    <div class="form-floating mb-2">
                                    <input type="text" class="form-control btn-black" readonly name="tujuan_surat" id="floatingInput" value="{{ $srt->tujuan_surat }}">
                                    <label for="floatingInput">tujuan_surat</label>
                                    </div>

                                    <div class="form-floating mb-2">
                                    <input type="text" class="form-control btn-black" readonly name="nim" id="floatingInput" value="{{ $srt->nim }}">
                                    <label for="floatingInput">Nim</label>
                                    </div>

                                    <div class="form-floating mb-2">
                                    <input type="text" class="form-control btn-black" readonly name="nama" id="floatingInput" value="{{ $srt->nama }}">
                                    <label for="floatingInput">Nama</label>
                                    </div>

                                    <div class="form-floating mb-2">
                                    <input type="text" class="form-control btn-black" readonly name="nama_mitra" id="floatingInput" value="{{ $srt->nama_mitra }}">
                                    <label for="floatingInput">Nama Mitra</label>
                                    </div>

                                    <div class="form-floating mb-2">
                                    <input type="text" class="form-control btn-black" readonly name="alamat_mitra" id="floatingInput" value="{{ $srt->alamat_mitra }}">
                                    <label for="floatingInput">Alamat Mitra</label>
                                    </div>

                                    @if($srt->nama != 'admin')
                                    <select class="form-select mb-3" name="ttd" id="ttd" aria-label="Default select example">
                                    <option selected>yang Bertandatangan</option>
                                    <option value="Ir. Henry Feriadi, M.Sc., Ph.D.">Ir. Henry Feriadi, M.Sc., Ph.D.</option>
                                    <option value="Restyandito, S.Kom, MSIS., Ph.D">Restyandito, S.Kom, MSIS., Ph.D</option>
                                    <option value="Drs. Jong Jek Siang, M.Sc.">Drs. Jong Jek Siang, M.Sc.</option>
                                    </select>@endif
                                    @if($srt->nama != 'admin')
                                     <button class="btn btn-lg btn-primary btn-success text-dark" type="submit" value="Simpan"><img src="/img/konfirm.png" alt="disetujui" height="20" width="20"></button>
                                    <a href="/surat/admin/tolak/{{$srt->id}}" class="btn btn-danger"><img src="/img/rejected.png" alt="ditolak" height="34" width="25"></a>
                                    @elseif($srt->nama == 'admin')
                                    <a href="/surat/admin/template/{{$srt->id}}" class="btn btn-info"><img src="/img/logoprint.png" alt="Print" width="34" height="25"></a>@endif
                                </div>
                                </form>

                </div>
            </div>
        </div>
    </div>

@endsection
