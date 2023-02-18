<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;

class dataAyah extends Model
{
    use HasFactory;

    protected $table = 'data_Ayah';

    protected $fillable = [
        'nama',
        'umur',
        'agama',
        'kewarganegaraan',
        'pekerjaan',
        'alamat',
        'provinsi_id',
        'kabupaten_id',
        'kecamatan_id',
        'kelurahan_id',
    ];

    public function pr()
    {
        return $this->belongsTo(Provinsi::class, 'provinsi_id', 'id');
    }

    public function kab()
    {
        return $this->belongsTo(Kabupaten::class, 'kabupaten_id', 'id');
    }
    
    public function ke()
    {
        return $this->belongsTo(Kecamatan::class, 'kecamatan_id', 'id');
    }


    public function kel()
    {
        return $this->belongsTo(Kelurahan::class, 'kelurahan_id', 'id');
    }
}
