<?php
$x = array("a" => "Red<br>", "b"=> "Green<br>", "c"=> "Blue<br>");
$y = array("u" => "Yellow<br>", "v" => "Orange<br>", "w" => "Pink<br>");
$z = $x + $y; // Union of $x and Sy var_ dump($z);
var_dump($x===$y); // Outputs: boolean false 
var_dump($x == $y); // Outputs: boolean false 
var_dump($x !== $y); // Outputs: boolean true 
var_dump($x!= $y); // Outputs: boolean true 
var_dump($x!= $z); // Outputs: boolean true
echo "<br>";

echo "This program is executed by Parth Sharma, PRN-2220100264";


?>