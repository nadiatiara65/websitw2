<?php
require_once('koneksi/database.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM aboutme WHERE id='{$id}'";
    $result = mysqli_query($connectDb, $query);
    
    if ($result) {
        header('location:manajemen-profile.php?delete=sukses');
    } else {
        header('location:manajemen-profile.php?delete=gagal');
    }
}
else {
    header('location:manajemen-profile.php');
}