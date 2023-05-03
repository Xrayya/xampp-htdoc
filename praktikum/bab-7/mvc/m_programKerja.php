<?php

require "koneksiMVC.php";

class m_programKerja
{
  private $nomorProgram;
  private $namaProgram;
  private $suratKeterangan;
  public $hasil = array();

  public function __construct($nomorProgram, $namaProgram, $suratKeterangan)
  {
    $this->nomorProgram = $nomorProgram;
    $this->namaProgram = $namaProgram;
    $this->suratKeterangan = $suratKeterangan;
  }

  public function setProgramKerja($nomorProgram, $namaProgram, $suratKeterangan)
  {
    global $mysqli;
    $rs = $mysqli->query("INSERT INTO proker VALUES ('$this->nomorProgram', '$this->namaProgram', '$this->suratKeterangan')");
  }

  public function getSemuaProgramKerja()
  {
    global $mysqli;
    $rs = $mysqli->query("SELECT * FROM proker");
    $rows = array();
    while ($row = $rs->fetch_assoc()) {
      $rows[] = $row;
    }

    $this->hasil[] = $rows;

    return $this->hasil;
  }
}
