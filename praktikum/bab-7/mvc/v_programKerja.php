<!DOCTYPE html>
<html lang="id">

<head>
  <title>Daftar Program Kerja BEM</title>
  <meta charset="UTF-8">
</head>

<body>
  <h1>Daftar Program Kerja BEM</h1>
  <table>
    <thead>
      <tr>
        <td>No</td>
        <td>Nama Program Kerja</td>
        <td>Surat Keterangan</td>
      </tr>
    </thead>
    <tbody>
      <?php
      echo "<tr>";
      echo "<td>$proker[nomorProgram]</td>";
      echo "<td>$proker[namaProgram]</td>";
      echo "<td>$proker[suratKeterangan]</td>";
      echo "</tr>";
      ?>
    </tbody>
  </table>
</body>

</html>
