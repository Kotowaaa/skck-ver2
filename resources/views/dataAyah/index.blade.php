@extends('layouts.home')

@section('content')
<div class="text">
    <h1 class="m-3 fw-bold text-white">
        Data Ayah
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
            List | Data Ayah
        </h2>
    <div class="table-responsive">
        <table class="table table-striped table-hover nowrap text-white">
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
                    @foreach ($dataAyahs as $i => $dataAyah)
                    <td class="text-white">{{ ++$i }}</td>
                    <td class="text-white">{{ $dataAyah->nama }}</td>
                    <td class="text-white">{{ $dataAyah->umur }}</td>
                    <td class="text-white">{{ $dataAyah->agama }}</td>
                    <td class="text-white">{{ $dataAyah->kewarganegaraan }}</td>
                    <td class="text-white">{{ $dataAyah->alamat }}</td>
                    <td class="text-white">{{ $dataAyah->pekerjaan }}</td>
                    <td class="text-white">{{ $dataAyah->pr->name }}</td>
                    <td class="text-white">{{ $dataAyah->ke->name }}</td>
                    <td class="text-white">{{ $dataAyah->kab->name }}</td>
                    <td class="text-white">{{ $dataAyah->kel->name }}</td>
                    <td>
                        <a href="{{ route('editAyahs', $dataAyah->id) }}" class="btn btn-warning text-white btn-sm mb-3">Edit</a>
                        <form action="{{ route('destroyAyahs', $dataAyah->id) }}" method="post">
                            @csrf
                            <button type="submit" onclick="return confirm('Apakah Yakin?')" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            {{ $dataAyahs->links("pagination::bootstrap-5") }}
        </div>
    </div>
</div>
@endsection
