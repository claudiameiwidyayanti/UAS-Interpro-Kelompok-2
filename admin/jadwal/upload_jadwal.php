<?php
include_once('koneksi.php');
include('cek-login.php');

$ID_JADWAL = $_POST['ID_JADWAL'];
$KODE_RUANG = $_POST['KODE_RUANG'];
$ID_KELAS = $_POST['ID_KELAS'];
$KODE_MATKUL=$_POST['KODE_MATKUL'];
$NIP1=$_POST['NIP1'];
$NIP2=$_POST['NIP2'];
$HARI=$_POST['HARI'];
$JAM_AKHIR=$_POST['JAM_AKHIR'];
$JAM_AWAL=$_POST['JAM_AWAL'];

		
	$sql="INSERT INTO jadwal VALUES ('$ID_JADWAL','$KODE_RUANG','$ID_KELAS','$KODE_MATKUL','$NIP1', '$NIP2', '$HARI', '$JAM_AKHIR', '$JAM_AWAL')";
	$res=mysql_query($sql) or die (mysql_error());
	
if ($sql) {
	header('location:admin_jadwal.php');
} else {
	header('location:tambah_jadwal.php');
}
?>