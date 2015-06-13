<?php 
include('koneksi.php');
include('cek-login.php');
?>


<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" />
<title>Admin Ruang</title>
</head>


<body>
<div class="isi" align="center">

<h3>Berikut Data Ruang yang ada :</h3><br><br>
                     <?php $query3=mysql_query("select * from ruang");
                    $i=1;?>
                      <table>
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>KODE RUANG</th>
                              <th>NAMA RUANG</th>
                            </tr>
                          </thead>

                          <?php
                            while ($row3 = mysql_fetch_array($query3)) {
                            ?>
                                <tr>
                                    <td><?php echo $i?></td>
                                    <td><?php echo $row3['KODE_RUANG']?></td>
                                    <td><?php echo $row3['NAMA_RUANG']?></td>
                                    <td><a href="edit_ruang.php?KODE_RUANG=<?php echo $row3['KODE_RUANG'];?>"><button>Edit</button></a>|
                                    <a href="delete_ruang.php?KODE_RUANG=<?php echo $row3['KODE_RUANG'];?>"><button>Hapus</button></a></td>
                                </tr>
                                <?php $i++;
                                }?>
                        </table>
<div>
<a href="tambah_ruang.php"><button>Tambah Ruang</button> </a>
<a href="../halaman_admin.php"><button>Kembali</button></a>
</div>
</div>

</body>
</html>