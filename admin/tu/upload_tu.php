<?php
include_once('koneksi.php');
include('cek-login.php');

$ID_TU = $_POST['ID_TU'];
$NAMA_TU = $_POST['NAMA_TU'];
$ALAMAT_TU = $_POST['ALAMAT_TU'];
$NO_TELP_TU=$_POST['NO_TELP_TU'];
$password=$_POST['password'];

		
	$sql="INSERT INTO tata_usaha VALUES ('$ID_TU','$NAMA_TU','$ALAMAT_TU','$NO_TELP_TU','$password')";
	$res=mysql_query($sql) or die (mysql_error());
	
if ($sql) {
	header('location:admin_tu.php');
} else {
	header('location:tambah_tu.php');
}
?>