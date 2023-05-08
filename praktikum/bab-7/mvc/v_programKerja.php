<!DOCTYPE html>
<html lang="id">

<head>
  <title>Daftar Program Kerja BEM</title>
  <meta charset="UTF-8">
</head>

<body>
  <h1>Daftar Program Kerja BEM</h1>
  <table border="1" cellspacing="0" cellpadding="4">
    <thead style="font-weight: bold; background-color: lightgray;">
      <tr>
        <td>No</td>
        <td>Nama Program Kerja</td>
        <td>Surat Keterangan</td>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($daftarProker as $proker) : ?>
        <tr>
          <td><?= $proker['nomorProgram'] ?></td>
          <td><?= $proker['namaProgram'] ?></td>
          <td><?= $proker['suratKeterangan'] ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>

</html>
