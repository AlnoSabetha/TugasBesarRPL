@extends('layouts.sb-mahasiswa')
@extends('layouts.app-mahasiswa')

@section('konten-mhs')
@section('content-mhs')

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
                                    <th>Jenis Surat</th>
                                    <th>Status</th>
                                    <th>Tanggal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($srt as $s)
                                <tr>
                                    <td>{{ $s->id }}</td>
                                    <td>{{ $s->no_surat }}</td>
                                    <td>{{ $s->jenis_surat }}</td>
                                    <td>{{ $s->status }}</td>
                                    <td>{{ $s->created_at }}</td>
                                    <td>@if($s->status == 'Disetujui')
                                        <a href="/surat/template/{{$s->id}}" class="btn btn-info"><img src="/img/logoprint.png" alt="Print" width="20" height="20"></a>
                                    @elseif ($s->status == 'Ditolak')
                                        <a href="/surat/edit/{{$s->id}}" class="btn btn-warning"><img src="/img/editicon.png" alt="Edit" width="20" height="20"></a>
                                        <a href="/surat/hapus/{{$s->id}}" class="btn btn-danger"><img src="/img/deleteicon.png" alt="Delete" width="20" height="20"></a>@endif</td>
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


