<?php
session_start();

// Auto-login using remember-me cookie
if (!isset($_SESSION['user_id']) && isset($_COOKIE['remember_user'])) {
    $_SESSION['email'] = $_COOKIE['remember_user'];
}

// Block access if still no session
if (!isset($_SESSION['email']) && !isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<?php 
$title = "Welcome";
include 'includes/header.php'; 
?>

<h1>Welcome, new member!</h1>

<?php include 'includes/footer.php'; ?>