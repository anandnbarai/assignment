<?php

$numbers = array (15, 11, 34, 45, 51) ;
$count = count($numbers);
$total = 0;


for($i=0; $i < $count ; $i++)
{
    $total += $numbers[$i];   //? equivalent to $total = $total + $numbers[$i];
}

echo "<b>Total of Five element is : </b>".$total;

?>