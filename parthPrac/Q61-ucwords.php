<?php
// Original string
$text = " program written by Parth!";

// Capitalize the first letter of each word
$ucwordsText = ucwords($text);

// Display the result
echo "Original Text: " . $text . "<br>";
echo "After ucwords(): " . $ucwordsText . "<br>";

// Add author line
echo "<br> This program is written and executed by Parth Sharma-2220100264";
?>