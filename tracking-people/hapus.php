<?php 
require 'functions.php';

$id = $_GET["id"];

if(hapus($id) > 0) {
    echo "<script>
        alert('Success deleted an account.');
        document.location.href='admin.php';
        </script>";
} else {
    echo "<script>
        alert('Failed to delete an account.');
        document.location.href='admin.php';
        </script>";
};

?>