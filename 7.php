<!-- Aim:- Creating and using array in PHP -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Arrays</title>
</head>
<body>

<?php
// Indexed Array
$colors = array("Red", "Green", "Blue");

// Accessing elements in an indexed array
echo "<h2>Indexed Array</h2>";
echo "First Color: " . $colors[0] . "<br>";
echo "Second Color: " . $colors[1] . "<br>";
echo "Third Color: " . $colors[2] . "<br>";

// Associative Array
$person = array("first_name" => "John", "last_name" => "Doe", "age" => 30);

// Accessing elements in an associative array
echo "<h2>Associative Array</h2>";
echo "First Name: " . $person["first_name"] . "<br>";
echo "Last Name: " . $person["last_name"] . "<br>";
echo "Age: " . $person["age"] . "<br>";

// Adding an element to an associative array
$person["city"] = "New York";

// Displaying the updated associative array
echo "City: " . $person["city"] . "<br>";

// Multidimensional Array
$students = array(
    array("name" => "Alice", "age" => 22, "grade" => "A"),
    array("name" => "Bob", "age" => 21, "grade" => "B"),
    array("name" => "Charlie", "age" => 23, "grade" => "C")
);

// Accessing elements in a multidimensional array
echo "<h2>Multidimensional Array</h2>";
echo "Name: " . $students[0]["name"] . ", Age: " . $students[0]["age"] . ", Grade: " . $students[0]["grade"] . "<br>";
echo "Name: " . $students[1]["name"] . ", Age: " . $students[1]["age"] . ", Grade: " . $students[1]["grade"] . "<br>";
echo "Name: " . $students[2]["name"] . ", Age: " . $students[2]["age"] . ", Grade: " . $students[2]["grade"] . "<br>";
?>

</body>
</html>
