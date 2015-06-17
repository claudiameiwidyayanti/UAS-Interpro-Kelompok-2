<?php
include "koneksi.php";
session_start();
// terima data dari form login
$NIM = $_POST['NIM'];
$password = $_POST['password'];

$NIM = mysql_real_escape_string($NIM);
$password = mysql_real_escape_string($password);

// cek data yang dikirim, apakah kosong atau tidak
if (empty($NIM) && empty($password)) {
	// kalau username dan password kosong
	header('location:login_pk.php?error=1');
	break;
} else if (empty($NIM)) {
	// kalau username saja yang kosong
	header('location:login_pk.php?error=2');
	break;
} else if (empty($password)) {
	// kalau password saja yang kosong
	header('location:login_pk.php?error=3');
	break;
}

$query = mysql_query("select * from pk where NIM='$NIM' and password='$password'");

$data = mysql_fetch_array($query);

if (mysql_num_rows($query) == 1) {
	// kalau username dan password sudah terdaftar di database
	// buat session dengan NIM username dengan isi NIM user yang login
	$_SESSION['NIM'] = $NIM;
	$_SESSION['role'] = $data['role'];
	
	// redirect ke halaman pk
	header('location:halaman_pk.php');
} else {
	// kalau username ataupun password tidak terdaftar di database
	header('location:login_pk.php');
}
?>