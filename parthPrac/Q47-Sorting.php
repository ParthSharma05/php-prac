<?php 
$cars = array("Volvo", "BMW", "Toyota"); // Corrected variable name
sort($cars); // Sorting the array
$clength = count($cars); // Getting the length of the array

for ($x = 0; $x < $clength; $x++) { 
    echo $cars[$x]; 
    echo "<br>"; 
    

}
echo "<br> This program is written and executed by Parth Sharma-2220100264";

?>