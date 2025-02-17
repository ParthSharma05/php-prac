
<?php
// Define an array
$array = [3, 8,10,1,12,50,100,750,11];

// Initialize the first element as the largest
$largest = $array[0];

// Loop through the array to compare each element
for ($i = 1; $i < count($array); $i++) {
    if ($array[$i] > $largest) {
        $largest = $array[$i];
    }
}

// Output the largest number
echo "The largest number is: " . $largest;
echo "<br>";
echo"\n This code is executed by Parth Sharma,PRN-2220100264";
   


?>
