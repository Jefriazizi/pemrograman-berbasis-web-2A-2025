<?php
$nama = "jefri";
$nim = 240441100144;
$ipk = 3.0;
$daftar_dospem = ["Ali Syahrukh khan S.T., M.T.",  "Aery Rachmad S.Kom., M.Kom."];
$sks = [
    "semester 1" => "23 sks",
    "semester 2" => "21 sks",
    "semester 3" => "20 sks",
];
    
echo "Nama saya : $nama <br>"; 
echo "NIM saya : {$nim} <br>";
echo "IPK saya : $ipk <br>";

if ($ipk > 0 && $ipk <= 4.0) {
    if ($ipk >= 3.8 && $ipk <= 4.0) {
        echo "kamu jago";
    }
    elseif ($ipk >= 3.6 && $ipk <= 3.8) {
        echo"kamu kurang jago";
    }
    else {
        echo "kamu sok jago";
    }
} else{
    echo "$ipk : Ipk Tidak Valid";
}

// perulangan or looping
echo "daftar dospem <br>";
$iterasi = 1 ;
while ($iterasi < 2) {
    echo "dospem : $daftar_dospem[$iterasi] <br>";
    $iterasi++;
}
for ($i=0; $i < count(value: $daftar_dospem); $i++) { 
    echo "dospem : $daftar_dospem[$i] <br>";
}

// echo "dospem baru 2 <br>";
// $a = 0;
// do {
//     echo "dospem : $daftar_dospem[$iterasi] <br>";
//     $iterasi++;
// } while ($a <=2);

$daftarTeman = [
    [
        "nama" => "dian",
        "alamat" => "pmk",
        "hobi" => "suka velocity",
    ],
    [
        "nama" => "hilmut",
        "alamat" => "blega",
        "hobi" => "suka velocity",
    ],
];

echo "ini teman temanku <br>";
foreach ($daftarTeman as $teman) {
    echo "nama : {$teman["nama"]} <br>";
    echo "alamat : {$teman["alamat"]} <br>";
    echo "hobi : {$teman["hobi"]} <br>";
}

function Penjumlahan($angka1, $angka2){
    return $angka1 + $angka2;
};
echo "Hasil penjumlahan dari 1 + 5 = ". Penjumlahan(1, 5);
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <?php
        $nama = "jefri";
        $nim = 240441100144;
        $ipk = 3.0;
        $daftar_dospem = ["Ali Syahrukh khan S.T., M.T.",  "Aery Rachmad S.Kom., M.Kom."];
        $sks = [
            "semester 1" => "23 sks",
            "semester 2" => "21 sks",
            "semester 3" => "20 sks",
        ];
    ?>
</body>
</html>
