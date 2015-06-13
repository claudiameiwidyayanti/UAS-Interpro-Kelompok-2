<?php 
include_once('koneksi.php');
include('cek-login.php');

$ID_JADWAL = $_POST['ID_JADWAL'];
$KODE_RUANG = $_POST['KODE_RUANG'];
$ID_KELAS = $_POST['ID_KELAS'];
$KODE_MATKUL = $_POST['KODE_MATKUL'];
$NIP1=$_POST['NIP1'];
$NIP2=$_POST['NIP2'];
$HARI=$_POST['HARI'];
$JAM_AKHIR=$_POST['JAM_AKHIR'];
$JAM_AWAL=$_POST['JAM_AWAL'];


$query = mysql_query("update jadwal set KODE_RUANG='$KODE_RUANG', ID_KELAS='$ID_KELAS', KODE_MATKUL='$KODE_MATKUL', NIP1='$NIP1', NIP2='$NIP2', HARI='$HARI', JAM_AKHIR='$JAM_AKHIR', JAM_AWAL='$JAM_AWAL' where ID_JADWAL='$ID_JADWAL'") or die(mysql_error());

if ($query) {
	header('location:admin_jadwal.php');
} else {
	header('location:edit_jadwal.php');
}
?>