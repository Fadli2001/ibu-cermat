@extends('layouts.app')

@section('title', '404 Not Found')

@section('content')
<div class="d-flex align-items-center justify-content-center vh-100">
    <div class="text-center p-4">
        <h1 class="display-4" style="color: #7d3c98;">404</h1>
        <p class="lead">Halaman yang Anda cari tidak ditemukan.</p>
        <img src="{{ asset('images/not-found.png') }}" alt="Logo" class="img-fluid" style="max-width: 400px;">
        <br>
        <a href="{{ route('consent') }}" class="btn btn-dark text-light mt-3">Kembali</a>
    </div>
</div>
@endsection
