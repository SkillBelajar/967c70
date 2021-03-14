<?php

include "k.php" ;
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=bukuinduk.xls");

?>

<h1>B.1 BUKU INDUK PENDUDUK </h1>

<style type="text/css">
    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
      overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
      font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
    </style>
    <table class="tg">
    <thead>
      <tr>
        <th class="tg-c3ow" rowspan="2">NOMOR<br>URUT</th>
        <th class="tg-c3ow" rowspan="2">NAMA<br>LENGKAP/<br>PANGGILAN</th>
        <th class="tg-c3ow" rowspan="2">JENIS<br>KELAMIN</th>
        <th class="tg-c3ow" rowspan="2">STATUS<br>PERKA<br>WINAN</th>
        <th class="tg-c3ow" colspan="2">TEMPAT &amp;<br>TANGGAL<br>LAHIR</th>
        <th class="tg-c3ow" rowspan="2">AGAMA</th>
        <th class="tg-c3ow" rowspan="2">PENDIDIKAN<br>TERAKHIR</th>
        <th class="tg-c3ow" rowspan="2">PEKERJAAN</th>
        <th class="tg-c3ow" rowspan="2">DAPAT<br>MEM<br>BACA<br>HURUF</th>
        <th class="tg-c3ow" rowspan="2">KE<br>WARGANEGARAAN</th>
        <th class="tg-c3ow" rowspan="2">ALAMAT<br>LENGKAP<br></th>
        <th class="tg-c3ow" rowspan="2">KEDU<br>DUKAN<br>DLM<br>KELU<br>ARGA</th>
        <th class="tg-c3ow" rowspan="2">NIK</th>
        <th class="tg-c3ow" rowspan="2">NOMOR<br>KK</th>
        <th class="tg-c3ow" rowspan="2">KET</th>
      </tr>
      <tr>
        <td class="tg-c3ow">TEMPAT<br>LAHIR</td>
        <td class="tg-c3ow">TGL</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="tg-c3ow">1</td>
        <td class="tg-c3ow">2</td>
        <td class="tg-c3ow">3</td>
        <td class="tg-c3ow">4</td>
        <td class="tg-c3ow">5</td>
        <td class="tg-c3ow">6</td>
        <td class="tg-c3ow">7</td>
        <td class="tg-c3ow">8</td>
        <td class="tg-c3ow">9</td>
        <td class="tg-c3ow">10</td>
        <td class="tg-c3ow">11</td>
        <td class="tg-c3ow">12</td>
        <td class="tg-c3ow">13</td>
        <td class="tg-c3ow">14</td>
        <td class="tg-c3ow">15</td>
        <td class="tg-c3ow">16</td>
      </tr>
      <?php $no = 1 ?>
      @foreach ($penduduk as $item)


      <tr>
        <td class="tg-c3ow"><?php echo $no++ ?></td>
        <td class="tg-c3ow">{{$item->nama}}</td>
        <td class="tg-c3ow"><?php
        //jenis kelamin
        $jk = $item->sex ;
        //echo $jk ;
            $query = mysqli_query($kon,"SELECT * FROM `tweb_penduduk_sex` WHERE `id` = '$jk'") ;
            $t = mysqli_fetch_array($query) ;
            echo $t["nama"] ;
        ?></td>
        <td class="tg-c3ow">
            <?php
        //status_kawan
        $sk =   $item->status_kawin ;
        //echo $sk ;
        $query = mysqli_query($kon,"SELECT * FROM `tweb_penduduk_kawin` WHERE `id` = '$sk'") ;
        $t = mysqli_fetch_array($query) ;
        //echo $t["nama"] ;
            ?>
        </td>
        <td class="tg-c3ow">{{$item->tempatlahir}}</td>
        <td class="tg-c3ow"><?php
        //tangal lahir
        echo date("d-m-Y",strtotime($item->tanggallahir))
        ?></td>
        <td class="tg-c3ow"><?php
        //agama
        $agama = $item->agama_id ;
       // echo $agama ;
        $query = mysqli_query($kon,"SELECT * FROM `tweb_penduduk_agama` WHERE `id` = '$agama'") ;
        $t = mysqli_fetch_array($query) ;
        echo $t["nama"] ;
        ?></td>
        <td class="tg-c3ow"><?php
        //pendidikan
            $pd = $item->pendidikan_kk_id ;
            //echo $pd ;
            $query  = mysqli_query($kon,"SELECT * FROM `tweb_penduduk_pendidikan_kk` WHERE `id` = '$pd'") ;
            $t = mysqli_fetch_array($query) ;
            echo $t["nama"] ;
        ?></td>
        <td class="tg-c3ow"><?php
            //pekerjaaan
            $pk = $item->pekerjaan_id ;
            //echo $pk ;

            $query = mysqli_query($kon,"SELECT * FROM `tweb_penduduk_pekerjaan` WHERE `id` = '$pk'") ;
            $t = mysqli_fetch_array($query) ;
            echo $t["nama"] ;

        ?></td>

        <td class="tg-c3ow"></td>

        <td class="tg-c3ow"><?php
            //warganegara

                $wr = $item->warganegara_id ;
              //  echo $wr ;
                $query = mysqli_query($kon,"SELECT * FROM `tweb_penduduk_warganegara` WHERE `id` = '$wr'") ;
                $t = mysqli_fetch_array($query) ;
                echo $t["nama"] ;


            ?></td>
        <td class="tg-c3ow"><?php
        //data cluster atau alamat
        $idc = $item->id_kk  ;
        //echo $idc ;

          $query = mysqli_query($kon,"SELECT * FROM `tweb_keluarga` WHERE `id` = '$idc'") ;
          $t  = mysqli_fetch_array($query) ;
          echo $t["alamat"] ;

        ?></td>
        <td class="tg-c3ow"><?php
        //hubungan daam keluarga
            $hb = $item->kk_level ;
            //echo $hb ;

            $query = mysqli_query($kon,"SELECT * FROM `tweb_penduduk_hubungan` WHERE `id` = '$hb'") ;
            $t = mysqli_fetch_array($query) ;
            echo $t["nama"] ;


        ?></td>
        <td class="tg-c3ow">{{$item->nik}}</td>
        <td class="tg-c3ow"><?php
            //data nomor KK
            $idc = $item->id_kk ;
            //echo $idc ;

              $query = mysqli_query($kon,"SELECT * FROM `tweb_keluarga` WHERE `id` = '$idc'") ;
              $t  = mysqli_fetch_array($query) ;
              echo $t["no_kk"] ;

            ?></td>
        <td class="tg-c3ow"></td>
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
