<?php
session_start();
include 'admin/config.php';
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$pas=md5($pass);
$query=mysqli_query($con,"select * from users where username='$uname' and password='$pas'")or die(mysql_error());
if(mysqli_num_rows($query)==1){
	session_start();
	$_SESSION['uname']=$uname;
	header("location:user/index.php");
}else{
	header("location:index.php?pesan=gagal")or die(mysql_error());
	// mysql_error();
}
// echo $pas;
 ?>
