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
        Schema::create('petugas',function(Blueprint $petugas){
            $petugas->integer('id_petugas')->primary();
            $petugas->string('nama_petugas',35);
            $petugas->string('username',25);
            $petugas->string('password',32);
            $petugas->string('telp',13);
            $petugas->enum('level',['admin', 'petugas']);
            $petugas->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('petugas');   
    }
};
