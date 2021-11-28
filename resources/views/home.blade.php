@extends('layouts.app')

@section('content')
<div class="container">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        @if(Auth()->user()->role == 'admin')
        <li class="nav-item">
            <h1 align="center"><a class="nav-link" href="{{url('admin')}}">Mari Mulai</a></h1>
        </li>
        @elseif(Auth()->user()->role == 'dosen')
        <li class="nav-item">
            <h1 align="center"><a class="nav-link" href="{{url('dosen')}}">Mari Mulai</a></h1>
        </li>
        @elseif(Auth()->user()->role == 'mahasiswa')
        <li class="nav-item">
            <h1 align="center"><a class="nav-link" href="{{url('mahasiswa')}}">Mari Mulai</a></h1>
        </li>
        @endif
    </ul>
</div>
@endsection
