<?php
include_once('koneksi.php');
include('cek-login.php');

$KODE_RUANG = $_POST['KODE_RUANG'];
$NAMA_RUANG = $_POST['NAMA_RUANG'];

		
	$sql="INSERT INTO ruang VALUES ('$KODE_RUANG','$NAMA_RUANG')";
	$res=mysql_query($sql) or die (mysql_error());
	
if ($sql) {
	header('location:admin_ruang.php');
} else {
	header('location:tambah_ruang.php');
}
?>