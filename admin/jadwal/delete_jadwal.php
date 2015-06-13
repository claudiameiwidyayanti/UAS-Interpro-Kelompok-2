<?php 
include_once('koneksi.php');
include('cek-login.php');


$id = $_GET['ID_JADWAL'];

$query = mysql_query("delete from jadwal where ID_JADWAL='$id'") or die(mysql_error());

if ($query) {
	header('location:admin_jadwal.php');
} else {
	header('location:admin_jadawal.php?hapus_gagal');
}
?>