<?php
session_start();
if ($_SESSION['user'] != 'admin' && $_SESSION['password'] != 'admin') :
  header("Location:Lat3_6a.php");
else :
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>Order Form</title>
    <meta charset="UTF-8">
  </head>

  <body>
    <p><u>Order Summary</u></p>
    <?php
    $num_cd_order = $_COOKIE['cd_order'];
    $num_dvd_order = $_COOKIE['dvd_order'];
    echo "Order CD: " . $num_cd_order . " pieces <br>";
    echo "Order DVD: " . $num_dvd_order . " pieces <br>";
    ?>
    <br>
    <form action="Lat3_4a.php" method='post'>
      <input type="submit" name="edit" value="Edit">
    </form>
    <br>
    <form action="Lat3_6c.php" method="post">
      <input type="submit" name="logout" value="Logout">
    </form>
  </body>

  </html>
<?php endif; ?>
