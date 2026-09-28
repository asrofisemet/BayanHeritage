<?php
$mysqli = new mysqli("localhost", "root", "", "lombokrec", 3306);
$res = $mysqli->query('SHOW TABLES');
while ($row = $res->fetch_row()) echo $row[0] . "\n";
