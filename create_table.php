<?php
$mysqli = new mysqli("localhost", "root", "", "lombokrec", 3306);
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS `form_pengajuantempat` (
  `ID_formPengajuanTempat` int(11) NOT NULL AUTO_INCREMENT,
  `ID_akun` int(11) NOT NULL,
  `nama_tempat` varchar(255) NOT NULL,
  `kabupaten_kota` enum('Mataram','Lombok Barat','Lombok Tengah','Lombok Timur','Lombok Utara') NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `nama_jalan` varchar(255) NOT NULL,
  `kategori` enum('tourist_destination','culinary') NOT NULL,
  `foto` varchar(500) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `harga_tiket` int(20) DEFAULT NULL,
  `google_maps` varchar(255) NOT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`ID_formPengajuanTempat`),
  KEY `form_pengajuantempat_ibfk_1` (`ID_akun`),
  CONSTRAINT `form_pengajuantempat_ibfk_1` FOREIGN KEY (`ID_akun`) REFERENCES `akun` (`ID_akun`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";

if ($mysqli->query($sql) === TRUE) {
    echo "Table form_pengajuantempat created successfully\n";
} else {
    echo "Error creating table: " . $mysqli->error . "\n";
}
