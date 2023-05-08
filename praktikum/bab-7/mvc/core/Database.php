<?php
class Database
{
  public $db;
  public function __construct()
  {
    $this->db = new mysqli('localhost', 'root', '', 'pemweb_a');
  }

  public function query($queryString)
  {
    return $this->db->query($queryString);
  }
}
