<?php

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=agenda_desa.xls");

?>

<H1>A.7 BUKU AGENDA</H1>


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
        <th class="tg-baqh" rowspan="2">TANGGAL<br>PENERIMAAN/<br>PENGIRIMAN<br>SURAT</th>
        <th class="tg-baqh" colspan="4">SURAT MASUK</th>
        <th class="tg-baqh" colspan="4">SURAT KELUAR</th>
        <th class="tg-baqh"></th>
      </tr>
      <tr>
        <td class="tg-baqh">NOMOR</td>
        <td class="tg-baqh">TANGGAL</td>
        <td class="tg-baqh">PENGIRIM</td>
        <td class="tg-baqh">ISI SINGKAT</td>
        <td class="tg-baqh">NOMOR</td>
        <td class="tg-baqh">TANGGAL</td>
        <td class="tg-baqh">DITUJUKAN<br>KEPADA</td>
        <td class="tg-baqh">ISI<br>SURAT</td>
        <td class="tg-baqh">KET</td>
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
      </tr>

      <?php
            $no = 1 ;
      ?>
      @foreach ($masuk as $item)


      <tr>
        <td class="tg-baqh"><?php echo $no++ ?></td>
        <td class="tg-baqh"><?php echo date("d-m-Y",strtotime($item->tanggal_penerimaan))?></td>
        <td class="tg-baqh">{{$item->nomor_surat}}</td>
        <td class="tg-baqh">{{$item->tanggal_surat}}</td>
        <td class="tg-baqh">{{$item->pengirim}}</td>
        <td class="tg-baqh">{{$item->isi_singkat}}</td>
        <td class="tg-baqh"></td>
        <td class="tg-baqh"></td>
        <td class="tg-baqh"></td>
        <td class="tg-baqh"></td>
        <td class="tg-baqh"></td>
      </tr>
      @endforeach

      @foreach ($keluar as $item)


      <tr>
        <td class="tg-baqh"><?php echo $no++ ?></td>
        <td class="tg-baqh"><?php echo date("d-m-Y",strtotime($item->tanggal_surat))?></td>
        <td class="tg-baqh"></td>
        <td class="tg-baqh"></td>
        <td class="tg-baqh"></td>
        <td class="tg-baqh"></td>
        <td class="tg-baqh">{{$item->nomor_surat}}</td>
        <td class="tg-baqh"><?php echo date("d-m-Y",strtotime($item->tanggal_surat))?></td>
        <td class="tg-baqh">{{$item->tujuan}}</td>
        <td class="tg-baqh">{{$item->isi_singkat}}</td>
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
