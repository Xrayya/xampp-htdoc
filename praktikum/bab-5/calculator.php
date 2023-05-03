<html lang="en">

<head>
  <title>Simple Calculator</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <h1>Simple Calculator</h1>
  <h2>
    <p>NIM: 215150400111015</p>
    <p>Nama: Azhary Munir Abdillah</p>
  </h2>
  <?php if ($_SERVER['REQUEST_METHOD'] == 'GET') : ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

      <label for="num1">Num1 : </label>
      <input id="num1" type="number" name="num1" value="">
      <br />
      <label for="num2">Num2 : </label>
      <input id="num2" type="number" name="num2" value="">
      <br />
      <br />
      <span>Choose the operator:</span>
      <br />
      <div style="display: flex; gap: 8px;">
        <input type="submit" name="operator" value="+">
        <input type="submit" name="operator" value="-">
        <input type="submit" name="operator" value="*">
        <input type="submit" name="operator" value="/">
        <input type="submit" name="operator" value="%">
      </div>
    </form>
  <?php elseif ($_SERVER['REQUEST_METHOD'] == 'POST') : ?>
    <?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    $result = 0;
    switch ($operator) {
      case '+':
        $result = $num1 + $num2;
        break;
      case '-':
        $result = $num1 - $num2;
        break;
      case '*':
        $result = $num1 * $num2;
        break;
      case '/':
        $result = $num1 / $num2;
        break;
      case '%':
        $result = $num1 % $num2;
        break;
    }

    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

      <label for="num1">Num1 : </label>
      <input id="num1" type="number" name="num1" value="<?php echo $num1 ?>">
      <br />
      <label for="num2">Num2 : </label>
      <input id="num2" type="number" name="num2" value="<?php echo $num2 ?>">
      <br />
      <br />
      <span>Choose the operator:</span>
      <br />
      <div style="display: flex; gap: 8px;">
        <input type="submit" name="operator" value="+">
        <input type="submit" name="operator" value="-">
        <input type="submit" name="operator" value="*">
        <input type="submit" name="operator" value="/">
        <input type="submit" name="operator" value="%">
      </div>
    </form>
    <p>
      <?php
      print("$num1 $operator $num2 = $result");
      ?>
    </p>
  <?php endif; ?>
</body>

</html>
