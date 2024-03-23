<!-- Aim:- Working with dates and times in PHP -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date and Time in PHP</title>
</head>
<body>

<?php
// 1. Displaying the Current Date and Time
$currentDateTime = new DateTime();
echo "<h2>1. Current Date and Time</h2>";
echo "Current Date and Time: " . $currentDateTime->format('Y-m-d H:i:s') . "<br>";

// 2. Formatting a Specific Date
$specificDate = new DateTime('2023-12-31');
echo "<h2>2. Formatted Specific Date</h2>";
echo "Formatted Specific Date: " . $specificDate->format('l, F j, Y') . "<br>";

// 3. Adding/Subtracting Days to a Date
$currentDate = new DateTime();
$futureDate = $currentDate->add(new DateInterval('P7D'));
$pastDate = $currentDate->sub(new DateInterval('P3D'));
echo "<h2>3. Adding/Subtracting Days</h2>";
echo "Future Date (7 days later): " . $futureDate->format('Y-m-d') . "<br>";
echo "Past Date (3 days earlier): " . $pastDate->format('Y-m-d') . "<br>";

// 4. Calculating the Difference Between Two Dates
$date1 = new DateTime('2023-01-01');
$date2 = new DateTime('2023-12-31');
$interval = $date1->diff($date2);
echo "<h2>4. Difference Between Two Dates</h2>";
echo "Difference between dates: " . $interval->format('%R%a days') . " days<br>";

// 5. Working with Timezones
$utcDateTime = new DateTime('now', new DateTimeZone('UTC'));
$utcDateTime->setTimezone(new DateTimeZone('America/New_York'));
echo "<h2>5. Working with Timezones</h2>";
echo "UTC Date and Time: " . $utcDateTime->format('Y-m-d H:i:s') . "<br>";

// 6. Getting the Current Timestamp
$timestamp = time();
echo "<h2>6. Current Unix Timestamp</h2>";
echo "Current Unix Timestamp: $timestamp<br>";

// 7. Parsing a Date String
$dateString = "2023-06-15";
$parsedDate = DateTime::createFromFormat('Y-m-d', $dateString);
echo "<h2>7. Parsing a Date String</h2>";
echo "Parsed Date: " . $parsedDate->format('l, F j, Y') . "<br>";
?>

</body>
</html>
