<?php 
include_once('koneksi.php');
include('cek-login.php');
?>

<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" />

<title>Tambah Mahasiswa</title>
</head>
<body>

<div class="isi" align="center">
<form action="upload_mahasiswa.php" method="post">

<table>
		   <thead>
		   <tr><th colspan="3">Tambah Data Mahasiswa </th></tr>
		   </thead>
		    <tr>
		   <td width="261">NIM</td>
		   <td width="327"><input id="nim" name="nim" class="wide" type="text" required="required"/></td>
		   </tr>
		   <tr>
		   <td >Kode Prodi</td>
		   <td><select id="KODE_PRODI" name="KODE_PRODI" required="required">
               <?php
                  $konek = mysql_query("SELECT * FROM prodi");
                  while ($row1 = mysql_fetch_array($konek)) {
                     list ($KODE_PRODI, $NAMA_PRODI)=$row2;?> 
                  <option value="<?php echo $row1['KODE_PRODI']?>"><?php echo $row1['KODE_PRODI']?></option>
                  <?php echo "<br>";}?>
               </select></td>
		   </tr>
		   <tr>
		   <tr>
		   <td>ID KELAS</td>
		   <td><select id="ID_KELAS" name="ID_KELAS" required="required">
               <?php
                  $konek = mysql_query("SELECT * FROM kelas");
                  while ($row2 = mysql_fetch_array($konek)) {
                     list ($ID_KELAS, $NAMA_KELAS)=$row2;?> 
                  <option value="<?php echo $row2['ID_KELAS']?>"><?php echo $row2['ID_KELAS']?></option>
                  <?php echo "<br>";}?>
               </select></td>
		   </tr>
		    <tr>
		   <td>Nama mhs</td>
		   <td><input id="nama_mhs" name="nama_mhs" class="wide" type="text" required="required"/></td>
		   </tr>
		   	<tr>
		   <td>Password</td>
		   <td><input id="password" name="password" class="wide" type="password" required="required" /></td>
		   </tr>
</table>
<input class="button" type="submit" name="submit" id="tombolformnext" value="Simpan" />
</form>
<a href="admin_mahasiswa.php"><button id="tombolformback" class="button">Kembali</button></a>
</div>
</body></html>