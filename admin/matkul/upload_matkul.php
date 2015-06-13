<?php
include_once('koneksi.php');
include('cek-login.php');

$KODE_MATKUL = $_POST['KODE_MATKUL'];
$NAMA_MATKUL = $_POST['NAMA_MATKUL'];
$SKS = $_POST['SKS'];
$SEMESTER=$_POST['SEMESTER'];

		
	$sql="INSERT INTO mata_kuliah VALUES ('$KODE_MATKUL','$NAMA_MATKUL','$SKS','$SEMESTER')";
	$res=mysql_query($sql) or die (mysql_error());
	
if ($sql) {
	header('location:admin_matkul.php');
} else {
	header('location:tambah_matkul.php');
}
?>