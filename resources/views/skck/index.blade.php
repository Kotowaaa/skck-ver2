@extends('layouts.home')

@section('content')
<div class="text">
    <h1 class="m-3 fw-bold text-white">
        Data SKCK
    </h1>
</div>

@if ($message = Session::get('sukses'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ $message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="card bg-dark mb-5 mt-2">
    <div class="card-body">
        <h2 class="text-white fw-bold mb-2 mt-2"> 
            List | SKCK
        </h2>
    <div class="table-responsive">
        <table class="table table-hover table-striped nowrap text-white">
            <thead>
                <tr>
                    <th>#</th>
                    <th>No SKCK</th>
                    <th>No Ktp</th>
                    <th>Keperluan</th>
                    <th>Dibuat Tanggal</th>
                    <th>Sampai Tangal</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($skcks as $i => $skck)
                    <td class="text-white">{{ ++$i }}</td>
                    <td class="text-white">{{ $skck->no_skck }}</td>
                    <td class="text-white">{{ $skck->no_ktp }}</td>
                    <td class="text-white">{{ $skck->keperluan }}</td>
                    <td class="text-white">{{ $skck->dibuat_tanggal }}</td>
                    <td class="text-white">{{ $skck->sampai_tanggal }}</td>
                    <td>
                        <a href="{{ route('editSkck', $skck->id) }}" class="btn btn-warning text-white btn-sm mb-3">Edit</a>
                        <form action="{{ route('destroySkck', $skck->id) }}" method="post">
                            @csrf
                            <button type="submit" onclick="return confirm('Apakah Yakin?')" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $skcks->links("pagination::bootstrap-5") }}
    </div>

    </div>
</div>
@endsection
