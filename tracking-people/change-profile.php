<?php
session_start();
require 'functions.php';

if(!isset($_SESSION["login-button"])){
    header("Location: login.php");
    exit;
}

$id = $_SESSION["id"];
$updateUser = query("SELECT * FROM user WHERE id = $id")[0];

if(isset($_POST["save"])) {
    if(changeProfile($_POST) > 0) {
        echo "<script>
        alert('Your data has been updated');
            document.location.href='profile.php';
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
            <img src="./assets/calendar.png" >
            <h3><?php echo $updateUser['nama']; ?></h3>
            <p><?php echo $updateUser['dept']; ?></p>
        </div>
        <div class="link-to-page">
            <a href="profile.php" name="profile-button">Profile</a> 
            <a href="dashboard.php" name="track-button">Track</a>
        </div>
    </div>
    <div class="main-content">
        <div class="main-cont-container">
            <p>Update Profile</p>
            <div class="form-data">
                <form action="" method="POST">
                    <input type="hidden" name="id" id="id" value="<?php echo $updateUser["id"]; ?>"> <br>
                    <label for="user-name">Nama</label> <br>
                    <input type="text" name="nama" id="user-name" value="<?php echo $updateUser["nama"]; ?>"> <br>
                    <label for="dept-name">Departemen</label> <br>
                    <input type="text" name="dept" id="dept-name" value="<?php echo $updateUser["dept"]; ?> "> <br>
                    <label for="nim">NIM</label> <br>
                    <input type="text" name="nim" id="nim" value="<?php echo $updateUser["nim"]; ?> "> <br>
                    <label for="no-telp">No Telepon</label> <br>
                    <input type= "tel" name="telp"  id="no-telp" pattern="[0-9]{4}[0-9]{4}[0-9]{4}" value="<?php echo $updateUser["telp"]; ?> "> <br>
                    <!-- <label for="upload-foto">Upload Foto</label> <br>
                    <input type= "text" name="foto"  id="upload-foto" value="<?php echo $updateUser["dept"]; ?> "> <br> -->
                    <button type="submit" name="save" style="position: relative; top: 10px; left: 27%; font-size: .8em;
                    background: #00BFFF; border-radius: 50px; border: none; width: 15%;height: 30px; "> Save </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>