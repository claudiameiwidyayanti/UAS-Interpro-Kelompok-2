<?php
include_once('koneksi.php');
include('cek-login.php');
	$id_admin=$_POST['id_admin'];
	$nama=$_POST['nama'];
	$password=$_POST['password'];
		
	$sql=mysql_query("update admin set 
	nama='$nama', 
	password='$password' 
	where id_admin='$id_admin'");

	if ($sql){
		$query = mysql_query("select * from admin where nama='$nama' and password='$password'");
		$data = mysql_fetch_array($query);
			if (mysql_num_rows($query) == 1) {
			// kalau username dan password sudah terdaftar di database
	// buat session dengan nama username dengan isi nama user yang login
	$_SESSION['nama'] = $nama;
	$_SESSION['role'] = $data['role'];
	
	// redirect ke halaman admin
	header('location:halaman_admin.php');
} else {
	// kalau username ataupun password tidak terdaftar di database
	header('location:login_admin.php');
}}
?>