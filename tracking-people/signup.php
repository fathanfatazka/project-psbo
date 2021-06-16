<?php
require 'functions.php';

if(isset($_POST["signup-button"])) {
    if(signup($_POST) > 0) {
        echo "<script>
        alert('You are sucessfully signing up an account.');
        document.location.href='login.php';
        </script>";
    }
    else {
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./styles/signup.css">
        <link rel="icon" href="./assets/ipb-logo.png">

        <title>IPB Tracking User</title>
    </head>
    <body>
        <div class="blue-top"></div>
        <div class="signup-container">
            <div class="signup-text-title">
                <img src="./assets/ipb-logo.png" alt="ipb-logo" >
                <p>IPB: Tracking User</p>
            </div>
            <div class="signup-sec-2">
                <div class="login-top">
                    <p> SIGN UP </p>
                </div>
                <div class="login-bottom">
                    <form action="" method="POST">
                        <label for="user-name">Nama</label> <br>
                        <input type="text" name="nama" id="user-name" required> <br>
                        <label for="dept-name">Departemen</label> <br>
                        <input type="text" name="dept" id="dept-name" required> <br>
                        <label for="id-name">Username</label> <br>
                        <input type="text" name="username" id="id-name" required> <br>
                        <label for="pass-signup">Password</label> <br>
                        <input type= "password" name="password"  id="pass-signup" required> <br>
                        <label for="conf-signup">Confirm Password</label> <br>
                        <input type= "password" name="conf-signup"  id="conf-signup" required> <br>
                        <button type="submit" name="signup-button"><b> SIGN UP </b></button>
                        <a href="login.php" style="position: absolute; left: 40%; top: 91%; text-decoration: none; font-weight: normal;"><p> Kembali ke Login </p></a> 
                    </form>           
                </div>
            </div>
        </div>
    </body>
</html>