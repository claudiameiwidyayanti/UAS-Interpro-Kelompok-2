<?php 
include_once('koneksi.php');
include('cek-login.php');

$NIM = $_POST['NIM'];
$password=$_POST['password'];


$query = mysql_query("update dosen set nama_pk='$nama_pk', password='$password' where NIM='$NIM'") or die(mysql_error());

if ($query) {
	header('location:admin_dosen.php');
} else {
	header('location:edit_pk.php');
}
?>