<!-- Aim:- Using PHP to work with XMI. data -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XMI Data Processing in PHP</title>
</head>
<body>

<?php
// Load the XMI file
$xmlString = file_get_contents('example.xmi');
$xml = simplexml_load_string($xmlString);

// Accessing elements in the XMI data
$model = $xml->Model;

echo "<h2>Elements in XMI Data:</h2>";
foreach ($model->Element as $element) {
    echo "Element Name: " . $element['name'] . ", Type: " . $element['type'] . "<br>";
}
?>

</body>
</html>
