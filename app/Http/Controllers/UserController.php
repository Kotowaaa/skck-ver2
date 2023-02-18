<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Polres;
use App\Models\Satwil;

class UserController extends Controller
{

    public function index()
    {
        return view('user');
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $polres = Polres::where('status','0')->get();
        $provinsi = Provinsi::where('status','0')->get();
        $kecamatan = Kecamatan::where('status','0')->get();
        $kabupaten = Kabupaten::where('status','0')->get();
        $kelurahan = Kelurahan::where('status','0')->get();
        return view('satwil.create', compact('provinsi', 'polres', 'kecamatan', 'kabupaten', 'kelurahan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SatwilRequest $request)
    {
        $data = $request->validated();

        $satwil = new Satwil();

            $satwil->satwil = $data['satwil'];
            $satwil->polres_id = $data['polres_id'];
            $satwil->polsek = $data['polsek'];
            $satwil->alamat = $data['alamat'];
            $satwil->rt = $data['rt'];
            $satwil->rw = $data['rw'];
            $satwil->provinsi_id = $data['provinsi_id'];
            $satwil->kecamatan_id = $data['kecamatan_id'];
            $satwil->kabupaten_id = $data['kabupaten_id'];
            $satwil->kelurahan_id = $data['kelurahan_id'];
            $satwil->save();

            return redirect()->route('satwils.index')
                            ->with('succes', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Controller user dataDiri
     */

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createDiri()
    {
        $provinsi = Provinsi::where('status','0')->get();
        $kecamatan = Kecamatan::where('status','0')->get();
        $kabupaten = Kabupaten::where('status','0')->get();
        $kelurahan = Kelurahan::where('status','0')->get();
        return view('dataPribadi.create', compact('provinsi', 'kecamatan', 'kabupaten', 'kelurahan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeDiri(DataDiriRequest $request)
    {
        $data = $request->validate();

        $dataDiri = new dataDiri;

            $dataDiri->nama = $data['nama'];
            $dataDiri->tempat_lahir = $data['tempat_lahir'];
            $dataDiri->tgl_lahir = $data['tgl_lahir'];
            $dataDiri->jenis_kelamin = $data['jenis_kelamin'];
            $dataDiri->status = $data['status'];
            $dataDiri->kewarganegaraan = $data['kewarganegaraan'];
            $dataDiri->agama = $data['agama'];
            $dataDiri->pekerjaan = $data['pekerjaan'];
            $dataDiri->no_telp = $data['no_telp'];
            $dataDiri->alamat = $data['alamat'];
            $dataDiri->provinsi_id = $data['provinsi_id'];
            $dataDiri->kecamatan_id = $data['kecamatan_id'];
            $dataDiri->kabupaten_id = $data['kabupaten_id'];
            $dataDiri->kelurahan_id = $data['kelurahan_id'];
            $dataDiri->no_e_ktp = $data['no_e_ktp'];
            $dataDiri->no_kartu_keluarga = $data['no_kartu_keluarga'];
            $dataDiri->save();

            return redirect()->route('dataPribadis.index')
                            ->with('succes', 'Data Berhasil Ditambahkan !');

    }

    /**
     * Controller user dataAyah
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createAyah()
    {
        $provinsi = Provinsi::where('status','0')->get();
        $kecamatan = Kecamatan::where('status','0')->get();
        $kabupaten = Kabupaten::where('status','0')->get();
        $kelurahan = Kelurahan::where('status','0')->get();
        return view('dataAyah.create', compact('provinsi', 'kecamatan', 'kabupaten', 'kelurahan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeAyah(Request $request)
    {
        $data = $request->validated();

        $dataAyah = new dataAyah();

            $dataAyah->nama = $data['nama'];
            $dataAyah->umur = $data['umur'];
            $dataAyah->agama = $data['agama'];
            $dataAyah->kewarganegaraan = $data['kewarganegaraan'];
            $dataAyah->pekerjaan = $data['pekerjaan'];
            $dataAyah->alamat = $data['alamat'];
            $dataAyah->provinsi_id = $data['provinsi_id'];
            $dataAyah->kecamatan_id = $data['kecamatan_id'];
            $dataAyah->kabupaten_id = $data['kabupaten_id'];
            $dataAyah->kelurahan_id = $data['kelurahan_id'];
                $dataAyah->save();

            return redirect()->route('dataAyahs.index')
                            ->with('succes', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Controller user dataIbu
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createIbu()
    {
        $provinsi = Provinsi::where('status','0')->get();
        $kecamatan = Kecamatan::where('status','0')->get();
        $kabupaten = Kabupaten::where('status','0')->get();
        $kelurahan = Kelurahan::where('status','0')->get();
        return view('dataIbu.create', compact('provinsi', 'kecamatan', 'kabupaten', 'kelurahan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeIbu(Request $request)
    {
        $data = $request->validated();

        $dataIbu = new dataIbu();

            $dataIbu->nama = $data['nama'];
            $dataIbu->umur = $data['umur'];
            $dataIbu->agama = $data['agama'];
            $dataIbu->kewarganegaraan = $data['kewarganegaraan'];
            $dataIbu->pekerjaan = $data['pekerjaan'];
            $dataIbu->alamat = $data['alamat'];
            $dataIbu->provinsi_id = $data['provinsi_id'];
            $dataIbu->kecamatan_id = $data['kecamatan_id'];
            $dataIbu->kabupaten_id = $data['kabupaten_id'];
            $dataIbu->kelurahan_id = $data['kelurahan_id'];
                $dataIbu->save();

            return redirect()->route('dataIbus.index')
                            ->with('succes', 'Data Berhasil Ditambahkan !');
    }
}
