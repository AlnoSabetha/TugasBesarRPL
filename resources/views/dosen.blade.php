@extends('layouts.sb-dosen')
@extends('layouts.app-dosen')

@section('konten-dosen')
@section('content-dosen')

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
                                                        <div class="card-body">Surat Tugas</div>
                                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                                            <a class="small text-white stretched-link" href="/surat/dosen">View Details</a>
                                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-md-6">
                                                    <div class="card bg-warning text-white mb-4">
                                                        <div class="card-body">Surat Keterangan</div>
                                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                                            <a class="small text-white stretched-link" href="/suratket/dosen">View Details</a>
                                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-md-6">
                                                    <div class="card bg-success text-white mb-4">
                                                        <div class="card-body">Surat Berita Acara</div>
                                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                                            <a class="small text-white stretched-link" href="/suratba/dosen">View Details</a>
                                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-md-6">
                                                    <div class="card bg-danger text-white mb-4">
                                                        <div class="card-body">Surat Permohonan</div>
                                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                                            <a class="small text-white stretched-link" href="/suratmohon/dosen">View Details</a>
                                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </main>
                                </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
@endsection
