@extends('layouts.sb-mahasiswa')
@extends('layouts.app-mahasiswa')

@section('konten-mhs')
@section('content')

    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        <h1 align="center">Surat Masuk</h1>
                        <div class="">
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
                                    <td><a href="/surat/template/{{$s->id}}" class="btn btn-info"><img src="/img/logoprint.png" alt="View Surat" width="30" height="20" ></a>
                                    <a href="/surat/edit/{{$s->id}}" class="btn btn-warning">Edit</a>
                                    <a href="/surat/hapus/{{$s->id}}" class="btn btn-danger">Delete</a></td>
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

@endsection
@endsection


