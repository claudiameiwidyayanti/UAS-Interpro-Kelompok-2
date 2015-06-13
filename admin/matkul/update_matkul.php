<?php 
include_once('koneksi.php');
include('cek-login.php');

$KODE_MATKUL = $_POST['KODE_MATKUL'];
$NAMA_MATKUL = $_POST['NAMA_MATKUL'];
$SKS = $_POST['SKS'];
$SEMESTER=$_POST['SEMESTER'];


$query = mysql_query("update mata_kuliah set NAMA_MATKUL='$NAMA_MATKUL', SKS='$SKS', SEMESTER='$SEMESTER' where KODE_MATKUL='$KODE_MATKUL'") or die(mysql_error());

if ($query) {
	header('location:admin_matkul.php');
} else {
	header('location:edit_matkul.php');
}
?>