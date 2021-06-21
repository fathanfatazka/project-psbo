<?php 
session_start();
require 'functions.php';

if(!isset($_SESSION["login-button"])) {
    header("Location: index.php");
    exit;
}

$id = $_SESSION["id"];
$updateUser = query("SELECT * FROM user WHERE id = $id")[0];
// var_dump($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/dashboard-style.css">
    <link rel="icon" href="./assets/ipb-logo.png">
    <title>IPB Tracking User</title>
</head>
<body>
    <div class="top-nav">
        <a href="logout.php">Logout</a>
    </div>
    <div class="sidebar-sec">
        <div class="top-logo-title">
            <img src="./assets/ipb-logo.png">
            <div class="title-title">
                <h2>IPB:</h2>
                <p>Tracking User</p>
            </div>
        </div>
        <div class="pic-name-dept">
            <img src="./assets/calendar.png" >
            <h3><?php echo $updateUser["nama"]; ?></h3>
            <p><?php echo $updateUser["dept"]; ?></p>
        </div>
        <div class="link-to-page">
            <a href="profile.php" name="profile-button">Profile</a> 
            <a href="dashboard.php" name="track-button">Track</a>
        </div>
    </div>
    <div class="main-content">
        <iframe style="width: 100%; height: 778px;" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBrqg_D_kuXQ3NO2cdHfH9l7vdoPaSy0FA&q=LSI+IPB+University+Dramaga,Bogor+Indonesia" allowfullscreen>
        </iframe>
    </div>
</body>
</html>