<?php
include "k.php" ;

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=penduduk_sementara.xls");
?>

<H1>B.4 BUKU PENDUDUK SEMENTARA</H1>


<style type="text/css">
    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
      overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
      font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg .tg-baqh{text-align:center;vertical-align:top}
    .tg .tg-amwm{font-weight:bold;text-align:center;vertical-align:top}
    </style>
    <table class="tg">
    <thead>
      <tr>
        <th class="tg-amwm" rowspan="2">NOMOR<br>URUT</th>
        <th class="tg-amwm" rowspan="2">NAMA<br>LENGKAP</th>
        <th class="tg-amwm" colspan="2">JENIS<br>KELAMIN</th>
        <th class="tg-amwm" rowspan="2">NOMOR<br>IDENTITAS/<br>TANDA PENGENAL</th>
        <th class="tg-amwm" rowspan="2">TEMPAT DAN<br>TANGGAL<br>LAHIR/ UMUR</th>
        <th class="tg-amwm" rowspan="2">PEKER<br>JAAN</th>
        <th class="tg-amwm" colspan="2">KEWARGANEGARAAN</th>
        <th class="tg-amwm" rowspan="2">DATANG DARI</th>
        <th class="tg-amwm" rowspan="2">MAKSUD DAN TUJUAN<br>KEDATANGAN</th>
        <th class="tg-amwm" rowspan="2">NAMA DAN<br>ALAMAT YG<br>DIDATANGI</th>
        <th class="tg-amwm" rowspan="2">DATANG<br>TANGGAL</th>
        <th class="tg-amwm" rowspan="2">PERGI TANGGAL</th>
        <th class="tg-amwm" rowspan="2">KET</th>
      </tr>
      <tr>
        <td class="tg-baqh">L</td>
        <td class="tg-baqh">P</td>
        <td class="tg-baqh">KEBANGSAAN</td>
        <td class="tg-baqh">KETURUNAN</td>
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
      </tr>
<?php
$no = 1 ;
?>
      @foreach ($sementara as $item)


      <tr>
        <td class="tg-baqh"><?php echo $no++ ?></td>
        <td class="tg-baqh">{{$item->nama}}</td>
        <td class="tg-baqh"><?php
        $jk = $item->sex ;
            if($jk == 1 ) {
                echo "YA" ;
            }
        ?></td>
        <td class="tg-baqh"><?php
            $jk = $item->sex ;
                if($jk == 2 ) {
                    echo "YA" ;
                }
            ?></td>
        <td class="tg-baqh">{{$item->nik}}</td>
        <td class="tg-baqh">{{$item->tempatlahir}}, <?php echo date("d-m-Y",strtotime($item->tanggallahir))?></td>
        <td class="tg-baqh"><?php
        $pekerjaan = $item->pekerjaan_id ;
        //echo $pekerjaan ;
        $q = mysqli_query($kon,"SELECT *  FROM `tweb_penduduk_pekerjaan` WHERE `id` = '$pekerjaan'") ;
        $t = mysqli_fetch_array($q) ;
        echo $t["nama"] ;
        ?></td>
        <td class="tg-baqh"><?php
            $id = $item->warganegara_id ;
            //echo $pekerjaan ;
            $q = mysqli_query($kon,"SELECT * FROM `tweb_penduduk_warganegara` WHERE `id` = '$id'") ;
            $t = mysqli_fetch_array($q) ;
            echo $t["nama"] ;
            ?></td>
        <td class="tg-baqh"></td>
        <td class="tg-baqh">{{$item->alamat_sebelumnya}}</td>
        <td class="tg-baqh"></td>
        <td class="tg-baqh"></td>
        <td class="tg-baqh"></td>
        <td class="tg-baqh"></td>
        <td class="tg-baqh"></td>
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
