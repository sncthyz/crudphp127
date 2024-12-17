<?php

// Konfigurasi koneksi database
$host = "localhost";
$user = "root";
$password = "";
$database = "database";

// Membuat koneksi ke database
$jaringan = mysqli_connect($host, $user, $password, $database);

// Memeriksa koneksi
if (!$jaringan) {
    die('Koneksi ke database gagal: ' . mysqli_connect_error());
} 

?>
