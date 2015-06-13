<?php 
include('koneksi.php');
include('cek-login.php');
?>


<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" />
<title>Admin Jadwal</title>
</head>


<body>
<div class="isi" align="center">

<h3>Berikut Data Jadwal :</h3><br><br>
                     <?php $query3=mysql_query("select * from Jadwal");
                    $i=1;?>
                      <table>
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>ID JADWAL</th>
                              <th>Kode Ruang</th>
                              <th>ID Kelas</th>
                              <th>Kode Matkul</th>
                              <th>NIP1</th>
                              <th>NIP2</th>
                              <th>Hari</th>
                              <th>Jam_Akhir</th>
                              <th>Jam_Awal</th>
                            </tr>
                          </thead>

                          <?php
                            while ($row3 = mysql_fetch_array($query3)) {
                            ?>
                                <tr>
                                    <td><?php echo $i?></td>
                                    <td><?php echo $row3['ID_JADWAL']?></td>
                                    <td><?php echo $row3['KODE_RUANG']?></td>
                                    <td><?php echo $row3['ID_KELAS']?></td>
                                    <td><?php echo $row3['KODE_MATKUL']?></td>
                                    <td><?php echo $row3['NIP1']?></td>
                                    <td><?php echo $row3['NIP2']?></td>
                                    <td><?php echo $row3['HARI']?></td>
                                    <td><?php echo $row3['JAM_AKHIR']?></td>
                                    <td><?php echo $row3['JAM_AWAL']?></td>
                                    <td><a href="edit_jadwal.php?ID_JADWAL=<?php echo $row3['ID_JADWAL'];?>"><button>Edit</button></a>|
                                    <a href="delete_jadwal.php?ID_JADWAL=<?php echo $row3['ID_JADWAL'];?>"><button>Hapus</button></a></td>
                                </tr>
                                <?php $i++;
                                }?>
                        </table>
<div>
<a href="tambah_jadwal.php"><button>Tambah Jadwal</button> </a>
<a href="../halaman_admin.php"><button>Kembali</button></a>
</div>
</div>

</body>
</html>