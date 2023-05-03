<?php
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
  $host = 'localhost';
  $dbName = 'pemweb_a';

  try {
    $db = new PDO("mysql:host=$host;dbname=$dbName", "root", "",);

    $email = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM account WHERE email = '$email' AND pass = '$pass'";
    $query = $db->query($sql);
    $account = $query->fetch();

    if ($account['email']) {
      $_SESSION['username'] = $_POST['username'];
      header("location:../index.php");
    } else {
      header("location:../pages/login.php");
    }
  } catch (PDOException $e) {
    die('Error: ' . $e->getMessage() . '<br>');
  }
}
