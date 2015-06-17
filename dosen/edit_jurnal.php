<?php 
include_once('koneksi.php');
include('cek-login.php');
?>

<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" />
<title>Edit Jurnal</title>
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
		 
		   <td>MATERI</td>
		   <td><input id="MATERI" name="MATERI" class="wide" type="MATERI" required="required" value="<?php echo $data['MATERI']; ?>"  /></td>
		   </tr>
</table>
<input class="button" type="submit" name="submit" value="Simpan" />
<input type="hidden" name="ID_JURNAL" value="<?php echo $data['ID_JURNAL']; ?>" />
</form>
<a href="jurnal.php"><button id="tombolformback" class="button">Kembali</button></a>
</div>
</body></html>