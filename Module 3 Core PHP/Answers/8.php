<?php
$rows = 5;
$columns = 5;

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $columns; $j++) {
        if ($i == 1 || $i == $rows || $j == 1) {
            echo "*";
        } else {
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}
?>
