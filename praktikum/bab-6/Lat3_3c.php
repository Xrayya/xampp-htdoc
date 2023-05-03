<?php
session_start();
$result = $_SESSION['hasil'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title></title>
  <meta charset="UTF-8">
</head>

<body>
  <p>Input: <?php echo $result[0] ?></p>
  <p>Faktorial dari input: <?php echo $result[1] ?></p>
  <p>NIM: <?php echo $result[2] ?></p>
  <p>Nama: <?php echo $result[3] ?></p>
</body>

</html>
<?php session_destroy() ?>
