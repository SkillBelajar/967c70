<?php

include "k.php" ;
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=inventaris_desa.xls");
?>

<h1>A.3 BUKU INVENTARIS DAN KEKAYAAN DESA</h1>

<style type="text/css">
    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
      overflow:hidden;padding:10px 14px;word-break:normal;}
    .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
      font-weight:normal;overflow:hidden;padding:10px 14px;word-break:normal;}
    .tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
    </style>
    <table class="tg">
    <thead>
      <tr>
        <th class="tg-c3ow" rowspan="3">Nomor Urut</th>
        <th class="tg-c3ow" rowspan="3">JENIS<br>BARANG/<br>BANGUNAN</th>
        <th class="tg-c3ow" colspan="5">ASAL BARANG/BANGUNAN</th>
        <th class="tg-c3ow" colspan="2">KEADAAN<br>BARANG/<br>BANGUNAN<br>AWAL<br>TAHUN</th>
        <th class="tg-c3ow" colspan="4">PENGHAPUSAN BARANG DAN BANGUNAN</th>
        <th class="tg-c3ow" colspan="2">KEADAAN<br>BARANG/BANGUNAN<br>AKHIR TAHUN</th>
        <th class="tg-c3ow" rowspan="3">KET.</th>
      </tr>
      <tr>
        <td class="tg-c3ow" rowspan="2">DIBELI<br>SENDIRI</td>
        <td class="tg-c3ow" colspan="3">BANTUAN</td>
        <td class="tg-c3ow" rowspan="2">SUMBANGAN</td>
        <td class="tg-c3ow" rowspan="2">BAIK</td>
        <td class="tg-c3ow" rowspan="2">RUSAK</td>
        <td class="tg-c3ow" rowspan="2">RUSAK</td>
        <td class="tg-c3ow" rowspan="2">DIJUAL</td>
        <td class="tg-c3ow" rowspan="2">DISUMBANGKAN</td>
        <td class="tg-c3ow" rowspan="2">TGL<br>PENG<br>HAPUSAN</td>
        <td class="tg-c3ow" rowspan="2">BAIK</td>
        <td class="tg-c3ow" rowspan="2">RUSAK</td>
      </tr>
      <tr>
        <td class="tg-c3ow">PEMERINTAH</td>
        <td class="tg-c3ow">PROVINSI</td>
        <td class="tg-c3ow">KAB/<br>KOTA</td>
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
      <?php
    $no = 1 ;
      ?>
      @foreach ($inv as $item)


      <tr>
        <td class="tg-c3ow"><?php echo $no++ ?></td>
        <td class="tg-c3ow">{{$item->nama_barang}}</td>
        <td class="tg-c3ow"><?php
        //menghitung pembelian sendiri

          $jenis = $item->nama_barang ;
        $query = mysqli_query($kon,"SELECT COUNT(nama_barang) as total FROM `inventaris_gedung` WHERE `nama_barang` LIKE '$jenis' AND `asal` LIKE 'Pembelian Sendiri' ORDER BY `id` ASC") ;
        $row = mysqli_fetch_array($query) ;
        echo $row["total"] ;

        ?></td>
        <td class="tg-c3ow"><?php
            //asa dibeli diberi pemerintah

              $jenis = $item->nama_barang ;
            $query = mysqli_query($kon,"SELECT COUNT(nama_barang) as total FROM `inventaris_gedung` WHERE `nama_barang` LIKE '$jenis' AND `asal` LIKE 'Bantuan Pemerintah' ORDER BY `id` ASC") ;
            $row = mysqli_fetch_array($query) ;
            echo $row["total"] ;

            ?></td>
        <td class="tg-c3ow"><?php
            //asa dari provinsi

              $jenis = $item->nama_barang ;
            $query = mysqli_query($kon,"SELECT COUNT(nama_barang) as total FROM `inventaris_gedung` WHERE `nama_barang` LIKE '$jenis' AND `asal` LIKE 'Bantuan Provinsi' ORDER BY `id` ASC") ;
            $row = mysqli_fetch_array($query) ;
            echo $row["total"] ;

            ?></td>
        <td class="tg-c3ow"><?php
            //BANTUAN KABUPATEN

              $jenis = $item->nama_barang ;
            $query = mysqli_query($kon,"SELECT COUNT(nama_barang) as total FROM `inventaris_gedung` WHERE `nama_barang` LIKE '$jenis' AND `asal` LIKE 'Bantuan Kabupaten' ORDER BY `id` ASC") ;
            $row = mysqli_fetch_array($query) ;
            echo $row["total"] ;

            ?></td>
        <td class="tg-c3ow"><?php
            //BANTUAN KABUPATEN

              $jenis = $item->nama_barang ;
            $query = mysqli_query($kon,"SELECT COUNT(nama_barang) as total FROM `inventaris_gedung` WHERE `nama_barang` LIKE '$jenis' AND `asal` LIKE 'Sumbangan' ORDER BY `id` ASC") ;
            $row = mysqli_fetch_array($query) ;
            echo $row["total"] ;

            ?></td>
        <td class="tg-c3ow"><?php
            //kondisi bangunan baik

              $jenis = $item->nama_barang ;
            $query = mysqli_query($kon,"SELECT COUNT(nama_barang) as jumlah FROM `inventaris_gedung` WHERE `nama_barang` LIKE '$jenis' AND `kondisi_bangunan` LIKE 'Baik' ORDER BY `id` DESC") ;
            $row = mysqli_fetch_array($query) ;
            echo $row["jumlah"] ;
            $keadaan_baik = $row["jumlah"] ;

            ?></td>
        <td class="tg-c3ow"><?php
            //kondisi bangunan Rusak

              $jenis = $item->nama_barang ;
            $query = mysqli_query($kon,"SELECT COUNT(nama_barang) as jumlah FROM `inventaris_gedung` WHERE `nama_barang` LIKE '$jenis' AND `kondisi_bangunan` NOT LIKE 'Baik' ORDER BY `id` DESC") ;
            $row = mysqli_fetch_array($query) ;
            echo $row["jumlah"] ;



            ?></td>
        <td class="tg-c3ow"><?php
            //Mutasi Barang Rusak

              $jenis = $item->nama_barang ;
            $query = mysqli_query($kon,"SELECT COUNT( nama_barang) as total FROM `inventaris_gedung` INNER JOIN mutasi_inventaris_gedung on inventaris_gedung.id = mutasi_inventaris_gedung.id_inventaris_gedung WHERE nama_barang = '$jenis' and jenis_mutasi = 'Rusak'") ;
            $row = mysqli_fetch_array($query) ;
            echo $row["total"] ;
            $barang_rusak = $row["total"] ;

            ?></td>
        <td class="tg-c3ow"><?php
            //Mutasi Barang dIJUAL

              $jenis = $item->nama_barang ;
            $query = mysqli_query($kon,"SELECT COUNT( nama_barang) as total FROM `inventaris_gedung` INNER JOIN mutasi_inventaris_gedung on inventaris_gedung.id = mutasi_inventaris_gedung.id_inventaris_gedung WHERE nama_barang = '$jenis' and jenis_mutasi LIKE '%Dijual%'") ;
            $row = mysqli_fetch_array($query) ;
            echo $row["total"] ;

            ?></td>
        <td class="tg-c3ow"><?php
            //Mutasi Barang Disumbangkan

              $jenis = $item->nama_barang ;
            $query = mysqli_query($kon,"SELECT COUNT( nama_barang) as total FROM `inventaris_gedung` INNER JOIN mutasi_inventaris_gedung on inventaris_gedung.id = mutasi_inventaris_gedung.id_inventaris_gedung WHERE nama_barang = '$jenis' and jenis_mutasi LIKE '%disumbangkan%'") ;
            $row = mysqli_fetch_array($query) ;
            echo $row["total"] ;

            ?></td>
        <td class="tg-c3ow"><?php
        //tanggal penghapusan barang
        $jenis = $item->nama_barang ;
            $query = mysqli_query($kon,"SELECT * FROM `inventaris_gedung` INNER JOIN mutasi_inventaris_gedung on inventaris_gedung.id = mutasi_inventaris_gedung.id_inventaris_gedung WHERE nama_barang = '$jenis' and jenis_mutasi = 'Rusak'") ;

            while ($t = mysqli_fetch_array($query)) {
                    echo "<p>Kode Barang : ".$t["kode_barang"] ;

                    $time = strtotime($t["tahun_mutasi"]) ;
                    $new_time = date("d-m-Y",$time) ;
                    echo "<br>Dihapus Tanggal : <br>".$new_time ;
                    echo "</p><br>" ;
            }


            $query2 = mysqli_query($kon,"SELECT * FROM `inventaris_gedung` INNER JOIN mutasi_inventaris_gedung on inventaris_gedung.id = mutasi_inventaris_gedung.id_inventaris_gedung WHERE nama_barang = '$jenis' and jenis_mutasi LIKE '%Dijual%'") ;

            while ($t2 = mysqli_fetch_array($query2)) {
                    echo "<p>Kode Barang : ".$t2["kode_barang"] ;

                    $time2 = strtotime($t2["tahun_mutasi"]) ;
                    $new_time2 = date("d-m-Y",$time2) ;
                    echo "<br>Dihapus Tanggal : <br>".$new_time2 ;
                    echo "</p><br>" ;
            }


            $query2 = mysqli_query($kon,"SELECT * FROM `inventaris_gedung` INNER JOIN mutasi_inventaris_gedung on inventaris_gedung.id = mutasi_inventaris_gedung.id_inventaris_gedung WHERE nama_barang = '$jenis' and jenis_mutasi LIKE '%disumbangkan%'") ;

            while ($t2 = mysqli_fetch_array($query2)) {
                    echo "<p>Kode Barang : ".$t2["kode_barang"] ;

                    $time2 = strtotime($t2["tahun_mutasi"]) ;
                    $new_time2 = date("d-m-Y",$time2) ;
                    echo "<br>Dihapus Tanggal : <br>".$new_time2 ;
                    echo "</p><br>" ;
            }

        ?></td>
        <td class="tg-c3ow"><?php
        //keadaan baran akhir tahun
        $hitung = $keadaan_baik - $barang_rusak ;
        echo $hitung ;
        //echo $keadaan_baik ;
          //  echo $barang_rusak ;


        ?></td>
        <td class="tg-c3ow"><?php echo $barang_rusak ?></td>
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
