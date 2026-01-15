<?php
// 1. Cek apakah ada variabel environment (berarti di Railway)
$host     = getenv('MYSQLHOST') ?: 'mainline.proxy.rlwy.net';
$username = getenv('MYSQLUSER') ?: 'root';
$password = getenv('MYSQLPASSWORD') ?: 'nQwUQMMHxZkAdZciZwivmELPizwbvYU';
$db_name  = getenv('MYSQLDATABASE') ?: 'railway';
$port     = getenv('MYSQLPORT') ?: 17049;

// 2. Buat koneksi
$conn = new mysqli($host, $username, $password, $db_name, $port);

// 3. Cek koneksi, kalau gagal kasih pesan yang jelas
if ($conn->connect_error) {
    die("Koneksi gagal bray! Errornya: " . $conn->connect_error);
}

// Opsi: Set charset ke utf8 agar karakter aman
$conn->set_charset("utf8");
?>