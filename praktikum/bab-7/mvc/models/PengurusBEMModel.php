<?php

class PengurusBEMModel extends Model
{
    public function getAkunPengurus($nim, $password)
    {
        $query = "SELECT * FROM akun_pengurus_bem
        WHERE nim = '$nim' AND password = '$password'";
        $result = $this->db->query($query);
        return $result->fetch_assoc();
    }
}
