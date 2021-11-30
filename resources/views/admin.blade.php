@extends('layouts.sidebar')
@extends('layouts.app')

@section('konten')
@section('content')

<div class="">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="width: 95rem;">

<div class="layoutSidenav">
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Atur surat anda dengan lebih mudah</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Surat Masuk</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Surat Keluar</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Arsip</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                    <td><a href="/surat/view/{{$s->id}}" class="btn btn-info"><img src="/img/view.png" alt="Print" width="25" height="20"></a>
                                        <a href="/surat/admin/setuju/{{$s->id}}" class="btn btn-success"><img src="/img/konfirm.png" alt="disetujui" height="20" width="20"></a>
                                        <a href="/surat/admin/tolak/{{$s->id}}" class="btn btn-danger"><img src="/img/rejected.png" alt="disetolak" height="20" width="20"></a></td>
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
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Made with ❤️ by Us</div>
                        </div>
                    </div>
                </footer>
            </div>
</div>

                </div>
            </div>
        </div>
    </div>

@endsection
@endsection
