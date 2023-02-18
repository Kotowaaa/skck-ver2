<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Satwil;
use App\Models\dataDiri;
use App\Models\dataAyah;
use App\Models\dataIbu;

class Provinsi extends Model
{
    use HasFactory;

    protected $table = 'provinsi';

    protected $fillable = [
        'name',
        'status',
    ];

    public function satwil()
    {
        return $this->hasMany(Satwil::class, 'provinsi_id', 'id');
    }

    public function dataDiri()
    {
        return $this->hasMany(dataDiri::class, 'provinsi_id', 'id');
    }

    public function dataAyah()
    {
        return $this->hasMany(dataAyah::class, 'provinsi_id', 'id');
    }

    public function dataIbu()
    {
        return $this->hasMany(dataIbu::class, 'provinsi_id', 'id');
    }

}
