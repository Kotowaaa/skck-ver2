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
        Schema::create('SKCK', function (Blueprint $table) {
            $table->id();
            $table->string('no_skck');
            $table->string('no_ktp');
            $table->mediumText('keperluan');
            $table->date('dibuat_tanggal');
            $table->date('sampai_tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('s_k_c_k_s');
    }
};
