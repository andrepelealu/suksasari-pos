<?php

include 'config.php';
session_start();
$nama_pelanggan=$_POST['nama_pelanggan'];
$alamat=$_POST['alamat'];
$kota=$_POST['kota'];
$no_telepon = $_POST['no_telepon'];
$sales = $_SESSION['uname'];
// $dt=mysqli_query($con,"select * from barang where nama='$nama'");
// $data=mysqli_fetch_array($dt);
// $sisa=$data['jumlah']-$jumlah;
// mysqli_query($con,"update barang set jumlah='$sisa' where nama='$nama'");

// $modal=$data['modal'];
// $laba=$harga-$modal;
// $labaa=$laba*$jumlah;
// $total_harga=$harga*$jumlah;
mysqli_query($con,"insert into data_pelanggan values('','$nama_pelanggan','$sales','$alamat','$kota','$no_telepon')")or die(mysqli_error());
//echo $sales;
header("location:Pelanggan.php");

?>
