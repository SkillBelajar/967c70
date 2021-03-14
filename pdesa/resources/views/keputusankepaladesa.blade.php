<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell

//header("Content-type: application/vnd-ms-excel");
//header("Content-Disposition: attachment; filename=nama_filenya.xls");
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=kepdes.xls");
?>

<h2>A.2 BUKU KEPUTUSAN KEPALA DESA </h2>

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

        <th class="tg-0lax">NOMOR DAN
            TANGGAL
            KEPUTUSAN KEPALA DESA</th>
        <th class="tg-0lax">TENTANG</th>
        <th class="tg-0lax">URAIAN
            SINGKAT</th>
        <th class="tg-0lax">NOMOR
            DAN TANGGAL
            DILAPORKAN</th>
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

      </tr>
      <?php
        $no = 1 ;
      ?>
      @foreach ($desa as $item)


      <tr>
        <td class="tg-0lax"><?php echo $no++ ?><br>


        </td>

        <td class="tg-0lax">Nomor : {{json_decode($item->attr)->no_kep_kades}}<br>
            {{json_decode($item->attr)->tgl_kep_kades}}
        </td>
        <td class="tg-0lax">{{$item->nama}}</td>
        <td class="tg-0lax">{{json_decode($item->attr)->uraian}}</td>
        <td class="tg-0lax">Nomor : {{json_decode($item->attr)->no_lapor}}<br>
            {{json_decode($item->attr)->tgl_lapor}}</td>

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
