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
        Schema::create('data_ayah', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('umur');
            $table->enum('agama', [
                'Islam',
                'Kristen Khatolik',
                'Kristen Protestan',
                'Hindu',
                'Budha',
                'Khonghucu'
            ]);
            $table->enum('kewarganegaraan', ['WNI', 'WNA']);
            $table->enum('pekerjaan', [
                'Belum/Tidak Bekerja',
                'Pelajar/Mahasiswa',
                'Karyawan Swasta',
                'Wiraswasta'
            ]);
            $table->mediumText('alamat');
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
        Schema::dropIfExists('data_ayah');
    }
};
