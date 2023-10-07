<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;

class PengaduanController extends Controller
{
    public function tampilpengaduan()
    {
        return view('pengaduan');
    }

    public function tambahpengaduan()
    {
        return view('tambahpengaduan');
    }

    public function simpanpengaduan(Request $request)
    {
        $santri = Pengaduan::create([
            'id_pengaduan' => $request->id_pengaduan,
            'tgl_pengaduan' => $request->tgl_pengaduan,
            'nik' => $request->nik,
            'isi_laporan' => $request->isi_laporan,
            'foto' => $request->foto,
            'status' => $request->status,
        ]);

        return redirect()->route('tampilpengaduan');
    }
}


