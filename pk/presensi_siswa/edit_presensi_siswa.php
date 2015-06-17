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
<form action="update_pk.php" method="post">
<?php
$id = $_GET['NIM'];
$query = mysql_query("select * from pk where NIM='$id'");
$data = mysql_fetch_array($query);
?>

<table>
		   <thead>
		   <tr><th colspan="3">Edit Data Dosen: <?php echo $data['nama_pk']?></th></tr>
		   </thead>
		   <tr>
		   <td width="261">Nama PK</td>
		   <td width="327"><input id="nama_pk" name="nama_pk" class="wide" type="text" required="required" value="<?php echo $data['nama_pk']?>" /></td>
		   </tr>
		   <tr>
		   <td>Password</td>
		   <td><input id="password" name="password" class="wide" type="password" required="required" value="<?php echo $data['password']; ?>"  /></td>
		   </tr>
</table>
<input class="button" type="submit" name="submit" value="Simpan" />
<input type="hidden" name="NIM" value="<?php echo $data['NIM']; ?>" />
</form>
<a href="admin_dosen.php"><button id="tombolformback" class="button">Kembali</button></a>
</div>
</body></html>