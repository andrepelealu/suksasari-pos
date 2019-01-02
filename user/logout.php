<?php
include 'validasi.php';
session_start();
session_destroy();
if($validasi==true){
  header("location:login/index.php");
}else{
  header("location:../index.php");
}


?>
