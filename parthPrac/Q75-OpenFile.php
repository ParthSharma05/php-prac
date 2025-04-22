<?php
$filename = "sample.txt"; // Make sure this file exists in the same directory

// Open the file in read mode
$file = fopen($filename, "r");

if ($file) {
    echo "<p>File '$filename' opened successfully!</p>";
    fclose($file); // Close the file after opening
} else {
    echo "<p>Unable to open the file!</p>";
}
echo "<br> This program is written and executed by Parth Sharma-2220100264";
?>