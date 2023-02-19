@extends('layouts.home')

@section('content')

<div class="text">
    <h1 class="m-3 fw-bold text-white">
        Edit Form Data | Satwil
    </h1>
</div>

<div class="card bg-dark mb-5 mt-2">
    <div class="card-body">
        <form action="{{ route('update', $satwils->id) }}" method="post">
            @csrf
            <div class="col-auto mb-3">
                <label for="satwil" class="form-label text-white">Satuan Wilayah</label>
                <div class="col-auto mb-2">
                    <span id="satwilHelpInline" class="form-text">
                        Silahkan pilih kesatuan wilayah untuk proses pembuatan dan pengambilan SKCK ( Sesuai KTP )
                    </span>
                </div>
                <select class="form-select" name="satwil" aria-label="Default select example">
                    <option selected disabled>{{ $satwils->satwil }}</option>
                    <option value="Polda Kalimantan Selatan">Polda Kalimantan Selatan</option>
                    <option value="Polda Kalimantan Utara">Polda Kalimantan Utara</option>
                    <option value="Polda Kalimantan Timur">Polda Kalimantan Timur</option>
                    <option value="Polda Kalimantan Barat">Polda Kalimantan Barat</option>
                </select>
            </div>
            <div class="col-auto mb-3">
                <div class="col-auto mb-2">
                    <span id="satwilHelpInline" class="form-text text-danger">
                        * Kolom wajib di isi
                    </span>
                </div>
                <select class="form-select" name="polres_id" aria-label="Default select example">
                    <option selected disabled>{{ $satwils->polres->name }}</option>
                    @foreach ($polres as $res)
                    <option value="{{ $res->id }}">{{ $res->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-auto mb-3">
                <select class="form-select" name="polsek" aria-label="Default select example">
                    <option selected disabled>{{ $satwils->polsek }}</option>
                    <option value="Polsek Banjarmasin Tengah">Polsek Banjarmasin Tengah</option>
                    <option value="Polsek Banjarmasin Utara">Polsek Banjarmasin Utara</option>
                    <option value="Polsek Banjarmasin Timur">Polsek Banjarmasin Timur</option>
                    <option value="Polsek Banjarmasin Selatan">Polsek Banjarmasin Selatan</option>
                    <option value="Polsek Banjarmasin Barat">Polsek Banjarmasin Barat</option>
                </select>
            </div>
            <div class="col-auto mb-3">
                <span id="satwilHelpInline" class="form-text text-white">
                    * Isi data alamat di bawah ini sesuai dengan KTP atau identitas daerah pemohon
                </span>
            </div>
            <div class="col-auto mb-3">
                <label for="alamat" class="form-label text-white">Alamat ( Sesuai KTP ) </label>
                <textarea class="form-control" name="alamat" id="alamat" rows="3">{!! $satwils->alamat !!}</textarea>

                <div class="row mb-3 mt-3 col-auto">
                    <div class="col">
                        <label for="rt" class="form-label text-white">RT ( Sesuai KTP ) </label>
                        <input type="text" name="rt" value="{{ $satwils->rt }}" class="form-control" placeholder="Rt" aria-label="Rt">
                    </div>
                    <div class="col">
                        <label for="rw" class="form-label text-white">RW ( Sesuai KTP ) </label>
                        <input type="text" name="rw" value="{{ $satwils->rw }}" class="form-control" placeholder="Rw" aria-label="Rw">
                    </div>
                </div>
                <div class="col-auto mb-3">
                    <label for="provinsi" class="form-label text-white">Provinsi ( Sesuai KTP ) </label>
                    <select class="form-select" name="provinsi_id" aria-label="Default select example">
                        <option selected disabled>{{ $satwils->provinsi->name }}</option>
                        @foreach ($provinsi as $pro)
                        <option value="{{ $pro->id }}">{{ $pro->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-auto mb-3">
                    <label for="provinsi" class="form-label text-white">Kecamatan ( Sesuai KTP ) </label>
                    <select class="form-select" name="kecamatan_id" aria-label="Default select example">
                        <option selected disabled>{{ $satwils->kecamatan->name }}</option>
                        @foreach ($kecamatan as $keca)
                        <option value="{{ $keca->id }}">{{ $keca->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-auto mb-3">
                    <label for="provinsi" class="form-label text-white">Kabupaten / Kota ( Sesuai KTP ) </label>
                    <select class="form-select" name="kabupaten_id" aria-label="Default select example">
                        <option selected disabled>{{ $satwils->kabupaten->name }}</option>
                        @foreach ($kabupaten as $kabu)
                        <option value="{{ $kabu->id }}">{{ $kabu->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-auto mb-3">
                    <label for="provinsi" class="form-label text-white">Kelurahan ( Sesuai KTP ) </label>
                    <select class="form-select" name="kelurahan_id" aria-label="Default select example">
                        <option selected disabled>{{ $satwils->kelurahan->name }}</option>
                        @foreach ($kelurahan as $kelu)
                        <option value="{{ $kelu->id }}">{{ $kelu->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-auto mt-4">
                    <button type="submit" class="btn btn-secondary me-3">Submit</button>
                </div>
        </form>
    </div>
</div>
@endsection
