<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
      body{
        background: rgb(255, 255, 255)
      }
      h1{
        justify-content: center
        padding: 100px 0 10px 0;
        display:flex;
      }
      header{
        font-size: 27px;
        justify-content: center
        padding: 100px 0 10px 0;
        display:flex;
      }
        .topnav {
  background-color: #333;
  overflow: hidden;
}
body{
    background-image: url("#");
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;r
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
    </style>
</head>
<body>
<div class="topnav">
  <a class="active" href="#">Lapor</a>
  <a href="{{url('masyarakat')}}">Masyarakat</a>
  <a href="{{url('pengaduan')}}">Pengaduan</a>
  <a href="{{url('petugas')}}">Petugas</a>
  <a href="{{url('tanggapan')}}">Tanggapan</a>
</div>
<div>
  <h1>Lapor!</h1>
  <header>Layanan Aspirasi dan Pengaduan Online Rakyat
    Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang</header>
</div>
</body>
</html>