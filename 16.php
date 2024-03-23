<?php

namespace MyNamespace; // Define a namespace

// Define a class within the namespace
class MyClass {
    public function sayHello() {
        echo "Hello from MyClass!<br>";
    }
}

// Define a function within the namespace
function myFunction() {
    echo "Hello from myFunction!<br>";
}

// Define a constant within the namespace
const MY_CONSTANT = "This is a constant";

?>

<!-- Aim:- Creating and using namespaces in PHP -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namespaces in PHP</title>
</head>
<body>

<?php
// Import the namespace
// use MyNamespace\MyClass;
// use function MyNamespace\myFunction;

// Create an instance of the class
$obj = new MyClass();
$obj->sayHello();

// Call the function
myFunction();

// Access the constant
echo MY_CONSTANT;
?>

</body>
</html>






