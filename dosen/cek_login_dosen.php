<?php
include "koneksi.php";
session_start();
// terima data dari form login
$NIP = $_POST['NIP'];
$password = $_POST['password'];

$NIP = mysql_real_escape_string($NIP);
$password = mysql_real_escape_string($password);

// cek data yang dikirim, apakah kosong atau tidak
if (empty($NIP) && empty($password)) {
	// kalau username dan password kosong
	header('location:login_dosen.php?error=1');
	break;
} else if (empty($NIP)) {
	// kalau username saja yang kosong
	header('location:login_dosen.php?error=2');
	break;
} else if (empty($password)) {
	// kalau password saja yang kosong
	header('location:login_dosen.php?error=3');
	break;
}

$query = mysql_query("select * from dosen where NIP='$NIP' and password='$password'");

$data = mysql_fetch_array($query);

if (mysql_num_rows($query) == 1) {
	// kalau username dan password sudah terdaftar di database
	// buat session dengan NIP username dengan isi NIP user yang login
	$_SESSION['NIP'] = $NIP;
	$_SESSION['role'] = $data['role'];
	
	// redirect ke halaman admin
	header('location:halaman_dosen.php');
} else {
	// kalau username ataupun password tidak terdaftar di database
	header('location:login_dosen.php');
}
?>