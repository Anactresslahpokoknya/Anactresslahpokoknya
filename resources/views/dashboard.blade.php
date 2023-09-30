<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        .topnav {
  background-color: #333;
  overflow: hidden;
}
body{
    background-image: url("b.jpg");
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
  <a href="#about">Petugas</a>
  <a href="#about">Tanggapan</a>
</div>
</body>
</html>