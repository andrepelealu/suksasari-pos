<?php
$uname = $_SESSION['uname'];
$query = "SELECT * FROM admin where uname = '$uname'";
$cek = mysqli_query($con,$query);
$cekadmin = mysqli_fetch_array($cek);

  if($w= $cekadmin['id'] == 1){
    //akun admin
    $admin = true;

  }else{
    //akun bukan admin
    $admin = false;
  }


 ?>
