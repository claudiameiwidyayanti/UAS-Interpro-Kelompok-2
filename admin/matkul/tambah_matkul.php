<?php 
include_once('koneksi.php');
include('cek-login.php');
?>

<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" />

<title>Tambah Matkul</title>
</head>
<body>

<div class="isi" align="center">
<form action="upload_matkul.php" method="post">

<table>
		   <thead>
		   <tr><th colspan="3">Tambah Data Matkul </th></tr>
		   </thead>
		   <tr>
		   <td width="261">KODE MATKUL</td>
		   <td width="327"><input id="KODE_MATKUL" name="KODE_MATKUL" class="wide" type="text" required="required"/></td>
		   </tr>
		   <tr>
		   <td >NAMA MATKUL</td>
		   <td ><input id="NAMA_MATKUL" name="NAMA_MATKUL" class="wide" type="text" required="required"/></td>
		   </tr>
		   <tr>
		   <tr>
		   <td>SKS</td>
		   <td><input id="SKS" name="SKS" class="wide" type="text" required="required"/></td>
		   </tr>
		   <tr>
		   <td>SEMESTER</td>
		   <td><input id="SEMESTER" name="SEMESTER" class="wide" type="text" required="required"/></td>
		   </tr>
		   <tr>
</table>
<input class="button" type="submit" name="submit" id="tombolformnext" value="Simpan" />
</form>
<a href="admin_matkul.php"><button id="tombolformback" class="button">Kembali</button></a>
</div>
</body>
</html>