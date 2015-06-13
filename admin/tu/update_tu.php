<?php 
include_once('koneksi.php');
include('cek-login.php');

$ID_TU = $_POST['ID_TU'];
$NAMA_TU = $_POST['NAMA_TU'];
$ALAMAT_TU = $_POST['ALAMAT_TU'];
$NO_TELP_TU=$_POST['NO_TELP_TU'];
$password=$_POST['password'];


$query = mysql_query("update tata_usaha set NAMA_TU='$NAMA_TU', ALAMAT_TU='$ALAMAT_TU', NO_TELP_TU='$NO_TELP_TU', password='$password' where ID_TU='$ID_TU'") or die(mysql_error());

if ($query) {
	header('location:admin_tu.php');
} else {
	header('location:edit_tu.php');
}
?>