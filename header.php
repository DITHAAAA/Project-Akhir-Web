<?php 
session_start();
include 'koneksi/koneksi.php';
if(isset($_SESSION['kd_cs'])){

	$kode_cs = $_SESSION['kd_cs'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bakery</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<script  src="js/jquery.js"></script>
	<script  src="js/bootstrap.min.js"></script>


</head>
<body>
	
	<nav class="navbar navbar-default" style="padding: 5px;">
		<div class="container">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#" style="color: #black"><b>Shine Bakery</b></a>
			</div>

			<!-- <form class="d-flex" role="search">
 				 <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
  				<button class="btn btn-outline-success" type="submit">Search</button>
			</form> -->

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php">Home</a></li>
					<li><a href="produk.php">Produk</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-stats"></i> Menu <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="produk.php">Roti Gandum</a></li>
							<li><a href="laporan_profit.php">Roti Tawar</a></li>
							<li><a href="laporan_omset.php">Roti Croissant</a></li>
							<li><a href="laporan_pembatalan.php">Roti Sisir</a></li>
						</ul>
					</li>
					<li><a href="about.php">Tentang</a></li>
					<li><a href="manual.php">Panduan Aplikasi</a></li>

					<?php 
					if(isset($_SESSION['kd_cs'])){
					$kode_cs = $_SESSION['kd_cs'];
					$cek = mysqli_query($conn, "SELECT kode_produk from keranjang where kode_customer = '$kode_cs' ");
					$value = mysqli_num_rows($cek);

						?>
						<li><a href="keranjang.php"><i class="glyphicon glyphicon-shopping-cart"></i> <b>[ <?= $value ?> ]</b></a></li>

						<?php 
					}else{
						echo "
						<li><a href='keranjang.php'><i class='glyphicon glyphicon-shopping-cart'></i> [0]</a></li>

						";
					}
					if(!isset($_SESSION['user'])){
						?>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> Akun <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href=" admin/index.php">Login Admin</a></li>
								<li><a href=" Penjual/index.php">Login Penjual</a></li>
								<li><a href="user_login.php">Login Member</a></li>
								<li><a href="register.php">Registrasi</a></li>
							</ul>
						</li>
						<?php 
					}else{
						?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> <?= $_SESSION['user']; ?> <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="proses/logout.php">Log Out</a></li>
							</ul>
						</li>

						<?php 
					}
					?>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	