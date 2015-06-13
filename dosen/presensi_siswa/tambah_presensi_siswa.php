<?php 
include_once('koneksi.php');
include('cek-login.php');
?>

<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" />
<title>Presensi Siswa</title>
<?php
	$NIP=$_SESSION['NIP'];
 	$hari=date('D');
 	echo $hari; echo '<br>';
 	$tanggal= date ('Y-m-d');
 	echo $tanggal;
 	echo '<br>';
 	$waktu=date('H:i:s');
 	echo $waktu;
	$jadwal=mysql_query("select * from jadwal where NIP1='$NIP' || NIP2='$NIP' && Hari='$hari' && JAM_AKHIR<='$waktu'<=JAM_AWAL" );
	$data=mysql_fetch_array($jadwal);
	$idj=$jadwal['ID_JADWAL'];
	echo '<br>';
	echo "Kode Mata Kuliah="; echo $data['KODE_MATKUL'];
	$ambilmatkul=$data['KODE_MATKUL']; echo '<br>';
	$matkul=mysql_query("select * from mata_kuliah where KODE_MATKUL='$ambilmatkul'");
	$datamatkul=mysql_fetch_array($matkul);
	echo "Nama Mata Kuliah="; echo $datamatkul['NAMA_MATKUL']; echo '<br>';
	echo "Jumlah SKS="; echo $datamatkul['SKS']; echo '<br>';
	echo "Semester="; echo $datamatkul['SEMESTER']; echo '<br>';
	$dos1=$data['NIP1'];
	$dos2=$data['NIP2'];
	$querydosen1=mysql_query("select * from dosen where NIP='$dos1'");
	$ambildosen1=mysql_fetch_array($querydosen1);
	echo "Dosen Pengajar 1="; echo $ambildosen1['NAMA_DOSEN']; echo '<br>';
	$querydosen2=mysql_query("select * from dosen where NIP='$dos2'");
	$ambildosen2=mysql_fetch_array($querydosen2);
	echo "Dosen Pengajar 2="; echo $ambildosen2['NAMA_DOSEN']; echo '<br>';
	$ambil_kelas=$data['ID_KELAS'];
	$kelas=mysql_query("select * from kelas where ID_KELAS='$ambil_kelas'");
	$nama_kelas=mysql_fetch_array($kelas);
	echo 'Kelas = '; echo $nama_kelas['NAMA_KELAS'];
?>


</head>
<body>
<div class="isi" align="center">

<h3>Daftar peserta kuliah :</h3><br><br>
                     <?php $query3=mysql_query("select * from mahasiswa where ID_KELAS='$ambil_kelas'");
                    $i=1;?>
                      <table>
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>NIM</th>
                              <th>Nama</th>
                              
                              <th>OPSI</th>
                            </tr>
                          </thead>

                          <?php
                            while ($row3 = mysql_fetch_array($query3)) {
                            ?>
                                <tr>
                                    <td><?php echo $i?></td>
                                    <td><?php echo $row3['nim']?></td>
                                    <td><?php echo $row3['nama_mhs']?></td>
                                    <td>
                                    <?php 
                                    $n=$row3['nim'];
                                    $kehadiran=mysql_query("select * from presensi_siswa where NIM='$n'");
                                    $cek=mysql_fetch_row($kehadiran);
                                    if ($cek==1) {
                                    $status_hadir=mysql_fetch_array($kehadiran);
                                    echo $status_hadir['keterangan'];}
                                    else {echo '';}?></td>
                                    <td><a href="presensihadir.php?NIM=<?php echo $row3['nim'];?>"><button>Hadir</button></a>|
                                    </td>

                                </tr>
                                <?php $i++;
                                }?>
                        </table>
<div>

<a href="../halaman_dosen.php"><button id="tombolformback" class="button">Kembali</button></a>
</body>
</html>