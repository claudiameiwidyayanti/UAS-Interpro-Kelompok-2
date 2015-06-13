<?php 
include_once('koneksi.php');
include('cek-login.php');


$id = $_GET['KODE_RUANG'];

$query = mysql_query("delete from ruang where KODE_RUANG='$id'") or die(mysql_error());

if ($query) {
	header('location:admin_ruang.php');
} else {
	header('location:admin_ruang.php?hapus_gagal');
}
?>