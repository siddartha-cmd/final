<?php 
$title = "Lab Solutions";
include 'includes/header.php'; 

// Access Restriction Logic 
if(!isset($_SESSION['user_id'])){
    header("Location: loginform.php");
    exit();
}
?>

<h1>Lab Solutions</h1>
<p class="text-center">This is a member area. </p>

<?php include 'includes/footer.php'; ?>