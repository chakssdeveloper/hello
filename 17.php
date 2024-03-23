<!-- Aim:- Creating a simple HTML form and processing the form data with PHP -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>
<body>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Retrieve form data
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Process the data (In this example, we will just display the data)
        echo "Username: " . htmlspecialchars($username) . "<br>";
        echo "Password: " . htmlspecialchars($password) . "<br>";
    }
    ?>

    <h2>Login Form</h2>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <br>

        <input type="submit" value="Submit">
    </form>

</body>
</html>
