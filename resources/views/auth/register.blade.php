@extends('layouts.app')

@section('content')
<div class="kartu2">
    <div class="card-body">
        <h5 class="card-title mb-3">Register | SKCK</h5>
        <form action="{{ route('loadres') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Username</label>
                <input type="text" name="name" class="form-control" id="name"
                    placeholder="Username" autofocus>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email"
                    placeholder="Email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password"
                    placeholder="Password">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" id="password"
                    placeholder="Confirm Password">
            </div>
            <div class="mb-3">
                <p>Sudah punya akun? <a href="{{ route('login') }}" class="text-decoration-none">Log in!</a> </p>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-outline-light">Buat akun</button>
            </div>
        </form>
    </div>
</div>
@endsection