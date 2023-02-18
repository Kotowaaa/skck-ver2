<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Polres;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;

class Satwil extends Model
{
    use HasFactory;

    protected $table = 'satwil';

    protected $fillable = [
        'satwil',
        'polres_id',
        'polsek',
        'alamat',
        'rt',
        'rw',
        'provinsi_id',
        'kecamatan_id',
        'kabupaten_id',
        'kelurahan_id',
    ];

    public function polres()
    {
        return $this->belongsTo(Polres::class, 'polres_id', 'id');
    }

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, 'provinsi_id', 'id');
    }

    public function kabupaten()
    {
        return $this->belongsTo(Kabupaten::class, 'kabupaten_id', 'id');
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'kecamatan_id', 'id');
    }

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class, 'kelurahan_id', 'id');
    }
}
