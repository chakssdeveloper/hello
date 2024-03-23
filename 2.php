
<!-- Aim:- Displaying data from a MySQL database on a webpage -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Display Page</title>
</head>
<body>

<?php
$servername = "your_server_name";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the database
$sql = "SELECT * FROM your_table_name";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Display data in a table
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['email']}</td></tr>";
    }

    echo "</table>";
} else {
    echo "No records found";
}

// Close connection
$conn->close();
?>

</body>
</html>
