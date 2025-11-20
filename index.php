<?php
    $title = 'Home page';
    require_once './includes/header.php';
    session_start();

    if (!isset($_SESSION['login'])) {
        $_SESSION['login'] = false;
    }
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-danger text-center">Welcome to homepage.</h1>
        </div>
    </div>
</div>

<?php
    require_once './includes/footer.php';
?>