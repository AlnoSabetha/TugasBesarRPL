@extends('layouts.sb-dosen')
@extends('layouts.app-dosen')

@section('konten-dosen')
@section('content-dosen')

    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="width: 95rem;">

                    <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Surat Keterangan
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
                                @php $no=1; @endphp
                                @foreach($srt as $s)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $s->no_surat }}</td>
                                    <td>{{ $s->jenis_surat }}</td>
                                    <td>{{ $s->status }}</td>
                                    <td>{{ $s->created_at }}</td>
                                    <td>@if($s->status == 'disetujui')
                                        <a href="/surat/dosen/templateket/{{$s->id}}" class="btn btn-info"><img src="/img/logoprint.png" alt="Print" width="20" height="20"></a>
                                    @elseif ($s->status == 'ditolak')
                                        <a href="/surat/dosen/editket/{{$s->id}}" class="btn btn-warning"><img src="/img/editicon.png" alt="Edit" width="20" height="20"></a>@endif</td>
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


