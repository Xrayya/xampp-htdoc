<!-- no 1 -->
<!--
<?php
$hello = "Hello World!";
$a_number = 4;
$anotherNumber = 8.9;
$bool = true;
?>
-->

<!-- no 2 -->
<!--
<?php
echo "<h1>Variable</h1>";

$angka = 99;
echo "Ini adalah angka = $angka </br>";

$angka_2 = $angka + 1;
echo "Ini hasilnya = $angka_2 </br>";
?>
-->

<!-- no 3 -->
<!--
<?php
$addition = 2 + 4;
$subtraction = 6 - 2;
$multiplication = 5 * 3;
$division = 15 / 3;
$modulus = 5 % 2;

echo "Penambahan: 2 + 4 = $addition <br>";
echo "Pengurangan: 6 - 2 = $subtraction <br>";
echo "Perkalian: 5 * 3 = $multiplication <br>";
echo "Pembagian: 15 / 3 = $division <br>";
echo "Pembagian sisa: 5 % 2 = $modulus <br>";
?>
-->

<!-- no 4 -->
<!--
<?php
$x = 4;
$x += 3;
echo "Hasil dari operasi tersebut adalah = $x</br>";

$x = 4;
$x -= 3;
echo "Hasil dari operasi tersebut adalah = $x</br>";

$x = 4;
$x *= 3;
echo "Hasil dari operasi tersebut adalah = $x</br>";

$x = 4;
$x /= 3;
echo "Hasil dari operasi tersebut adalah = $x</br>";

$x = 4;
$x %= 3;
echo "Hasil dari operasi tersebut adalah = $x</br>";

$x = 4;
$x .= 3;
echo "Hasil dari operasi tersebut adalah = $x</br>";
?>
-->

<!-- no 5 -->
<!--
<?php
$my_name = "anotherguy";

if ($my_name == "someguy") {
  echo "Your name is someguy!</br>";
} else {
  echo "Your name is not someguy! :(</br>";
}

$my_name = "someguy";

if ($my_name == "someguy") {
  echo "Your name is someguy!</br>";
}

echo "Welcome to my homepage!";
?>
-->

<!-- no 6 -->
<!--
<?php
$destination = "Tokyo";
echo "Traveling to $destination</br>";
switch ($destination) {
  case "Las Vegas":
    echo "Bring an extra $500";
    break;
  case "Amsterdam":
    echo "Bring an open mind";
    break;
  case "Egypt":
    echo "Bring 15 bottles of SPF 50 Sunscreen";
    break;
  case "Tokyo":
    echo "Bring lots of money";
    break;
  case "Caribbean Islands":
    echo "Bring a swimsuit";
    break;
}

echo "</br>";

$destination = "Amsterdam";
echo "Traveling to $destination</br>";
switch ($destination) {
  case "Las Vegas":
    echo "Bring an extra $500";
    break;
  case "Amsterdam":
    echo "Bring an open mind";
    break;
  case "Egypt":
    echo "Bring 15 bottles of SPF 50 Sunscreen";
    break;
  case "Tokyo":
    echo "Bring lots of money";
    break;
  case "Caribbean Islands":
    echo "Bring a swimsuit";
    break;
}
?>
-->

<!-- no 7 -->
<?php
echo "<div style=\"display: flex;\">";
$brush_price = 5;

// for
echo "<table border=\"1\" align = \"center\">";
echo "<tr><th>Quantity</th>";
echo "<th>Price</th></tr>";

for ($counter = 10; $counter <= 100; $counter += 10) {
  echo "<tr><td>";
  echo $counter;
  echo "</td><td>";
  echo $brush_price * $counter;
  echo "</td><tr>";
}

echo "</table>";

// for, increament +=5
echo "<table border=\"1\" align = \"center\">";
echo "<tr><th>Quantity</th>";
echo "<th>Price</th></tr>";

for ($counter = 10; $counter <= 100; $counter += 5) {
  echo "<tr><td>";
  echo $counter;
  echo "</td><td>";
  echo $brush_price * $counter;
  echo "</td><tr>";
}

echo "</table>";

// while
echo "<table border=\"1\" align = \"center\">";
echo "<tr><th>Quantity</th>";
echo "<th>Price</th></tr>";

$counter = 0;
while (($counter += 10) <= 100) {
  echo "<tr><td>";
  echo $counter;
  echo "</td><td>";
  echo $brush_price * $counter;
  echo "</td><tr>";
}

echo "</table>";

// do-while
echo "<table border=\"1\" align = \"center\">";
echo "<tr><th>Quantity</th>";
echo "<th>Price</th></tr>";

$counter = 10;
do {
  echo "<tr><td>";
  echo $counter;
  echo "</td><td>";
  echo $brush_price * $counter;
  echo "</td><tr>";
} while (($counter += 10) <= 100);

echo "</table>";

echo "</div>"
?>
