<?php
$mysqli = new mysqli("localhost", "root", "", "lombokrec", 3306);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$makams = [
    [
        'nama_tempat' => 'Makam 1: Historical Heritage',
        'kabupaten_kota' => 'Lombok Utara',
        'kecamatan' => 'Bayan',
        'kelurahan' => 'Bayan',
        'nama_jalan' => 'Jl. Masjid Kuno Bayan',
        'kategori' => 'tourist_destination',
        'deskripsi' => 'The sacred tombs are carefully preserved by the local community, maintaining their original form with river stone foundations and traditional bamboo fencing.',
        'foto' => 'makam1.jpeg',
        'google_maps' => 'https://maps.app.goo.gl/T4L2i3M3F3N5R4J56',
        'harga_tiket' => 0,
        'ID_akun' => null
    ],
    [
        'nama_tempat' => 'Makam 2: Spiritual Significance',
        'kabupaten_kota' => 'Lombok Utara',
        'kecamatan' => 'Bayan',
        'kelurahan' => 'Bayan',
        'nama_jalan' => 'Jl. Masjid Kuno Bayan',
        'kategori' => 'tourist_destination',
        'deskripsi' => 'These resting places belong to the early Islamic scholars of Lombok, making the area a focal point for spiritual reflection and traditional ceremonies.',
        'foto' => 'makam2.jpeg',
        'google_maps' => 'https://maps.app.goo.gl/T4L2i3M3F3N5R4J56',
        'harga_tiket' => 0,
        'ID_akun' => null
    ],
    [
        'nama_tempat' => 'Makam 3: Architectural Harmony',
        'kabupaten_kota' => 'Lombok Utara',
        'kecamatan' => 'Bayan',
        'kelurahan' => 'Bayan',
        'nama_jalan' => 'Jl. Masjid Kuno Bayan',
        'kategori' => 'tourist_destination',
        'deskripsi' => 'The tomb structures showcase the beautiful syncretism of early Islamic teachings and indigenous Sasak cultural aesthetics, blending seamlessly with nature.',
        'foto' => 'makam5.jpeg',
        'google_maps' => 'https://maps.app.goo.gl/T4L2i3M3F3N5R4J56',
        'harga_tiket' => 0,
        'ID_akun' => null
    ],
    [
        'nama_tempat' => 'Makam 4: Timeless Tradition',
        'kabupaten_kota' => 'Lombok Utara',
        'kecamatan' => 'Bayan',
        'kelurahan' => 'Bayan',
        'nama_jalan' => 'Jl. Masjid Kuno Bayan',
        'kategori' => 'tourist_destination',
        'deskripsi' => 'Covered with traditional thatched roofs (ijuk) and surrounded by ancient trees, the tombs evoke a sense of deep tranquility and historical reverence.',
        'foto' => 'makam6.jpeg',
        'google_maps' => 'https://maps.app.goo.gl/T4L2i3M3F3N5R4J56',
        'harga_tiket' => 0,
        'ID_akun' => null
    ],
    [
        'nama_tempat' => 'Makam 5: Sacred Grounds',
        'kabupaten_kota' => 'Lombok Utara',
        'kecamatan' => 'Bayan',
        'kelurahan' => 'Bayan',
        'nama_jalan' => 'Jl. Masjid Kuno Bayan',
        'kategori' => 'tourist_destination',
        'deskripsi' => 'Visitors and locals alike visit these grounds to pay their respects, particularly during important Islamic calendar events like the Maulid Adat.',
        'foto' => 'makam7.jpeg',
        'google_maps' => 'https://maps.app.goo.gl/T4L2i3M3F3N5R4J56',
        'harga_tiket' => 0,
        'ID_akun' => null
    ],
    [
        'nama_tempat' => 'Makam 6: Cultural Preservation',
        'kabupaten_kota' => 'Lombok Utara',
        'kecamatan' => 'Bayan',
        'kelurahan' => 'Bayan',
        'nama_jalan' => 'Jl. Masjid Kuno Bayan',
        'kategori' => 'tourist_destination',
        'deskripsi' => 'The maintenance of these tombs is entrusted to traditional caretakers (Pemangku), ensuring that the sacred customs endure for future generations.',
        'foto' => 'makam8.jpeg',
        'google_maps' => 'https://maps.app.goo.gl/T4L2i3M3F3N5R4J56',
        'harga_tiket' => 0,
        'ID_akun' => null
    ]
];

$stmt = $mysqli->prepare("INSERT INTO tempat (nama_tempat, kabupaten_kota, kecamatan, kelurahan, nama_jalan, kategori, deskripsi, foto, google_maps, harga_tiket, ID_akun) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

foreach ($makams as $m) {
    $stmt->bind_param("sssssssssis", $m['nama_tempat'], $m['kabupaten_kota'], $m['kecamatan'], $m['kelurahan'], $m['nama_jalan'], $m['kategori'], $m['deskripsi'], $m['foto'], $m['google_maps'], $m['harga_tiket'], $m['ID_akun']);
    $stmt->execute();
    echo "Inserted " . $m['nama_tempat'] . " with ID: " . $stmt->insert_id . "\n";
}

$stmt->close();
$mysqli->close();
?>
