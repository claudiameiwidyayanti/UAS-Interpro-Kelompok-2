<?php 
include_once('koneksi.php');
include('cek-login.php');
?>

<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" />

<title>Tambah Dosen</title>
</head>
<body>

<div class="isi" align="center">
<form action="upload_dosen.php" method="post">

<table>
		   <thead>
		   <tr><th colspan="3">Tambah Data Dosen </th></tr>
		   </thead>
		    <tr>
		   <td width="261">ID</td>
		   <td width="327"><input id="NIP" name="NIP" class="wide" type="text" required="required"/></td>
		   </tr>
		   <tr>
		   <td >Nama</td>
		   <td ><input id="NAMA_DOSEN" name="NAMA_DOSEN" class="wide" type="text" required="required"/></td>
		   </tr>
		   <tr>
		   <tr>
		   <td>Alamat</td>
		   <td><input id="ALAMAT_DOSEN" name="ALAMAT_DOSEN" class="wide" type="text" required="required"/></td>
		   </tr>
		    <tr>
		   <td>Nomor Telepon</td>
		   <td><input id="NO_TELP_DOSEN" name="NO_TELP_DOSEN" class="wide" type="text" required="required"/></td>
		   </tr>
		   	<tr>
		   <td>Password</td>
		   <td><input id="password" name="password" class="wide" type="password" required="required" /></td>
		   </tr>
</table>
<input class="button" type="submit" name="submit" id="tombolformnext" value="Simpan" />
</form>
<a href="admin_dosen.php"><button id="tombolformback" class="button">Kembali</button></a>
</div>
</body></html>