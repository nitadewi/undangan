<?php
$hostname = "localhost";
$database = "komentar";
$username = "root";
$password = "";
$connect = mysqli_connect($hostname, $username, $password, $database);
// script cek koneksi   
if (!$connect) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}