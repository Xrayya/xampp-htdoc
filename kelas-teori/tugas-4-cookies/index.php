<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['logout'])) {
  session_destroy();
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_SESSION['username'])) {
  $_SESSION['username'] = $_POST['username'];
  $_SESSION['password'] = $_POST['password'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Dashboard</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="assets/styles/dashboard.css" rel="stylesheet">
</head>

<body>
  <header>
    <div class="home-button">
      <a href="index.php">Melleh.com</a>
    </div>
    <?php if (isset($_SESSION['username'])) : ?>
      <div class="account">
        <span>
          <?php echo $_SESSION['username'] ?>
        </span>
        <form action="<?php echo $_SERVER['PHP_SELF']  ?>" method="POST">
          <input type="submit" name="logout" value="Logout">
        </form>
      </div>
    <?php else : ?>
      <div class="login">
        <a href="pages/login.php">Login</a>
      </div>
    <?php endif ?>
  </header>
  <main> </main>
  <script src="assets/script/script.js"> </script>
</body>

</html>
