<!-- Aim:- Creating and using cookies in PHP -->

<?php
// Set a cookie with a name, value, and expiration time
setcookie("user", "John Doe", time() + 3600, "/"); // Expires in 1 hour

// Retrieve and display the value of the cookie
if (isset($_COOKIE["user"])) {
    $username = $_COOKIE["user"];
    echo "Welcome back, $username!";
} else {
    echo "Welcome! This is your first visit.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Cookies in PHP</title>
</head>
<body>

</body>
</html>
