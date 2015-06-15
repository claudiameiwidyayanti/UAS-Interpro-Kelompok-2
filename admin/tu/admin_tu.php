<?php 
include('koneksi.php');
include('cek-login.php');
?>


<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" />
.aa {
	color: #06F;
}
body {
	background-color: #06F;
}
<title>Admin TU</title>
</head>


<body>
<div class="isi" align="center">

<h3>Berikut Data pegawai TU yang ada :</h3><br><br>
                     <?php $query3=mysql_query("select * from tata_usaha");
                    $i=1;?>
                      <table>
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>ID Pegawai TU</th>
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
                                    <td><?php echo $row3['ID_TU']?></td>
                                    <td><?php echo $row3['NAMA_TU']?></td>
                                    <td><?php echo $row3['ALAMAT_TU']?></td>
                                    <td><?php echo $row3['NO_TELP_TU']?></td>
                                    <td><?php echo $row3['password']?></td>
                                    <td><a href="edit_tu.php?ID_TU=<?php echo $row3['ID_TU'];?>"><button>Edit</button></a>|
                                    <a href="delete_tu.php?ID_TU=<?php echo $row3['ID_TU'];?>"><button>Hapus</button></a></td>
                                </tr>
                                <?php $i++;
                                }?>
                        </table>
<div>
<a href="tambah_tu.php"><button>Tambah Pegawai TU</button> </a>
<a href="../halaman_admin.php"><button>Kembali</button></a>
</div>
</div>

</body>
</html>