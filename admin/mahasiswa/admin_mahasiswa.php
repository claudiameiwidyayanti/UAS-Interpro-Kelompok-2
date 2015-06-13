<?php 
include('koneksi.php');
include('cek-login.php');
?>


<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" />
<title>Admin Mahasiswa</title>
</head>


<body>
<div class="isi" align="center">

<h3>Berikut Data Mahasiswa yang ada :</h3><br><br>
                     <?php $query3=mysql_query("select * from mahasiswa");
                    $i=1;?>
                      <table>
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>NIM</th>
                              <th>KODE PRODI</th>
                              <th>ID KELAS</th>
                              <th>NAMA MAHASISWA</th>
                              <th>PASSWORD</th>
                            </tr>
                          </thead>

                          <?php
                            while ($row3 = mysql_fetch_array($query3)) {
                            ?>
                                <tr>
                                    <td><?php echo $i?></td>
                                    <td><?php echo $row3['nim']?></td>
                                    <td><?php echo $row3['KODE_PRODI']?></td>
                                    <td><?php echo $row3['ID_KELAS']?></td>
                                    <td><?php echo $row3['nama_mhs']?></td>
                                    <td><?php echo $row3['password']?></td>
                                    <td><a href="edit_mahasiswa.php?nim=<?php echo $row3['nim'];?>"><button>Edit</button></a>|
                                    <a href="delete_mahasiswa.php?nim=<?php echo $row3['nim'];?>"><button>Hapus</button></a></td>
                                </tr>
                                <?php $i++;
                                }?>
                        </table>
<div>
<a href="tambah_mahasiswa.php"><button>Tambah Mahasiswa</button> </a>
<a href="../halaman_admin.php"><button>Kembali</button></a>
</div>
</div>

</body>
</html>