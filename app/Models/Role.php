<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

        // untuk memproteksi id
    protected $guarded = ['id'];

        
    // Untuk relasi ke table users
        
        /**
         * Get all of the comments for the Role
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */
        public function users(): HasMany
        {
            return $this->hasMany(User::class);
        }

}
