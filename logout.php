<?php
session_start();
require_once('koneksi/auth.php');

onlyAdmin();

unset($_SESSION['is_login']);
unset($_SESSION['user']);

header('location:index.php?login=sukses');
exit;
