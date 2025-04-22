<!DOCTYPE html>
<html>
<head>
    <title>Age Calculator</title>
</head>
<body>

<h2>Calculate Your Age</h2>

<form method="post">
    Enter your Date of Birth: <input type="date" name="dob" required>
    <input type="submit" name="submit" value="Calculate Age">
</form>

<?php
if (isset($_POST['submit'])) {
    $dob = $_POST['dob'];
    $dobDate = new DateTime($dob);
    $currentDate = new DateTime();

    $age = $dobDate->diff($currentDate);

    echo "<p><strong>Your Age is:</strong></p>";
    echo "<p>Years: " . $age->y . "</p>";
    echo "<p>Months: " . $age->m . "</p>";
    echo "<p>Days: " . $age->d . "</p>";
    echo "<p>This program is written by <strong>Parth Sharma-2220100264</strong></p>";
}
?>

</body>
</html>