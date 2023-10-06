@extends('master')

@section('konten')
<h3>Tampil Data Satri</h3>
<a class="btn btn-success" href="{{route('tambahsantri')}}"><i class="fa fa-plus"></i> Tambah Santri</a>
@endsection

@extends('master')

@section('konten')
<h3>Form Input Santri</h3>
<form method="post" action="{{route('simpansantri')}}">
  @csrf
  <div class="form-group">
    <label>Id Pengaduan</label>
    <input type="id" name="id_pengaduan" class="form-control" placeholder="Id pengaduan" required="">
  </div>
  <div class="form-group">
    <label>Tgl pengaduan</label>
    <input type="date" name="tgl-pengaduan" class="form-control" placeholder="Tgl pengaduan" required="">
  </div>
  <div class="form-group">
    <label>Tanggapan</label>
    <input type="text" name="tanggapan" class="form-control" placeholder="Tanggapan" required="">
  </div>
  <div class="form-group">
    <label>Id petugas</label>
    <input type="id" name="id_petugas" class="form-control" placeholder="Id petugas" required="">
  </div>
  <div class="form-group text-right">
    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Data</button>
  </div>
</form>
@endsection