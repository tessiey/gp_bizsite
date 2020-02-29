<?php
$user=addslashes($_POST['user']);
$pwd=addslashes($_POST['pwd']);

$sql="SELECT usename,pwd FROM admin where usename='{$user}' and pwd='{$pwd}'";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);

if(empty($row))
{ 
  echo "<script>alert('用户名或者密码不正确， 请重新输入！'); history.go(-1); </script>";
  exit;
}

$_SESSION['is_login']=true;
$_SESSION['login_time']=time();
$_SESSION['login_name']=$row['usename'];

header("location: /admin/index.php");