<?php
include "../include/config.php";

// Ambil data yang dikirimkan dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Lakukan query untuk mencari pengguna dengan username yang sesuai
$query = "SELECT * FROM users WHERE username = '$username' AND password = MD5('$password')";
$result = $koneksi->query($query);

if ($result->num_rows == 1) {
    // Pengguna ditemukan, izinkan pengguna untuk masuk
    session_start();
    $_SESSION['username'] = $username;
    header("Location: ../admin"); // Gantilah dengan halaman setelah login
} else {
    // Pengguna tidak ditemukan atau password salah
    echo "Username tidak ditemukan atau password salah!";
}

$koneksi->close();
