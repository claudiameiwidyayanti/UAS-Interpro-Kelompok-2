<?php 
session_start();

include_once('koneksi.php');

if (!empty($_SESSION['nama'])) {
	header('location:login_admin.php');
}
?>

<HTML>
<head>

</head>
<body>

<div>
	<form action="cek_login_admin.php" method="post">
		<table>
		   <thead>
		   <tr><th colspan="3">Login Admin</th></tr>
		   </thead>
		   <tr>
		   <td >Nama</td>
		   <td ><input id="nama" name="nama" class="wide" type="text" required="required" /></td>
		   </tr>
		   <td>Password</td>
		   <td><input id="password" name="password" class="wide" type="password" required="required" /></td>
		   </tr>
		</table>
<div>
<input type="submit" name="submit" class="button" value="Masuk" id="tombolformnext" />
</div>
</form>
<div >
<a href="../index.php"><button class="button" id="tombolformback">Kembali</button></a>
</div>
	
</div>
</body>
</HTML>