<?php
include "public.php";
header("content-type:text/html;charset=gb2312");



$username = $_REQUEST["username"];
$email = $_REQUEST["email"];
$password = $_REQUEST["password"];

$sql = "SELECT username , password FROM myUser WHERE username = '$username'";
$result = mysqli_query($conn,$sql);
if($n = mysqli_num_rows($result))
{
  echo "<script>alert('注册失败，用户名已存在');location.href='regist.html'</script>";
}else {
  $sql = "INSERT INTO MyUser (username, password, email)
  VALUES ('$username', '$password','$email')";

  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('注册成功');location.href='login.html'</script>";
  } else {
    echo "<script>alert('注册失败');location.href='regist.html'</script>";
  }
}


$conn->close();


?>
