<?php
include 'config.php';
$id=$_GET['id'];
mysqli_query($con,"delete from data_pelanggan where id='$id'");
header("location:pelanggan.php");

?>
