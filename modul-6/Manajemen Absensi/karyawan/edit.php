<?php
require '../config/db.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM karyawan_absensi WHERE id = ?");
$stmt->execute([$id]);
$data = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stmt = $pdo->prepare("UPDATE karyawan_absensi SET nip=?, nama=?, umur=?, jenis_kelamin=?, departemen=?, jabatan=?, kota_asal=?, tanggal_absensi=?, jam_masuk=?, jam_pulang=? WHERE id=?");
    $stmt->execute([
        $_POST['nip'], $_POST['nama'], $_POST['umur'], $_POST['jenis_kelamin'],
        $_POST['departemen'], $_POST['jabatan'], $_POST['kota_asal'],
        $_POST['tanggal_absensi'], $_POST['jam_masuk'], $_POST['jam_pulang'], $id
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
    <div class="max-w-xl mx-auto bg-white/5 backdrop-blur-md p-6 p-8 rounded-2xl shadow-xl w-full max-w-sm border border-white/30">
        <h2 class="text-xl text-center font-bold mb-4">Edit Data</h2>
        <form method="POST" class="space-y-5">
            <input name="nip" value="<?= $data['nip'] ?>" placeholder="NIP" class="w-full px-3 py-2 mt-1 bg-white/20 backdrop-blur-md border border-white/30 rounded placeholder-white/70 text-white focus:outline-none focus:ring-2 focus:ring-white">
            <input name="nama" value="<?= $data['nama'] ?>" placeholder="nama" class="w-full px-3 py-2 mt-1 bg-white/20 backdrop-blur-md border border-white/30 rounded placeholder-white/70 text-white focus:outline-none focus:ring-2 focus:ring-white">
            <input name="umur" type="number" value="<?= $data['umur'] ?>" placeholder="umur" class="w-full px-3 py-2 mt-1 bg-white/20 backdrop-blur-md border border-white/30 rounded placeholder-white/70 text-white focus:outline-none focus:ring-2 focus:ring-white">
            <select name="jenis_kelamin" placeholder="jenis kelamin" class="w-full px-3 py-2 mt-1 bg-white/20 backdrop-blur-md border border-white/30 rounded placeholder-white/70 text-white focus:outline-none focus:ring-2 focus:ring-white">
                <option <?= $data['jenis_kelamin'] == 'Laki-laki' ? 'selected' : '' ?> value="Laki-laki">Laki-laki</option>
                <option <?= $data['jenis_kelamin'] == 'Perempuan' ? 'selected' : '' ?> value="Perempuan">Perempuan</option>
            </select>
            <input name="departemen" value="<?= $data['departemen'] ?>" placeholder="departemen" class="w-full px-3 py-2 mt-1 bg-white/20 backdrop-blur-md border border-white/30 rounded placeholder-white/70 text-white focus:outline-none focus:ring-2 focus:ring-white">
            <input name="jabatan" value="<?= $data['jabatan'] ?>" placeholder="jabatan" class="w-full px-3 py-2 mt-1 bg-white/20 backdrop-blur-md border border-white/30 rounded placeholder-white/70 text-white focus:outline-none focus:ring-2 focus:ring-white">
            <input name="kota_asal" value="<?= $data['kota_asal'] ?>" placeholder="kota asal" class="w-full px-3 py-2 mt-1 bg-white/20 backdrop-blur-md border border-white/30 rounded placeholder-white/70 text-white focus:outline-none focus:ring-2 focus:ring-white">
            <input type="date" name="tanggal_absensi" value="<?= $data['tanggal_absensi'] ?>" class="w-full px-3 py-2 mt-1 bg-white/20 backdrop-blur-md border border-white/30 rounded placeholder-white/70 text-white focus:outline-none focus:ring-2 focus:ring-white">
            <input type="time" name="jam_masuk" value="<?= $data['jam_masuk'] ?>" class="w-full px-3 py-2 mt-1 bg-white/20 backdrop-blur-md border border-white/30 rounded placeholder-white/70 text-white focus:outline-none focus:ring-2 focus:ring-white">
            <input type="time" name="jam_pulang" value="<?= $data['jam_pulang'] ?>" class="w-full px-3 py-2 mt-1 bg-white/20 backdrop-blur-md border border-white/30 rounded placeholder-white/70 text-white focus:outline-none focus:ring-2 focus:ring-white">
            <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded-2xl">Update</button>
        </form>
    </div>
</body>
</html>
