<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "latihan01";

$conn = mysqli_connect($host, $user, $password, $db);

if ($conn == false) {
    echo "koneksi server gagal";
    die();
}