@extends('layouts.home')

@section('content')
<div class="text">
    <h1 class="m-3 fw-bold text-white">
        Data Ibu
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
            List | Data Ibu
        </h2>
    <div class="table-responsive">
        <table class="table table-striped nowrap text-white">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Lengkap</th>
                    <th>Umur</th>
                    <th>Agama</th>
                    <th>Kewarganegaraan</th>
                    <th>Alamat</th>
                    <th>Pekerjaan</th>
                    <th>Provinsi</th>
                    <th>Kecamatan</th>
                    <th>Kabupaten</th>
                    <th>Kelurahan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($dataIbus as $i => $dataIbu)
                    <td class="text-white">{{ ++$i }}</td>
                    <td class="text-white">{{ $dataIbu->nama }}</td>
                    <td class="text-white">{{ $dataIbu->umur }}</td>
                    <td class="text-white">{{ $dataIbu->agama }}</td>
                    <td class="text-white">{{ $dataIbu->kewarganegaraan }}</td>
                    <td class="text-white">{{ $dataIbu->alamat }}</td>
                    <td class="text-white">{{ $dataIbu->pekerjaan }}</td>
                    <td class="text-white">{{ $dataIbu->pro->name }}</td>
                    <td class="text-white">{{ $dataIbu->kec->name }}</td>
                    <td class="text-white">{{ $dataIbu->kabu->name }}</td>
                    <td class="text-white">{{ $dataIbu->kelu->name }}</td>
                    <td>
                        <a href="{{ route('editIbus', $dataIbu->id) }}" class="btn btn-warning text-white btn-sm mb-3">Edit</a>
                        <form action="{{ route('destroyIbus', $dataIbu->id) }}" method="post">
                            @csrf
                            <button type="submit" onclick="return confirm('Apakah Yakin?')" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $dataIbus->links("pagination::bootstrap-5") }}
    </div>

    </div>
</div>
@endsection
