<h1>Edit Program Kerja BEM</h1>
<form action="index.php?url=Proker/editProker" method="post" style="display: flex; flex-direction: column; gap: 4px;">
    <div>
        <label for="nomorProgram">Nomor program:</label>
        <input type="text" name="nomorProgram" id="nomorProgram" value="<?= $data['nomorProgram'] ?>">
    </div>
    <div>
        <label for="namaProgram">Nama program:</label>
        <input type="text" name="namaProgram" id="namaProgram" value="<?= $data['namaProgram'] ?>">
    </div>
    <div>
        <label for="suratKeterangan">Surat Keterangan</label>
        <input type="text" name="suratKeterangan" id="suratKeterangan" value="<?= $data['suratKeterangan'] ?>">
    </div>
    <input type="hidden" name="old_nomorProgram" value="<?= $data['nomorProgram'] ?>">
    <input type="submit" value="Simpan dan tambah" style="width: fit-content;">
</form>
