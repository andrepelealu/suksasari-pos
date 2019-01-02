<?php

require_once("admin/config.php");

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $uname = $_POST['username'];
    $pass = $_POST['password'];


    // filter data yang diinputkan
    // $name = filter_input(INPUT_POST, $name, FILTER_SANITIZE_STRING);
    //$username = filter_input(INPUT_POST, $uname, FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = md5($pass);
    //$password = password_hash($pass, PASSWORD_DEFAULT);
    //$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


    // menyiapkan query
    $sql = "INSERT INTO users (name, username, password)
            VALUES ('$name', '$uname', '$password')";
    $query = mysqli_query($con,$sql);

    // eksekusi query untuk menyimpan ke database
    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($query) {
      header("Location: index.php");
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>bukan admin</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/js/jquery-ui/jquery-ui.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.js"></script>
	<?php include 'admin/config.php'; ?>
	<style type="text/css">
	.kotak{
		margin-top: 150px;
	}

	.kotak .input-group{
		margin-bottom: 20px;
	}
	</style>
</head>
<body>
	<div class="container">

		<div class="panel panel-default">
			<form action="register.php" method="post">
				<div class="col-md-4 col-md-offset-4 kotak">
					<h3>Register Sales</h3>
          <div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
						<input type="text" class="form-control" placeholder="Nama Lengkap" name="name">
					</div>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						<input type="text" class="form-control" placeholder="Username" name="username">
					</div>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
						<input type="password" class="form-control" placeholder="Password" name="password">
					</div>
					<div class="input-group">
						<input type="submit" class="btn btn-primary"name="register" value="Register"><br><br>

					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
