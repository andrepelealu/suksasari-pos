<?php include 'header.php'; ?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Data Pelanggan</h3>
<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Tambah Data Pelanggan</button>
<br/>
<br/>


<?php
//ambil role
// $uname = $_SESSION['uname'];
// $query = "SELECT * FROM admin where uname = '$uname'";
// $cek = mysqli_query($con,$query);
// $cekadmin = mysqli_fetch_array($cek);


$per_hal=10;
$jumlah_record=mysqli_query($con,"SELECT COUNT(*) from data_pelanggan");
$jum=mysqli_fetch_array($jumlah_record);

$halaman=ceil($jum[0] / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>
<div class="col-md-12">
	<table class="col-md-2">
		<tr>
			<td>Jumlah Record</td>
			<td><?php echo $jum[0]; ?></td>
		</tr>
		<tr>
			<td>Jumlah Halaman</td>
			<td><?php echo $halaman; ?></td>
		</tr>
	</table>
	<a style="margin-bottom:10px" href="lap_pelanggan.php" target="_blank" class="btn btn-default pull-right"><span class='glyphicon glyphicon-print'></span>  Cetak</a>
</div>
<form action="caripelanggan_act.php" method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
		<input type="text" class="form-control" placeholder="Cari barang di sini .." aria-describedby="basic-addon1" name="cari">
	</div>
</form>
<br/>
<table class="table table-hover">
	<tr>
		<th class="col-md-1">No</th>
		<th class="col-md-1">Nama Toko/Pelanggan</th>
		<th class="col-md-3">Alamat</th>
		<th class="col-md-2">Kota</th>
		<th class="col-md-2">Kontak</th>
		<th class="col-md-3">Opsi</th>
	</tr>
	<?php
	if(isset($_GET['cari'])){
		$cari=mysqli_real_escape_string($con,$_GET['cari']);
		$brg=mysqli_query($con,"select * from data_pelanggan where nama_pelanggan like '$cari'");
	}

	else{
		$brg=mysqli_query($con,"select * from data_pelanggan limit $start, $per_hal");
	}
	$no=1;
	while($b=mysqli_fetch_array($brg)){

		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $b['nama_pelanggan'] ?></td>
			<td><?php echo $b['alamat'] ?></td>
			<td><?php echo $b['kota'] ?></td>
			<td><?php echo $b['nomor_telepon'] ?></td>
			<td>
				<a href="det_pelanggan.php?id=<?php echo $b['id']; ?>" class="btn btn-info">Detail</a>
				<a href="edit_pelanggan.php?id=<?php echo $b['id']; ?>" class="btn btn-warning">Edit</a>
				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapus_pelanggan.php?id=<?php echo $b['id']; ?>' }" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		<?php
	}
	?>

</table>
<ul class="pagination">
			<?php
			for($x=1;$x<=$halaman;$x++){
				?>
				<li><a href="?page=<?php echo $x ?>"><?php echo $x ?></a></li>
				<?php
			}
			?>
		</ul>
<!-- modal input -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Pelanggan Baru</h4>
			</div>

			<div class="modal-body">
				<form action="pelanggan_act.php" method="post">
					<div class="form-group">
						<label>Nama Pelanggan/Toko</label>
						<input name="nama_pelanggan" type="text" class="form-control" placeholder="Nama Pelanggan/Toko ..">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input name="alamat" type="text" class="form-control" placeholder="Alamat ..">
					</div>
					<div class="form-group">
						<label>Kota</label>
						<input name="kota" type="text" class="form-control" placeholder="Kota ..">
					</div>
					<div class="form-group">
						<label>Nomor Kontak</label>
						<input name="no_telepon" type="text" class="form-control" placeholder="Nomor Kontak">


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<input type="submit" class="btn btn-primary" value="Simpan">
				</div>
			</form>
		</div>
	</div>
</div>



<?php
include 'footer.php';

?>
