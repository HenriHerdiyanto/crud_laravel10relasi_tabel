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
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->foreign('id_mahasiswa')->references('id')->on('mahasiswas');
            $table->foreign('id_matkuls')->references('id')->on('matkuls');
            $table->integer('nilai');
            // Foreign key untuk tabel mahasiswas dan matakuliahs

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilais');
    }
};
