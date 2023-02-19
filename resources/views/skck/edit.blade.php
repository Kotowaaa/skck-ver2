@extends('layouts.home')

@section('content')

<div class="text">
    <h1 class="m-3 fw-bold text-white">
        Form Data | SKCK
    </h1>
</div>

<div class="card bg-dark mb-5 mt-2">
    <div class="card-body">
        <form action="{{ route('updateSkck', $skcks->id) }}" method="post">
            @csrf

            <div class="col-auto mb-3">
                <label for="no_skck" class="form-label text-white">No SKCK</label>
                <input type="text" name="no_skck" value="{{ $skcks->no_skck }}" id="no_skck" class="form-control" placeholder="Masukkan nama lengkap!">
            </div>

            <div class="col-auto mb-3">
                <label for="no_ktp" class="form-label text-white">No Ktp</label>
                <input type="text" name="no_ktp" value="{{ $skcks->no_ktp }}" id="no_ktp" class="form-control" placeholder="Masukkan Umur!">
            </div>

            <div class="col-auto mb-3">
                <label for="keperluan" class="form-label text-white">Keperluan</label>
                <textarea class="form-control" name="keperluan" id="keperluan" rows="3">{!! $skcks->keperluan !!}</textarea>
                <div class="col-auto">
                    <div class="col-auto mb-3">
                        <span id="satwilHelpInline" class="form-text text-danger">
                            * Kolom wajib di isi
                        </span>
                    </div>
                </div>

                <div class="row col-auto mb-3">
                    <div class="col">
                        <label for="dibuat_tanggal" class="form-label text-white">Dibuat Tanggal</label>
                        <input type="date" name="dibuat_tanggal" value="{{ $skcks->dibuat_tanggal }}" id="dibuat_tanggal" class="form-control" placeholder="Masukkan Tanggal Lahir!">
                    </div>
        
                    <div class="col">
                        <label for="sampai_tanggal" class="form-label text-white">Sampai Tanggal</label>
                        <input type="date" name="sampai_tanggal" value="{{ $skcks->sampai_tanggal }}" id="sampai_tanggal" class="form-control" placeholder="Masukkan Tanggal Lahir!">
                    </div>
                </div>

            <div class="col-auto m-2">
                <button type="submit" class="btn btn-secondary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
