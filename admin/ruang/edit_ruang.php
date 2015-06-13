<?php 
include_once('koneksi.php');
include('cek-login.php');
?>

<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" />
<title>Edit Data Ruang</title>
</head>
<body>
<div>
<form action="update_ruang.php" method="post">
<?php
$id = $_GET['KODE_RUANG'];
$query = mysql_query("select * from ruang where KODE_RUANG='$id'");
$data = mysql_fetch_array($query);
?>

<table>
		   <thead>
		   <tr><th colspan="3">Edit Data Ruang <?php echo $data['KODE_RUANG']?></th></tr>
		   </thead>
		   <tr>
		   <td width="261">Kode Ruang</td>
		   <td width="327"><input id="KODE_RUANG" name="KODE_RUANG" class="wide" type="text" required="required" value="<?php echo $data['KODE_RUANG']?>" /></td>
		   </tr>
		   <tr>
		   <td>Nama Ruang</td>
		   <td width="327"><input id="NAMA_RUANG" name="NAMA_RUANG" class="wide" type="text" required="required" value="<?php echo $data['NAMA_RUANG']?>" /></td>
		   </tr>
</table>
<input class="button" type="submit" name="submit" value="Simpan" />
</form>
<a href="admin_ruang.php"><button id="tombolformback" class="button">Kembali</button></a>
</div>
</body></html>