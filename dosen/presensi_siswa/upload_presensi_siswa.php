<?php
include_once('koneksi.php');
include('cek-login.php');

$NIP = $_POST['NIP'];
$NAMA_DOSEN = $_POST['NAMA_DOSEN'];
$ALAMAT_DOSEN = $_POST['ALAMAT_DOSEN'];
$NO_TELP_DOSEN=$_POST['NO_TELP_DOSEN'];
$password=$_POST['password'];

		
	$sql="INSERT INTO tata_usaha VALUES ('$NIP','$NAMA_DOSEN','$ALAMAT_DOSEN','$NO_TELP_DOSEN','$password')";
	$res=mysql_query($sql) or die (mysql_error());
	
if ($sql) {
	header('location:admin_dosen.php');
} else {
	header('location:tambah_dosen.php');
}
?>