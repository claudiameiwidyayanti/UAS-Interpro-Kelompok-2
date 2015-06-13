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
<form action="upload_tu.php" method="post">

<table>
		   <thead>
		   <tr><th colspan="3">Tambah Data Pegawai TU </th></tr>
		   </thead>
		    <tr>
		   <td width="261">ID</td>
		   <td width="327"><input id="ID_TU" name="ID_TU" class="wide" type="text" required="required"/></td>
		   </tr>
		   <tr>
		   <td >Nama</td>
		   <td ><input id="NAMA_TU" name="NAMA_TU" class="wide" type="text" required="required"/></td>
		   </tr>
		   <tr>
		   <tr>
		   <td>Alamat</td>
		   <td><input id="ALAMAT_TU" name="ALAMAT_TU" class="wide" type="text" required="required"/></td>
		   </tr>
		    <tr>
		   <td>Nomor Telepon</td>
		   <td><input id="NO_TELP_TU" name="NO_TELP_TU" class="wide" type="text" required="required"/></td>
		   </tr>
		   	<tr>
		   <td>Password</td>
		   <td><input id="password" name="password" class="wide" type="password" required="required" /></td>
		   </tr>
</table>
<input class="button" type="submit" name="submit" id="tombolformnext" value="Simpan" />
</form>
<a href="admin_tu.php"><button id="tombolformback" class="button">Kembali</button></a>
</div>
</body></html>