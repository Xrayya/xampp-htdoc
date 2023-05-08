<?php

class ProkerModel extends Model
{
    public function tambahProgramKerja($nomorProgram, $namaProgram, $suratKeterangan)
    {
        $query = "INSERT INTO proker VALUES
                ('$nomorProgram', '$namaProgram', '$suratKeterangan')";
        try {
            $this->db->query($query);
        } catch (Exception $error) {
            echo $error->getMessage();
        }
    }

    public function getProgramKerja($nomorProgram)
    {
        $query = "SELECT * FROM proker WHERE nomorProgram=$nomorProgram";
        $result = $this->db->query($query);
        return $result->fetch_assoc();
    }

    public function getSemuaProgramKerja()
    {
        $rows = [];
        $query = "SELECT * FROM proker";
        $result = $this->db->query($query);
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function deleteProgramKerja($nomorProgram)
    {
        $query = "DELETE FROM proker
                WHERE nomorProgram=$nomorProgram";
        try {
            $this->db->query($query);
        } catch (Exception $error) {
            echo $error->getMessage();
        }
    }

    public function editProgramKerja($old_nomorProgram, $nomorProgram, $namaProgram, $suratKeterangan)
    {
        $query = "UPDATE proker SET
                nomorProgram = $nomorProgram,
                namaProgram = '$namaProgram',
                suratKeterangan = '$suratKeterangan'
                WHERE nomorProgram = $old_nomorProgram";
        try {
            $this->db->query($query);
        } catch (Exception $error) {
            echo $error->getMessage();
        }
    }
}
