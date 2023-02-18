<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Satwil;

class Polres extends Model
{
    use HasFactory;

    protected $table = 'polres';

    protected $fillable = [
        'name',
        'status'
    ];

    public function satwil()
    {
        return $this->hasMany(Satwil::class, 'polres_id', 'id');
    }
}
