<?php 
include_once('koneksi.php');
include('cek-login.php');


$id = $_GET['KODE_MATKUL'];

$query = mysql_query("delete from mata_kuliah where KODE_MATKUL='$id'") or die(mysql_error());

if ($query) {
	header('location:admin_matkul.php');
} else {
	header('location:admin_matkul.php?hapus_gagal');
}
?>