<?php

namespace App\Http\Controllers;

    // Use Requests
use Illuminate\Http\Request;
use App\Http\Requests\SatwilRequest;
use App\Http\Requests\DataDiriRequest;
use App\Http\Requests\DataAyahRequest;
use App\Http\Requests\DataIbuRequest;
use App\Http\Requests\SkckRequest;

    // Use Models
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
        $satwils = Satwil::paginate(5);
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
        $satwils = Satwil::findOrFail($id);
        return view('satwil.edit', compact('satwils','provinsi', 'polres', 'kecamatan', 'kabupaten', 'kelurahan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $satwils = Satwil::find($id);
            $satwils->update($request->all());

        return redirect()->route('satwils')
                        ->with('sukses', 'Data Berhasil Diperbarui !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $satwil = Satwil::find($id);
        $satwil->delete();

        return redirect()->route('satwils')
                        ->with('sukses', 'Data Berhasil DiHapus !');
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
        $dataDiris = dataDiri::paginate(5);
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
    public function updateDiri(Request $request, $id)
    {

        $dataDiris = dataDiri::find($id);
            $dataDiris->update($request->all());

            return redirect()->route('dataDiris')
                            ->with('sukses', 'Data Berhasil Diperbarui !');
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
        $dataAyahs = dataAyah::paginate(5);
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
        $dataAyah = dataAyah::findOrFail($id);
        return view('dataAyah.edit', compact('dataAyah', 'provinsi', 'kecamatan', 'kabupaten', 'kelurahan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateAyah(Request $request, $id)
    {

        $dataAyah = dataAyah::find($id);
            $dataAyah->update($request->all());

            return redirect()->route('dataAyahs')
                            ->with('sukses', 'Data Berhasil Diperbarui !');
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
                        ->with('sukses', 'Data Berhasil DiHapus !');
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
        $dataIbus = dataIbu::paginate(5);
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
        $dataIbu = dataIbu::findOrFail($id);
        return view('dataIbu.edit', compact('dataIbu', 'provinsi', 'kecamatan', 'kabupaten', 'kelurahan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateIbu(Request $request, $id)
    {

        $dataIbu = dataIbu::find($id);
            $dataIbu->update($request->all());

            return redirect()->route('dataIbus')
                            ->with('sukses', 'Data Berhasil Diperbarui !');
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
                        ->with('sukses', 'Data Berhasil DiHapus !');
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
        $skcks = SKCK::paginate(5);
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
    public function updateSKCK(Request $request, $id)
    {

        $skcks = SKCK::find($id);
            $skcks->update($request->all());

            return redirect()->route('skck')
                            ->with('sukses', 'Data Berhasil Diperbarui !');
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
                        ->with('sukses', 'Data Berhasil DiHapus !');
    }
}
