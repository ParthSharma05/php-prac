<?php
$file = fopen("about_me.txt", "w"); // Open the file in write mode
$text = "My name is Parth Sharma. I am passionate about IOS Engineering, Android Development and programming.
I love exploring new technologies and working on projects that enhance my skills.\n";
$text .= "This program is written and executed by Parth Sharma-2220100264";
fwrite($file, $text);
fclose($file);
echo "File 'about_me.txt' has been created successfully.<br>";
echo "<br> This program is written and executed by Parth Sharma-2220100264";
?>