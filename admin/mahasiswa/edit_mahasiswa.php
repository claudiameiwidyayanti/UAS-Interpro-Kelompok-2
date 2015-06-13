<?php 
include_once('koneksi.php');
include('cek-login.php');
?>

<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" />
<title>Edit Data Mahasiswa</title>
</head>
<body>
<div>
<form action="update_mahasiswa.php" method="post">
<?php
$id = $_GET['nim'];
$query = mysql_query("select * from mahasiswa where nim='$id'");
$data = mysql_fetch_array($query);
?>

<table>
		   
		   <tr>
		   <td width="261">NIM</td>
		   <td width="327"><input id="nim" name="nim" class="wide" type="text" required="required" value="<?php echo $data['nim']?>" /></td>
		   </tr>
		   <tr>
		   <td>KODE PRODI</td>
		   <td><select id="KODE_PRODI" name="KODE_PRODI" required="required">
               <option value="<?php echo $data['KODE_PRODI']?>" selected="selected"><?php echo $data['KODE_PRODI']?></option>
               <?php
                  $konek = mysql_query("SELECT * FROM prodi");
                  while ($row1 = mysql_fetch_array($konek)) {
                     list ($KODE_PRODI, $NAMA_PRODI)=$row2;?> 
                  <option value="<?php echo $row1['KODE_PRODI']?>"><?php echo $row1['KODE_PRODI']?></option>
                  <?php echo "<br>";}?>
               </select></td>
		   </tr>
		   <tr>
		   <td>ID KELAS</td>
		   <td><select id="ID_KELAS" name="ID_KELAS" required="required">
               <option value="<?php echo $data['ID_KELAS']?>" selected="selected"><?php echo $data['ID_KELAS']?></option>
               <?php
                  $konek = mysql_query("SELECT * FROM kelas");
                  while ($row2 = mysql_fetch_array($konek)) {
                     list ($ID_KELAS, $NAMA_KELAS)=$row2;?> 
                  <option value="<?php echo $row2['ID_KELAS']?>"><?php echo $row2['ID_KELAS']?></option>
                  <?php echo "<br>";}?>
               </select></td>
		   </tr>
		   <td>NAMA MHS</td>
		   <td width="327"><input id="nama_mhs" name="nama_mhs" class="wide" type="text" required="required" value="<?php echo $data['nama_mhs']?>" /></td>
		   </tr>
		   <td>Password</td>
		   <td><input id="password" name="password" class="wide" type="password" required="required" value="<?php echo $data['password']; ?>"  /></td>
		   </tr>
</table>
<input class="button" type="submit" name="submit" value="Simpan" />
<input type="hidden" name="nim" value="<?php echo $data['nim']; ?>" />
</form>
<a href="admin_mahasiswa.php"><button id="tombolformback" class="button">Kembali</button></a>
</div>
</body></html>