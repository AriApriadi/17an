<?php
// Sambungkan ke database (gantilah dengan informasi database Anda)
$host = 'localhost';
$username = 'root';
$password = '';
$database = '17an';

$koneksi = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
