<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=peraturan_desa.xls");

?>


<h1>A.8 BUKU EKSPEDISI</h1>


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
        <th class="tg-baqh">NOMOR<br>URUT</th>
        <th class="tg-baqh">TANGGAL<br>PENGIRIMAN</th>
        <th class="tg-baqh">TANGGAL DAN<br>NOMOR SURAT</th>
        <th class="tg-baqh">ISI SINGKAT SURAT<br>YANG DIKIRIM</th>
        <th class="tg-baqh">DITUJUKAN<br>KEPADA</th>
        <th class="tg-baqh">KETERANGAN</th>
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
      </tr>

        <?php $no = 1 ?>
      @foreach ($ek as $item)


      <tr>
        <td class="tg-baqh"><?php echo $no++ ?></td>
        <td class="tg-baqh"><?php echo date("d-m-Y",strtotime($item->tanggal_pengiriman))?></td>
        <td class="tg-baqh">Tanggal Surat : <?php echo date("d-m-Y",strtotime($item->tanggal_surat))?><br>
        Nomor Surat :  {{$item->nomor_surat}}</td>
        <td class="tg-baqh">{{$item->isi_singkat}}</td>
        <td class="tg-baqh">{{$item->tujuan}}</td>
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
