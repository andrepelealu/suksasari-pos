<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$con=mysqli_connect ($db_host, $db_user, $db_password) or die ("tidak bisa connect");
mysqli_select_db($con,"penjualan");
?>
