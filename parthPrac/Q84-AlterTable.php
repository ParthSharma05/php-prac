<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Drop existing unique key if exists
$conn->query("ALTER TABLE studentinfo DROP INDEX Stud_Email");

// Alter table to add UNIQUE constraint
$sql = "ALTER TABLE studentinfo
ADD UNIQUE KEY Stud_Email (Stud_Email);";

if ($conn->query($sql) === TRUE) {
    echo "Table students altered successfully";
} else {
    echo "Error altering table: " . $conn->error;
}

$conn->close();
echo "<br> This program is written and executed by Parth Sharma-2220100264";

?>