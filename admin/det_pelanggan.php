<?php
include 'header.php';
?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Detail Pelanggan</h3>
<a class="btn" href="pelanggan.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>

<?php
$id_brg=mysqli_real_escape_string($con,$_GET['id']);


$det=mysqli_query($con,"select * from data_pelanggan where id='$id_brg'")or die(mysql_error());
while($d=mysqli_fetch_array($det)){
	?>
	<table class="table">
		<tr>
			<td>Nama</td>
			<td><?php echo $d['nama_pelanggan'] ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><?php echo $d['alamat'] ?></td>
		</tr>
		<tr>
			<td>Kota</td>
			<td><?php echo $d['kota'] ?></td>
		</tr>
		<tr>
			<td>No.Kontak</td>
			<td><?php echo $d['nomor_telepon'] ?></td>
		</tr>
		<tr>

	</table>
	<?php
}
?>
<?php include 'footer.php'; ?>
