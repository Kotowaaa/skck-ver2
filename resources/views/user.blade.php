@extends('layouts.home')

@section('content')

@if ($message = Session::get('sukses'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ $message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="card mt-5">
    <div class="card-header">
        Selamat datang, {{ auth()->user()->name }}
    </div>
    <div class="card-body">
        <h5 class="card-title px-3">Apakah ada yang bisa kami bantu?</h5>
        <h5 class="px-5">Silahkan mengisikan data-data yang <br> diperlukan untuk membuat surat SKCK</h5>
        <a href="{{ route('creates') }}" class="btn btn-primary">Go</a>
    </div>
</div>

@endsection
