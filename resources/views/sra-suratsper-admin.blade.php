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
                                Surat Permohonan
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
                                @php $no=1; @endphp
                                @foreach($srt as $s)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $s->nim }}</td>
                                    <td>{{ $s->nama }}</td>
                                    <td>{{ $s->jenis_surat }}</td>
                                    <td>{{ $s->created_at }}</td>
                                    <td><a href="/suratsper/view/{{$s->id}}" class="btn btn-secondary"><img src="/img/view.png" alt="Print" width="25" height="20"></a></td>
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


