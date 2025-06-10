<?php
require '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stmt = $pdo->prepare("INSERT INTO karyawan_absensi (nip, nama, umur, jenis_kelamin, departemen, jabatan, kota_asal, tanggal_absensi, jam_masuk, jam_pulang) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([
        $_POST['nip'], $_POST['nama'], $_POST['umur'], $_POST['jenis_kelamin'],
        $_POST['departemen'], $_POST['jabatan'], $_POST['kota_asal'],
        $_POST['tanggal_absensi'], $_POST['jam_masuk'], $_POST['jam_pulang']
    ]);
    header("Location: index.php");
}
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
<body class="text-white p-6">
    <div class="max-w-xl mx-auto bg-white/5 backdrop-blur-md p-6 p-8 rounded-2xl shadow-xl w-full max-w-sm border border-white/30 ">
        <h2 class="text-xl text-center font-bold mb-4">Tambah Data</h2>
        <form method="POST" class="space-y-5">
            <input name="nip" placeholder="NIP" class="w-full px-3 py-2 mt-1 bg-white/20 backdrop-blur-md border border-white/30 rounded placeholder-white/70 text-white focus:outline-none focus:ring-2 focus:ring-white">
            <input name="nama" placeholder="Nama" class="w-full px-3 py-2 mt-1 bg-white/20 backdrop-blur-md border border-white/30 rounded placeholder-white/70 text-white focus:outline-none focus:ring-2 focus:ring-white">
            <input name="umur" type="number" placeholder="Umur" class="w-full px-3 py-2 mt-1 bg-white/20 backdrop-blur-md border border-white/30 rounded placeholder-white/70 text-white focus:outline-none focus:ring-2 focus:ring-white">
            <select name="jenis_kelamin" class="w-full px-3 py-2 mt-1 bg-white/20 backdrop-blur-md border border-white/30 rounded placeholder-white/70 text-white focus:outline-none focus:ring-2 focus:ring-white">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <input name="departemen" placeholder="Departemen" class="w-full px-3 py-2 mt-1 bg-white/20 backdrop-blur-md border border-white/30 rounded placeholder-white/70 text-white focus:outline-none focus:ring-2 focus:ring-white">
            <input name="jabatan" placeholder="Jabatan" class="w-full px-3 py-2 mt-1 bg-white/20 backdrop-blur-md border border-white/30 rounded placeholder-white/70 text-white focus:outline-none focus:ring-2 focus:ring-white">
            <input name="kota_asal" placeholder="Kota Asal" class="w-full px-3 py-2 mt-1 bg-white/20 backdrop-blur-md border border-white/30 rounded placeholder-white/70 text-white focus:outline-none focus:ring-2 focus:ring-white">
            <input type="date" name="tanggal_absensi" class="w-full px-3 py-2 mt-1 bg-white/20 backdrop-blur-md border border-white/30 rounded placeholder-white/70 text-white focus:outline-none focus:ring-2 focus:ring-white">
            <input type="time" name="jam_masuk" class="w-full px-3 py-2 mt-1 bg-white/20 backdrop-blur-md border border-white/30 rounded placeholder-white/70 text-white focus:outline-none focus:ring-2 focus:ring-white">
            <input type="time" name="jam_pulang" class="w-full px-3 py-2 mt-1 bg-white/20 backdrop-blur-md border border-white/30 rounded placeholder-white/70 text-white focus:outline-none focus:ring-2 focus:ring-white">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-2xl">Simpan</button>
        </form>
    </div>
</body>
</html>
