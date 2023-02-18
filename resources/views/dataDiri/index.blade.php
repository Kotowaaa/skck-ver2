@extends('layouts.home')

@section('content')
<div class="text">
    <h1 class="m-3 fw-bold text-white">
        Data Pribadi
    </h1>
</div>

<div class="card bg-dark row h-auto">
    <div class="card-body col">
        <h2 class="text-white fw-bold mb-2 mt-2"> 
            List | Data Pribadi
        </h2>
        <table id="example" class="table table-striped nowrap text-white">
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
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($dataDiris as $i => $dataDiri)
                    <td class="text-white">{{ ++$i }}</td>
                    <td class="text-white">{{ $dataDiri->nama }}</td>
                    <td class="text-white">{{ $dataDiri->tempat_lahir }}</td>
                    <td class="text-white">{{ $dataDiri->tgl_lahir }}</td>
                    <td class="text-white">{{ $dataDiri->jenis_kelamin }}</td>
                    <td class="text-white">{{ $dataDiri->status_pernikahan }}</td>
                    <td class="text-white">{{ $dataDiri->kewarganegaraan }}</td>
                    <td class="text-white">{{ $dataDiri->agama }}</td>
                </tr>
                @endforeach
            </tbody>
            <thead>
                <tr>
                    <th>Pekerjaan</th>
                    <th>No. Telp</th>
                    <th>Alamat</th>
                    <th>Provinsi</th>
                    <th>Kecamatan</th>
                    <th>Kabupaten</th>
                    <th>Kelurahan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataDiris as $i => $dataDiri)
                <tr>
                    <td class="text-white">{{ $dataDiri->pekerjaan }}</td>
                    <td class="text-white">{{ $dataDiri->no_telp }}</td>
                    <td class="text-white">{{ $dataDiri->alamat }}</td>
                    <td class="text-white">{{ $dataDiri->provinsi->name }}</td>
                    <td class="text-white">{{ $dataDiri->kecamatan->name }}</td>
                    <td class="text-white">{{ $dataDiri->kabupaten->name }}</td>
                    <td class="text-white">{{ $dataDiri->kelurahan->name }}</td>
                    <td class="text-white">{{ $dataDiri->no_e_ktp }}</td>
                    <td class="text-white">{{ $dataDiri->no_kartu_keluarga }}</td>
                    <td>
                        <a href="" class="btn btn-warning text-white btn-sm mb-3">Edit</a>
                        <a href="" class="btn btn-danger btn-sm">Hapus!</a>
                    </td>
                </tr>
            </tbody>
                @endforeach
        </table>
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
