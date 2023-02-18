<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SatwilRequest;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Polres;
use App\Models\Satwil;
use App\Models\dataDiri;
use App\Models\dataAyah;
use App\Models\dataIbu;
use App\Models\SKCK;

class AdminController extends Controller
{

    /**
     * Controller Satwil
     */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $polres = Polres::with('satwil')->get();
        $provinsi = Provinsi::with('satwil')->get();
        $kabupaten = Kabupaten::with('satwil')->get();
        $kecamatan = Kecamatan::with('satwil')->get();
        $kelurahan = Kelurahan::with('satwil')->get();
        $satwils = Satwil::all();
        return view('satwil.index', compact('satwils', 'provinsi', 'polres', 'kecamatan', 'kabupaten', 'kelurahan'))
                ->with('i');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $polres = Polres::where('status','0')->get();
        $provinsi = Provinsi::where('status','0')->get();
        $kabupaten = Kabupaten::where('status','0')->get();
        $kecamatan = Kecamatan::where('status','0')->get();
        $kelurahan = Kelurahan::where('status','0')->get();
        $satwil = Satwil::findOrFail($id);
        return view('satwils.edit', compact('satwil','provinsi', 'polres', 'kecamatan', 'kabupaten', 'kelurahan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SatwilRequest $request, $id)
    {
        $data = $request->validated();

        $Satwil = Satwil::find($id);

        $Satwil->satwil = $data['satwil'];
        $Satwil->polres = $data['polres_id'];
        $Satwil->polsek = $data['polsek'];
        $Satwil->alamat = $data['alamat'];
        $Satwil->rt = $data['rt'];
        $Satwil->rw = $data['rw'];
        $Satwil->provinsi_id = $data['provinsi_id'];
        $Satwil->kecamatan = $data['kecamatan_id'];
        $Satwil->kabupaten = $data['kabupaten_id'];
        $Satwil->kelurahan = $data['kelurahan_id'];
        $Satwil->update();

        return redirect()->route('satwils')
                        ->with('succes', 'Data Berhasil Ditambahkan !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Satwil = Satwil::find($id);
        $Satwil->delete();

        return redirect()->route('satwils')
                        ->with('succes', 'Data Berhasil DiHapus !');
    }

    /**
     * Controller Data Diri
     */

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexDiri()
    {
        $p = Provinsi::with('datadiri')->get();
        $ka = Kabupaten::with('datadiri')->get();
        $k = Kecamatan::with('datadiri')->get();
        $ke = Kelurahan::with('datadiri')->get();
        $dataDiris = dataDiri::all();
        return view('dataDiri.index', compact('dataDiris', 'p', 'k', 'ka', 'ke'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editDiri($id)
    {
        $p = Provinsi::where('status','0')->get();
        $ka = Kabupaten::where('status','0')->get();
        $k = Kecamatan::where('status','0')->get();
        $ke = Kelurahan::where('status','0')->get();
        $dataDiri = dataDiri::findOrFail($id);
        return view('dataDiri.edit', compact('dataDiri','p', 'k', 'ka', 'ke'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateDiri(dataDiriRequest $request, $id)
    {
        $data = $request->validated();

        $dataDiri = dataDiri::find($id);

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
            $dataDiri->update();

            return redirect()->route('dataDiris')
                            ->with('succes', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyDiri($id)
    {
        $dataDiri = dataDiri::find($id);
        $dataDiri->delete();

        return redirect()->route('dataDiris')
                        ->with('succes', 'Data Berhasil DiHapus !');
    }

    /**
     * Controller data Ayah
     */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAyah()
    {
        $pr = Provinsi::with('dataAyah')->get();
        $kab = Kabupaten::with('dataAyah')->get();
        $ke = Kecamatan::with('dataAyah')->get();
        $kel = Kelurahan::with('dataAyah')->get();
        $dataAyahs = dataAyah::all();
        return view('dataAyah.index', compact('dataAyahs', 'pr', 'ke', 'kab', 'kel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editAyah($id)
    {
        $provinsi = Provinsi::where('status','0')->get();
        $kecamatan = Kecamatan::where('status','0')->get();
        $kabupaten = Kabupaten::where('status','0')->get();
        $kelurahan = Kelurahan::where('status','0')->get();
        $dataAyahs = dataAyah::findOrFail($id);
        return view('dataAyah.edit', compact('dataAyahs', 'provinsi', 'kecamatan', 'kabupaten', 'kelurahan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateAyah(dataAyahRequest $request, $id)
    {
        $data = $request->validated();

        $dataAyah = dataAyah::find($id);

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
            $dataAyah->update();

            return redirect()->route('dataAyahs')
                            ->with('succes', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyAyah($id)
    {
        $dataAyah = dataAyah::find($id);
        $dataAyah->delete();

        return redirect()->route('dataAyahs')
                        ->with('succes', 'Data Berhasil DiHapus !');
    }

    /**
     * Controller data Ibu
     */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexIbu()
    {
        $pro = Provinsi::with('dataIbu')->get();
        $kabu = Kabupaten::with('dataIbu')->get();
        $kec = Kecamatan::with('dataIbu')->get();
        $kelu = Kelurahan::with('dataIbu')->get();
        $dataIbus = dataIbu::all();
        return view('dataIbu.index', compact('dataIbus', 'pro', 'kabu', 'kec', 'kelu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editIbu($id)
    {
        $provinsi = Provinsi::where('status','0')->get();
        $kecamatan = Kecamatan::where('status','0')->get();
        $kabupaten = Kabupaten::where('status','0')->get();
        $kelurahan = Kelurahan::where('status','0')->get();
        $dataIbus = dataIbu::findOrFail($id);
        return view('dataIbu.edit', compact('dataIbus', 'provinsi', 'kecamatan', 'kabupaten', 'kelurahan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateIbu(dataIbuRequest $request, $id)
    {
        $data = $request->validated();

        $dataIbu = dataIbu::find($id);

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
            $dataIbu->update();

            return redirect()->route('dataIbus')
                            ->with('succes', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyIbu($id)
    {
        $dataIbu = dataIbu::find($id);
        $dataIbu->delete();

        return redirect()->route('dataIbus')
                        ->with('succes', 'Data Berhasil DiHapus !');
    }


    /**
     * Controller data Ibu
     */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexSKCK()
    {
        $skcks = SKCK::all();
        return view('skck.index', compact('skcks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editSKCK($id)
    {
        $skcks = SKCK::findOrFail($id);
        return view('skck.edit', compact('skcks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateSKCK(SKCKRequest $request, $id)
    {
        $data = $request->validated();

        $skcks = SKCK::find($id);

        $skcks->no_skck = $data['no_skck'];
        $skcks->no_ktp = $data['no_ktp'];
        $skcks->keperluan = $data['keperluan'];
        $skcks->dibuat_tanggal = $data['dibuat_tanggal'];
        $skcks->sampai_tanggal = $data['sampai_tanggal'];
            $skcks->update();

            return redirect()->route('skck')
                            ->with('succes', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroySKCK($id)
    {
        $skcks = SKCK::find($id);
        $skcks->delete();

        return redirect()->route('skck')
                        ->with('succes', 'Data Berhasil DiHapus !');
    }
}
