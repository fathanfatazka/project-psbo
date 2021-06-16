<?php 
session_start();
require 'functions.php';

if(!isset($_SESSION["login-button"])) {
header("Location: login.php");
    exit;
}

$id = $_SESSION["id"];
$updateUser = query("SELECT * FROM user WHERE id = $id")[0];
// var_dump($updateUser["nama"]);
// var_dump($id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/welcome.css">
    <link rel="icon" href="./assets/ipb-logo.png">

    <title>IPB Tracking User</title>
</head>
<body>
    <div class="blue-top">
</div>
    <div class="login-container">
        <div class="text-title">
            <img src="./assets/ipb-logo.png" alt="ipb-logo">
            <p>IPB: Tracking User</p>
        </div>
        <div class="greet-container">
            <div class="top-greet">
                <p>Selamat Datang, <br> <?php echo $updateUser["nama"]; ?> </p>
            </div>
            <div class="bottom-greet">
                <p>Yuk Cek Keadaan <br> Sekitarmu... </p>
            </div>
            <button name="track-user" onclick="document.location.href='dashboard.php'"><b> TRACK </b></button>
        </div>
    </div>
</body>
</html>