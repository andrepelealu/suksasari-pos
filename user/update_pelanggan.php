<?php
include 'config.php';
session_start();
$id=$_POST['id'];
$alamat=$_POST['alamat'];
$kontak=$_POST['kontak'];
$sales = $_SESSION['uname'];
$cek_sales = mysqli_query($con,"select * FROM users where username = '$sales'");
$cek = mysqli_num_rows($cek_sales);
if($cek != 1 ){

    header("location:pelanggan.php?pesan=gagal");

}else{
  mysqli_query($con,"update data_pelanggan set  alamat='$alamat', nomor_telepon='$kontak' where id='$id'");
  header("location:pelanggan.php?pesan=sukses");
}

?>
