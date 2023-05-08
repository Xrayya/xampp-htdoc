<?php

include_once("m_programKerja.php");

class c_programKerja
{
  private $model;

  public function __construct()
  {
    $this->model = new m_programKerja();
  }

  public function invoke()
  {
    $daftarProker = $this->model->getSemuaProgramKerja()[0];
    include "v_programKerja.php";
  }
}
