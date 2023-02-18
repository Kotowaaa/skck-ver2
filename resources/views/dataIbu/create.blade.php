@extends('layouts.admin')

@section('content')

<div class="text">
    <h1 class="m-3 fw-bold text-white">
        Form Data | Ibu
    </h1>
</div>

<div class="card bg-dark row h-auto">
    <div class="card-body col">
        <form action="" method="post">
            <div class="col-auto mb-3">
                <label for="satwil" class="form-label text-white">Nama lengkap</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama lengkap!">
            </div>
            <div class="col-auto mb-3">
                <label for="umur" class="form-label text-white">Umur</label>
                <input type="text" name="umur" id="umur" class="form-control" placeholder="Masukkan Umur!">
            </div>
            <div class="col-auto mb-3">
                <label for="agama" class="form-label text-white">Agama</label>
                <select class="form-select" name="agama" aria-label="Default select example">
                    <option selected disabled>Pilih Agama ... </option>
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
                    <input type="radio" name="kewarganegaraan" id="kewarganegaraan" value="WNI" class="form-check-input">
                    <label for="wni" class="form-label text-white">WNI</label>
                </div>
                <div class="col" style="margin-right: 930px;">
                    <input type="radio" name="kewarganegaraan" id="kewarganegaraan" value="WNA" class="form-check-input">
                    <label for="wna" class="form-label text-white">WNA</label>
                </div>
            </div>
            <div class="col-auto mb-3">
                <label for="pekerjaan" class="form-label text-white">Pekerjaan</label>
                <select class="form-select" name="pekerjaan" aria-label="Default select example">
                    <option selected disabled>Tidak Terdefinisi ...</option>
                    <option value="Belum/Tidak Bekerja">Belum/Tidak Bekerja</option>
                    <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                    <option value="Karyawan Swasta">Karyawan Swasta</option>
                    <option value="Wiraswasta">Wiraswasta</option>
                </select>
                </div>
                <div class="col-auto mb-3">
                    <label for="alamat" class="form-label text-white">Alamat ( Saat ini ) </label>
                    <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
                    <div class="col-auto">
                        <div class="col-auto mb-3">
                            <span id="satwilHelpInline" class="form-text text-danger">
                                * Kolom wajib di isi
                            </span>
                        </div>
                    </div>
            <div class="col-auto mb-3">
                <label for="provinsi" class="form-label text-white">Provinsi</label>
                <select class="form-select" name="provinsi_id" aria-label="Default select example">
                    <option selected disabled>Pilih Provinsi ...</option>
                    @foreach ($provinsi as $pro)
                    <option value="{{ $pro->id }}">{{ $pro->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-auto mb-3">
                <label for="provinsi" class="form-label text-white">Kecamatan</label>
                <select class="form-select" name="kecamatan_id" aria-label="Default select example">
                    <option selected disabled>Pilih Kecamatan ...</option>
                    @foreach ($kecamatan as $keca)
                    <option value="{{ $keca->id }}">{{ $keca->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-auto mb-3">
                <label for="provinsi" class="form-label text-white">Kabupaten / Kota</label>
                <select class="form-select" name="kabupaten_id" aria-label="Default select example">
                    <option selected disabled>Pilih Kabupaten / Kota ...</option>
                    @foreach ($kabupaten as $kabu)
                    <option value="{{ $kabu->id }}">{{ $kabu->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-auto mb-3">
                <label for="provinsi" class="form-label text-white">Kelurahan</label>
                <select class="form-select" name="kelurahan_id" aria-label="Default select example">
                    <option selected disabled>Pilih Kelurahan ...</option>
                    <option selected disabled>Pilih Kelurahan ...</option>
                    @foreach ($kelurahan as $kelu)
                    <option value="{{ $kelu->id }}">{{ $kelu->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-auto m-2">
                <button type="submit" class="btn btn-secondary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
