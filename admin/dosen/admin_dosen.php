<?php 
include('koneksi.php');
include('cek-login.php');
?>


<html>
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
<title>Admin TU</title>
</head>


<body>
<div class="isi" align="center">

<h3>Berikut Data Dosen yang ada :</h3><br><br>
                     <?php $query3=mysql_query("select * from dosen");
                    $i=1;?>
                      <table>
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>NIP</th>
                              <th>Nama</th>
                              <th>Alamat</th>
                              <th>Nomor Telepon / HP</th>
                              <th>Password</th>
                              <th>Opsi</th>
                            </tr>
                          </thead>

                          <?php
                            while ($row3 = mysql_fetch_array($query3)) {
                            ?>
                                <tr>
                                    <td><?php echo $i?></td>
                                    <td><?php echo $row3['NIP']?></td>
                                    <td><?php echo $row3['NAMA_DOSEN']?></td>
                                    <td><?php echo $row3['ALAMAT_DOSEN']?></td>
                                    <td><?php echo $row3['NO_TELP_DOSEN']?></td>
                                    <td><?php echo $row3['password']?></td>
                                    <td><a href="edit_dosen.php?NIP=<?php echo $row3['NIP'];?>"><button>Edit</button></a>|
                                    <a href="delete_dosen.php?NIP=<?php echo $row3['NIP'];?>"><button>Hapus</button></a></td>
                                </tr>
                                <?php $i++;
                                }?>
                        </table>
<div>
<a href="tambah_dosen.php"><button>Tambah Dosen</button> </a>
<a href="../halaman_admin.php"><button>Kembali</button></a>
</div>
</div>

</body>
</html>