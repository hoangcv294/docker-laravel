<?php
$host = 'database';
$username = 'hoangcv';
$password = '12345';
$database = 'chevanhoang';

$mysqli = new mysqli($host, $username, $password, $database);

if ($mysqli->connect_error) {
    die('Kết nối MySQL thất bại: ' . $mysqli->connect_error);
}

echo 'Kết nối MySQL thành công!';
$mysqli->close();
?>
