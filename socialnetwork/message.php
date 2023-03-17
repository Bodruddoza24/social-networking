<html>
<?php 
require 'functions/functions.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("location:index.php");
}

$conn = connect();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Message</title>
    <link rel="stylesheet" type="text/css" href="resources/css/main.css">
</head>
<body>
    <div class="container">
        <?php include 'includes/navbar.php'; ?>
    </div>
    <?php
            echo '<div>';
            
            echo'</div>';
    ?>
</body>
</html>