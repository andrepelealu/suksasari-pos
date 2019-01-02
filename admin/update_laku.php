<?php
include 'config.php';
$id=$_POST['id'];

$harga=$_POST['harga'];
$jumlah=$_POST['jumlah'];


$update = mysqli_query($con,"update barang_laku set  harga='$harga', jumlah='$jumlah' where id='$id'");
if($update){
  echo 'bisa';
}
header("location:barang_laku.php");

?>
