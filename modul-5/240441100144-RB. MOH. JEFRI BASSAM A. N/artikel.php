
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Artikel</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-200 text-blue-900 font-sans">
    <div class="max-w-3xl mx-auto p-6 mt-10 mb-10 bg-white rounded-xl shadow-md">
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

        $kutipanMotivasi = [
            "Jangan takut gagal, karena gagal adalah bagian dari proses belajar.",
            "Setiap usaha pasti membuahkan hasil jika konsisten dijalankan.",
            "Belajarlah dari hari kemarin, hiduplah untuk hari ini.",
            "Kegigihan adalah kunci kesuksesan dalam dunia teknologi.",
            "Tidak ada kata terlambat untuk belajar hal baru."
        ];

        $kutipan = $kutipanMotivasi[rand(0, count($kutipanMotivasi) - 1)];

        $id = $_GET["id"];
        $a = $artikel[$id];

        echo "<h2 class='text-2xl font-bold mb-2'>{$a['judul']}</h2>";
        echo "<p class='text-sm text-blue-600 mb-4'>{$a['tanggal']}</p>";
        echo "<img src='{$a['img']}' alt='Gambar Artikel' class='rounded-md mb-6 w-full'>";
        echo "<p class='mb-4 leading-relaxed'>{$a['refleksi']}</p>";
        echo "<p class='italic font-semibold text-blue-800 mb-4'>Kutipan Motivasi: \"$kutipan\"</p>";
        echo "<p class='mb-6'>Sumber: <a href='{$a['sumber']}' class='text-blue-700 underline hover:text-blue-900' target='_blank'>Baca selengkapnya di sini</a></p>";
        ?>
        <div class="text-center">
            <a href="blog.php" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-lg transition duration-300">
                Kembali ke Blog
            </a>
        </div>
    </div>
</body>
</html>
