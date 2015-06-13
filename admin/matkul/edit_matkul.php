<?php 
include_once('koneksi.php');
include('cek-login.php');
?>

<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" />
<title>Edit Data Matakuliah</title>
</head>
<body>
<div>
<form action="update_matkul.php" method="post">
<?php
$id = $_GET['KODE_MATKUL'];
$query = mysql_query("select * from mata_kuliah where KODE_MATKUL='$id'");
$data = mysql_fetch_array($query);
?>

<table>
		   
		   <tr>
		   <td>KODE MATKUL</td>
		   <td width="327"><input id="KODE_MATKUL" name="KODE_MATKUL" class="wide" type="text" required="required" value="<?php echo $data['KODE_MATKUL']?>" /></td>
		   </tr>
		   <tr>
		   <td>NAMA MATKUL</td>
		   <td width="327"><input id="NAMA_MATKUL" name="NAMA_MATKUL" class="wide" type="text" required="required" value="<?php echo $data['NAMA_MATKUL']?>" /></td>
		   </tr>
		   <tr>
		   <td>SKS</td>
		   <td width="327"><input id="SKS" name="SKS" class="wide" type="text" required="required" value="<?php echo $data['SKS']?>" /></td>
		   </tr>
		   <td>SEMESTER</td>
		   <td><input id="SEMESTER" name="SEMESTER" class="wide" type="SEMESTER" required="required" value="<?php echo $data['SEMESTER']; ?>"  /></td>
		   </tr>
</table>
<input class="button" type="submit" name="submit" value="Simpan" />
<input type="hidden" name="KODE_MATKUL" value="<?php echo $data['KODE_MATKUL']; ?>" />
</form>
<a href="admin_matkul.php"><button id="tombolformback" class="button">Kembali</button></a>
</div>
</body></html>