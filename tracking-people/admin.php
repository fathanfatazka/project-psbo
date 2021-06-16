<?php 
require 'functions.php';
$pengguna = query("SELECT * FROM user");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/admin-style.css">
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
    </div>
    <div class="main-content">
        <h1 style="position: absolute; top: 7%; left: 8%; color: #4682B4">Selamat Datang, Admin.</h1>
        <?php $i=1;?>
        <div class="table">
            <table border="1" cellpadding="10" cellspacing="0" style="position: absolute; top: 20%; left: 8%"> 
                <tr>
                    <th style="padding: 10px; color: blue">No</th>
                    <th style="padding: 10px; color: blue ">Nama</th>
                    <th style="padding: 10px; color: blue">NIM</th>
                    <th style="padding: 10px; color: blue">Departemen</th>
                    <th style="padding: 10px; color: blue">No Telepon</th>
                    <th style="padding: 10px; color: blue">Hapus Akun</th>
                    <!-- <th style="padding: 10px; color: blue">Foto</th> -->
                </tr>
                <?php foreach($pengguna as $row) : ?>
                    <tr>
                        <td style="padding: 10px"><?php echo $i; ?></td>
                        <td style="padding: 10px"><?php echo $row["nama"] ?></td>
                        <td style="padding: 10px"><?php echo $row["nim"] ?></td>
                        <td style="padding: 10px"><?php echo $row["dept"] ?></td>
                        <td style="padding: 10px"><?php echo $row["telp"] ?></td>
                        <td style="text-align: center; "><a href="hapus.php?id=<?php echo $row["id"] ?>" onclick="return confirm('Are you sure you want to delete this account?')" style="text-decoration: none;">Hapus</a></td>
                        <!-- <td style="padding: 10px"><img src="./assets/<?php echo $row["foto"] ?>" width="50px"></td>      -->
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>
</html>