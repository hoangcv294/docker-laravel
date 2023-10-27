<?php
$host = 'database';
$username = 'hoangcv';
$password = '12345';
$database = 'chevanhoang';

// Kết nối đến cơ sở dữ liệu
$mysqli = new mysqli($host, $username, $password, $database);

if ($mysqli->connect_error) {
    die('Kết nối MySQL thất bại: ' . $mysqli->connect_error);
}

echo 'Kết nối MySQL thành công!';

// Sử dụng mysqldump để đẩy dữ liệu vào luồng đầu ra
$command = "mysqldump -u {$username} -p{$password} {$database}";
$output = shell_exec($command);

// In dữ liệu ra màn hình
echo "<pre>{$output}</pre>";

$mysqli->close();
?>
