@extends('layouts.sb-mahasiswa')
@extends('layouts.app-mahasiswa')

@section('konten-mhs')
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
                                <table id="datatablesSimple">
                                    <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No Surat</th>
                                    <th>Status</th>
                                    <th>Keterangan</th>
                                    <th>Tanggal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($srt as $s)
                                <tr>
                                    <td>{{ $s->id }}</td>
                                    <td>{{ $s->no_surat }}</td>
                                    <td>{{ $s->status }}</td>
                                    <td>{{ $s->keterangan }}</td>
                                    <td>{{ $s->created_at }}</td>
                                    <td><a href="/surat/template/{{$s->id}}" class="btn btn-info"><img src="/img/logoprint.png" alt="Print" width="20" height="20"></a></td>
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


