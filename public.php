<?php
header("content-type:text/html;charset=gb2312");

$servername = "localhost";
$dbusername = "root";
$dbpassword = "31415926";
$dbname = "myDB";

// ��������
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
// �������
if ($conn->connect_error) {
    die("����ʧ��: " . $conn->connect_error);
  }
?>
