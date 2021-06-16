<?php 
// connect php to mysql
$db_name = "localhost";
$db_username = "root";
$db_password = "";
$dB = "ipb-tracking-user";

$conn = mysqli_connect($db_name, $db_username, $db_password, $dB);
// make a query function

function query($input_query) {
    global $conn;
    $result = mysqli_query($conn, $input_query);

    $users = [];
    while($user = mysqli_fetch_assoc($result)) {
        $users[] = $user;
    }
    return $users;
}

function signup($method) {
    global $conn;

    $nama = $method["nama"];
    $dept = $method["dept"];
    $username = strtolower(stripslashes($method["username"]));
    $password = mysqli_real_escape_string($conn, $method["password"]);
    $confpassword = mysqli_real_escape_string($conn, $method["conf-signup"]);

    $usernameCheck = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");

    if(mysqli_fetch_assoc($usernameCheck)) {
        echo "<script>
            alert('Failed! Username already exist.');
            </script>";
        return false;
    }

    if($password !== $confpassword) {
        echo "<script> 
            alert('Password did not match.');
        </script>";

        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO user VALUES (
        '','$nama', '', '', '$username', '$password', '$dept'
        )";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function changeProfile($method) {
    global $conn;

    $id = $method["id"];
    $nama = htmlspecialchars($method["nama"]);
    $dept = htmlspecialchars($method["dept"]);
    $nim = htmlspecialchars($method["nim"]);
    $telp = htmlspecialchars($method["telp"]);
    // $foto = htmlspecialchars($method["foto"]);

    $query = "UPDATE user SET 
                nama = '$nama',
                nim = '$nim',
                telp = '$telp',
                dept = '$dept'
            WHERE id = $id";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}


function hapus($id) {
    global $conn;

    mysqli_query($conn, "DELETE FROM user WHERE id = $id");

    return mysqli_affected_rows($conn);
}



?>