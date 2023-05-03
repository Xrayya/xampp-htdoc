<?php
session_start();
if ($_POST['user'] == 'admin' && $_POST['password'] == 'admin') {
  $_SESSION['user'] = 'admin';
  $_SESSION['password'] = 'admin';
  header("Location:Lat3_4a.php");
} else {
  header("Location:Lat3_6a.php");
}
