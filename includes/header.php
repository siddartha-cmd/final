<?php 
// Start session here and check if it's already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// Set a default title if not provided
$title = isset($title) ? $title : 'Algoma University';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- FAVICON LINK UPDATED WITH YOUR PROVIDED URL -->
    <link rel="icon" type="image/png" href="https://algomau.ca/wp-content/uploads/2020/02/favicon-32x32-1.png"> 
    
    <!-- CONSOLIDATED LAYOUT STYLES (Fixed Header and Sticky Footer Logic) -->
    <style>
        /* 1. Flexbox setup for Sticky Footer: Makes the body a column that fills the viewport */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
        }

        /* 2. Body Spacing: Add padding to the top so the fixed header doesn't hide content */
        body {
            padding-top: 80px; 
            font-family: Arial, sans-serif;
        }

        /* 3. Content Wrapper: Forces the main content to grow and push the footer down */
        .content-wrapper {
            flex: 1 0 auto;
        }

        /* Fixed Header Styling */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
        
        /* General H1 style */
        h1 {
            color: #dc3545;
            text-align: center;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <div class="container-fluid">
                <a class="navbar-brand" href="algomau.php">Algoma University</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="labsolutions.php">Lab Solutions</a></li>
                    </ul>
                    <div class="d-flex">
                        <?php if(isset($_SESSION['user_id'])): ?>
                            <a href="logout.php" class="btn btn-info ms-2">Logout</a>
                        <?php else: ?>
                            <a href="signupform.php" class="btn btn-info ms-2">Sign Up</a>
                            <a href="loginform.php" class="btn btn-info ms-2">Login</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Start of the Main Content Wrapper. -->
    <div class="container content-wrapper">