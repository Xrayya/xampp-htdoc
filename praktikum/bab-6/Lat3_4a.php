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
    <form action="Lat3_4b.php" method="post">
      <p>
        Order CD, amount:
        <input type="text" name="cd_order" value="<?php echo $_COOKIE['cd_order'] ?? 0 ?>" size="2" maxlength="2">
      </p>
      <p>
        Order DVD, amount:
        <input type="text" name="dvd_order" value="<?php echo $_COOKIE['dvd_order'] ?? 0 ?>" size="2" maxlength="2">
      </p>
      <input type="submit" name="Add To Cart" value="submit">
    </form>
    <br>
    <form action="Lat3_6c.php" method="post">
      <input type="submit" name="logout" value="Logout">
    </form>
  </body>

  </html>
<?php endif; ?>
