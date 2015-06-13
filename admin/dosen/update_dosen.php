<?php 
include_once('koneksi.php');
include('cek-login.php');

$NIP = $_POST['NIP'];
$NAMA_DOSEN = $_POST['NAMA_DOSEN'];
$ALAMAT_DOSEN = $_POST['ALAMAT_DOSEN'];
$NO_TELP_DOSEN=$_POST['NO_TELP_DOSEN'];
$password=$_POST['password'];


$query = mysql_query("update dosen set NAMA_DOSEN='$NAMA_DOSEN', ALAMAT_DOSEN='$ALAMAT_DOSEN', NO_TELP_DOSEN='$NO_TELP_DOSEN', password='$password' where NIP='$NIP'") or die(mysql_error());

if ($query) {
	header('location:admin_dosen.php');
} else {
	header('location:edit_dosen.php');
}
?>