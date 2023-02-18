<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
Use App\Models\Role;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Polres;
use App\Models\Satwil;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create([
            'role_name' => 'admin',
        ]);

        Role::create([
            'role_name' => 'user',
        ]);

        User::factory(5)->create();

                    // Seeding Polres
                    Polres::truncate();
                    Polres::create([
                        'name' => 'Polresta Banjarmasin',
                    ]);
                    Polres::create([
                        'name' => 'Polres Balangan',
                    ]);
                    Polres::create([
                        'name' => 'Polres Banjar',
                    ]);
                    Polres::create([
                        'name' => 'Polres Banjarbaru',
                    ]);
                    Polres::create([
                        'name' => 'Polres Barito Kuala',
                    ]);
                    Polres::create([
                        'name' => 'Polres Hulu Sungai Selatan',
                    ]);
                    Polres::create([
                        'name' => 'Polres Hulu Sungai Tengah',
                    ]);
                    Polres::create([
                        'name' => 'Polres Hulu Sungai Utara',
                    ]);
                    Polres::create([
                        'name' => 'Polres Kotabaru',
                    ]);
                    Polres::create([
                        'name' => 'Polres Tabalong',
                    ]);
                    Polres::create([
                        'name' => 'Polres Tanah Bumbu',
                    ]);
                    Polres::create([
                        'name' => 'Polres Tanah Laut',
                    ]);
                    Polres::create([
                        'name' => 'Polres Tapin',
                    ]);
            
                        // Seeding Provinsi
                    Provinsi::truncate();
                    Provinsi::create([
                        'name' => 'Kalimantan Selatan',
                    ]);
                    Provinsi::create([
                        'name' => 'Kalimantan Barat',
                    ]);
                    Provinsi::create([
                        'name' => 'Kalimantan Timur',
                    ]);
                    Provinsi::create([
                        'name' => 'Kalimantan Utara',
                    ]);
            
                        // Seeding Kabupaten
                    Kabupaten::truncate();
                    Kabupaten::create([
                        'name' => 'Kab. Balangan',
                    ]);
                    Kabupaten::create([
                        'name' => 'Kab. Banjar',
                    ]);
                    Kabupaten::create([
                        'name' => 'Kab. Barito Kuala',
                    ]);
                    Kabupaten::create([
                        'name' => 'Kab. Hulu Sungai Utara',
                    ]);
                    Kabupaten::create([
                        'name' => 'Kab. Hulu Sungai Tengah',
                    ]);
                    Kabupaten::create([
                        'name' => 'Kab. Hulu Sungai Selatan',
                    ]);
                    Kabupaten::create([
                        'name' => 'Kab. Tanah Laut',
                    ]);
                    Kabupaten::create([
                        'name' => 'Kota Banjarbaru',
                    ]);
                    Kabupaten::create([
                        'name' => 'Kota Banjarmasin',
                    ]);
            
                        //Seeding Kecamatan
                    Kecamatan::truncate();
                    Kecamatan::create([
                        'name' => 'Banjarmasin Utara',
                    ]);
                    Kecamatan::create([
                        'name' => 'Banjarmasin Barat',
                    ]);
                    Kecamatan::create([
                        'name' => 'Banjarmasin Tengah',
                    ]);
                    Kecamatan::create([
                        'name' => 'Banjarmasin Timur',
                    ]);
                    Kecamatan::create([
                        'name' => 'Banjarmasin Selatan',
                    ]);
            
                        //Seeding Kelurahan
                    Kelurahan::truncate();
                    Kelurahan::create([
                        'name' => 'Basirih',
                    ]);
                    Kelurahan::create([
                        'name' => 'Belitung Selatan',
                    ]);
                    Kelurahan::create([
                        'name' => 'Belitung Utara',
                    ]);
                    Kelurahan::create([
                        'name' => 'Kuin Cerucuk',
                    ]);
                    Kelurahan::create([
                        'name' => 'Kuin Selatan',
                    ]);
                    Kelurahan::create([
                        'name' => 'Basirih',
                    ]);
                    Kelurahan::create([
                        'name' => 'Telaga Biru',
                    ]);
                    Kelurahan::create([
                        'name' => 'Telawang',
                    ]);
                    Kelurahan::create([
                        'name' => 'Teluk Tiram',
                    ]);

    }
}
