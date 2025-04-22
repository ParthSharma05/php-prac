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


$sql = "INSERT INTO studentinfo (Stud_ID,Stud_Name, Stud_Email,Stud_Contact)
        VALUES (101,'Parth Sharma', 'parth@gmail.com','8888999976')";

if ($conn->query($sql) === TRUE) {
    echo "New student inserted successfully.<br>";
} else {
    echo "Error inserting student: " . $conn->error . "<br>";
}

$conn->close();
echo "<br> This program is written and executed by Parth Sharma-2220100264";

?>