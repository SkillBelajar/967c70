<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=peraturan_desa.xls");

?>

<h2>A.1 Buku Peraturan Di Desa </h2>

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
        <th class="tg-0lax">NOMOR URUT  </th>
        <th class="tg-0lax">JENIS
            PERATURAN
            DI DESA</th>
        <th class="tg-0lax">NOMOR DAN
            TANGGAL
            DITETAPKAN</th>
        <th class="tg-0lax">TENTANG</th>
        <th class="tg-0lax">URAIAN
            SINGKAT</th>
        <th class="tg-0lax">Tanggal
            Kesepakatan
            Peraturan
            Desa</th>
        <th class="tg-0lax">NOMOR DAN
            TANGGAL
            DILAPORKAN</th>
        <th class="tg-0lax">NOMOR DAN
            TANGGAL
            DIUNDANGKAN
            DALAM
            LEMBARAN DESA</th>
        <th class="tg-0lax">NOMOR DAN
            TANGGAL
            DIUNDANGKAN
            DALAM BERITA
            DESA</th>
        <th class="tg-0lax">KET.</th>
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
      </tr>
      <?php
        $no = 1 ;
      ?>
      @foreach ($desa as $item)


      <tr>
        <td class="tg-0lax"><?php echo $no++ ?><br>


        </td>
        <td class="tg-0lax">{{json_decode($item->attr)->jenis_peraturan}}</td>
        <td class="tg-0lax">Nomor : {{json_decode($item->attr)->no_ditetapkan}}<br>
            {{json_decode($item->attr)->tgl_ditetapkan}}
        </td>
        <td class="tg-0lax">{{$item->nama}}</td>
        <td class="tg-0lax">{{json_decode($item->attr)->uraian}}</td>
        <td class="tg-0lax">{{json_decode($item->attr)->tgl_kesepakatan}}</td>
        <td class="tg-0lax">Nomor : {{json_decode($item->attr)->no_lapor}}<br>
            {{json_decode($item->attr)->tgl_lapor}}</td>
        <td class="tg-0lax">Nomor : {{json_decode($item->attr)->no_lembaran_desa}}<br>
            {{json_decode($item->attr)->tgl_lembaran_desa}}</td>
        <td class="tg-0lax">Nomor : {{json_decode($item->attr)->no_berita_desa}}<br>
            {{json_decode($item->attr)->tgl_berita_desa}}</td>
        <td class="tg-0lax">{{json_decode($item->attr)->keterangan}}</td>
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
