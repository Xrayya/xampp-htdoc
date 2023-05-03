<?php

include_once("m_programKerja.php");

class c_programKerja
{
  public $model;

  public function __construct($nama)
  {
    $this->model = new m_programKerja();
  }

  public function invoke()
  {
    $proker = $this->model->getSemuaProgramKerja();
    include "v_programKerja.php";
  }
}
