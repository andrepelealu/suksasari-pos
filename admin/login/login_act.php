<?php
session_start();
include '../config.php';
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$pas=md5($pass);
$query=mysqli_query($con,"select * from admin where uname='$uname' and pass='$pas'")or die(mysql_error());
if(mysqli_num_rows($query)==1){
	//session_start();
	$_SESSION['uname']=$uname;
	header("location:../index.php");
}else{
	header("location:index.php?pesan=gagal")or die(mysql_error());
	// mysql_error();
}
// echo $pas;
 ?>
