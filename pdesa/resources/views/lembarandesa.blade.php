
<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=peraturan_desa.xls");

?>

<h1>A.9 BUKU LEMBARAN DESA DAN BERITA DESA</h1>

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
        <th class="tg-c3ow" rowspan="2">JENIS<br>PERATURAN DI<br>DESA</th>
        <th class="tg-c3ow" rowspan="2">NOMOR DAN<br>TANGGAL<br>DITETAPKAN</th>
        <th class="tg-c3ow" rowspan="2">TENTANG</th>
        <th class="tg-c3ow" colspan="2">DIUNDANGKAN</th>
        <th class="tg-c3ow" rowspan="2">KET</th>
      </tr>
      <tr>
        <td class="tg-c3ow">TANGGAL</td>
        <td class="tg-c3ow">NOMOR</td>
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
      </tr>

      <?php
        $no = 1;
      ?>
      @foreach ($desa as $item)


      <tr>
        <td class="tg-c3ow"><?php echo $no++ ?></td>
        <td class="tg-c3ow">{{json_decode($item->attr)->jenis_peraturan}}</td>
        <td class="tg-c3ow">{{json_decode($item->attr)->tgl_ditetapkan}}</td>
        <td class="tg-c3ow">{{$item->nama}}</td>
        <td class="tg-c3ow">{{json_decode($item->attr)->tgl_ditetapkan}}</td>
        <td class="tg-c3ow">{{json_decode($item->attr)->no_ditetapkan}}</td>
        <td class="tg-c3ow">{{json_decode($item->attr)->keterangan}}</td>
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
