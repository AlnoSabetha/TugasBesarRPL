@extends('layouts.sidebar')
@extends('layouts.app')

@section('konten')
@section('content')

     <div class="">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="width: 95rem;">

                    <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Surat Masuk
                            </div>
                            <div class="card-body">
                                <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No Surat</th>
                                    <th>NIM</th>
                                    <th>Nama Pengirim</th>
                                    <th>Jenis Surat</th>
                                    <th>Tanggal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($srt as $s)
                                <tr>
                                    <td>{{ $s->id }}</td>
                                    <td>{{ $s->nim }}</td>
                                    <td>{{ $s->nama }}</td>
                                    <td>{{ $s->jenis_surat }}</td>
                                    <td>{{ $s->created_at }}</td>
                                    <td><a href="/surat/view/{{$s->id}}" class="btn btn-info"><img src="/img/view.png" alt="Print" width="25" height="20"></a>
                                        <a href="/surat/admin/setuju/{{$s->id}}" class="btn btn-success"><img src="/img/konfirm.png" alt="disetujui" height="20" width="20"></a>
                                        <a href="/surat/admin/tolak/{{$s->id}}" class="btn btn-danger"><img src="/img/rejected.png" alt="disetujui" height="20" width="20"></a></td>
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


