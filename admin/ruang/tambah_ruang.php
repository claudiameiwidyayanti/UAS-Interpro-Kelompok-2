<?php 
include_once('koneksi.php');
include('cek-login.php');
?>

<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" />

<title>Tambah TU</title>
</head>
<body>

<div class="isi" align="center">
<form action="upload_ruang.php" method="post">

<table>
		   <thead>
		   <tr><th colspan="3">Tambah Data Ruang </th></tr>
		   </thead>
		    <tr>
		   <td width="261">KODE RUANG</td>
		   <td width="327"><input id="KODE_RUANG" name="KODE_RUANG" class="wide" type="text" required="required"/></td>
		   </tr>
		   <tr>
		   <td >NAMA RUANG</td>
		   <td ><input id="NAMA_RUANG" name="NAMA_RUANG" class="wide" type="text" required="required"/></td>
		   </tr>
</table>
<input class="button" type="submit" name="submit" id="tombolformnext" value="Simpan" />
</form>
<a href="admin_ruang.php"><button id="tombolformback" class="button">Kembali</button></a>
</div>
</body></html>