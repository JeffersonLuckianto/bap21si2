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
        Schema::create('jadwalkuliahs', function (Blueprint $table) {
            $table->id();
            $table->text('kode_matakuliah');
            $table->text('kode_term');
            $table->text('kode_dosen');
            $table->char('day',6);
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->char('ruangan',5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwalkuliahs');
    }
};
