<?php
require '../config/db.php';
$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM karyawan_absensi WHERE id = ?");
$stmt->execute([$id]);
header("Location: index.php");
?>
