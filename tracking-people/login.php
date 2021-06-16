<?php
session_start();
require 'functions.php';

if(isset($_SESSION["login-button"])) {
    header("Location: dashboard.php");
    exit;
}

if(isset($_POST["login-button"]) > 0) {
    $username = $_POST["username"];
    $password = $_POST["pass-login"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    if(mysqli_num_rows($result) === 1) {    
        $row = mysqli_fetch_assoc($result);
        if($row["username"] === "admin") {
            if(password_verify($password, $row["password"])) 
                header("Location: admin.php");
        }
        else if(password_verify($password, $row["password"])) {
            //set session
            $_SESSION["id"] = $row["id"];
            $_SESSION["login-button"] = true;

            header("Location: welcome.php");
            exit;
        }
    }

    $error = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/login-style.css">
    <link rel="icon" href="./assets/ipb-logo.png">

    <title>IPB Tracking User</title>
</head>
<body>
    <div class="blue-top"></div>
    <div class="login-container">
        <div class="text-title">
            <img src="./assets/ipb-logo.png" alt="ipb-logo" >
            <p>IPB: Tracking User</p>
        </div>
        <div class="login-sec-2">
            <div class="login-top">
                <p> LOGIN </p>
            </div>
            <div class="login-bottom">
                <form action="" method="post">
                    <label for="id-name">Username</label> <br>
                    <input type="text" name="username" placeholder="Masukan Username" id="id-name"> <br>
                    <label for="pass-login">Password</label> <br>
                    <input type= "password" name="pass-login" placeholder="Password" id="pass-login"> <br>
                    <?php 
                        if(isset($error)) {
                            echo "
                            <p style='color: red; font-weight: normal; text-align: center;'>Username/Password Salah </p>
                            ";
                        }
                    ?>    
                    <button name="login-button"><b> LOGIN </b></button><br>
                    <a href="signup.php" style="position: relative; top: 15px; text-decoration: none; font-size: 14px; font-weight: normal; color: #4682B4;"><b> Baru Disini? </b>Buat Akun</a> 
                </form>           
            </div>
        </div>
    </div>
</body>
</html>