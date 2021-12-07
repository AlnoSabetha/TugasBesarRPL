@extends('layouts.app-mahasiswa')

@section('content-mhs')

    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <form method="post" action="/surat/updated/{{ $srt->id }}">
                    @csrf               <!-- {{ csrf_field() }} -->
                    @method('PUT')      <!-- {{ method_field('PUT') }} -->
                    <div class="row d-flex justify-content-center mt-5">
                    <div class="col-md-3">
                            <main class="form-signin">
                                <form>
                                    <h1 class="h1 mb-3 fw-normal d-flex justify-content-center">Detail Surat</h1>

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

                                    <div class="fluid">
                                        <div class="btn-group">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            yang Bertandatangan
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Ir. Henry Feriadi, M.Sc., Ph.D.</a>
                                            <a class="dropdown-item" href="#">Restyandito, S.Kom, MSIS., Ph.D</a>
                                            <a class="dropdown-item" href="#">Drs. Jong Jek Siang, M.Sc.</a>
                                            <a class="dropdown-item" href="#">Drs. Wimmie Handiwidjojo, MIT.</a>
                                            <a class="dropdown-item" href="#">Katon Wijana, S.Kom, M.T.</a>
                                            <a class="dropdown-item" href="#">Yetli Oslan, S.Kom, M.T.</a>
                                        </div>
                                        </div>
                                    <a href="/surat/admin/setuju/{{$srt->id}}" class="btn btn-success"><img src="/img/konfirm.png" alt="disetujui" height="20" width="20"></a>
                                    <a href="/surat/admin/tolak/{{$srt->id}}" class="btn btn-danger"><img src="/img/rejected.png" alt="disetujui" height="20" width="20"></a></td>
                                    </div>

                                    </div>
                                </div>
                                </form>

                </div>
            </div>
        </div>
    </div>

@endsection
