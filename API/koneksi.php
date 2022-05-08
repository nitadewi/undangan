<?php
$hostname = "localhost";
$database = "komentar";
$username = "root";
$password = "";
$connect = mysqli_connect($hostname, $username, $password, $database);
$connect->set_charset('utf8mb4');
// script cek koneksi   
if (!$connect) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}