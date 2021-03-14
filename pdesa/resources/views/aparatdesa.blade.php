<?php
include "k.php" ;

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=aparat_desa.xls");
?>

<h1>A.4 BUKU APARAT PEMERINTAH DESA</h1>


<br>
<style type="text/css">
    .tg  {border-collapse:collapse;border-spacing:0;}
    .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
      overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
      font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
    .tg .tg-0lax{text-align:left;vertical-align:top}
    </style>
    <table class="tg">
    <thead>
      <tr>
        <th class="tg-0lax">NOMOR<br>URUT</th>
        <th class="tg-0lax">NAMA</th>
        <th class="tg-0lax">NIAP</th>
        <th class="tg-0lax">NIP</th>
        <th class="tg-0lax">JENIS KELAMIN</th>
        <th class="tg-0lax">TEMPAT DAN TANGGAL LAHIR</th>
        <th class="tg-0lax">AGAMA</th>
        <th class="tg-0lax">PANGKAT GOLONGAN</th>
        <th class="tg-0lax">JABATAN</th>
        <th class="tg-0lax">PENDIDIKAN TERAKHIR</th>
        <th class="tg-0lax">NOMOR DAN<br>TANGGAL<br>KEPUTUSAN<br>PENGANGKATAN</th>
        <th class="tg-0lax">NOMOR DAN<br>TANGGAL<br>KEPUTUSAN<br>PEMBERHENTIAN</th>
        <th class="tg-0lax">KET</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="tg-0lax">1</td>
        <td class="tg-0lax">2</td>
        <td class="tg-0lax">3</td>
        <td class="tg-0lax">4</td>
        <td class="tg-0lax">5</td>
        <td class="tg-0lax">6</td>
        <td class="tg-0lax">7</td>
        <td class="tg-0lax">8</td>
        <td class="tg-0lax">9</td>
        <td class="tg-0lax">10</td>
        <td class="tg-0lax">11</td>
        <td class="tg-0lax">12</td>
        <td class="tg-0lax">13</td>
      </tr>
      <?php
    $no = 1 ;
      ?>
     @foreach ($aparatdesa as $item)


      <tr>
        <td class="tg-0lax"><?php echo $no++ ?></td>
        <td class="tg-0lax">{{$item->pamong_nama}}</td>
        <td class="tg-0lax">{{$item->pamong_niap}}</td>
        <td class="tg-0lax">{{$item->pamong_nip}}</td>
        <td class="tg-0lax"><?php
        //jenis kelamin
           $sex =  $item->pamong_sex ;
           $query = mysqli_query($kon,"SELECT * FROM `tweb_penduduk_sex` WHERE `id` = '$sex' ") ;
           $t = mysqli_fetch_array($query) ;
           echo $t["nama"];
        ?></td>
        <td class="tg-0lax"><?php
        //tanggal lahir
        $tgl_lahir = strtotime($item->pamong_tanggallahir) ;
        if(empty($tgl_lahir)) {

        }
        else
        {

        echo date("d-m-Y",$tgl_lahir);
        }
        ?></td>
        <td class="tg-0lax"><?php
        //agama
        $agama = $item->pamong_agama ;

        $query = mysqli_query($kon,"SELECT * FROM `tweb_penduduk_agama` WHERE `id` = '$agama'") ;
        $t  = mysqli_fetch_array($query) ;
        echo $t["nama"] ;
        ?></td>
        <td class="tg-0lax">{{$item->pamong_pangkat}}</td>
        <td class="tg-0lax">{{$item->jabatan}}</td>
        <td class="tg-0lax"><?php
        //pendidikan terakhir
            $pend = $item->pamong_pendidikan ;
            //echo $pend ;
            $query = mysqli_query($kon,"SELECT * FROM `tweb_penduduk_pendidikan_kk` WHERE `id` = '$pend'") ;
            $t = mysqli_fetch_array($query) ;
            echo $t["nama"] ;
        ?></td>
        <td class="tg-0lax">Nomor SK : {{$item->pamong_nosk}}
        <br>
        <?php
        $tgl_sk = strtotime($item->pamong_tglsk) ;
        if(empty($tgl_sk)) {

        }
        else {


        echo date("d-m-Y",$tgl_sk) ;
        }
        ?>

        </td>
        <td class="tg-0lax">
            <?php
            $berhenti = $item->pamong_nohenti ;
            if(empty($berhenti)) {

            }
            else {
                echo "NO SK : ".$berhenti ;
                echo "<br>" ;
                $tgl_sk = strtotime($item->pamong_tglhenti) ;
                echo date("d-m-Y",$tgl_sk) ;
            }

            ?>


        </td>
        <td class="tg-0lax"></td>
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
