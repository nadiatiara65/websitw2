
<?php
require_once('koneksi/database.php');

if($_SERVER['REQUEST_METHOD'] === 'POST') {
  

    $teks = strip_tags(mysqli_escape_string($connectDb, $_POST['teks']));

    $query = "INSERT INTO aboutme(teks) VALUES('{$teks}')";
    $result = mysqli_query($connectDb, $query);

    if ($result) {
        header('location:index.php?aboutme=sukses');
    } else {
        header('location:index.php?aboutme=gagal');    
    }
} else {
    header('location:index.php');
}