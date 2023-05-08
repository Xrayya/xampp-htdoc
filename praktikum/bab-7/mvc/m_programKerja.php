<?php

require "koneksiMVC.php";

class m_programKerja
{
  public function setProgramKerja($nomorProgram, $namaProgram, $suratKeterangan)
  {
    global $mysqli;
    $rs = $mysqli->query("INSERT INTO proker VALUES ('$nomorProgram', '$namaProgram', '$suratKeterangan')");
  }

  public function getSemuaProgramKerja()
  {
    global $mysqli;
    $rs = $mysqli->query("SELECT * FROM proker");
    $rows = array();
    while ($row = $rs->fetch_assoc()) {
      $rows[] = $row;
    }

    $hasil[] = $rows;

    return $hasil;
  }
}
