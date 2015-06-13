<?php
	$koneksi = mysql_connect("localhost", "root", "");
	mysql_select_db("presensidanjurnalkelas_online");
?>

<!DOCTYPE html>
<html lang="en">
<html>

	<head>
		<title>Sistem Informasi Presensi dan Jurnal Kelas Online</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" 
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
	</head>
	
	<body background = "image/background.png" >
		<div class="navbar">
		<ul class="nav nav-pills">
			<li role="presentation" class="active"><a href="index.php">Menu Utama</a></li>
			<li role="presentation"><a href="informasi.php">Informasi</a></li>
		</ul>
	
		<!-- Isi tampilan utama -->
		<div class="judul"> 
		<p><h1><b><center><marquee><font color=blue>SELAMAT DATANG !!</font><center></marquee></b></h1></p>
		</div>
		<div class="judul"> .
		<p><h1><b><center><font color=red>Sistem Informasi Presensi dan Jurnal Kelas Online</font><center></b></h1></p>
		</div>
		<!-- Isi -->

		<body>
<p><center><a href="admin/login_admin.php"><button style="width: 200px; heigth: 700px;">Login Admin</button></a></center></p>
<p><center><a href="dosen/login_dosen.php"><button style="width: 200px; heigth: 700px;">Login Dosen</button></a></center></p>
</body>
	</body>
	