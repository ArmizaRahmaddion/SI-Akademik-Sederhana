<!DOCTYPE html>
<html lang="en">
<head>
  <title>data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <style>
    body {
      padding-top: 70px; /* Add some padding to the top of the body to accommodate the fixed navbar */
      background-color: #f8f9fa; /* Set a light background color */
    }

    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      background-color: #343a40; /* Set the background color for the navbar */
      border: none; /* Remove the border */
    }

    .navbar-brand {
      font-size: 24px;
      color: #fff;
    }

    .navbar-inverse .navbar-nav > li > a {
      color: #fff;
      font-size: 16px;
      padding: 15px 20px; /* Add more padding to the links for better spacing */
      transition: background-color 0.3s; /* Add a smooth transition for background color changes */
    }

    .navbar-inverse .navbar-nav > li > a:hover,
    .navbar-inverse .navbar-nav > li > a:focus {
      background-color: #555; /* Change the background color on hover or focus */
    }

    /* Add some spacing between navbar and content */
    .container-fluid {
      margin-top: 20px;
    }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Selamat Datang di Web Saya</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{url('/perkalian')}}">Perkalian</a></li>
      <li><a href="{{url('/penjumlahan')}}">Penjumlahan</a></li>
      <li><a href="{{url('/daftarbarang')}}">Daftar Barang</a></li>
      <li><a href="{{url('/berita/1')}}">Berita</a></li>
      <li><a href="{{url('/mahasiswa')}}">Daftar data mahasiswa</a></li>
      <li><a href="{{url('/matakuliah')}}">Daftar mata kuliah</a></li>
      <li><a href="{{url('/dosen')}}">Daftar data dosen</a></li>
      <li><a href="{{url('/fakultas')}}">Daftar data fakultas</a></li>
      <li><a href="{{url('/prodi')}}">Daftar data prodi</a></li>
      <li><a href="{{url('/tahunakademik')}}">Daftar data tahunakademik</a></li>
      <li><a href="{{url('/kelas')}}">Daftar data Kelas</a></li>
      <li><a href="{{url('/ruangan')}}">Daftar data ruang</a></li>
    </ul>
  </div>
</nav>

<div class="container-fluid">
  
</div>

</body>
</html>
