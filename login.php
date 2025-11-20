<?php
session_start();
require 'includes/db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get email and password safely
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    // Retrieve user from DB
    $sql = "SELECT id, email, password FROM users WHERE email = '$email' LIMIT 1";
    $result = $conn->query($sql);

    if ($result && $result->num_rows === 1) {

        $row = $result->fetch_assoc();
        $dbpassword = $row['password'];

        // Validate password
        if (password_verify($password, $dbpassword)) {

            // --- SESSION LOGIN ---
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['email'] = $row['email'];

            // --- REQUIRED BY ASSIGNMENT: LOGIN COOKIE ---
            setcookie("logged_in", "true", time() + 3600, "/");

            header("Location: labsolutions.php");
            exit();
        } else {
            echo "Bad password";
        }

    } else {
        echo "User not found";
    }

    $conn->close();
}
?>