<?php 
include_once('koneksi.php');
include('cek-login.php');

$KODE_RUANG = $_POST['KODE_RUANG'];
$NAMA_RUANG = $_POST['NAMA_RUANG'];


$query = mysql_query("update ruang set NAMA_RUANG='$NAMA_RUANG' where KODE_RUANG='$KODE_RUANG'") or die(mysql_error());

if ($query) {
	header('location:admin_ruang.php');
} else {
	header('location:edit_ruang.php');
}
?>