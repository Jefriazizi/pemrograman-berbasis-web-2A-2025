<!-- index.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Interaktif Mahasiswa</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-200 font-sans text-gray-800">
    <header class="flex justify-between items-center gap-5 p-6 sticky top-0 z-50 backdrop-blur shadow-md">
        <div class="flex  w-full">
            <h2 class="text-2xl font-bold text-indigo-700">Profil Interaktif Mahasiswa</h2>
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


    <div class="flex justify-center space-x-10">
        <div class="flex justify-center mt-10">
            <img src="foto almet.jpg" class="w-40 h-50 object-cover rounded-xl border-2 border-white shadow-lg" alt="Profile">
        </div>
        <div class="w-full mt-10  max-w-xl">
            <table class="shadow-md rounded-xl overflow-hidden w-full bg-white mb-4">
                <tr class="bg-white">
                    <td class='px-4 py-2 bg-indigo-200 font-semibold'>Nama</td>
                    <td class='px-4 py-2'>RB. Moh. Jefri Bassam Azizi Nurcahya</td>
                </tr>
                <tr class="bg-white">
                    <td class='px-4 py-2 font-semibold'>NIM</td>
                    <td class='px-4 py-2 bg-indigo-200'>240441100144</td>
                </tr>
                <tr class="bg-white">
                    <td class='px-4 py-2 bg-indigo-200 font-semibold'>Tempat, Tanggal Lahir</td>
                    <td class='px-4 py-2'>Sumenep, 22 Juli 2006</td>
                </tr>
                <tr class="bg-white">
                    <td class='px-4 py-2 font-semibold'>Email</td>
                    <td class='px-4 py-2 bg-indigo-200'>rb.ujee4.@gmail.com</td>
                </tr>
                <tr class="bg-white">
                    <td class='px-4 py-2 bg-indigo-200 font-semibold'>Nomor HP</td>
                    <td class='px-4 py-2'>081234567890</td>
                </tr>
            </table>
        </div>
    </div>


    <div class="w-full mt-6  mb-6 max-w-xl mx-auto">
        <form method="post" class="bg-white p-6 bg-indigo-100 rounded-2xl shadow-md space-y-6">
            <div>
                <label class="block mb-1">Bahasa Pemrograman:</label>
                    <div class="space-y-2">
                        <input type="text" name="bahasa[]" placeholder="Contoh: Python"
                            class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
                        <input type="text" name="bahasa[]" placeholder="Contoh: JavaScript"
                            class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
                        <input type="text" name="bahasa[]" placeholder="Contoh: PHP"
                            class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
                    </div>
            </div>

            <div>
                <label class="block mb-1">Pengalaman membuat proyek pribadi:</label>
                <textarea name="pengalaman" required class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-2 focus:ring-indigo-400"></textarea>
            </div>

            <div>
                <label class="block mb-1">Software yang sering digunakan:</label>
                <div class="space-x-4">
                    <label><input type="checkbox" name="software[]" value="VS Code"> VS Code</label>
                    <label><input type="checkbox" name="software[]" value="XAMPP"> XAMPP</label>
                    <label><input type="checkbox" name="software[]" value="Git"> Git</label>
                </div>
            </div>

            <div>
                <label class="block mb-1">Sistem Operasi:</label>
                <div class="space-x-4">
                    <label><input type="radio" name="os" value="Windows"> Windows</label>
                    <label><input type="radio" name="os" value="Linux"> Linux</label>
                    <label><input type="radio" name="os" value="Mac"> Mac</label>
                </div>
            </div>

            <div>
                <label class="block mb-1">Tingkat Penguasaan PHP:</label>
                <select name="php" required class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
                    <option value="Pemula">Pemula</option>
                    <option value="Menengah">Menengah</option>
                    <option value="Mahir">Mahir</option>
                </select>
            </div>

            <div>
                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-6 rounded transition duration-300">
                    Submit
                </button>
            </div>
        </form>
    </div>

   
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bahasa = $_POST["bahasa"];
        $bhs = array_filter($bahasa);
        $pengalaman = $_POST["pengalaman"];
        $software = $_POST["software"];
        $os = $_POST["os"];
        $php = $_POST["php"];

        echo '<div class="w-full mt-6 mb-10 max-w-xl mx-auto">';
        echo '<div class="bg-white p-6 rounded-xl shadow-lg space-y-2">';
        echo '<h3 class="text-lg font-semibold text-indigo-700 mb-2">Hasil Inputan :</h3>';

        if ($bhs && $pengalaman && $software && $os && $php) {
            echo "<p><span class='font-semibold'>Bahasa Pemrograman:</span></p><ul class='list-disc list-inside'>";
            foreach ($bhs as $item) {
                echo "<li>$item</li>";
            }
            for ($i=0; $i < ; $i++) { 
                # code...
            }
            }
            echo "</ul>";

            if (count($bhs) >= 2) {
                echo "<p class='text-green-600 font-bold'>Kwwereennn sekalii kamuu menguasai banyak bahasa pemrograman!</p>";
            }

            echo "<p><span class='font-semibold'>Pengalaman:</span> $pengalaman</p>";
            echo "<p><span class='font-semibold'>Software yang digunakan:</span></p><ul class='list-disc list-inside'>";
            foreach ($software as $item) {
                echo "<li>$item</li>";
            }
            echo "</ul>";

            echo "<p><span class='font-semibold'>Sistem Operasi:</span> $os</p>";
            echo "<p><span class='font-semibold'>Tingkat Penguasaan PHP:</span> $php</p>";
        } else {
            echo "<p class='text-red-500 font-semibold'>Semua inputan wajib diisi yaaa!</p>";
        }

        echo '</div>';
        echo '</div>';
    }
    ?>

</body>
</html>
