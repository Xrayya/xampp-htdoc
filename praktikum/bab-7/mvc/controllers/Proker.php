<?php

require_once("../mvc/models/ProkerModel.php");

class Proker extends Controller
{
  private $model;
  public function __construct()
  {
    $this->model = $this->instantiateModel("ProkerModel");
  }

  public function index()
  {
    $data['judul'] = "Daftar Program Kerja BEM";
    $data = $this->model->getSemuaProgramKerja();

    $this->loadView("template/header", $data);
    $this->loadView("index", $data);
    $this->loadView("template/footer");
  }

  public function formTambahProker()
  {
    $data['judul'] = "Tambah Program Kerja BEM";
    $this->loadView("template/header", $data);
    $this->loadView("tambahProker");
    $this->loadView("template/footer");
  }

  public function tambahProker()
  {
    ['nomorProgram' => $nomorProgram, 'namaProgram' => $namaProgram, 'suratKeterangan' => $suratKetarangan] = $_POST;
    $this->model->tambahProgramKerja($nomorProgram, $namaProgram, $suratKetarangan);
    header("location:../mvc/");
  }

  public function hapusProker()
  {
    $this->model->deleteProgramKerja($_POST['nomorProgram']);
    header("location:../mvc/");
  }

  public function formEditProker()
  {
    $data['judul'] = "Edit Program Kerja BEM";
    $data = $this->model->getProgramKerja($_POST['nomorProgram']);

    $this->loadView("template/header", $data);
    $this->loadView("editProker", $data);
    $this->loadView("template/footer");
  }

  public function editProker()
  {
    ['nomorProgram' => $nomorProgram, 'namaProgram' => $namaProgram, 'suratKeterangan' => $suratKetarangan, 'old_nomorProgram' => $old_nomorProgram] = $_POST;
    $this->model->editProgramKerja($old_nomorProgram, $nomorProgram, $namaProgram, $suratKetarangan);
    header("location:../mvc/");
  }
}
