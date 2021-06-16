<?php 
session_start();
require 'functions.php';

$id = $_SESSION["id"];
$updateUser = query("SELECT * FROM user WHERE id = $id")[0];

// var_dump($_SESSION["id"]);

if(!isset($_SESSION["login-button"])){
    header("Location: login.php");
    exit;
}

// $id = $_SESSION["id"];

// $result = mysqli_query($conn, "SELECT * FROM user");

// $row = mysqli_fetch_assoc($result);
// var_dump($row["id"]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/profile-style.css">
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
            <img src="./assets/calendar.png">
            <h3><?php echo $updateUser["nama"]; ?></h3>
            <p><?php echo $updateUser["dept"]; ?></p>
        </div>
        <div class="link-to-page">
            <a href="profile.php" name="profile-button">Profile</a> 
            <a href="dashboard.php" name="track-button">Track</a>
        </div>
    </div>
    <div class="main-content">
        <div class="main-cont-container">
            <p>Profile</p>
            <div class="form-data">
                <form action="">
                    <label for="user-name">Nama</label> <br>
                    <input type="text" name="nama" id="user-name" value="<?php echo $updateUser["nama"]; ?>" disabled> <br>
                    <label for="dept-name">Departemen</label> <br>
                    <input type="text" name="dept" id="dept-name" value="<?php echo $updateUser["dept"]; ?>" disabled> <br>
                    <label for="nim">NIM</label> <br>
                    <input type="text" name="nim" id="nim" value="<?php echo $updateUser["nim"]; ?>" disabled> <br>
                    <label for="no-telp">No Telepon</label> <br>
                    <input type= "text" name="telp"  id="no-telp" value="<?php echo $updateUser["telp"]; ?>" disabled> <br>
                    <!-- <label for="upload-foto">Upload Foto</label> <br>
                    <input type= "text" name="foto" id="upload-foto" value="<?php echo $updateUser["dept"]; ?>" disabled> <br> -->
                </form>
                <a href="change-profile.php" style="position: relative; left: 28%; top: 10px; text-decoration: none;">Ubah Data</a>
            </div>
        </div>
    </div>
</body>
</html>