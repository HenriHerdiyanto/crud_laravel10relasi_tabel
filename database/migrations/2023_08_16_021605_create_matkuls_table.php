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
        Schema::create('matkuls', function (Blueprint $table) {
            $table->id();

            // Foreign key untuk menghubungkan dengan tabel dosens
            $table->foreignId('dosen_id')->constrained('dosens'); // Tidak menghapus matkul ketika dosen dihapus
            $table->string('nama_matkul');
            $table->string('kode_matkul');
            $table->string('sks');
            $table->string('semester');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matkuls');
    }
};
