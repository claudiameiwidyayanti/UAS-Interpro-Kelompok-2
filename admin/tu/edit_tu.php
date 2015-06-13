<?php 
include_once('koneksi.php');
include('cek-login.php');
?>

<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" />
<title>Edit Data Pegawai TU</title>
</head>
<body>
<div>
<form action="update_tu.php" method="post">
<?php
$id = $_GET['ID_TU'];
$query = mysql_query("select * from tata_usaha where ID_TU='$id'");
$data = mysql_fetch_array($query);
?>

<table>
		   <thead>
		   <tr><th colspan="3">Edit Data Pegawai TU <?php echo $data['NAMA_TU']?></th></tr>
		   </thead>
		   <tr>
		   <td width="261">Nama Pegawai TU</td>
		   <td width="327"><input id="NAMA_TU" name="NAMA_TU" class="wide" type="text" required="required" value="<?php echo $data['NAMA_TU']?>" /></td>
		   </tr>
		   <tr>
		   <td>Alamat</td>
		   <td width="327"><input id="ALAMAT_TU" name="ALAMAT_TU" class="wide" type="text" required="required" value="<?php echo $data['ALAMAT_TU']?>" /></td>
		   </tr>
		   <tr>
		   <td>Nomor Telepon</td>
		   <td width="327"><input id="NO_TELP_TU" name="NO_TELP_TU" class="wide" type="text" required="required" value="<?php echo $data['NO_TELP_TU']?>" /></td>
		   </tr>
		   <td>Password</td>
		   <td><input id="password" name="password" class="wide" type="password" required="required" value="<?php echo $data['password']; ?>"  /></td>
		   </tr>
</table>
<input class="button" type="submit" name="submit" value="Simpan" />
<input type="hidden" name="ID_TU" value="<?php echo $data['ID_TU']; ?>" />
</form>
<a href="admin_tu.php"><button id="tombolformback" class="button">Kembali</button></a>
</div>
</body></html>