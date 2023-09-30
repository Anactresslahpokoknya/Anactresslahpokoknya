<?php

use App\Http\Controllers\MasyarakatController;
use App\Models\Masyarakat;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('dashboard', function () {
    return view('dashboard');
});


Route::get('pengaduan', function () {
    return view('pengaduan');
});

Route::get('petugas', function () {
    return view('petugas');
});

Route::get('tanggapan', function () {
    return view('tanggapan');
});

Route::get('masyarakat',[MasyarakatController::class,'index']);
Route::get('registrasi',[MasyarakatController::class,'registrasi']);
Route::post('simpan',[MasyarakatController::class,'simpan']);
Route::get('masyarakat/login',[MasyarakatController::class,'Login']);
Route::post('masyarakat/login',[MasyarakatController::class,'cekLogin']);