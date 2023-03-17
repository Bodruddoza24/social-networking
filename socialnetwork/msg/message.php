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
    <div>
        <?php include 'includes/navbar.php'; ?>
    </div>
    <?php
            echo '<div>';
            include 'profile_picture.php';
            echo '<a class="profilelink" href="profile.php?id=' . $row['user_id'] .'">' . $row['user_firstname'] . ' ' . $row['user_lastname'] . '<a>';
            echo'</div>';
    ?>
</body>
</html>