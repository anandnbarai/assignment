<?php


/* the array_unique() function only works with simple arrays of scalar values (such as strings, integers, and floats). If your array contains non-scalar values (such as arrays or objects), you may need to use a different approach to remove duplicates. */


$arr = array(1, 2, 3, 2, 4, 3, 5, 6, 5, 6, 4, 3, 2, 4, 3, 5);
$uarray = array_unique($arr);

echo "<b>Array with Duplicate Values.<br></b>";
print_r($arr);
echo "<br><br>";
echo "<b>Array after removing Duplicate Values.<br></b>";
print_r($uarray);

?>