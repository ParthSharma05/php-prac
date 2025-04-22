<?php
// Get current Unix timestamp
$currentTime = time();

// Display the raw timestamp
echo "<p>Current Unix Timestamp: $currentTime</p>";

// Convert the timestamp to readable date & time
echo "<p>Current Date and Time: " . date("Y-m-d H:i:s", $currentTime) . "</p>";

// Author line
echo "<br> This program is written and executed by Parth Sharma-2220100264";

?>