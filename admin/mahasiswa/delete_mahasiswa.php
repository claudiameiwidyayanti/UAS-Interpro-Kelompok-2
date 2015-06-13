<?php 
include_once('koneksi.php');
include('cek-login.php');


$id = $_GET['nim'];

$query = mysql_query("delete from mahasiswa where nim='$id'") or die(mysql_error());

if ($query) {
	header('location:admin_mahasiswa.php');
} else {
	header('location:admin_mahasiswa.php?hapus_gagal');
}
?>