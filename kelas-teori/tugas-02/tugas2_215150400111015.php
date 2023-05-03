<?php
// Nama: Azhary Munir Abdillah
// NIM: 215150400111015
// Kelas: Pemrograman Web (A)
//
$nims = array("12312321", "215159400111015", "23526647", "23466424", "295113", "686529", "967774", "922856", "471395");

for ($i=0; $i < count($nims); $i++) { 
  if ($nims[$i][-1] >= 0 && $nims[$i][-1] <=4) {
    echo "<p style='color: aquamarine;'>$nims[$i]</p>";
  } else if ($nims[$i][-1] >=5 && $nims[$i][-1] <= 9) {
    echo "<p style='color: dodgerblue;'>$nims[$i]</p>";
  }
}
?>
