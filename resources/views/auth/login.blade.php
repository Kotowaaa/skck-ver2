@extends('layouts.app')

@section('content')
<div class="kartu">
    <div class="card-body">
        <h5 class="card-title mb-3">Login | SKCK</h5>
        <form action="{{ route('loading') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Username</label>
                <input type="text" name="name" class="form-control" id="name"
                    placeholder="Username" autofocus>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password"
                    placeholder="Password">
            </div>
            <div class="mb-3">
                <p>Belum punya akun? <a href="{{ route('register') }}" class="text-decoration-none">Buat akun!</a> </p>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-outline-light">Login</button>
            </div>
        </form>
    </div>
</div>
@endsection