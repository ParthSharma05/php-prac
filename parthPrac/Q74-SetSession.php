<?php
session_start(); // Start the session

// Set session variable if not already set
if (!isset($_SESSION["user"])) {
    $_SESSION["user"] = "Parth";
    echo $message = "Session variable 'PARTH' is now set.";
} else {
    $message = "Welcome back, " . $_SESSION["user"];
}

echo "<br> This program is written and executed by Parth Sharma-2220100264";

?>
