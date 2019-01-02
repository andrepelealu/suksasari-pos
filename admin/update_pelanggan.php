<?php
include 'config.php';
$id=$_POST['id'];

$alamat=$_POST['alamat'];
$kontak=$_POST['kontak'];
$sales = $_SESSION['uname'];
$cek_sales = mysqli_query($con,"select * FROM data_pelanggan where sales_pj = '$sales'");
$cek = mysqli_num_rows($cek_sales);
  mysqli_query($con,"update data_pelanggan set  alamat='$alamat', nomor_telepon='$kontak' where id='$id'");
  header("location:pelanggan.php?pesan=sukses");


?>
