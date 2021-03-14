
<?php
$sv = $_SERVER["HTTP_HOST"] ;
//echo $sv ;
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Download Buku Administrasi Pemerintah Desa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{url('/')}}/bootstrap.min.css">
  <script src="{{url('/')}}/jquery.min.js"></script>
  <script src="{{url('/')}}/popper.min.js"></script>
  <script src="{{url('/')}}/bootstrap.min.js"></script>
</head>
<body>



<div class="container">
 <h1>Download Buku Administrasi Pemerintah Desa</h1>

 <hr>

<a href="http://<?php echo $sv ?>/desa" class="btn btn-info">Aplikasi Utama</a> 

<br>
<br>

<h2>A. Administrasi Umum</h2>

 <div class="list-group">
    <a href="{{url('/adumum')}}" class="list-group-item list-group-item-action">A.1 Buku Peraturan Di Desa</a>
    <a href="{{url('/keputusankepaladesa')}}" class="list-group-item list-group-item-action">A.2 BUKU KEPUTUSAN KEPALA DESA</a>
    <a href="{{url('/inventaris')}}" class="list-group-item list-group-item-action">A.3 BUKU INVENTARIS DAN KEKAYAAN DESA</a>
    <a href="{{url('/aparatdesa')}}" class="list-group-item list-group-item-action">A.4 BUKU APARAT PEMERINTAH DESA</a>
    <a href="{{url('/tanahkasdesa')}}" class="list-group-item list-group-item-action">A.5 BUKU TANAH KAS DESA</a>
    <a href="http://<?php echo $sv ?>/desa/sid2102/index.php/cdesa" class="list-group-item list-group-item-action">A.6 BUKU TANAH DI DESA</a>
    <a href="{{url('/agenda')}}" class="list-group-item list-group-item-action">A.7 BUKU AGENDA</a>
    <a href="{{url('/ekspedisi')}}" class="list-group-item list-group-item-action">A.8 BUKU EKSPEDISI</a>

    <a href="{{url('/lembarandesa')}}" class="list-group-item list-group-item-action">A.9 BUKU LEMBARAN DESA DAN BERITA DESA</a>
  </div>

<br>
<br>

<h2>B. ADMINISTRASI PENDUDUK</h2>
<div class="list-group">

    <a href="{{url('/bukuinduk')}}" class="list-group-item list-group-item-action">B.1 BUKU INDUK PENDUDUK </a>
    <a href="{{url('/mutasipenduduk')}}" class="list-group-item list-group-item-action">B.2 BUKU MUTASI PENDUDUK DESA </a>
    <a href="http://<?php echo $sv ?>/desa/sid2102/index.php/laporan" class="list-group-item list-group-item-action">B.3 BUKU REKAPITULASI JUMLAH PENDUDUK </a>
    <a href="{{url('/penduduksementara')}}" class="list-group-item list-group-item-action">B.4 BUKU PENDUDUK SEMENTARA </a>
    <a href="{{url('/kartukeluarga')}}" class="list-group-item list-group-item-action">B.5 BUKU KARTU TANDA PENDUDUK DAN BUKU KARTU KELUARGA </a>

  </div>


</div>


<br>
<br>

</body>
</html>
