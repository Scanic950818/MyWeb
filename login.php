<?php
include "public.php";
header("content-type:text/html;charset=gb2312");

$username = $_REQUEST["username"];
$password = $_REQUEST["password"];


$sql = "SELECT username , password FROM myUser WHERE username = '$username'";
$result = mysqli_query($conn,$sql);
if($n = mysqli_num_rows($result))
{
  $row = mysqli_fetch_array($result);
  if ($row['password'] != $password){
  echo "<script>alert('��¼ʧ�ܣ��û��������벻ƥ��');location.href='login.html'</script>";
  }else {

  echo "<script>alert('��¼�ɹ�')</script>";
  header('Location: https://hlddz.qq.com/');
  }
}else {
  echo "<script>alert('�û���������');location.href='login.html'</script>";
}


?>
