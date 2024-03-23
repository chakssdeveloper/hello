<!-- Aim:- Creating and working with multidimensional arrays in PHP -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Array Example</title>
</head>
<body>

<?php
// Create a two-dimensional array
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

// Display the original array
echo "<h2>Original Matrix:</h2>";
echo "<pre>";
print_r($matrix);
echo "</pre>";

// Access and display specific elements
echo "<h2>Accessing Elements:</h2>";
echo "Element at [0][1]: " . $matrix[0][1] . "<br>";
echo "Element at [2][2]: " . $matrix[2][2] . "<br>";

// Iterate through the array and display its contents
echo "<h2>Iterating Through the Matrix:</h2>";
echo "<table border='1'>";
foreach ($matrix as $row) {
    echo "<tr>";
    foreach ($row as $value) {
        echo "<td>{$value}</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>
