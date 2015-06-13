<?php 
include_once('koneksi.php');
include('cek-login.php');
?>


<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" />

<title>Edit data admin</title>
</head>


<body>
<?php include "koneksi.php";
$id_admin = $_GET['id_admin'];
$query = mysql_query("select * from admin where id_admin='$id_admin'" );
$data = mysql_fetch_array($query);
?>
<form action="update_data_admin.php" method="post">
<table>
   <thead>
   <tr><th colspan="3">Silahkan merubah data yang salah</th></tr>
   </thead>
   <tr>
   <td width="261">Nama</td>
   <td width="327"><input id="nama" name="nama" class="wide" type="text" required="required" value="<?php echo $data['nama']; ?>" /></td>
   </tr>
   <tr>
   <td>Password</td>
   <td><input id="password" name="password" class="wide" type="text" required="required" value="<?php echo $data['password']; ?>" /></td>
   </tr>
</table>
<input type="hidden" name="id_admin" value="<?php echo $data['id_admin']; ?>" />
<div class="tombolform">
<div id="tombolformnext">
<input class="button" type="submit" name="submit" value="Simpan Data" />
</div></div>
</form>
</div>
</body>
</html>