<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sorting PHP Indexed Array in Descending Order</title>
</head>
<body>
    <?php 
    // Define array 
    $colors = array("Red", "Green", "Blue", "Yellow");

    // Sorting array in descending order
    rsort($colors); 

    // Printing sorted array
    echo "<h3>Sorted Colors in Descending Order:</h3>";
    foreach ($colors as $color) {
        echo $color . "<br>";
    }

    // Printing author information
    echo "<br> This program is written and executed by Parth Sharma-2220100264";
    ?>
</body>
</html>