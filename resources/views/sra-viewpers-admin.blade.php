@extends('layouts.app')

@section('content')

    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <form method="post" action="/suratket/admin/setuju/{{$srt->id}}">
                    @csrf               <!-- {{ csrf_field() }} -->
                    @method('PUT')      <!-- {{ method_field('PUT') }} -->
                    <div class="row d-flex justify-content-center mt-5">
                    <div class="col-md-3">
                            <main class="form-signin">
                                <form>
                                    <h1 class="h1 mb-3 fw-normal d-flex justify-content-center">Detail Surat Keterangan</h1>

                                    <div class="form-floating mb-2">
                                            <input type="text" class="form-control btn-black" name="tujuan" id="floatingInput" value="{{$srt->tujuan}}" readonly>
                                            <label for="floatingInput">Tujuan</label>
                                            </div>

                                            <div class="form-floating mb-2">
                                            <input type="text" class="form-control btn-black" name="kepada" id="floatingInput" value="{{$srt->kepada}}" readonly>
                                            <label for="floatingInput">Kepada</label>
                                            </div>

                                            <div class="form-floating mb-2">
                                            <input type="text" class="form-control btn-black" name="nama_mitra" id="floatingInput" value="{{$srt->nama_mitra}}" readonly>
                                            <label for="floatingInput">Nama Mitra</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                            <input type="text" class="form-control btn-black" name="keperluan" id="floatingInput" value="{{$srt->keperluan}}" readonly>
                                            <label for="floatingInput">Keperluan</label>
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
                                            <a href="/suratket/admin/tolak/{{$srt->id}}" class="btn btn-danger"><img src="/img/rejected.png" alt="ditolak" height="34" width="25"></a>
                                            @elseif($srt->nama == 'admin')
                                            <a href="/surat/admin/templatepers/{{$srt->id}}" class="btn btn-info"><img src="/img/logoprint.png" alt="Print" width="34" height="25"></a>@endif

                                    </div>
                                </div>
                                </form>

                </div>
            </div>
        </div>
    </div>

@endsection


