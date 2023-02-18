@extends('layouts.admin')

@section('content')

<div class="text">
    <h1 class="m-3 fw-bold text-white">
        Edit Form Data | Satwil
    </h1>
</div>

<div class="card bg-dark row h-auto">
    <div class="card-body col">
        <form action="{{ route('satwils.update') }}" method="post">
            @csrf
            <div class="col-auto mb-3">
                <label for="satwil" class="form-label text-white">Satuan Wilayah</label>
                <div class="col-auto mb-2">
                    <span id="satwilHelpInline" class="form-text">
                        Silahkan pilih kesatuan wilayah untuk proses pembuatan dan pengambilan SKCK ( Sesuai KTP )
                    </span>
                </div>
                <select class="form-select" name="satwil" aria-label="Default select example">
                    <option selected disabled>{{ $Satwil->satwil }}</option>
                    <option value="Polda Kalimantan Selatan">Polda Kalimantan Selatan</option>
                    <option value="Polda Kalimantan Utara">Polda Kalimantan Utara</option>
                    <option value="Polda Kalimantan Timur">Polda Kalimantan Timur</option>
                    <option value="Polda Kalimantan Barat">Polda Kalimantan Barat</option>
                </select>
                @foreach ($errors->get('satwil') as $msg)
                <p class="text-danger">{{ $msg }}</p>
                @endforeach
            </div>
            <div class="col-auto mb-3">
                <div class="col-auto mb-2">
                    <span id="satwilHelpInline" class="form-text text-danger">
                        * Kolom wajib di isi
                    </span>
                </div>
                <select class="form-select" name="polres" aria-label="Default select example">
                    <option selected disabled>{{ $Satwil->polres_id }}</option>
                    @foreach ($polres as $res)
                    <option value="{{ $res->id }}">{{ $res->name }}</option>
                    @endforeach
                </select>
                @foreach ($errors->get('polres_id') as $msg)
                <p class="text-danger">{{ $msg }}</p>
                @endforeach
            </div>
            <div class="col-auto mb-3">
                <select class="form-select" name="polsek" aria-label="Default select example">
                    <option selected disabled>{{ $Satwil->polsek }}</option>
                    <option value="Polsek Banjarmasin Tengah">Polsek Banjarmasin Tengah</option>
                    <option value="Polsek Banjarmasin Utara">Polsek Banjarmasin Utara</option>
                    <option value="Polsek Banjarmasin Timur">Polsek Banjarmasin Timur</option>
                    <option value="Polsek Banjarmasin Selatan">Polsek Banjarmasin Selatan</option>
                    <option value="Polsek Banjarmasin Barat">Polsek Banjarmasin Barat</option>
                </select>
                @foreach ($errors->get('polsek') as $msg)
                <p class="text-danger">{{ $msg }}</p>
                @endforeach
            </div>
            <div class="col-auto mb-3">
                <span id="satwilHelpInline" class="form-text text-white">
                    * Isi data alamat di bawah ini sesuai dengan KTP atau identitas daerah pemohon
                </span>
            </div>
            <div class="col-auto mb-3">
                <label for="alamat" class="form-label text-white">Alamat ( Sesuai KTP ) </label>
                <textarea class="form-control" name="alamat" id="alamat" rows="3">{ !! $Satwil->alamat !! }</textarea>
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
                <div class="row mb-3 col-auto">
                    <div class="col">
                        <label for="rt" class="form-label text-white">RT ( Sesuai KTP ) </label>
                        <input type="text" name="rt" value="{{ $Satwil->rt }}" class="form-control" placeholder="Rt" aria-label="Rt">
                        @foreach ($errors->get('rt') as $msg)
                        <p class="text-danger">{{ $msg }}</p>
                        @endforeach
                    </div>
                    <div class="col">
                        <label for="rw" class="form-label text-white">RW ( Sesuai KTP ) </label>
                        <input type="text" name="rw" value="{{ $Satwil->rw }}" class="form-control" placeholder="Rw" aria-label="Rw">
                        @foreach ($errors->get('rw') as $msg)
                        <p class="text-danger">{{ $msg }}</p>
                        @endforeach
                    </div>
                </div>
                <div class="col-auto mb-3">
                    <label for="provinsi" class="form-label text-white">Provinsi ( Sesuai KTP ) </label>
                    <select class="form-select" name="provinsi_id" aria-label="Default select example">
                        <option selected disabled>{{ $Satwil->provinsi_id }}</option>
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
                        <option selected disabled>{{ $Satwil->kecamatan_id }}</option>
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
                        <option selected disabled>{{ $Satwil->kabupaten_id }}</option>
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
                        <option selected disabled>{{ $Satwil->kelurahan_id }}</option>
                        @foreach ($kelurahan as $kelu)
                        <option value="{{ $kelu->id }}">{{ $kelu->name }}</option>
                        @endforeach
                    </select>
                    @foreach ($errors->get('kelurahan_id') as $msg)
                    <p class="text-danger">{{ $msg }}</p>
                    @endforeach
                </div>
                <div class="col-auto mb-3">
                    <button type="submit" class="btn btn-secondary me-3">Submit</button>
                    <a href="{{ route('satwils.index') }}" class="btn btn-success">Back</a>
                </div>
        </form>
    </div>
</div>
@endsection
