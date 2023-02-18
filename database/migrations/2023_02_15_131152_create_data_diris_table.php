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
        Schema::create('data_diri', function (Blueprint $table) {
            $table->id();
            $table->string('namaDiri');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->enum('status_pernikahan', ['Nikah', 'Belum Nikah']);
            $table->enum('kewarganegaraan', ['WNI', 'WNA']);
            $table->enum('agama', [
                'Islam',
                'Kristen Khatolik',
                'Kristen Protestan',
                'Hindu',
                'Budha',
                'Khonghucu'
            ]);
            $table->enum('pekerjaan', [
                'Belum/Tidak Bekerja',
                'Pelajar/Mahasiswa',
                'Karyawan Swasta',
                'Wiraswasta'
            ]);
            $table->integer('no_telp');
            $table->mediumText('alamat');
            $table->integer('provinsi_id');
            $table->integer('kabupaten_id');
            $table->integer('kecamatan_id');
            $table->integer('kelurahan_id');
            $table->integer('no_e_ktp');
            $table->integer('no_kartu_keluarga');
            $table->tinyInteger('status')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_diri');
    }
};
