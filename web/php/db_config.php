<?php
// 数据库连接信息
$servername = "database";
$username = "root";
$password = "password";
$dbname = "mywebsite";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检查连接
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
