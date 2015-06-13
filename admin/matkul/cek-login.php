<?php 
session_start();

$logged_in = false;

//jika session username belum dibuat, atau session username kosong
if (!isset($_SESSION['nama']) || empty($_SESSION['nama'])) {	
	//redirect ke halaman login
	header('location:../login_admin.php');
} else {
	$logged_in = true;
}
?>