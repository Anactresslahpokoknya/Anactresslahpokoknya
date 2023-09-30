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
        Schema::create('tanggapan',function(Blueprint $pi){
            $pi->integer('id_tanggapan')->primary();
            $pi->integer('id_pengaduan');
            $pi->date('tgl_tanggapan');
            $pi->text('tanggapan');
            $pi->integer('id_petugas,');
            $pi->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('tanggapan');
    }
};