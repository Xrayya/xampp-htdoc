<?php
session_start();
if ($_SESSION['user'] == 'admin' && $_SESSION['password'] == 'admin') :
  header("Location:Lat3_4a.php");
else :
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>Login</title>
    <meta charset="UTF-8">
  </head>

  <body>
    <form action="Lat3_6b.php" method="post">
      <p>Masuk untuk melakukan pemesanan</p>
      <label for="user">User: </label>
      <input id="user" type="text" name="user" value="">
      <br>
      <label for="password">Password: </label>
      <input id="password" type="password" name="password" value="">
      <br>
      <input type="submit" name="login" value="Login">
    </form>
  </body>

  </html>
<?php endif; ?>
