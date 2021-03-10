<!--Build a PHP code to store name of students in an array and display it using print_r
function. Sort and Display the same using asort & arsort functions-->
<?php

$age = array("Peter"=>20, "Harry"=>14, "John"=>45, "Clark"=>35);
 
asort($age);
print_r($age);
arsort($age);
print_r($age);

?>
