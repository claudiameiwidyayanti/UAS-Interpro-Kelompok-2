<?php
include "koneksi.php";
session_start();
// terima data dari form login
$nama = $_POST['NIP'];
$password = $_POST['password'];

$nama = mysql_real_escape_string($nama);
$password = mysql_real_escape_string($password);

// cek data yang dikirim, apakah kosong atau tidak
if (empty($nama) && empty($password)) {
	// kalau username dan password kosong
	header('location:../login_admin.php?error=1');
	break;
} else if (empty($nama)) {
	// kalau username saja yang kosong
	header('location:../login_admin.php?error=2');
	break;
} else if (empty($password)) {
	// kalau password saja yang kosong
	header('location:../login_admin.php?error=3');
	break;
}

$query = mysql_query("select * from dosen where nama='$NIP' and password='$password'");

$data = mysql_fetch_array($query);

if (mysql_num_rows($query) == 1) {
	// kalau username dan password sudah terdaftar di database
	// buat session dengan nama username dengan isi nama user yang login
	$_SESSION['NIP'] = $nama;
	$_SESSION['role'] = $data['role'];
	
	// redirect ke halaman admin
	header('location:tambah_presensi_siswa.php');
} else {
	// kalau username ataupun password tidak terdaftar di database
	header('location:login_dosen.php');
}
?>