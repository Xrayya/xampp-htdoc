<?php
include "pengurusBEM.php";

class menteri extends pengurusBEM
{
  public function __construct($nama)
  {
    $this->nama = $nama;
  }

  function setJabatan($jabatan)
  { //method
    $this->jabatan = "menteri " . $jabatan;
  }

  public function getJabatan()
  {
    echo "$this->jabatan";
  }
}

$p1 = new pengurusBEM();
$m1 = new menteri("bambang");

$p1->setJabatan("ketua");
$m1->setJabatan("advo");

$p1->getJabatan();
echo "\n";
$m1->getJabatan();
