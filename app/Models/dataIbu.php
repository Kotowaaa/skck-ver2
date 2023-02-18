<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;

class dataIbu extends Model
{
    use HasFactory;

    protected $table = 'data_Ibu';

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

    public function pro()
    {
        return $this->belongsTo(Provinsi::class, 'provinsi_id', 'id');
    }

    public function kabu()
    {
        return $this->belongsTo(Kabupaten::class, 'kabupaten_id', 'id');
    }

    public function kec()
    {
        return $this->belongsTo(Kecamatan::class, 'kecamatan_id', 'id');
    }


    public function kelu()
    {
        return $this->belongsTo(Kelurahan::class, 'kelurahan_id', 'id');
    }
}
