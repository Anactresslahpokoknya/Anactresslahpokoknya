<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;

    protected $table = 'santri';
    protected $primaryKey = 'id_tanggapan';
    protected $fillable = ['id_pengaduan', 'tanggapan', 'id_petugas'];
}