<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;

class dataDiri extends Model
{
    use HasFactory;

    protected $table = 'data_diri';

    protected $fillable = [
        'nama',
        'tempat_lahir',
        'tgl_lahir',
        'jenis_kelamin',
        'status',
        'kewarganegaraan',
        'agama',
        'no_telp',
        'alamat',
        'provinsi_id',
        'kabupaten_id',
        'kecamatan_id',
        'kelurahan_id',
    ];

    public function p()
    {
        return $this->belongsTo(Provinsi::class, 'provinsi_id', 'id');
    }

    public function ka()
    {
        return $this->belongsTo(Kabupaten::class, 'kabupaten_id', 'id');
    }
    
    public function k()
    {
        return $this->belongsTo(Kecamatan::class, 'kecamatan_id', 'id');
    }

    public function ke()
    {
        return $this->belongsTo(Kelurahan::class, 'kelurahan_id', 'id');
    }
}
