<?php
// Set timezone to India
date_default_timezone_set("Asia/Kolkata");

// Location: Delhi, India
$latitude = 28.6139;
$longitude = 77.2090;
$zenith = 90;
$timestamp = strtotime("today");

// Get sunrise and sunset time
$sunrise = date("H:i:s A", date_sunrise($timestamp, SUNFUNCS_RET_TIMESTAMP, $latitude, $longitude, $zenith, 5.5));
$sunset = date("H:i:s A", date_sunset($timestamp, SUNFUNCS_RET_TIMESTAMP, $latitude, $longitude, $zenith, 5.5));

// Display results
echo "Location: Delhi, India<br>";
echo "Sunrise time: " . $sunrise . "<br>";
echo "Sunset time: " . $sunset . "<br>";

// Author line
echo "<br> This program is written and executed by Parth Sharma-2220100264";

?>