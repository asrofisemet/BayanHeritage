<?php
$mysqli = new mysqli("localhost", "root", "", "lombokrec", 3306);
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// We will use guest accounts: vivivivi (ID: 4), jakejake (ID: 13)
$akun_ids = [4, 13];
$tempat_ids = [27, 28, 29, 30, 31, 32];
$komentars = [
    "Tempat yang sangat bersejarah dan sakral. Suasananya sangat menenangkan dan membuat kita lebih dekat dengan Sang Pencipta.",
    "Arsitektur makamnya unik, masih mempertahankan bentuk aslinya dengan pagar bambu dan atap ijuk.",
    "Banyak peziarah yang datang ke sini terutama saat Maulid Adat. Sangat direkomendasikan untuk wisata religi.",
    "Lingkungannya bersih dan terawat dengan baik oleh para Pemangku adat. Pengalaman kultural yang luar biasa."
];

$waktu = date('Y-m-d H:i:s');
$count = 0;

foreach ($tempat_ids as $tempat_id) {
    // Insert 2 reviews per tempat
    for ($i = 0; $i < 2; $i++) {
        $id_akun = $akun_ids[$i % count($akun_ids)];
        $komentar = $komentars[array_rand($komentars)];
        $rating = rand(40, 50) / 10; // 4.0 to 5.0
        
        $sql = "INSERT INTO review (ID_akun, ID_tempat, komentar, rating, waktu) VALUES (?, ?, ?, ?, ?)";
        $stmt = $mysqli->prepare($sql);
        if ($stmt) {
            $stmt->bind_param("iisds", $id_akun, $tempat_id, $komentar, $rating, $waktu);
            $stmt->execute();
            $count++;
            $stmt->close();
        } else {
            echo "Error prepare: " . $mysqli->error . "\n";
        }
    }
}

echo "Berhasil menambahkan $count dummy reviews untuk Makam-makam tersebut!\n";
