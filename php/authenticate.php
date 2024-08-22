<?php
session_start();

// Define hardcoded credentials for simplicity (in a real application, use a database)
$admin_username = "admin";
$admin_password = "password123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the credentials match
    if ($username === $admin_username && $password === $admin_password) {
        $_SESSION['loggedin'] = true;
        header("Location: admin_panel.php");
        exit;
    } else {
        echo "Invalid username or password.";
    }
}
?>
