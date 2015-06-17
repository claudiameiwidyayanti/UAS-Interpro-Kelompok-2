<?php 
include_once('koneksi.php');
include('cek-login.php');
?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="style.css" type="text/css" rel="stylesheet" />
<title>Halaman PK</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-color: #0066FF;
}
-->
</style></head>


<body>

		<?php
		$NIM = $_SESSION['NIM'];
		$query = mysql_query("select * from pk where NIM='$NIM'" );
		$data = mysql_fetch_array($query);
		?>

<h2 align="center">Selamat Datang "<?php echo $data['nama_pk']; ?>"</h2>
<br>
<h3 align="left">berikut opsi yang tersedia untuk anda</h3>
<a href="presensi_siswa/tambah_presensi_siswa.php?>"><button>Presensi Siswa</button></a>

<h3>berikut data anda</h3><br><br>
<div>
NIM: <?php echo $data['NIM']?><br>
Nama: <?php echo $data['nama_pk']?><br>
Password : <?php echo $data['password']?><br>
<a href="edit_data_pk.php?NIM=<?php echo $data['NIM'] ?>"><button class="button">Rubah Data</button></a><br>
<a href="logout.php"><button class="button">Keluar</button></a>


</div>
</body>
</html>