<?php 
session_start();
unset($_SESSION['penjual']);

if(!isset($_SESSION['penjual'])){
	header('location:../index.php');
}

?>