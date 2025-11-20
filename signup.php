<?php
require 'includes/db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get inputs and remove special characters 
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];
    $address = htmlspecialchars($_POST['address']);
    $city = htmlspecialchars($_POST['city']);
    $province = htmlspecialchars($_POST['province']);
    $postal_code = htmlspecialchars($_POST['postal_code']);

    // Hash the password 
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // SQL Insert 
    $sql = "INSERT INTO users (first_name, last_name, username, email, password, address, city, province, postal_code)
            VALUES ('$first_name', '$last_name', '$username', '$email', '$hashedPassword', '$address', '$city', '$province', '$postal_code')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to welcome page 
        header('Location: welcome.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>