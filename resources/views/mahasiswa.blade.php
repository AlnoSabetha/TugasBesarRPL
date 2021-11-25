@extends('layouts.sb-mahasiswa')
@extends('layouts.app-mahasiswa')

@section('konten-mhs')
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
                            <li class="breadcrumb-item active">Dashboard</li>
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
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                <tr>
                                    <th>No Surat</th>
                                    <th>Tujuan Surat</th>
                                    <th>Nama Mitra</th>
                                    <th>Alamat Mitra</th>
                                    <th>Tanggal</th>
                                    <th>Action</th>
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
                                    <td><a href="/surat/template/{{$s->id}}" class="btn btn-info"><img src="/img/logoprint.png" alt="Print" width="20" height="20"></a>
                                    <a href="/surat/edit/{{$s->id}}" class="btn btn-warning"><img src="/img/editicon.png" alt="Edit" width="20" height="20"></a>
                                    <a href="/surat/hapus/{{$s->id}}" class="btn btn-danger"><img src="/img/deleteicon.png" alt="Delete" width="20" height="20"></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                                </table>
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
