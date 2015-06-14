<?php 
include_once('koneksi.php');
include('cek-login.php');
?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="style.css" type="text/css" rel="stylesheet" />
<style type="text/css">
.aa {
	color: #06F;
}
body {
	background-color: #06F;
}
</style>
<title>Halaman Admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>


<body>

		<?php
		$nama = $_SESSION['nama'];
		$query = mysql_query("select * from admin where nama='$nama'" );
		$data = mysql_fetch_array($query);
		?>

<h2 align="center">Selamat Datang Admin"<?php echo $data['nama']; ?>"</h2>
<br>
<h3 align="center">Silahkan Pilih Menu Berikut :</h3><br><br>
<div align="center">
<a href="jadwal/admin_jadwal.php"><button>Penjadwalan</button> </a>
<a href="mahasiswa/admin_mahasiswa.php"><button>Kemahasiswaan</button> </a>
<a href="dosen/admin_dosen.php"><button>Dosen</button> </a>
<a href="ruang/admin_ruang.php"><button>Ruang</button> </a>
<a href="matkul/admin_matkul.php"><button>Mata Kuliah</button> </a>
<a href="tu/admin_tu.php"><button>Tata Usaha</button></a>
<a href="edit_data_admin.php?id_admin=<?php echo $data['id_admin']?>"><button class="button" id="tombolformnext">Edit Data Admin</button> </a>
<a href="logout.php"><button class="button" id="tombolformback">Keluar</button></a>

</div>
</body>
</html>