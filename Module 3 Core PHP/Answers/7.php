<?php
$num1 = 5;
$num2 = 9;
echo $num1." ".$num2."\n";

for ($i = 2; $i <= $num1+1; $i++) {
  $row = "";
  for ($j = 1; $j <= $num2; $j++) {
    $row .= ($i-1)*10 + $j;
  }
  echo $row."\n";
}
?>
