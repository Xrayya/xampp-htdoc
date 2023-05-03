<!DOCTYPE html>
<html lang="en">

<head>
  <title>Form PHP</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <?php if ($_SERVER['REQUEST_METHOD'] == 'GET') : ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      Fahrenheit temperature:
      <input type="text" name="fahrenheit"><br>
      <input type="submit" value="Convert to Celsius!">
    </form>
  <?php elseif ($_SERVER['REQUEST_METHOD'] == 'POST') :
    $fahrenheit = $_POST['fahrenheit'];
    $celsius = ($fahrenheit - 32) * 5 / 9;
    printf("%.2fF is %.2fC", $fahrenheit, $celsius);
  endif; ?>
</body>

</html>
