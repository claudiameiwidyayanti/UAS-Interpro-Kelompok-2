<?php 
include_once('koneksi.php');
include('cek-login.php');
?>

<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" />
<title>Edit Data Jadwal</title>
</head>
<body>
<div>
<form action="update_jadwal.php" method="post">
<?php
$id = $_GET['ID_JADWAL'];
$query = mysql_query("select * from jadwal where ID_JADWAL='$id'");
$data = mysql_fetch_array($query);
?>

<table>
		   <thead>
		   <tr><th colspan="3">Edit Data Jadwal: <?php echo $data['ID_JADWAL']?></th></tr>
		   </thead>
		   <tr>
		   <td width="261">ID JADWAL</td>
		   <td width="327"><?php echo $data['ID_JADWAL']?></td>
		   </tr>
		   <tr>
		   <td >KODE RUANG</td>
		   <td><select id="KODE_RUANG" name="KODE_RUANG" required="required">
		   	<option value="<?php echo $data['KODE_RUANG']?>" selected="selected"><?php echo $data['KODE_RUANG']?></option>
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
		   	<option value="<?php echo $data['ID_KELAS']?>" selected="selected"><?php echo $data['ID_KELAS']?></option>
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
		   	<option value="<?php echo $data['KODE_MATKUL']?>" selected="selected"><?php echo $data['KODE_MATKUL']?></option>
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
		   	<option value="<?php echo $data['NIP1']?>" selected="selected"><?php echo $data['NIP1']?></option>
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
		   	<option value="<?php echo $data['NIP2']?>" selected="selected"><?php echo $data['NIP2']?></option>
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
		   	<option value="<?php echo $data['HARI']?>" selected="selected"><?php echo $data['HARI']?></option>
                  <option value="SENIN">SENIN</option>
                  <option value="SELASA">SELASA</option>
                  <option value="RABU">RABU</option>
                  <option value="KAMIS">KAMIS</option>
                  <option value="JUMAT">JUMAT</option>
                  <option value="SABTU">SABTU</option>
               </select></td>
		   </tr>
		   <td>JAM_AKHIR</td>
		   <td><input id="JAM_AKHIR" name="JAM_AKHIR" class="wide" type="JAM_AKHIR" required="required" value="<?php echo $data['JAM_AKHIR']; ?>"  /></td>
		   </tr>
		   <td>JAM_AWAL</td>
		   <td><input id="JAM_AWAL" name="JAM_AWAL" class="wide" type="JAM AWAL" required="required" value="<?php echo $data['JAM_AWAL']; ?>"  /></td>
		   </tr>
</table>
<input class="button" type="submit" name="submit" value="Simpan" />
<input type="hidden" name="ID_JADWAL" value="<?php echo $data['ID_JADWAL']; ?>" />
</form>
<a href="admin_jadwal.php"><button id="tombolformback" class="button">Kembali</button></a>
</div>
</body></html>