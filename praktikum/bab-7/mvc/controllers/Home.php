<?php

class Home extends Controller
{
    public function index()
    {
        $data['judul'] = "Welcome Page";
        $this->loadView("template/header", $data);
        $this->loadView("welcome");
        $this->loadView("footer");
    }

    public function login()
    {
        session_start();
        if (isset($_SESSION['nim'])) {
            header("location: ../mvc/");
        }
        $data['judul'] = "Login";
        $this->loadView("template/header", $data);
        $this->loadView("login");
        $this->loadView("template/footer");
    }

    public function authenticate()
    {
        $this->model = $this->instantiateModel("PengurusBEMModel");
        ['nim' => $nim, 'password' => $password] = $_POST;
        $account = $this->model->getAkunPengurus($nim, $password);
        $_SESSION['nim'] = $account['nim'];
        $_SESSION['jabatan'] = $account['jabatan'];
        unset($account);
        header("location:../mvc/");
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header("location: ../mvc/");
    }
}
