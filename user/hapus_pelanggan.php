
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<?php

include 'config.php';
session_start();
$id=$_GET['id'];
$sales = $_SESSION['uname'];
$cek_sales = mysqli_query($con,"select * FROM users where username = '$sales'");
$cek = mysqli_num_rows($cek_sales);
if($cek != 1 ){

    header("location:pelanggan.php?pesan=gagal");

}else{
  mysqli_query($con,"delete from data_pelanggan where id='$id'");
  header("location:pelanggan.php?pesan=sukses");
}
// <script>alert("Berhasil dihapus")</script>



?>
