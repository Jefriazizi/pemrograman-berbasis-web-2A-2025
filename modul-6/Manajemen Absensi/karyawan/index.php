<?php
session_start();
require '../config/db.php';
if (!isset($_SESSION['user'])) {
    header("Location: ../auth/login.php");
    exit();

}

$stmt = $pdo->query("SELECT * FROM karyawan_absensi");
?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    body {
        background: linear-gradient(135deg,rgb(31, 112, 203),rgb(169, 195, 248));
        background-size: cover;
        background-attachment: fixed;
    }
  </style>
</head>
<body class="p-6 text-white">
    <div class="container mx-auto">
        <h1 class="text-2xl text-center font-bold mb-4">Data Karyawan & Absensi</h1>
        <a href="tambah.php" class="bg-green-500 text-white px-4 py-2 rounded-2xl mb-4 inline-block hover:scale-105 transition">Tambah Data</a>
        <a href="../auth/logout.php" class="bg-red-500 text-white px-4 py-2 rounded-2xl mb-4 inline-block float-right hover:scale-105 transition">Logout</a>
        <table class="min-w-full bg-white/10 rounded-2xl shadow">
            <thead>
                <tr>
                    <th class="py-2">NIP</th>
                    <th class="py-2">Nama</th>
                    <th class="py-2">Departemen</th>
                    <th class="py-2">Jabatan</th>
                    <th class="py-2">Kota Asal</th>
                    <th class="py-2">Tanggal</th>                        
                    <th class="py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $stmt->fetch()): ?>
                <tr class="text-center border-t">
                    <td class="py-2"><?= $row['nip'] ?></td>
                    <td class="py-2"><?= $row['nama'] ?></td>
                    <td class="py-2"><?= $row['departemen'] ?></td>
                    <td class="py-2"><?= $row['jabatan'] ?></td>
                    <td class="py-2"><?= $row['kota_asal'] ?></td>
                    <td class="py-2"><?= $row['tanggal_absensi'] ?></td>
                    <td class="py-2">
                        <div class="flex flex-wrap gap-2 justify-center">
                            <a href="edit.php?id=<?= $row['id'] ?>" class="text-blue-500 bg-white/40 rounded-2xl px-3 md:px-5 py-1 hover:bg-white/5">Edit</a>
                            <a href="hapus.php?id=<?= $row['id'] ?>" class="text-red-500 bg-white/40 rounded-2xl px-3 md:px-5 py-1 hover:bg-white/5" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </div>
                    </td>                    
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
