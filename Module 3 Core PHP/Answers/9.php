<?php

$a = '1';
$b = &$a;
$b = "2$b";

echo $a."<br>".$b;
echo "<br><b>Explaination :</b> In first step Value 1 is given to variable a. In second step variable b is assign as a reference to variable a means both variable a and b now references a same memory location and whatever value you assign to any of those references both will point to same value. So In third step 2b is assigned to variable b and now value of b is 21 because here two string concatenates.";


?>