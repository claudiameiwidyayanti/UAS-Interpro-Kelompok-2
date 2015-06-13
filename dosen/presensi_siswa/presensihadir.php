<?php
include_once('koneksi.php');
include('cek-login.php');

$nim = $_GET['NIM'];
$hari=date('D');
$waktu=date('H:i:s');
$jadwal=mysql_query("select * from jadwal where HARI='$hari' && JAM_AKHIR<='$waktu'<=JAM_AWAL" );
$data=mysql_fetch_array($jadwal);
$idj=$data['ID_JADWAL'];
$tanggal= date ('Y-m-d');
$keterangan="hadir";

    
  $sql=mysql_query("INSERT INTO presensi_siswa VALUES ('$id_presensi_siswa','$idj','$nim','$tanggal','$keterangan')");
  
if ($sql) {
  header('location:tambah_presensi_siswa.php');
} else {
  header('location:tambah_presensi_siswa.php?error_log("data tidak masuk")');
}
?>