<?php
include "k.php" ;

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=tanah_kas_desa.xls");
?>

<H1>A.5 BUKU TANAH KAS DESA</H1>


<style type="text/css">
    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
      overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
      font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg .tg-baqh{text-align:center;vertical-align:top}
    </style>
    <table class="tg">
    <thead>
      <tr>
        <th class="tg-baqh" rowspan="3">NMOR<br>URU</th>
        <th class="tg-baqh" rowspan="3">ASAL<br>TANAH<br>KAS<br>DESA<br></th>
        <th class="tg-baqh" rowspan="3">NOMOR<br>SERTIFIKAT<br>BUKU<br>LETTER<br>C/<br>PERSIL<br></th>
        <th class="tg-baqh" rowspan="3">LUAS<br>(m)</th>
        <th class="tg-baqh" rowspan="3">KELAS</th>
        <th class="tg-baqh" colspan="6">PEROLEHAN TKD</th>
        <th class="tg-baqh" colspan="5">JENIS TKD</th>
        <th class="tg-baqh" colspan="2">PATOK<br>TANDA<br>BATAS</th>
        <th class="tg-baqh" colspan="2">PAPAN<br>NAMA</th>
        <th class="tg-baqh" rowspan="3">LOKASI</th>
        <th class="tg-baqh" rowspan="3">PERUNTUKKAN</th>
        <th class="tg-baqh" rowspan="3">MUTASI</th>
        <th class="tg-baqh" rowspan="3">KET</th>
      </tr>
      <tr>
        <td class="tg-baqh" rowspan="2">ASLI<br>MILIK<br>DESA</td>
        <td class="tg-baqh" colspan="3">BANTUAN</td>
        <td class="tg-baqh" rowspan="2">LAIN-<br>LAIN</td>
        <td class="tg-baqh" rowspan="2">TGL<br>PEROLEHAN</td>
        <td class="tg-baqh" rowspan="2">SAWAH</td>
        <td class="tg-baqh" rowspan="2">TEGAL</td>
        <td class="tg-baqh" rowspan="2">KEBUN</td>
        <td class="tg-baqh" rowspan="2">TAMBAK/<br>KOLAM</td>
        <td class="tg-baqh" rowspan="2">TANAH<br>KERING/<br>DARAT</td>
        <td class="tg-baqh" rowspan="2">ADA</td>
        <td class="tg-baqh" rowspan="2">TIDAK</td>
        <td class="tg-baqh" rowspan="2">ADA</td>
        <td class="tg-baqh" rowspan="2">TIDAK</td>
      </tr>
      <tr>
        <td class="tg-baqh">PEME<br>RINTAH</td>
        <td class="tg-baqh">PROV</td>
        <td class="tg-baqh">KAB/<br>KOTA</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="tg-baqh">1</td>
        <td class="tg-baqh">2</td>
        <td class="tg-baqh">3</td>
        <td class="tg-baqh">4</td>
        <td class="tg-baqh">5</td>
        <td class="tg-baqh">6</td>
        <td class="tg-baqh">7</td>
        <td class="tg-baqh">8</td>
        <td class="tg-baqh">9</td>
        <td class="tg-baqh">10</td>
        <td class="tg-baqh">11</td>
        <td class="tg-baqh">12</td>
        <td class="tg-baqh">13</td>
        <td class="tg-baqh">14</td>
        <td class="tg-baqh">15</td>
        <td class="tg-baqh">16</td>
        <td class="tg-baqh">17</td>
        <td class="tg-baqh">18</td>
        <td class="tg-baqh">19</td>
        <td class="tg-baqh">20</td>
        <td class="tg-baqh">21</td>
        <td class="tg-baqh">22</td>
        <td class="tg-baqh">23</td>
        <td class="tg-baqh">24</td>
      </tr>
<?php
$no = 1 ;
?>
     @foreach ($tanahkas as $item)


      <tr>
        <td class="tg-baqh"><?php echo $no++ ?></td>
        <td class="tg-baqh">{{$item->asal}}</td>
        <td class="tg-baqh">{{$item->no_sertifikat}}</td>
        <td class="tg-baqh">{{$item->luas}}</td>
        <td class="tg-baqh"></td>
        <td class="tg-baqh"></td>
        <td class="tg-baqh"></td>
        <td class="tg-baqh"></td>
        <td class="tg-baqh"></td>
        <td class="tg-baqh"></td>
        <td class="tg-baqh"></td>
        <td class="tg-baqh"></td>
        <td class="tg-baqh"></td>
        <td class="tg-baqh"></td>
        <td class="tg-baqh"></td>
        <td class="tg-baqh"></td>
        <td class="tg-baqh"></td>
        <td class="tg-baqh"></td>
        <td class="tg-baqh"></td>
        <td class="tg-baqh"></td>
        <td class="tg-baqh">{{$item->letak}}</td>
        <td class="tg-baqh">{{$item->penggunaan}}</td>
        <td class="tg-baqh"><?php
        $status = $item->status ;
        //echo $status ;

          if($status == 1 ) {
              $id = $item->id ;
              //echo $id ;
              $query = mysqli_query($kon,"SELECT * FROM `mutasi_inventaris_tanah` WHERE `id_inventaris_tanah` = '$id'
") ;
            $t = mysqli_fetch_array($query) ;
            echo $t["jenis_mutasi"] ;
            echo "<br><br>Tahun Mutasi : ".date("d-m-Y",strtotime($t["tahun_mutasi"])) ;
            echo "<br><br>Keterangan : ".$t["keterangan"] ;
          }

        ?></td>
        <td class="tg-baqh">{{$item->keterangan}}</td>
      </tr>

      @endforeach
    </tbody>
    </table>
<br>
<br>

<table style="width:100%">
    <tr>
      <th>MENGETAHUI
          <br>
          <u>KEPALA DESA</u>
          <br>
          <br>
          <br>
          <br>
          <u>{{$kepdes}}</u>
      </th>

      <th>Ketapang , <?php echo date("d-m-Y")?>
        <br>
        SEKRETARIS DESA {{$nama_desa}}
        <br>
          <br>
          <br>
          <br>
          <u>................................</u>



      </th>

    </tr>

  </table>
