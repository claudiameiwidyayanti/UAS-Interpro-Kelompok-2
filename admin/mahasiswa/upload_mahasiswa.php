<?php
include_once('koneksi.php');
include('cek-login.php');

$nim = $_POST['nim'];
$KODE_PRODI = $_POST['KODE_PRODI'];
$ID_KELAS = $_POST['ID_KELAS'];
$nama_mhs = $_POST['nama_mhs'];
$password = $_POST['password'];

		
	$sql="INSERT INTO mahasiswa VALUES ('$nim','$KODE_PRODI','$ID_KELAS','$nama_mhs','$password')";
	$res=mysql_query($sql) or die (mysql_error());
	
if ($sql) {
	header('location:admin_mahasiswa.php');
} else {
	header('location:tambah_mahasiswa.php');
}
?>