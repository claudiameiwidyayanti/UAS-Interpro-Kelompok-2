<?php 
include_once('koneksi.php');
include('cek-login.php');

$nim = $_POST['nim'];
$KODE_PRODI = $_POST['KODE_PRODI'];
$ID_KELAS = $_POST['ID_KELAS'];
$nama_mhs=$_POST['nama_mhs'];
$password=$_POST['password'];


$query = mysql_query("update mahasiswa set KODE_PRODI='$KODE_PRODI', ID_KELAS='$ID_KELAS', password='$password' where nim='$nim'") or die(mysql_error());

if ($query) {
	header('location:admin_mahasiswa.php');
} else {
	header('location:edit_mahasiswa.php');
}
?>