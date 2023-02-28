<?php


//? The Fibonacci series is a sequence of numbers in which each number is the sum of the two preceding numbers. 
//? The sequence starts with 0 and 1

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