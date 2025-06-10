<?php
$host = "localhost";
$dbname = "manajemen_absensi";
$username = "root";
$password = "";

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

if (!$pdo) {
    die("Koneksi database gagal.");
}
?>
