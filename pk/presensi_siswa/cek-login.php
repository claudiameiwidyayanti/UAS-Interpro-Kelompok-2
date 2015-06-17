<?php 
session_start();

$logged_in = false;

//jika session username belum dibuat, atau session username kosong
if (!isset($_SESSION['NIM']) || empty($_SESSION['NIM'])) {	
	//redirect ke halaman login
	header('location:../login_pk.php');
} else {
	$logged_in = true;
}
?>