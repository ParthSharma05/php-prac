<?php
// Define a date
$day = 31;
$month = 2;
$year = 2025;

// Check if the date is valid
if (checkdate($month, $day, $year)) {
    echo "The date $day/$month/$year is valid.<br>";
} else {
    echo "The date $day/$month/$year is not valid.<br>";
}

// Add author line
echo "<br> This program is written and executed by Parth Sharma-2220100264";
?>