<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SKCK extends Model
{
    use HasFactory;

    protected $table = 'skck';

    protected $fillable = [
        'no_skck',
        'no_ktp',
        'keperluan',
        'dibuat_tanggal',
        'sampai_tanggal',
    ];
}
