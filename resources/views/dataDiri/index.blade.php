@extends('layouts.home')

@section('content')
<div class="text">
    <h1 class="m-3 fw-bold text-white">
        Data Diri
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
            List | Data Diri
        </h2>
        <div class="table-responsive">
            <table class="table table-hover table-striped nowrap text-white">
                <thead>
                    <tr>
                        <th class="px-5">#</th>
                        <th>Nama Lengkap</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Status Pernikahan</th>
                        <th>Kewarganegaraan</th>
                        <th>Agama</th>
                        <th>Pekerjaan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($dataDiris as $i => $dataDiri)
                        <td class="text-white px-5">{{ ++$i }}</td>
                        <td class="text-white">{{ $dataDiri->namaDiri }}</td>
                        <td class="text-white">{{ $dataDiri->tempat_lahir }}</td>
                        <td class="text-white">{{ $dataDiri->tgl_lahir }}</td>
                        <td class="text-white">{{ $dataDiri->jenis_kelamin }}</td>
                        <td class="text-white">{{ $dataDiri->status_pernikahan }}</td>
                        <td class="text-white">{{ $dataDiri->kewarganegaraan }}</td>
                        <td class="text-white">{{ $dataDiri->agama }}</td>
                        <td class="text-white">{{ $dataDiri->pekerjaan }}</td>
                    </tr>
                    @endforeach
                </tbody>
                
                <thead>
                    <tr>
                        <th>No. Telp</th>
                        <th>Alamat</th>
                        <th>Provinsi</th>
                        <th>Kecamatan</th>
                        <th>Kabupaten</th>
                        <th>Kelurahan</th>
                        <th>No E-Ktp</th>
                        <th>No Kartu Keluarga</th>
                        <th class="px-5">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataDiris as $i => $dataDiri)
                    <tr>
                        <td class="text-white">{{ $dataDiri->no_telp }}</td>
                        <td class="text-white">{{ $dataDiri->alamat }}</td>
                        <td class="text-white">{{ $dataDiri->p->name }}</td>
                        <td class="text-white">{{ $dataDiri->k->name }}</td>
                        <td class="text-white">{{ $dataDiri->ka->name }}</td>
                        <td class="text-white">{{ $dataDiri->ke->name }}</td>
                        <td class="text-white">{{ $dataDiri->no_e_ktp }}</td>
                        <td class="text-white">{{ $dataDiri->no_kartu_keluarga }}</td>
                        <td class="px-5">
                            <a href="{{ route('editDiris', $dataDiri->id) }}" class="btn btn-warning text-white btn-sm mb-3">Edit</a>
                            <form action="{{ route('destroyDiris', $dataDiri->id) }}" method="post">
                                @csrf
                                <button type="submit" onclick="return confirm('Apakah Yakin?')" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                    @endforeach
            </table>
            {{ $dataDiris->links("pagination::bootstrap-5") }}
        </div>
    </div>
</div>
@endsection
