<?php
include_once('koneksi.php');
include('cek-login.php');
$NIM = $_POST['NIM'];
$nama_pk = $_POST['nama_pk'];
$password=$_POST['password'];


$query = mysql_query("update dosen set nama_pk='$nama_pk', password='$password' where NIP='$NIP'") or die(mysql_error());

if ($query) {
	header('location:halaman_pk.php');
} else {
	header('location:edit_data_pk.php');
}
?>