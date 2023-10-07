<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan Masyarakat</title>
    <a class="btn btn-success" href="{{route('tambahpengaduan')}}"><i class="fa fa-plus"></i> Tambah Pengaduan</a>
    <style>
        * {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
/* The container must be positioned relative: */
.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element: */
}

.select-selected {
  background-color: DodgerBlue;
}

/* Style the arrow inside the select element: */
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/* Point the arrow upwards when the select box is open (active): */
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/* style the items (options), including the selected item: */
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
}

/* Style items (options): */
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/* Hide the items when the select box is closed: */
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
    </style>
</head>
<body>
  <h3>Form Input Pengaduan</h3>
  <form method="post" action="{{route('simpanpengaduan')}}">
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
      <label>Nik</label>
      <input type="text" name="nik" class="form-control" placeholder="Tanggapan" required="">
    </div>
    <div class="form-group">
      <label>Isi laporan</label>
      <input type="text" name="isi_laporan" class="form-control" placeholder="Id petugas" required="">
    </div>
    <div class="form-group">
      <label>Foto</label>
      <input type="file" name="foto" class="form-control" placeholder="Id petugas" required="">
    </div>
    <div class="form-group">
      <label>Status</label>
      <input type="id" name="id_petugas" class="form-control" placeholder="Id petugas" required="">
    </div>
    <div class="form-group text-right">
      <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Data</button>
    </div>
  </form>
  @endsection