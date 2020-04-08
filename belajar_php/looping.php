<?php
  if (isset($_POST['tahun-awal'])){
    $tahunAwal = $_POST['tahun-awal'];
  }
  if (isset($_POST['tahun-akhir'])){
    $tahunAkhir = $_POST['tahun-akhir'];
  }
?>
<html lang="in" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      table, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 10px;
      }
    </style>
  </head>
  <body>
    <h4>Hasil Looping</h4>
    <a href="index.php">Kembali ke inputan</a>
    <table>
      <?php for ($tahun = $tahunAwal; $tahun <= $tahunAkhir; ++$tahun): ?>
        <tr>
          <td><?= $tahun; ?></td>
          <?php if ($tahun % 4 == 0): ?>
            <td>Tahun Kabisat</td>
          <?php elseif ($tahun %2 == 0): ?>
            <td>Tahun Genap</td>
          <?php else: ?>
            <td>Tahun ganjil</td>
          <?php endif; ?>
        </tr>
      <?php endfor; ?>
    </table>
  </body>
</html>
