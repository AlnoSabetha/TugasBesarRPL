@extends('layouts.sidebar')
@extends('layouts.app')

@section('konten')
@section('content')

    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        <div class="card-body">
                        <h1 align="center">Surat Masuk</h1>
                        <div class="container ">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No Surat</th>
                                    <th>Tujuan Surat</th>
                                    <th>Nama Mitra</th>
                                    <th>Alamat Mitra</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($srt as $s)
                                <tr>
                                    <td>{{ $s->id }}</td>
                                    <td>{{ $s->tujuan_surat }}</td>
                                    <td>{{ $s->nama_mitra }}</td>
                                    <td>{{ $s->alamat_mitra }}</td>
                                    <td>{{ $s->created_at }}</td>
                                    <td><a href="" class="btn btn-success"><img src="/img/konfirm.png" alt="disetujui" height="20" width="20"></a>
                                <a href="" class="btn btn-danger"><img src="/img/rejected.png" alt="disetujui" height="20" width="20"></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@endsection


