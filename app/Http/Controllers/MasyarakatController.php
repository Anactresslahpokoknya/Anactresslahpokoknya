<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    public function index()
    {
        return view('masyarakat');
    }
    public function registrasi()
    {
        return view('Masyarakat.registrasi');
    }
    public function simpan(Request $request)
    {
        $V = new Masyarakat();

        $cek = $request->validate([
            'nik' => 'required|unique:Masyarakat|max:16',
            'nama' => 'required',
            'username' => 'required|min:6',
            'password' => 'required|min:4',
            'telp' => 'required|max:13'
        ]);

        $V->create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => $request->password,
            'telp' => $request->telp,
        ]);

        return back()->with('pesan', 'selamat, registrasi berhasil');
    }
    public function Login()
    {
        return view('masyarakat.login');
    }
    public function cekLogin(Request $request)
    {
        $faizal = new Masyarakat();
        //cek username dan password exists (ada) di tabel masyarakat

        if ($faizal->where('username', $request->input('username'))->where('password', $request->input('password'))->exists()) {
            return redirect('dashboard');
        }
        return back()->with('pesan','awokwok gagal nt nagbb');
    }
}