<?php 
include_once('koneksi.php');
include('cek-login.php');
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>BlueFresh</title>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="satu.css" media="screen" />
</head>
<body>

<div id="wrap">
</div>

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
<div id="menu">
<ul>
<li><a href="#">Penjadwalan</a></li>
<li><a href="#">Kemahasiswaan</a></li>
<li><a href="#">Dosen</a></li>
<li><a href="#">Ruang</a></li>
<li><a href="#">Mata Kuliah</a></li>
<li><a href="#">Tata Usaha</a></li>
<li><a href="#">Edit Data Admin</a></li>
<li><a href="#">Keluar</a></li>
</ul>
</div>

<div id="content">

<div class="right"> 

<div class="articles">
 
<br /><br />
<img src="images(4).jpg" alt="Example pic" style="border: 3px solid #ccc;" />
<br /><br />
</div>
<div class="articles">
</div>
</div>

<div class="left"> 

</div>

<div style="clear: both;"> </div>

</div>

<div id="bottom"> </div>

<div id="footer">
</div>
</div>

</body>
</html>