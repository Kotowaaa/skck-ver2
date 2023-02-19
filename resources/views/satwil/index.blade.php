@extends('layouts.home')

@section('content')
<div class="text">
    <h1 class="m-3 fw-bold text-white">
        Data Satwil
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
            List | Data Satwil
        </h2>
        <div class="table-responsive">
            <table class="table table-striped nowrap text-white">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Satuan Wilayah</th>
                        <th>Polres</th>
                        <th>Polsek</th>
                        <th>Alamat</th>
                        <th>RT</th>
                        <th>RW</th>
                        <th>Provinsi</th>
                        <th>Kecamatan</th>
                        <th>Kabupaten</th>
                        <th>Kelurahan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($satwils as $i => $satwil)
                        <td class="text-white">{{ ++$i }}</td>
                        <td class="text-white">{{ $satwil->satwil }}</td>
                        <td class="text-white">{{ $satwil->polres->name }}</td>
                        <td class="text-white">{{ $satwil->polsek }}</td>
                        <td class="text-white">{{ $satwil->alamat }}</td>
                        <td class="text-white">{{ $satwil->rt }}</td>
                        <td class="text-white">{{ $satwil->rw }}</td>
                        <td class="text-white">{{ $satwil->provinsi->name }}</td>
                        <td class="text-white">{{ $satwil->kecamatan->name }}</td>
                        <td class="text-white">{{ $satwil->kabupaten->name }}</td>
                        <td class="text-white">{{ $satwil->kelurahan->name }}</td>
                        <td>
                            <a href="{{ route('edit', $satwil->id) }}"
                                class="btn btn-warning text-white btn-sm mb-3">Edit</a>
                            <form action="{{ route('destroy', $satwil->id) }}" method="post">
                                @csrf
                                <button type="submit" onclick="return confirm('Apakah Yakin?')"
                                    class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $satwils->links("pagination::bootstrap-5") }}
        </div>
    </div>
</div>
@endsection
