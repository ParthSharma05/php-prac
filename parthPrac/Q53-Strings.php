<?php
// String declaration
$greeting = "Hello, World!";
$name = "Parth";

// String concatenation
echo $greeting . " My name is " . $name . ".";  
echo "<br>";

// String length
echo "The length of the greeting is: " . strlen($greeting);
echo "<br>";

// String to uppercase
echo "Uppercase: " . strtoupper($greeting);
echo "<br>";

// String to lowercase
echo "Lowercase: " . strtolower($name);
echo "<br>";

// Substring
echo "Substring (first 5 characters): " . substr($greeting, 0, 5);
echo "<br>";

// Replace a word
echo "After replacing 'World' with 'PHP': " . str_replace("World", "PHP", $greeting);
echo "<br>";

// String position
echo "Position of 'World' in the greeting: " . strpos($greeting, "World");
echo "<br>";

// Attribution line
echo "<br> This program is written and executed by Parth Sharma-2220100264";
?>