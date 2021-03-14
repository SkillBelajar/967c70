<?php
include "k.php" ;
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=keluarga.xls");
?>

<h1>B.5 BUKU KARTU TANDA PENDUDUK DAN BUKU KARTU KELUARGA</h1>


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
        <th class="tg-c3ow" rowspan="2">NO.<br>KK</th>
        <th class="tg-c3ow" rowspan="2">NAMA<br>LENGKAP</th>
        <th class="tg-c3ow" rowspan="2">NIK</th>
        <th class="tg-c3ow" rowspan="2">JENIS<br>KELAMIN</th>
        <th class="tg-c3ow" rowspan="2">TEMPAT/<br>TANGGAL<br>LAHIR</th>
        <th class="tg-c3ow" rowspan="2">Gol.<br>Darah</th>
        <th class="tg-c3ow" rowspan="2">AGAMA</th>
        <th class="tg-c3ow" rowspan="2">PENDIDIKAN</th>
        <th class="tg-c3ow" rowspan="2">PEKERJAAN</th>
        <th class="tg-c3ow" rowspan="2">ALAMAT</th>
        <th class="tg-c3ow" rowspan="2">STATUS<br>PERKAWINAN</th>
        <th class="tg-c3ow" rowspan="2">TEMPAT DAN<br>TANGGAL<br>DIKELUARKAN</th>
        <th class="tg-c3ow" rowspan="2">STATUS<br>HUB.<br>KELUARGA</th>
        <th class="tg-c3ow" rowspan="2">KEWARGANEGARAAN</th>
        <th class="tg-c3ow" colspan="2">ORANG TUA<br></th>
        <th class="tg-c3ow" rowspan="2">TGL<br>MULAI<br>TINGGAL<br>DI DESA</th>
        <th class="tg-c3ow" rowspan="2">KET</th>
      </tr>
      <tr>
        <td class="tg-c3ow">AYAH</td>
        <td class="tg-c3ow">IBU</td>
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
        <td class="tg-c3ow">17</td>
        <td class="tg-c3ow">18</td>
        <td class="tg-c3ow">19</td>
      </tr>
      <?php
        $no = 1 ;
      ?>
      @foreach ($kk as $item)

      <tr>
        <td class="tg-c3ow"><?php echo $no++ ?></td>
        <td class="tg-c3ow">{{$item->no_kk}}</td>
        <td class="tg-c3ow"><?php
        //naama penduduk
            $id_kk = $item->nik_kepala ;
          //  echo $id_kk ;
            $q = mysqli_query($kon,"SELECT * FROM `tweb_penduduk` WHERE `id` = '$id_kk'") ;
            $t = mysqli_fetch_array($q) ;
            echo $t["nama"] ;

        ?></td>
        <td class="tg-c3ow"><?php
            //naama penduduk
                $id_kk = $item->nik_kepala ;
              //  echo $id_kk ;
                $q = mysqli_query($kon,"SELECT * FROM `tweb_penduduk` WHERE `id` = '$id_kk'") ;
                $t = mysqli_fetch_array($q) ;
                echo $t["nik"] ;

            ?></td>
        <td class="tg-c3ow"><?php
            //naama penduduk
                $id_kk = $item->nik_kepala ;
              //  echo $id_kk ;
                $q = mysqli_query($kon,"SELECT * FROM `tweb_penduduk` WHERE `id` = '$id_kk'") ;
                $t = mysqli_fetch_array($q) ;
                $jk =  $t["sex"] ;

                $q2 = mysqli_query($kon,"SELECT * FROM `tweb_penduduk_sex` WHERE `id` = '$jk'") ;
                $t2 = mysqli_fetch_array($q2) ;
                echo $t2["nama"] ;

            ?></td>
        <td class="tg-c3ow"><?php
            //naama penduduk
                $id_kk = $item->nik_kepala ;
              //  echo $id_kk ;
                $q = mysqli_query($kon,"SELECT * FROM `tweb_penduduk` WHERE `id` = '$id_kk'") ;
                $t = mysqli_fetch_array($q) ;
                echo $t["tempatlahir"].", ".date("d-m-Y",strtotime($t["tanggallahir"])) ;

            ?></td>
        <td class="tg-c3ow">
            <?php
            //golorangan darah
                $id_kk = $item->nik_kepala ;
              //  echo $id_kk ;
                $q = mysqli_query($kon,"SELECT * FROM `tweb_penduduk` WHERE `id` = '$id_kk'") ;
                $t = mysqli_fetch_array($q) ;

                $id2 = $t["golongan_darah_id"] ;

                $q2 = mysqli_query($kon,"SELECT * FROM `tweb_golongan_darah` WHERE `id` = '$id2'") ;
            $t2 = mysqli_fetch_array($q2) ;
            echo $t2["nama"] ;

            ?>

            <td class="tg-c3ow"> <?php
                //golorangan darah
                    $id_kk = $item->nik_kepala ;
                  //  echo $id_kk ;
                    $q = mysqli_query($kon,"SELECT * FROM `tweb_penduduk` WHERE `id` = '$id_kk'") ;
                    $t = mysqli_fetch_array($q) ;

                    $id2 = $t["agama_id"] ;

                    $q2 = mysqli_query($kon,"SELECT * FROM `tweb_penduduk_agama` WHERE `id` = '$id2'") ;
                $t2 = mysqli_fetch_array($q2) ;
                echo $t2["nama"] ;

                ?></td>
        <td class="tg-c3ow"><?php
            //golorangan darah
                $id_kk = $item->nik_kepala ;
              //  echo $id_kk ;
                $q = mysqli_query($kon,"SELECT * FROM `tweb_penduduk` WHERE `id` = '$id_kk'") ;
                $t = mysqli_fetch_array($q) ;

                $id2 = $t["pendidikan_kk_id"] ;

                $q2 = mysqli_query($kon,"SELECT * FROM `tweb_penduduk_pendidikan_kk` WHERE `id` = '$id2'") ;
            $t2 = mysqli_fetch_array($q2) ;
            echo $t2["nama"] ;

            ?></td>
        <td class="tg-c3ow"><?php
            //golorangan darah
                $id_kk = $item->nik_kepala ;
              //  echo $id_kk ;
                $q = mysqli_query($kon,"SELECT * FROM `tweb_penduduk` WHERE `id` = '$id_kk'") ;
                $t = mysqli_fetch_array($q) ;

                $id2 = $t["pekerjaan_id"] ;

                $q2 = mysqli_query($kon,"SELECT * FROM `tweb_penduduk_pekerjaan` WHERE `id` = '$id2'") ;
            $t2 = mysqli_fetch_array($q2) ;
            echo $t2["nama"] ;

            ?></td>
        <td class="tg-c3ow">{{$item->alamat}}</td>
        <td class="tg-c3ow"><?php
            //golorangan darah
                $id_kk = $item->nik_kepala ;
              //  echo $id_kk ;
                $q = mysqli_query($kon,"SELECT * FROM `tweb_penduduk` WHERE `id` = '$id_kk'") ;
                $t = mysqli_fetch_array($q) ;

                $id2 = $t["status_kawin"] ;

                $q2 = mysqli_query($kon,"SELECT * FROM `tweb_penduduk_kawin` WHERE `id` = '$id2'") ;
            $t2 = mysqli_fetch_array($q2) ;
         //   echo $t2["nama"] ;

            ?></td>
        <td class="tg-c3ow"></td>
        <td class="tg-c3ow"><?php
            //golorangan darah
                $id_kk = $item->nik_kepala ;
              //  echo $id_kk ;
                $q = mysqli_query($kon,"SELECT * FROM `tweb_penduduk` WHERE `id` = '$id_kk'") ;
                $t = mysqli_fetch_array($q) ;

                $id2 = $t["kk_level"] ;

                $q2 = mysqli_query($kon,"SELECT * FROM `tweb_penduduk_hubungan` WHERE `id` = '$id2'
") ;
            $t2 = mysqli_fetch_array($q2) ;
            echo $t2["nama"] ;

            ?></td>
        <td class="tg-c3ow"><?php
            //golorangan darah
                $id_kk = $item->nik_kepala ;
              //  echo $id_kk ;
                $q = mysqli_query($kon,"SELECT * FROM `tweb_penduduk` WHERE `id` = '$id_kk'") ;
                $t = mysqli_fetch_array($q) ;

                $id2 = $t["warganegara_id"] ;

                $q2 = mysqli_query($kon,"SELECT * FROM `tweb_penduduk_warganegara` WHERE `id` = '$id2'
") ;
            $t2 = mysqli_fetch_array($q2) ;
            echo $t2["nama"] ;

            ?></td>
        <td class="tg-c3ow"><?php
            //naama penduduk
                $id_kk = $item->nik_kepala ;
              //  echo $id_kk ;
                $q = mysqli_query($kon,"SELECT * FROM `tweb_penduduk` WHERE `id` = '$id_kk'") ;
                $t = mysqli_fetch_array($q) ;
                echo $t["nama_ayah"] ;

            ?></td>
        <td class="tg-c3ow"><?php
            //naama penduduk
                $id_kk = $item->nik_kepala ;
              //  echo $id_kk ;
                $q = mysqli_query($kon,"SELECT * FROM `tweb_penduduk` WHERE `id` = '$id_kk'") ;
                $t = mysqli_fetch_array($q) ;
                echo $t["nama_ibu"] ;

            ?></td>
        <td class="tg-c3ow"><?php echo date("d-m-Y",strtotime($item->tgl_daftar))?></td>
        <td class="tg-c3ow"></td>
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
