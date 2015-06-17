<?php 
include('koneksi.php');
include('cek-login.php');
?>


<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" />
<title>Admin Presensi Siswa</title>
</head>


<body>
<div class="isi" align="center">
<?php
$id = $_GET['NIM'];
$query = mysql_query("select * from pk where NIM='$id'");
$data = mysql_fetch_array($query);
 

 ?>
<h3>Presensi Anda yang tersedia sekarang</h3>
<?php $query2=mysql_query("select * from jadwal where NIM=$id") ?> 
<p>kelas: </p>
<p>Mata Kuliah: </p>
<p>DOSEN: </p>

<h3>Berikut Data Presensi Siswa yang ada :</h3><br><br>
                     <?php $query3=mysql_query("select * from presensi_siswa");
                    $i=1;?>
                      <table>
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>ID Presensi</th>
                              <th>ID Jadwal</th>
                              <th>NIM</th>
                              <th>Tanggal</th>
                              <th>Keterangan</th>
                            </tr>
                          </thead>

                          <?php
                            while ($row3 = mysql_fetch_array($query3)) {
                            ?>
                                <tr>
                                    <td><?php echo $i?></td>
                                    <td><?php echo $row3['id_presensi_siswa']?></td>
                                    <td><?php echo $row3['ID_JADWAL']?></td>
                                    <td><?php echo $row3['NIM']?></td>
                                    <td><?php echo $row3['tanggal']?></td>
                                    <td><?php echo $row3['keterangan']?></td>
                                    <td><a href="edit_presensi_siswa.php?id_presensi_siswa=<?php echo $row3['id_presensi_siswa'];?>"><button>Edit</button></a>|
                                    <a href="delete_presensi_siswa.php?id_presensi_siswa=<?php echo $row3['id_presensi_siswa'];?>"><button>Hapus</button></a></td>
                                </tr>
                                <?php $i++;
                                }?>
                        </table>
<div>
<a href="tambah_presensi_siswa.php"><button>Tambah Dosen</button> </a>
<a href="../halaman_admin.php"><button>Kembali</button></a>
</div>
</div>

</body>
</html>