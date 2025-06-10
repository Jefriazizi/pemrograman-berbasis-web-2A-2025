<?php
$kuliah = [
    "2024" => "Masuk kuliah di UTM",
    "2025" => "Belajar bahasa pemrograman",
    "2026" => "Ikut organisasi dan lomba IT",
    "2027" => "Internship di perusahaan teknologi lokal",
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Timeline Pengalaman Kuliah</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-200 font-sans text-gray-800">
    <header class="flex justify-between items-center gap-5 p-6 sticky top-0 z-50 backdrop-blur shadow-md">
        <div class="flex  w-full">
            <h2 class="text-2xl font-bold text-indigo-700">Timeline Pengalaman Kuliah</h2>
        </div>

        <div class="flex space-x-4 mt-4">
            <a href="index.php" class="bg-indigo-700 text-white hover:bg-slate-300 px-3 py-2 rounded-xl transition duration-300">
                Profil
            </a>
            <a href="timeline.php" class="bg-indigo-700 text-white hover:bg-slate-300 px-3 py-2 rounded-xl transition duration-300">
                Timeline
            </a>
            <a href="blog.php" class="bg-indigo-700 text-white hover:bg-slate-300 px-3 py-2 rounded-xl transition duration-300">
                Blog
            </a>
            
        </div>
    </header>

    <div class="w-full max-w-2xl mx-auto mt-10 border-l-4 border-indigo-400 pl-6 space-y-6">
        <?php foreach ($kuliah as $tahun => $pengalaman) { ?>
            <div class="relative pl-6">
                <div class="absolute left-0 top-1.5 w-4 h-4 bg-indigo-500 rounded-full border-4 border-white shadow-md"></div>
                <div class="bg-white rounded-lg shadow-md p-4">
                    <h4 class="text-indigo-700 font-semibold"><?php echo $tahun; ?></h4>
                    <p class="text-gray-600 mt-1"><?php echo $pengalaman; ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</body>
</html>
