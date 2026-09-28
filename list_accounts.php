<?php
$mysqli = new mysqli("localhost", "root", "", "lombokrec", 3306);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$result = $mysqli->query("SELECT ID_akun, username, email, is_admin, is_pemilik FROM akun ORDER BY ID_akun");

if ($result->num_rows > 0) {
    echo "ID | USERNAME | EMAIL | IS_ADMIN | IS_PEMILIK\n";
    echo "---------------------------------------------------------\n";
    while($row = $result->fetch_assoc()) {
        echo "{$row['ID_akun']} | {$row['username']} | {$row['email']} | {$row['is_admin']} | {$row['is_pemilik']}\n";
    }
} else {
    echo "0 results in akun table";
}
$mysqli->close();
?>
