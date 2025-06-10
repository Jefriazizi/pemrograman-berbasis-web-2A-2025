<?php
$artikel = [
    [
        "judul" => "Refleksi atas Pengalaman dalam Kurikulum Merdeka",
        "tanggal" => "2022-05-22",
        "refleksi" => "Refleksi merupakan prasyarat belajar dalam memaknai pengalaman yang terjadi pada keseharian hidup......​",
        "img" => "detik.jpeg",
        "kutipan" => "Belajar adalah investasi.",
        "sumber" => "https://news.detik.com/kolom/d-6092684/refleksi-atas-pengalaman-dalam-kurikulum-merdeka?"
    ],
    [
        "judul" => "Refleksi Guru di Era Kurikulum Merdeka",
        "tanggal" => "2023-01-26",
        "refleksi" => "Dalam konteks filsafat Yunani kuno, kelogisan berpikir ditunjukkan dengan perilaku masuk akal. Salah satunya adalah memperbaiki keburukan (bias).....​",
        "img" => "guru.jpeg",
        "kutipan" => "Percaya pada proses.",
        "sumber" => "https://www.kompasiana.com/bimabela.com/63d159db08a8b532c7458762/refleksi-implementasi-kurikulum-merdeka-bagian-pertama-refleksi-dalam-kurikulum-merdeka?page=all#section1"
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Blog Reflektif</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-200 font-sans text-gray-800">

    <header class="flex justify-between items-center gap-5 p-6 sticky top-0 z-50 backdrop-blur shadow-md">
        <div class="flex  w-full">
            <h2 class="text-2xl font-bold text-indigo-700">Blog Pribadi Mahasiswa</h2>
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

    <div class="max-w-4xl mx-auto px-4 mt-10 mb-10 space-y-6">
        <?php foreach ($artikel as $i => $a) { ?>
            <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-lg transition">
                <h3 class="text-xl font-semibold text-indigo-700 hover:underline">
                    <a href="artikel.php?id=<?php echo $i; ?>"><?php echo $a['judul']; ?></a>
                </h3>
                <p class="text-sm text-gray-500 mt-1"><?php echo $a['tanggal']; ?></p>
            </div>
        <?php } ?>
    </div>

</body>
</html>
