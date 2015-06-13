<?php 
session_start();

$logged_in = false;

//jika session username belum dibuat, atau session username kosong
if (!isset($_SESSION['NIP']) || empty($_SESSION['NIP'])) {	
	//redirect ke halaman login
	header('location:login_dosen.php');
} else {
	$logged_in = true;
}
?>