<?php

$arr = [array(5," ",9),
array(2,6,1,0),
array(3,7,1,1),
array(4,8,1,2)
];

for ($i = 0; $i < count($arr); $i++)
{
    for ($j = 0 ; $j < count($arr); $j++)
    {
        echo $arr[$i][$j];
    }
    echo "<br>";
}

?>
