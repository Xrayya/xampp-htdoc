<?php

require_once("../mvc/core/Database.php");

class Model
{
  protected $db;
  public function __construct()
  {
    $this->db = new Database();
  }
}
