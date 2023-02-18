@extends('layouts.admin')

@section('content')

<div class="text">
    <h1 class="m-3 fw-bold text-white">
        Edit Form Data | Ayah
    </h1>
</div>

<div class="card bg-dark row h-auto">
    <div class="card-body col">
        <form action="" method="post">
            <div class="col-auto mb-3">
                <label for="satwil" class="form-label text-white">Nama lengkap</label>
                <input type="text" name="nama" value="{{ $dataAyah->nama }}" id="nama" class="form-control" placeholder="Masukkan nama lengkap!">
            </div>
            <div class="col-auto mb-3">
                <label for="umur" class="form-label text-white">Umur</label>
                <input type="text" name="umur" value="{{ $dataAyah->umur }}" id="umur" class="form-control" placeholder="Masukkan Umur!">
            </div>
            <div class="col-auto mb-3">
                <label for="agama" class="form-label text-white">Agama</label>
                <select class="form-select" name="agama" aria-label="Default select example">
                    <option selected disabled>{{ $dataAyah->agama }}</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen Khatolik">Kristen Khatolik</option>
                    <option value="Kristen Protestan">Kristen Protestan</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Khonghucu">Khonghucu</option>
                </select>
            </div>
            <div class="row col-auto mb-3">
                <label for="kewarganegaraan" class="form-label text-white">Kewarganegaraan</label>
                <div class="col">
                    <input type="radio" name="kewarganegaraan" id="kewarganegaraan" value="{{ $dataAyah->kewarganegaraan }}" class="form-check-input">
                    <label for="wni" class="form-label text-white">WNI</label>
                </div>
                <div class="col" style="margin-right: 930px;">
                    <input type="radio" name="kewarganegaraan" id="kewarganegaraan" value="{{ $dataAyah->kewarganegaraan }}" class="form-check-input">
                    <label for="wna" class="form-label text-white">WNA</label>
                </div>
            </div>
            <div class="col-auto mb-3">
                <label for="pekerjaan" class="form-label text-white">Pekerjaan</label>
                <select class="form-select" name="pekerjaan" aria-label="Default select example">
                    <option selected disabled>{{ $dataAyah->pekerjaan }}</option>
                    <option value="Belum/Tidak Bekerja">Belum/Tidak Bekerja</option>
                    <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                    <option value="Karyawan Swasta">Karyawan Swasta</option>
                    <option value="Wiraswasta">Wiraswasta</option>
                </select>
                </div>
                <div class="col-auto mb-3">
                    <label for="alamat" class="form-label text-white">Alamat ( Saat ini ) </label>
                    <textarea class="form-control" name="alamat" id="alamat" rows="3">{!! $dataAyah->alamat !!}</textarea>
                    <div class="col-auto">
                        <div class="col-auto mb-3">
                            <span id="satwilHelpInline" class="form-text text-danger">
                                * Kolom wajib di isi
                            </span>
                        </div>
                    </div>
                    <div class="col-auto mb-3">
                        <label for="provinsi" class="form-label text-white">Provinsi ( Sesuai KTP ) </label>
                        <select class="form-select" name="provinsi_id" aria-label="Default select example">
                            @foreach ($provinsi as $pro)
                            <option value="{{ $pro->id }}" {{ $dataAyah->provinsi_id == $pro->id ? 'selected' : '' }}>
                                {{ $pro->name }}
                            </option>
                            @endforeach
                        </select>
                        @foreach ($errors->get('provinsi_id') as $msg)
                        <p class="text-danger">{{ $msg }}</p>
                        @endforeach
                    </div>
                    <div class="col-auto mb-3">
                        <label for="provinsi" class="form-label text-white">Kecamatan ( Sesuai KTP ) </label>
                        <select class="form-select" name="kecamatan_id" aria-label="Default select example">
                            @foreach ($kecamatan as $keca)
                            <option value="{{ $keca->id }}" {{ $dataAyah->kecamatan_id == $keca->id ? 'selected' : '' }}>
                                {{ $keca->name }}
                            </option>
                            @endforeach
                        </select>
                        @foreach ($errors->get('kecamatan_id') as $msg)
                        <p class="text-danger">{{ $msg }}</p>
                        @endforeach
                    </div>
                    <div class="col-auto mb-3">
                        <label for="provinsi" class="form-label text-white">Kabupaten / Kota ( Sesuai KTP ) </label>
                        <select class="form-select" name="kabupaten_id" aria-label="Default select example">
                            @foreach ($kabupaten as $kabu)
                            <option value="{{ $kabu->id }}" {{ $dataAyah->kabupaten_id == $kabu->id ? 'selected' : '' }}>
                                {{ $kabu->name }}
                            </option>
                            @endforeach
                        </select>
                        @foreach ($errors->get('kabupaten_id') as $msg)
                        <p class="text-danger">{{ $msg }}</p>
                        @endforeach
                    </div>
                    <div class="col-auto mb-3">
                        <label for="provinsi" class="form-label text-white">Kelurahan ( Sesuai KTP ) </label>
                        <select class="form-select" name="kelurahan_id" aria-label="Default select example">
                            @foreach ($kelurahan as $kelu)
                            <option value="{{ $kelu->id }}" {{ $dataAyah->kelurahan_id == $kelu->id ? 'selected' : '' }}>
                                {{ $kelu->name }}
                            </option>
                            @endforeach
                        </select>
                        @foreach ($errors->get('kelurahan_id') as $msg)
                        <p class="text-danger">{{ $msg }}</p>
                        @endforeach
                    </div>
            <div class="col-auto m-2">
                <button type="submit" class="btn btn-secondary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
