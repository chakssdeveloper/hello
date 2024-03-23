<!-- Aim:- Creating tables and inserting data into a MySQL database -->

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

// Create table
$sql_create_table = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql_create_table) === TRUE) {
    echo "Table created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Insert data
$sql_insert_data = "INSERT INTO users (firstname, lastname, email)
VALUES ('John', 'Doe', 'john.doe@example.com')";

if ($conn->query($sql_insert_data) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql_insert_data . "<br>" . $conn->error . "<br>";
}

// Close connection
$conn->close();
?>
