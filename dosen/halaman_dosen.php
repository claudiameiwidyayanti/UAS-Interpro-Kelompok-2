<?php 
include_once('koneksi.php');
include('cek-login.php');
?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="style.css" type="text/css" rel="stylesheet" />
<title>Halaman Admin</title>
</head>


<body>

		<?php
		$NIP = $_SESSION['NIP'];
		$query = mysql_query("select * from dosen where NIP='$NIP'" );
		$data = mysql_fetch_array($query);
		?>

<h2>Selamat Datang "<?php echo $data['NAMA_DOSEN']; ?>"</h2>
<br>
<h3>berikut opsi yang tersedia untuk anda</h3>
<a href="presensi_siswa/tambah_presensi_siswa.php?>"><button>Presensi Siswa</button></a>
<a href="jurnal/jurnal_matkul.php?>"><button>Jurnal Matakuliah</button></a>
<h3>berikut data anda</h3><br><br>
<div>
NIP: <?php echo $data['NIP']?><br>
Nama: <?php echo $data['NAMA_DOSEN']?><br>
Alamat: <?php echo $data['ALAMAT_DOSEN']?><br>
Telepon: <?php echo $data['NO_TELP_DOSEN']?><br>
Password : <?php echo $data['password']?><br>
<a href="edit_data_dosen.php?NIP=<?php echo $data['NIP'] ?>"><button class="button">Rubah Data</button></a><br>
<a href="logout.php"><button class="button">Keluar</button></a>


</div>
</body>
</html>