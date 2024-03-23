<!-- Aim:- Using variables and data type in PHP -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variables and Data Types</title>
</head>
<body>

<?php
// Variable declarations
$firstName = "John";
$lastName = "Doe";
$age = 25;
$height = 5.9;
$isStudent = true;

// Concatenation
$fullName = $firstName . " " . $lastName;

// Output variables
echo "<h1>$fullName</h1>";
echo "<p>Age: $age</p>";
echo "<p>Height: $height feet</p>";
echo "<p>Is a student: " . ($isStudent ? 'Yes' : 'No') . "</p>";

// Getting variable information
echo "<h2>Variable Information</h2>";
echo "<p>Age: ";
var_dump($age);
echo "</p>";

echo "<p>Height: ";
var_dump($height);
echo "</p>";

echo "<p>Is a student: ";
var_dump($isStudent);
echo "</p>";
?>

</body>
</html>
