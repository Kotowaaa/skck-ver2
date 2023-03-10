@extends('layouts.home')

@section('content')
<div class="text">
    <h1 class="m-3 fw-bold text-white">
        Form Data | Data Diri
    </h1>
</div>

<div class="card bg-dark mb-5 mt-2">
    <div class="card-body">
        <form action="{{ route('storesDiri') }}" method="post">
            @csrf
            <div class="col-auto mb-3">
                <label for="nama" class="form-label text-white">Nama Lengkap</label>
                <input type="text" name="namaDiri" id="nama" class="form-control" placeholder="Masukkan Nama Lengkap!">
                @foreach ($errors->get('namaDiri') as $msg)
                <p class="text-danger">{{ $msg }}</p>
                @endforeach
            </div>
            <div class="col-auto mb-3">
                <label for="tempat_lahir" class="form-label text-white">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir!">
                @foreach ($errors->get('tempat_lahir') as $msg)
                <p class="text-danger">{{ $msg }}</p>
                @endforeach
            </div>
            <div class="col-lg-4 mb-3">
                <label for="tgl_lahir" class="form-label text-white">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir!">
                @foreach ($errors->get('tgl_lahir') as $msg)
                <p class="text-danger">{{ $msg }}</p>
                @endforeach
            </div>
            <div class="row col-auto mb-3">
                <div class="col">
                    <label for="jenis_kelamin" class="form-label text-white">Jenis Kelamin</label>
                    <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                        <option selected disabled>Pilih jenis kelamin ...</option>
                        <option value="Laki-Laki">Laki - Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    @foreach ($errors->get('jenis_kelamin') as $msg)
                    <p class="text-danger">{{ $msg }}</p>
                    @endforeach
                </div>
                <div class="col">
                    <label for="status" class="form-label text-white">Status Pernikahan</label>
                    <select class="form-select" name="status_pernikahan" aria-label="Default select example">
                        <option selected disabled>Pilih Status ...</option>
                        <option value="Nikah">Nikah</option>
                        <option value="Belum Nikah">Belum Nikah</option>
                    </select>
                    @foreach ($errors->get('status_pernikahan') as $msg)
                    <p class="text-danger">{{ $msg }}</p>
                    @endforeach
                </div>
                <div class="col">
                    <label for="kewarganegaraan" class="form-label text-white">Kewarganegaraan</label>
                    <select class="form-select" name="kewarganegaraan" aria-label="Default select example">
                        <option selected disabled>Tidak Terdefinisi ...</option>
                        <option value="WNI">WNI</option>
                        <option value="WNA">WNA</option>
                    </select>
                    @foreach ($errors->get('kewarganegaraan') as $msg)
                    <p class="text-danger">{{ $msg }}</p>
                    @endforeach
                </div>
            </div>
            <div class="row col-auto mb-3">
                <div class="col">
                    <label for="agama" class="form-label text-white">Agama</label>
                    <select class="form-select" name="agama" aria-label="Default select example">
                        <option selected disabled>Pilih Agama ...</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen Khatolik">Kristen Khatolik</option>
                        <option value="Kristen Protestan">Kristen Protestan</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Khonghucu">Khonghucu</option>
                    </select>
                    @foreach ($errors->get('agama') as $msg)
                    <p class="text-danger">{{ $msg }}</p>
                    @endforeach
                </div>
                <div class="col">
                    <label for="pekerjaan" class="form-label text-white">Pekerjaan</label>
                    <select class="form-select" name="pekerjaan" aria-label="Default select example">
                        <option selected disabled>Tidak Terdefinisi ...</option>
                        <option value="Belum/Tidak Bekerja">Belum/Tidak Bekerja</option>
                        <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                        <option value="Wiraswasta">Wiraswasta</option>
                    </select>
                    @foreach ($errors->get('pekerjaan') as $msg)
                    <p class="text-danger">{{ $msg }}</p>
                    @endforeach
                </div>
                <div class="col">
                    <label for="no_telp" class="form-label text-white">No. Telp</label>
                    <input type="text" name="no_telp" id="no_telp" class="form-control" placeholder="Masukkan No Telp!">
                </div>
                @foreach ($errors->get('no_telp') as $msg)
                <p class="text-danger">{{ $msg }}</p>
                @endforeach
            </div>
            <div class="col-auto mb-3">
                <label for="alamat" class="form-label text-white">Alamat ( Saat ini ) </label>
                <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
                @foreach ($errors->get('alamat') as $msg)
                <p class="text-danger">{{ $msg }}</p>
                @endforeach
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
                        <option selected disabled>Pilih Provinsi ...</option>
                        @foreach ($provinsi as $pro)
                        <option value="{{ $pro->id }}">{{ $pro->name }}</option>
                        @endforeach
                    </select>
                    @foreach ($errors->get('provinsi_id') as $msg)
                    <p class="text-danger">{{ $msg }}</p>
                    @endforeach
                </div>
                <div class="col-auto mb-3">
                    <label for="provinsi" class="form-label text-white">Kecamatan ( Sesuai KTP ) </label>
                    <select class="form-select" name="kecamatan_id" aria-label="Default select example">
                        <option selected disabled>Pilih Kecamatan ...</option>
                        @foreach ($kecamatan as $keca)
                        <option value="{{ $keca->id }}">{{ $keca->name }}</option>
                        @endforeach
                    </select>
                    @foreach ($errors->get('kecamatan_id') as $msg)
                    <p class="text-danger">{{ $msg }}</p>
                    @endforeach
                </div>
                <div class="col-auto mb-3">
                    <label for="provinsi" class="form-label text-white">Kabupaten / Kota ( Sesuai KTP ) </label>
                    <select class="form-select" name="kabupaten_id" aria-label="Default select example">
                        <option selected disabled>Pilih Kabupaten / Kota ...</option>
                        @foreach ($kabupaten as $kabu)
                        <option value="{{ $kabu->id }}">{{ $kabu->name }}</option>
                        @endforeach
                    </select>
                    @foreach ($errors->get('kabupaten_id') as $msg)
                    <p class="text-danger">{{ $msg }}</p>
                    @endforeach
                </div>
                <div class="col-auto mb-3">
                    <label for="provinsi" class="form-label text-white">Kelurahan ( Sesuai KTP ) </label>
                    <select class="form-select" name="kelurahan_id" aria-label="Default select example">
                        <option selected disabled>Pilih Kelurahan ...</option>
                        @foreach ($kelurahan as $kelu)
                        <option value="{{ $kelu->id }}">{{ $kelu->name }}</option>
                        @endforeach
                    </select>
                    @foreach ($errors->get('kelurahan_id') as $msg)
                    <p class="text-danger">{{ $msg }}</p>
                    @endforeach
                </div>
                <div class="row col-auto mb-3">
                    <div class="col">
                        <label for="no_telp" class="form-label text-white">No. E-KTP</label>
                        <input type="text" name="no_e_ktp" id="no_e-ktp" class="form-control" placeholder="Masukkan No E-KTP!">
                        @foreach ($errors->get('no_e_ktp') as $msg)
                        <p class="text-danger">{{ $msg }}</p>
                        @endforeach
                    </div>
                    <div class="col">
                        <label for="no_telp" class="form-label text-white">No. Kartu Keluarga</label>
                        <input type="text" name="no_kartu_keluarga" id="no_kartu_keluarga" class="form-control" placeholder="Masukkan No Kartu Keluarga!">
                        @foreach ($errors->get('no_kartu_keluarga') as $msg)
                        <p class="text-danger">{{ $msg }}</p>
                        @endforeach
                    </div>
                </div>
                <div class="col-auto mb-3">
                    <button type="submit" class="btn btn-secondary">Submit</button>
                </div>
        </form>
    </div>
</div>
@endsection