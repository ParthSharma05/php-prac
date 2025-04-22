<?php 
    // Define array 
    $age = array("Peter" => 20, "Harry" => 14, "John" => 45, "Clark" => 35);

    // Sorting array by key in ascending order
    ksort($age);

    // Printing sorted array
    echo "<h3>Sorted Ages in Ascending Order(ksort):</h3>";
   foreach ($age as $name => $value) {
        echo "$name: $value <br>";
    }

    // Adding the requested message
    echo "<br> This program is written and executed by Parth Sharma-2220100264";
?>