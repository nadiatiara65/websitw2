<?php
session_start();
require_once('koneksi/auth.php');

onlyAdmin();

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- bOOStap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


  <!-- My CSS -->
  <link rel="stylesheet" href="style.css">

  <!-- AOS.JS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- my AOS.JS -->
  <link rel="aos.js" href="aos.js">

  <!-- title -->
  <title>Admin</title>

  <!-- icon -->
  <link rel="icon" href="assets/img/black-toxic.png">

</head>

<body>
<?php include('navbar.php'); ?>
<br><br><br>


<div class="admin-container my-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3><span class="text-primary"> Admin</span></h3>

                    <p>Hallo, <?= getUserLogin('username'); ?> selamat datang di halaman admin</p>
                </div>
            </div>
        </div>  
  </div>

</body>

</html>