@extends('layouts.home')

@section('content')
<div class="text">
    <h1 class="m-3 fw-bold text-white">
        Data Ayah
    </h1>
</div>

<div class="card bg-dark row h-auto">
    <div class="card-body col">
        <h2 class="text-white fw-bold mb-2 mt-2"> 
            List | Data Ayah
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
                    <th>Alamat</th>
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
                    <td class="text-white">{{ $dataAyah->provinsi->name }}</td>
                    <td class="text-white">{{ $dataAyah->kecamatan->name }}</td>
                    <td class="text-white">{{ $dataAyah->kabupaten->name }}</td>
                    <td class="text-white">{{ $dataAyah->kelurahan->name }}</td>
                    <td>
                        <a href="" class="btn btn-warning text-white btn-sm mb-3">Edit</a>
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
