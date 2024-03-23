<!-- Aim:- Creating a simple login system with PHP -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Login System</title>
</head>
<body>

<?php
session_start();

// Database connection details
$servername = "your_server_name";
$username = "your_username";
$password = "your_password";
$dbname = "simple_login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enteredUsername = $_POST['username'];
    $enteredPassword = $_POST['password'];

    // Validate user credentials
    $sql = "SELECT * FROM users WHERE username = '$enteredUsername'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $storedPassword = $row['password'];

        // Verify the entered password with the stored password
        if (password_verify($enteredPassword, $storedPassword)) {
            $_SESSION['username'] = $enteredUsername;
            echo "Login successful. Welcome, $enteredUsername!";
        } else {
            echo "Login failed. Incorrect password.";
        }
    } else {
        echo "Login failed. User not found.";
    }
}

// Close connection
$conn->close();
?>

<h2>Login Form</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>

    <input type="submit" value="Login">
</form>

</body>
</html>
