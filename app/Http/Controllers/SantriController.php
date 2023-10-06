<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SantriModel;

class SantriController extends Controller
{
    public function tampilsantri()
    {
        return view('tampilsantri');
    }

    public function tambahsantri()
    {
        return view('tambahsantri');
    }

    public function simpansantri(Request $request)
    {
        $santri = SantriModel::create([
            'id_pengaduan' => $request->id_pengaduan,
            'tgl_pengaduan' => $request->tgl_pengaduan,
            'tanggapan' => $request->tanggapan,
            'id_petugas' => $request->id_petugas,
        ]);

        return redirect()->route('tampilsantri');
    }
}