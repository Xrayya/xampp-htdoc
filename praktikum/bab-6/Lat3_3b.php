<?php
session_start();
function factorial($input)
{
  if ($input < 1) {
    return 1;
  }

  return $input * factorial($input - 1);
}

$arr = [$_POST['angka'], factorial($_POST['angka']), "215150400111015", "Azhary Munir Abdillah"];

$_SESSION['hasil'] = $arr;

header("location:Lat3_3c.php");
