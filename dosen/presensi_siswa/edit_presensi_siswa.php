<?php 
include_once('koneksi.php');
include('cek-login.php');
?>

<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" />
<title>Edit Data Dosen</title>
</head>
<body>
<div>
<form action="update_dosen.php" method="post">
<?php
$id = $_GET['NIP'];
$query = mysql_query("select * from dosen where NIP='$id'");
$data = mysql_fetch_array($query);
?>

<table>
		   <thead>
		   <tr><th colspan="3">Edit Data Dosen: <?php echo $data['NAMA_DOSEN']?></th></tr>
		   </thead>
		   <tr>
		   <td width="261">Nama Pegawai DOSEN</td>
		   <td width="327"><input id="NAMA_DOSEN" name="NAMA_DOSEN" class="wide" type="text" required="required" value="<?php echo $data['NAMA_DOSEN']?>" /></td>
		   </tr>
		   <tr>
		   <td>Alamat</td>
		   <td width="327"><input id="ALAMAT_DOSEN" name="ALAMAT_DOSEN" class="wide" type="text" required="required" value="<?php echo $data['ALAMAT_DOSEN']?>" /></td>
		   </tr>
		   <tr>
		   <td>Nomor Telepon</td>
		   <td width="327"><input id="NO_TELP_DOSEN" name="NO_TELP_DOSEN" class="wide" type="text" required="required" value="<?php echo $data['NO_TELP_DOSEN']?>" /></td>
		   </tr>
		   <td>Password</td>
		   <td><input id="password" name="password" class="wide" type="password" required="required" value="<?php echo $data['password']; ?>"  /></td>
		   </tr>
</table>
<input class="button" type="submit" name="submit" value="Simpan" />
<input type="hidden" name="NIP" value="<?php echo $data['NIP']; ?>" />
</form>
<a href="admin_dosen.php"><button id="tombolformback" class="button">Kembali</button></a>
</div>
</body></html>