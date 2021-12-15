@extends('layouts.sb-mahasiswa')
@extends('layouts.app-mahasiswa')

@section('konten-mhs')
@section('content-mhs')

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
                                                        <div class="card-body">Surat Tugas <br>Jumlah Surat : {{ $count }}</div>
                                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                                            <a class="small text-white stretched-link" href="/surat">View Details</a>
                                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-md-6">
                                                    <div class="card bg-warning text-white mb-4">
                                                        <div class="card-body">Surat Keterangan <br>Jumlah Surat : {{ $count2 }}</div>
                                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                                            <a class="small text-white stretched-link" href="/suratket">View Details</a>
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
