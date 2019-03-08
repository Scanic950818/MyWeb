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
  echo "<script>alert('登录失败，用户名和密码不匹配');location.href='login.html'</script>";
  }else {

  echo "<script>alert('登录成功')</script>";
  header('Location: https://hlddz.qq.com/');
  }
}else {
  echo "<script>alert('用户名不存在');location.href='login.html'</script>";
}


?>
