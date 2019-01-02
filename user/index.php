<?php
include 'header.php';
$user = $_SESSION['uname'];
?>

<?php
$a = mysqli_query($con,"select * from barang_laku");
?>

<div class="col-md-10">
	<h2>Sukasari Sales Management System</h2>
	<h3>Selamat datang <?php echo $user?> </h3>

    <h3></h3>
</div>
<!-- kalender -->
<div class="pull-right">
	<div id="kalender"></div>
</div>

<?php
include 'footer.php';

?>
