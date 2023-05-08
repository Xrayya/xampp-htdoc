  <h1>Daftar Program Kerja BEM</h1>
  <table border="1" cellspacing="0" cellpadding="4">
      <thead style="font-weight: bold; background-color: lightgray;">
          <tr>
              <td>No</td>
              <td>Nama Program Kerja</td>
              <td>Surat Keterangan</td>
              <td>Tindakan</td>
          </tr>
      </thead>
      <tbody>
          <?php foreach ($data as $proker) : ?>
              <tr>
                  <td><?= $proker['nomorProgram'] ?></td>
                  <td><?= $proker['namaProgram'] ?></td>
                  <td><?= $proker['suratKeterangan'] ?></td>
                  <td style="display:flex; gap: 4px;">
                      <form action="index.php?url=Proker/formEditProker" method="post">
                          <input type="hidden" name="nomorProgram" value="<?= $proker['nomorProgram'] ?>">
                          <input type="submit" value="Edit">
                      </form>
                      <form action="index.php?url=Proker/hapusProker" method="post">
                          <input type="hidden" name="nomorProgram" value="<?= $proker['nomorProgram'] ?>">
                          <input type="submit" value="Hapus">
                      </form>
                  </td>
              </tr>
          <?php endforeach; ?>
      </tbody>
  </table>
  <form action="index.php?url=Proker/formTambahProker" method="post" style="margin-top: 4px;">
      <input type="submit" value="+ Tambah program kerja">
  </form>
