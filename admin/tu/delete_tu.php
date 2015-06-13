<?php 
include_once('koneksi.php');
include('cek-login.php');


$id = $_GET['ID_TU'];

$query = mysql_query("delete from tata_usaha where ID_TU='$id'") or die(mysql_error());

if ($query) {
	header('location:admin_tu.php');
} else {
	header('location:admin_tu.php?hapus_gagal');
}
?>