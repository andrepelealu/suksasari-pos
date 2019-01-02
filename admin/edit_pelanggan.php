<?php
include 'header.php';
?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Edit Pelanggan</h3>
<a class="btn" href="barang_laku.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>

<?php
$id_brg=mysqli_real_escape_string($con,$_GET['id']);

$det=mysqli_query($con,"select * from data_pelanggan where id='$id_brg'")or die(mysql_error());
while($d=mysqli_fetch_array($det)){
	?>
	<form action="update_pelanggan.php" method="post">
		<table class="table">
			<tr>
				<td></td>
				<td><input type="hidden" name="id" value="<?php echo $d['id'] ?>"></td>
			</tr>

			<tr>
				<td>Nama Toko/Pelanggan</td>
				<td><input name="tgl" disabled type="text" value="<?php echo $d['nama_pelanggan'] ?> "></td>
			</tr>

			<tr>
				<td>Alamat</td>
				<td><input type="text" class="form-control" name="alamat" value="<?php echo $d['alamat'] ?>"></td>
			</tr>
			<tr>
				<td>Kontak</td>
				<td><input type="text" class="form-control" name="kontak" value="<?php echo $d['nomor_telepon'] ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-info" value="Simpan"></td>
			</tr>
		</table>
	</form>
	<?php
}
?>
 <script type="text/javascript">
        $(document).ready(function(){

            $('#tgl').datepicker({dateFormat: 'yy/mm/dd'});

        });
    </script>
<?php
include 'footer.php';

?>
