<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('satwil', function (Blueprint $table) {
            $table->id();
            $table->enum('satwil', [
                'Polda Kalimantan Selatan',
                'Polda Kalimantan Barat',
                'Polda Kalimantan Timur',
                'Polda Kalimantan Utara',
            ]);
            $table->integer('polres_id');
            $table->enum('polsek', [
                'Polsek Banjarmasin Utara',
                'Polsek Banjarmasin Timur',
                'Polsek Banjarmasin Barat',
                'Polsek Banjarmasin Tengah',
                'Polsek Banjarmasin Selatan'
            ]);
            $table->mediumText('alamat');
            $table->string('rt');
            $table->string('rw');
            $table->integer('provinsi_id');
            $table->integer('kabupaten_id');
            $table->integer('kecamatan_id');
            $table->integer('kelurahan_id');
            $table->tinyInteger('status')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('satwil');
    }
};
