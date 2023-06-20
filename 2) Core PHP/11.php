<?php

echo "<h3><u>In PHP, there are three types of arrays:</u></h3>";

echo "<b> 1. Indexed Array :</b> Arrays with a numeric index<br>";

$colors = array("red", "green", "blue");
print_r($colors);
echo"<br>";


echo "<b><br> 2. Associative arrays :</b> Arrays with named keys<br>";

$marks = array ("maths"=>"84","che"=>"65","phy"=>"72");
print_r($marks);
echo"<br>";
echo "You have got ".$marks['maths']." marks in Maths.<br>";
echo "You have got ".$marks['che']." marks in Chemistry.<br>";
echo "You have got ".$marks['phy']." marks Physics.<br>";


echo "<b><br> 3. Multidimensional arrays :</b> Arrays containing one or more arrays<br>";

$emp = [
    [1,"Anand","Manager",80000],
    [2,"Jay","Ass Manager",65000],
    [3,"Salman","Salesman",40000],
    [4,"Amir","Driver",15000]   
];

print_r($emp);

?>