<?php 
include_once('koneksi.php');
include('cek-login.php');


$id = $_GET['NIP'];

$query = mysql_query("delete from tata_usaha where NIP='$id'") or die(mysql_error());

if ($query) {
	header('location:admin_dosen.php');
} else {
	header('location:admin_dosen.php?hapus_gagal');
}
?>