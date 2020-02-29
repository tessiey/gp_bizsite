<?php
// 数据库链接信息
$db_port = '3306';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'test';

// 链接数据库
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name, $db_port);

// 检查是否已链接
if (mysqli_connect_errno()) {
    die("Database Connect failed: " . mysqli_connect_error() );
}

// 设置会话字符集
mysqli_query($conn, "SET NAMES 'utf8'");
