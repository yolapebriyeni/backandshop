<?php
// Ambil data langsung dari environment Railway
$host     = getenv('MYSQLHOST') ?: 'mainline.proxy.rlwy.net';
$username = getenv('MYSQLUSER') ?: 'root';
$password = getenv('MYSQLPASSWORD') ?: 'nQwUQMMHxZkAdZciZwivmELPizwbvYU';
$db_name  = getenv('MYSQLDATABASE') ?: 'railway';
$port     = getenv('MYSQLPORT') ?: 17049;

// Koneksi mysqli dengan port itu wajib di Railway
$conn = new mysqli($host, $username, $password, $db_name, $port);

if ($conn->connect_error) {
    die("Gagal konek: " . $conn->connect_error);
}
?>