<?php
//* JSON (JavaScript Object Notation) is a lightweight text-based, language-independentf data exchange format. 

//? To convert a JSON data string to a PHP array, you can use the json_decode($json) function. The json_decode() function accepts 
//? the JSON string as the first parameter and a few additional parameters to control the process of converting JSON to a PHP array. 


$json = '{"UK": "London", "India": "New Delhi", "IT": "Rome"}';
echo "<b>JSON String : </b>".$json."<br><br>";
print_r (json_decode($json));

?>