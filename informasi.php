<?php
	$koneksi = mysql_connect("localhost", "root", "");
	mysql_select_db("presensidanjurnalkelas_online");
?>

<!DOCTYPE html>
<html lang="en">
<html>

	<head>
		<title> Sistem Informasi Presensi dan Jurnal Kelas Online</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" 
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
	</head>
	
	
	<body background = "image/hitam.png" >
		<div class="navbar">
		<ul class="nav nav-pills">
			<li role="presentation"><a href="index.php">Menu Utama</a></li>
			<li role="presentation" class="active"><a href="informasi.php">Informasi</a></li>
		</ul>
	
		<div class="judul"> 
		<h1><b><center><font color=white>Sistem Informasi Presensi dan Jurnal Kelas Online</font><center></b></h1>
		<p><h1><b><center><font color=red>Jurusan Teknik Informatika, Fakultas Teknik</font><center></b></h1></p>
		<p><h1><b><center><font color=red>UNIVERSITAS NEGERI SURABAYA</font><center></b></h1></p>
		</div>
		
		<!-- Isi tampilan utama -->
		<th><p><h2><center><font color=white>PERATURAN dan INFORMASI !!</p></th>
		
		<p>1. Silahkan melakukan absensi dan mengisi jurnal kelas pada setiap mata kuliah.</p>
		<p>Jika ingin melakukan absensi silahkan Login terlebih dahulu.</p>
		<p>Kemudian isi kehadiran anda.</p>
		<p>Jika ingin mengisi jurnal silahkan memilih login terlebih dahulu.</p>
		<p>Kemudian silahkan mengisi jurnal.</center></h2></p>

		<p>2. Presensi Kelas hanya bisa diakses oleh Mahasiswa untuk melakukan absensi.</p>
		<p>Mahasiswa hanya dapat melakukan absensi kelas pada mata kuliah yang saat itu dilaksanakan,
		dengan waktu yang terbatas yaitu saat mata kuliah tersebut dilaksanakan dan sampai jam mata kuliah tersebut berakhir.</p>
		<p>Jika telah melewati batas waktu yang telah ditentukan maka Mahasiswa tidak dapat melakukan absensi dan dianggap tidak hadir.</p>
		
		<p>3. Jurnal Kelas dapat diakses oleh Dosen dan PK Setiap Mata Kuliah.</p>
		<p>Dosen yang mengisi jurnal yaitu Dosen yang mengajar mata kuliah tersebut.</p>
		<p>Dosen mengisi jurnal kelas ketika mata kuliah tersebut dilaksanakan sampai jam mata kuliah tersebut berakhir.</p>
		<p>Jika telah melewati batas waktu yang telah ditentukan maka Dosen tidak dapat mengisi jurnal tersebut dan dianggap tidak hadir dan tidak mengajar pada saat mata kuliah tersebut.</p>
		<p>Untuk PK setiap mata kuliah berbeda-beda.</p>
		<p>PK yang dapat mengisi jurnal tersebut yaitu hanya PK mata kuliah tersebut. Jika PK mata kuliah tidak hadir maka tidak dapat digantikan oleh siapapun.</p>
		<p>PK mengisi jurnal kelas ketika mata kuliah tersebut dilaksanakan sampai jam mata kuliah tersebut berakhir.</p>
		<p>Jika telah melewati batas waktu yang telah ditentukan maka PK tidak dapat mengisi jurnal tersebut dan dianggap tidak hadir.</font></p>
		<!-- Isi -->
		
	</body>
	
</html>
