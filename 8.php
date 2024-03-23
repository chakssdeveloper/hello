<!-- Aim:- Using control structure like if/else statements and loops in PHP -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Control Structures</title>
</head>
<body>

<?php
// Example 1: If/Else Statement
$age = 25;

echo "<h2>If/Else Statement</h2>";
if ($age >= 18) {
    echo "You are an adult.";
} else {
    echo "You are a minor.";
}

// Example 2: For Loop
echo "<h2>For Loop</h2>";
for ($i = 1; $i <= 5; $i++) {
    echo "Iteration $i<br>";
}

// Example 3: While Loop
echo "<h2>While Loop</h2>";
$counter = 1;
while ($counter <= 3) {
    echo "Iteration $counter<br>";
    $counter++;
}

// Example 4: Foreach Loop (with an array)
echo "<h2>Foreach Loop</h2>";
$colors = array("Red", "Green", "Blue");
foreach ($colors as $color) {
    echo "$color<br>";
}
?>

</body>
</html>
