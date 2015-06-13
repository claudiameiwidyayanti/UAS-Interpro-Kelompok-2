<?php 
include('koneksi.php');
include('cek-login.php');
?>


<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" />
<title>Admin Matkul</title>
</head>


<body>
<div class="isi" align="center">

<h3>Berikut Data MataKuliah yang ada :</h3><br><br>
                     <?php $query3=mysql_query("select * from mata_kuliah");
                    $i=1;?>
                      <table>
                          <thead>
                            <tr>
                              <th>NO</th>
                              <th>KODE MATKUL</th>
                              <th>NAMA MATKUL</th>
                              <th>SKS</th>
                              <th>SEMESTER</th>
                            </tr>
                          </thead>

                          <?php
                            while ($row3 = mysql_fetch_array($query3)) {
                            ?>
                                <tr>
                                    <td><?php echo $i?></td>
                                    <td><?php echo $row3['KODE_MATKUL']?></td>
                                    <td><?php echo $row3['NAMA_MATKUL']?></td>
                                    <td><?php echo $row3['SKS']?></td>
                                    <td><?php echo $row3['SEMESTER']?></td>
                                    <td><a href="edit_matkul.php?KODE_MATKUL=<?php echo $row3['KODE_MATKUL'];?>"><button>Edit</button></a>|
                                    <a href="delete_matkul.php?KODE_MATKUL=<?php echo $row3['KODE_MATKUL'];?>"><button>Hapus</button></a></td>
                                </tr>
                                <?php $i++;
                                }?>
                        </table>
<div>
<a href="tambah_matkul.php"><button>Tambah Matakuliah</button> </a>
<a href="../halaman_admin.php"><button>Kembali</button></a>
</div>
</div>

</body>
</html>