<?php 
session_start();
include '../../koneksi/koneksi.php';
$username = $_POST['user'];
$pass = $_POST['pass'];
// cek user
$sql = "SELECT * FROM penjual where username = '$username' AND password = '$pass'";
$result = mysqli_query($conn, $sql);
if($result->num_rows > 0){
	$row = mysqli_fetch_assoc($result);
	$_SESSION["penjual"] = true;
		header('location:../halaman_utama.php');
}

	else{
		echo "
		<script>
		alert('USERNAME/PASSWORD SALAH');
		window.location = '../index.php';
		</script>
		";
	}


?>

