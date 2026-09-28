<?php
$mysqli = new mysqli('localhost', 'root', '', 'lombokrec', 3306);
$r = $mysqli->query('SHOW TABLES');
while($row = $r->fetch_row()) {
    echo $row[0] . "\n";
}
?>
