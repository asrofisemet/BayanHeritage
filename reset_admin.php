<?php
$mysqli = new mysqli("localhost", "root", "", "lombokrec", 3306);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Password baru yang mudah diingat
$new_password_plain = 'admin123';
$new_password_hash = password_hash($new_password_plain, PASSWORD_DEFAULT);

$stmt = $mysqli->prepare("UPDATE akun SET password = ? WHERE username = 'admin' OR email = 'admin@gmail.com'");
$stmt->bind_param("s", $new_password_hash);

if ($stmt->execute()) {
    echo "Password admin berhasil direset!\n";
    echo "Username: admin\n";
    echo "Password Baru: admin123\n";
} else {
    echo "Gagal mereset password: " . $stmt->error;
}

$stmt->close();
$mysqli->close();
?>
