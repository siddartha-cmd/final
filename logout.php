<?php
session_start();

// Destroy all session data
session_unset();
session_destroy();

// Remove PHPSESSID cookie
if (ini_get('session.use_cookies')) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),    // usually PHPSESSID
        '',
        time() - 2000,     // expire in past
        $params['path'],
        $params['domain'],
        $params['secure'],
        $params['httponly']
    );
}

// Remove your custom login cookie if you have one
setcookie("logged_in", "", time() - 2000, "/");

// 🚀 Redirect to homepage
header("Location: index.php");
exit();
?>