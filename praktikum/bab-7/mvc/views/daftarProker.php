  <h2>Daftar Program Kerja BEM</h2>
  <table border="1" cellspacing="0" cellpadding="4">
      <thead style="font-weight: bold; background-color: lightgray;">
          <tr>
              <td>No</td>
              <td>Nama Program Kerja</td>
              <td>Surat Keterangan</td>
              <?php if ($_SESSION['jabatan'] == 'kepala departemen') : ?>
                  <td>Tindakan</td>
              <?php endif; ?>
          </tr>
      </thead>
      <tbody>
          <?php foreach ($data as $proker) : ?>
              <tr>
                  <td><?= $proker['nomorProgram'] ?></td>
                  <td><?= $proker['namaProgram'] ?></td>
                  <td><?= $proker['suratKeterangan'] ?></td>
                  <?php if ($_SESSION['jabatan'] == 'kepala departemen') : ?>
                      <td style="display:flex; gap: 4px;">
                          <form action="index.php?url=Proker/formEditProker" method="post">
                              <input type="hidden" name="nomorProgram" value="<?= $proker['nomorProgram'] ?>">
                              <input type="submit" value="Edit">
                          </form>
                          <form action="index.php?url=Proker/hapusProker" method="post">
                              <input type="hidden" name="nomorProgram" value="<?= $proker['nomorProgram'] ?>">
                              <input type="submit" value="Hapus" onclick="return confirm('Apakah anda yakin akan menghapus proker ini?')">
                          </form>
                      </td>
                  <?php endif; ?>
              </tr>
          <?php endforeach; ?>
      </tbody>
  </table>
  <?php if ($_SESSION['jabatan'] == 'kepala departemen') : ?>
      <form action="index.php?url=Proker/formTambahProker" method="post" style="margin-top: 4px;">
          <input type="submit" value="+ Tambah program kerja">
      </form>
  <?php endif; ?>
