<?php
header("content-type:text/html;charset=gb2312");

$servername = "localhost";
$dbusername = "root";
$dbpassword = "31415926";
$dbname = "myDB";

// 创建连接
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
  }
?>
