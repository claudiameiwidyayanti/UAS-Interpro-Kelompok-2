<?php 
include_once('koneksi.php');
include('cek-login.php');
?>

<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" />

<title>Tambah Jadwal</title>
</head>
<body>

<div class="isi" align="center">
<form action="upload_jadwal.php" method="post">

<table>
		   <thead>
		   <tr><th colspan="3">Tambah Data Jadwal </th></tr>
		   </thead>
		    <tr>
		   <td width="261">ID JADWAL</td>
		   <td width="327"><input id="ID_JADWAL" name="ID_JADWAL" class="wide" type="text" required="required"/></td>
		   </tr>
		   <tr>
		   <td >KODE RUANG</td>
		   <td><select id="KODE_RUANG" name="KODE_RUANG" required="required">
               <?php
                  $konek = mysql_query("SELECT * FROM ruang");
                  while ($row1 = mysql_fetch_array($konek)) {
                     list ($KODE_RUANG, $NAMA_RUANG)=$row1;?> 
                  <option value="<?php echo $row1['KODE_RUANG']?>"><?php echo $row1['KODE_RUANG']?></option>
                  <?php echo "<br>";}?>
               </select></td>
		   </tr>
		   <tr>
		   <tr>
		   <td>ID KELAS</td>
		   <td><select id="ID_KELAS" name="ID_KELAS" required="required">
               <?php
                  $konek2 = mysql_query("SELECT * FROM kelas");
                  while ($row2 = mysql_fetch_array($konek2)) {
                     list ($ID_KELAS, $NAMA_KELAS)=$row2;?> 
                  <option value="<?php echo $row2['ID_KELAS']?>"><?php echo $row2['ID_KELAS']?></option>
                  <?php echo "<br>";}?>
               </select></td>
		   </tr>
		   <tr>
		   <td>KODE MATKUL</td>
		   <td><select id="KODE_MATKUL" name="KODE_MATKUL" required="required">
               <?php
                  $konek3 = mysql_query("SELECT * FROM mata_kuliah");
                  while ($row3 = mysql_fetch_array($konek3)) {
                     list ($KODE_MATKUL, $NAMA_MATKUL)=$row3;?> 
                  <option value="<?php echo $row3['KODE_MATKUL']?>"><?php echo $row3['KODE_MATKUL']?></option>
                  <?php echo "<br>";}?>
               </select></td>
		   </tr>
		   	<tr>
		   <td>NIP1</td>
		   <td><select id="NIP1" name="NIP1" required="required">
               <?php
                  $konek4 = mysql_query("SELECT * FROM dosen");
                  while ($row4 = mysql_fetch_array($konek4)) {
                     list ($KODE_NIP, $NAMA_NIP)=$row4;?> 
                  <option value="<?php echo $row4['NIP']?>"><?php echo $row4['NIP']?></option>
                  <?php echo "<br>";}?>
               </select></td>
		   </tr>
		   <td>NIP2</td>
		   <td><select id="NIP2" name="NIP2" required="required">
               <?php
                  $konek5 = mysql_query("SELECT * FROM dosen");
                  while ($row5 = mysql_fetch_array($konek5)) {
                     list ($KODE_NIP, $NAMA_NIP)=$row5;?> 
                  <option value="<?php echo $row5['NIP']?>"><?php echo $row5['NIP']?></option>
                  <?php echo "<br>";}?>
               </select></td>
		   </tr>
		   <td>HARI</td>
		   <td><select id="HARI" name="HARI" required="required">
                  <option value="Mon">SENIN</option>
                  <option value="Tue">SELASA</option>
                  <option value="Wed">RABU</option>
                  <option value="Thu">KAMIS</option>
                  <option value="Fry">JUMAT</option>
                  <option value="Sat">SABTU</option>
               </select></td>
		   </tr>
		   <td>JAM AWAL</td>
         <td width="327"><input id="JAM_AWAL" name="JAM_AWAL" class="wide" type="text" required="required"/></td>
		   </tr>
		   <td>JAM AKHIR</td>
         <td width="327"><input id="JAM_AKHIR" name="JAM_AKHIR" class="wide" type="text" required="required"/></td>
		   </tr>
</table>
<input class="button" type="submit" name="submit" id="tombolformnext" value="Simpan" />
</form>
<a href="admin_jadwal.php"><button id="tombolformback" class="button">Kembali</button></a>
</div>
</body></html>