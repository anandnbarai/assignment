<?php
// PHP code to get the Fibonacci series
function Fibonacci($n)
{

    $num1 = 0;
    $num2 = 1;

    $num = 0;


    while ($num < $n) 
    {
        echo ' ' . $num1;
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
        $num = $num + 1;
    }
}

Fibonacci(10);

?>