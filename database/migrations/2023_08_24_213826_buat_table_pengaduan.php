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
        Schema::create('pengaduan',function(Blueprint $pengaduan){
            $pengaduan->integer('id_pengaduan')->primary();
            $pengaduan->date('tgl_pengaduan');
            $pengaduan->string('nik',16);
            $pengaduan->text('isi_laporan');
            $pengaduan->string('foto',255);
            $pengaduan->enum('status', ['proses', 'selesai']);
            $pengaduan->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('pengaduan');   
    }
};
