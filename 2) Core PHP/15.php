<?php
//? JSON string to decode
$json_str = '{"name":"John Smith","age":30,"city":"New York"}';

// Decode JSON string into a PHP array
$data = json_decode($json_str, true);

// Print out the decoded data
echo "Name: " . $data['name'] . "\n<br>";
echo "Age: " . $data['age'] . "\n<br>";
echo "City: " . $data['city'] . "\n<br>";
?>
