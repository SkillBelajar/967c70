<?php
include "k.php" ;
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=mutasipenduduk.xls");
?>

<H1>B.2 BUKU MUTASI PENDUDUK DESA</H1>



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
        <th class="tg-baqh" rowspan="2">NOMOR<br>URUT</th>
        <th class="tg-baqh" rowspan="2">NAMA<br>LENGKAP/<br>PANGGILAN</th>
        <th class="tg-baqh" colspan="2">TEMPAT &amp;<br>TANGGAL LAHIR</th>
        <th class="tg-baqh" rowspan="2">JENIS<br>KELAMIN</th>
        <th class="tg-baqh" rowspan="2">KEWARGA<br>NEGARAAN</th>
        <th class="tg-baqh" colspan="2">PENAMBAHAN</th>
        <th class="tg-baqh" colspan="4">PENGURANGAN</th>
        <th class="tg-baqh" rowspan="2">KET</th>
      </tr>
      <tr>
        <td class="tg-baqh">TEMPAT</td>
        <td class="tg-baqh">TANGGAL</td>
        <td class="tg-baqh">DATANG<br>DARI</td>
        <td class="tg-baqh">TANGGAL</td>
        <td class="tg-baqh">PINDAH<br>KE</td>
        <td class="tg-baqh">TANGGAL</td>
        <td class="tg-baqh">MENINGGAL</td>
        <td class="tg-baqh">TANGGAL</td>
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
      </tr>
      <?php $no = 1 ?>
      @foreach ($mutasi as $item)


      <tr>
        <td class="tg-baqh"><?php echo $no++ ?></td>
        <td class="tg-baqh"><?php
        //namapenduduk
        $nama = $item->id_pend ;
       // echo $nama ;
            $q = mysqli_query($kon,"SELECT * FROM `tweb_penduduk` WHERE `id` = '$nama'") ;
            $t = mysqli_fetch_array($q) ;
            $status = $t["status"] ;
            if($status == 2 ) {
            }
            else {
                 echo $t["nama"] ;
            }


        ?></td>
        <td class="tg-baqh"><?php
            //TEMPAT LAHIR
            $nama = $item->id_pend ;
           // echo $nama ;
                $q = mysqli_query($kon,"SELECT * FROM `tweb_penduduk` WHERE `id` = '$nama'") ;
                $t = mysqli_fetch_array($q) ;
                $status = $t["status"] ;
            if($status == 2 ) {
            }
            else {
                echo $t["tempatlahir"] ;
            }

            ?></td>
        <td class="tg-baqh"><?php
            //tanggal lahir
            $nama = $item->id_pend ;
           // echo $nama ;
                $q = mysqli_query($kon,"SELECT * FROM `tweb_penduduk` WHERE `id` = '$nama'") ;
                $t = mysqli_fetch_array($q) ;
                $status = $t["status"] ;
            if($status == 2 ) {
            }
            else {
                echo date("d-m-Y",strtotime($t["tanggallahir"]))  ;
            }

            ?></td>
        <td class="tg-baqh"><?php
            //jenis kelamin
            $nama = $item->id_pend ;
           // echo $nama ;
                $q = mysqli_query($kon,"SELECT * FROM `tweb_penduduk` WHERE `id` = '$nama'") ;
                $t = mysqli_fetch_array($q) ;
                $status = $t["status"] ;
            if($status == 2 ) {
            }
            else {
                $sex = $t["sex"] ;


                $qsex = mysqli_query($kon,"SELECT * FROM `tweb_penduduk_sex` WHERE `id` = '$sex'") ;
                $tsex = mysqli_fetch_array($qsex) ;
                echo $tsex["nama"] ;
            }



            ?></td>
        <td class="tg-baqh"><?php
            //wara negara
            $nama = $item->id_pend ;
           // echo $nama ;
                $q = mysqli_query($kon,"SELECT * FROM `tweb_penduduk` WHERE `id` = '$nama'") ;
                $t = mysqli_fetch_array($q) ;

                $status = $t["status"] ;
            if($status == 2 ) {
            }
            else {
                $wg = $t["warganegara_id"] ;


$qsex = mysqli_query($kon,"SELECT * FROM `tweb_penduduk_warganegara` WHERE `id` = '$wg'") ;
$tsex = mysqli_fetch_array($qsex) ;
echo $tsex["nama"] ;
            }



            ?></td>
        <td class="tg-baqh"><?php
        //pendatang dari
          $datang = $item->id_pend ;
          $q = mysqli_query($kon,"SELECT * FROM `tweb_penduduk` WHERE `id` = '$datang' AND `status` = 3 ORDER BY `id` DESC") ;
          $t = mysqli_fetch_array($q) ;
          echo $t["alamat_sebelumnya"]


        ?></td>
        <td class="tg-baqh"><?php
        //tanggal datang ke desa
        $id = $item->id_pend ;

        $q = mysqli_query($kon,"SELECT * FROM `tweb_penduduk` WHERE `id` = '$id' ORDER BY `id` DESC") ;
        $t = mysqli_fetch_array($q) ;
        $st =  $t["status"] ;

        if($st == 3 ) {
          echo date("d-m-Y",strtotime($item->tanggal));
        }

        ?></td>
        <td class="tg-baqh"><?php
        //Data Pimdah ke mana ?
          $id = $item->id_pend ;
        $q = mysqli_query($kon,"SELECT * FROM `tweb_penduduk` WHERE `id` = '$id' AND `status_dasar` = 3") ;
        $t = mysqli_num_rows($q) ;
       // echo $t ;
          if($t == 1 ) {
            echo $item->catatan ;
          }


        ?></td>
        <td class="tg-baqh"><?php
        if($t == 1 ) {
          echo date("d-m-Y",strtotime($item->tanggal)) ;
        }
        ?></td>
        <td class="tg-baqh"><?php
          //meninggal
            $id = $item->id_pend ;
          $q = mysqli_query($kon,"SELECT * FROM `tweb_penduduk` WHERE `id` = '$id' AND `status_dasar` = 2") ;
          $t = mysqli_num_rows($q) ;
         // echo $t ;
            if($t == 1 ) {
              echo $item->catatan ;
            }


          ?></td>
        <td class="tg-baqh"><?php
         if($t == 1 ) {
          echo date("d-m-Y",strtotime($item->tanggal)) ;
        }
        ?></td>
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
