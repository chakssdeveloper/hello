<!-- Aim:- Using PHP to work with JSON data -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON Handling in PHP</title>
</head>
<body>

<?php
// Sample PHP array
$data = array(
    'name' => 'John Doe',
    'age' => 30,
    'city' => 'New York'
);

// Encode the array to JSON
$jsonString = json_encode($data);

echo "<h2>Encoded JSON String:</h2>";
echo "<pre>$jsonString</pre>";

// Decode the JSON string
$decodedData = json_decode($jsonString, true);

echo "<h2>Decoded PHP Array:</h2>";
echo "<pre>";
print_r($decodedData);
echo "</pre>";

// Handling JSON errors
$jsonStringWithError = '{"name":"John Doe","age":30,"city":}';
$decodedDataWithError = json_decode($jsonStringWithError);

echo "<h2>Handling JSON Errors:</h2>";

if (json_last_error() !== JSON_ERROR_NONE) {
    echo '<p>Error decoding JSON: ' . json_last_error_msg() . '</p>';
} else {
    echo "<pre>";
    print_r($decodedDataWithError);
    echo "</pre>";
}
?>

</body>
</html>
