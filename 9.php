<!-- Aim:- Creating and calling functions in PHP -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions</title>
</head>
<body>

<?php
// Example 1: Basic Function
function greet() {
    echo "Hello, World!<br>";
}

// Calling the function
greet();

// Example 2: Function with Parameters
function greetWithName($name) {
    echo "Hello, $name!<br>";
}

// Calling the function with an argument
greetWithName("John");

// Example 3: Function with Return Value
function add($a, $b) {
    return $a + $b;
}

// Calling the function and displaying the result
$result = add(3, 5);
echo "Result of addition: $result<br>";

// Example 4: Function with Default Parameter
function greetWithDefault($name = "Guest") {
    echo "Hello, $name!<br>";
}

// Calling the function without providing an argument
greetWithDefault();
?>

</body>
</html>
