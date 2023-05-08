<?php

class ProkerModel extends Model
{
  public function tambahProgramKerja($nomorProgram, $namaProgram, $suratKeterangan)
  {
    try {
      $this->db->query("INSERT INTO proker VALUES ('$nomorProgram', '$namaProgram', '$suratKeterangan')");
    } catch (Exception $error) {
      echo $error->getMessage();
    }
  }

  public function getProgramKerja($nomorProgram)
  {
    $result = $this->db->query("SELECT * FROM proker where nomorProgram=$nomorProgram");
    return $result->fetch_assoc();
  }

  public function getSemuaProgramKerja()
  {
    $rows = [];
    $result = $this->db->query("SELECT * FROM proker");
    while ($row = $result->fetch_assoc()) {
      $rows[] = $row;
    }

    return $rows;
  }

  public function deleteProgramKerja($nomorProgram)
  {
    try {
      $this->db->query("DELETE FROM proker WHERE nomorProgram=$nomorProgram");
    } catch (Exception $error) {
      echo $error->getMessage();
    }
  }

  public function editProgramKerja($old_nomorProgram, $nomorProgram, $namaProgram, $suratKeterangan)
  {
    try {
      $this->db->query("UPDATE proker SET nomorProgram = $nomorProgram, namaProgram = '$namaProgram', suratKeterangan = '$suratKeterangan' WHERE nomorProgram = $old_nomorProgram");
    } catch (Exception $error) {
      echo $error->getMessage();
    }
  }
}
