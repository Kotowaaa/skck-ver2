@extends('layouts.home')

@section('content')
<div class="text">
    <h1 class="m-3 fw-bold text-white">
        Data SKCK
    </h1>
</div>

<div class="card bg-dark row h-auto">
    <div class="card-body col">
        <h2 class="text-white fw-bold mb-2 mt-2"> 
            List | SKCK
        </h2>
    <div class="table-responsive">
        <table class="table table-striped nowrap text-white">
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
                        <a href="{{ route('editSKCK', $skck) }}" class="btn btn-warning text-white btn-sm mb-3">Edit</a>
                        <a href="" class="btn btn-danger btn-sm">Hapus!</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
        <nav class="float-end" aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</div>
@endsection
