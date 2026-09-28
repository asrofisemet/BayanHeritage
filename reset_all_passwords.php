<?php
$mysqli = new mysqli("localhost", "root", "", "lombokrec", 3306);
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Reset semua password selain admin ke 'password123'
$new_password = password_hash('password123', PASSWORD_BCRYPT);
$sql = "UPDATE akun SET password = '$new_password' WHERE username != 'admin'";

if ($mysqli->query($sql) === TRUE) {
    echo "Password untuk semua akun selain admin telah di-reset ke 'password123'.\n";
} else {
    echo "Error updating passwords: " . $mysqli->error;
}
