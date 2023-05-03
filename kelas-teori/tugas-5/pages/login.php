<?php
session_start();
if (isset($_SESSION['username'])) :
?>
  <script>
    location.href = '../index.php';
  </script>
<?php else : ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/styles/login.css">
  </head>

  <body>
    <header>
      <div class="home-button">
        <a href="../index.php">Melleh.com</a>
      </div>
    </header>
    <main>
      <div class="login-wrapper">
        <h2>Login</h2>
        <form action="../handler/handle_login.php" method="post">
          <div class="input-field">
            <label for="username">Username: </label>
            <input id="username" name="username" type="email" value="<?php if (isset($_SESSION["username"])) {
                                                                        echo $_SESSION["username"];
                                                                      } ?>">
          </div>
          <div class="input-field">
            <label for="password">Password: </label>
            <input id="password" name="password" type="password" value="<?php if (isset($_SESSION["password"])) {
                                                                          echo $_SESSION["password"];
                                                                        } ?>">
          </div>
          </p>
          <div class="remember-check">
            <input id="remember" type="checkbox" name="remember" /> <label for="remember">Remember me</label>
          </div>
          <input id="submit" type="submit" value="Login">
        </form>
      </div>
    </main>
    <script src="../assets/script/login.js"></script>
  </body>

  </html>
<?php endif; ?>
