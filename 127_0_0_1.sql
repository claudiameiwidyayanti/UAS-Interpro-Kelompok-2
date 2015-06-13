-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2015 at 04:40 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `presensidanjurnalkelas_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `password`) VALUES
(1, 'arif', 'yono'),
(2, 'efi', 'efi1');

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_mhs`
--
CREATE TABLE IF NOT EXISTS `data_mhs` (
`nim` varchar(15)
,`nama_mhs` varchar(25)
,`nama_kelas` varchar(20)
);
-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `NIP` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `NAMA_DOSEN` varchar(25) NOT NULL,
  `ALAMAT_DOSEN` varchar(30) NOT NULL,
  `NO_TELP_DOSEN` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`NIP`, `password`, `NAMA_DOSEN`, `ALAMAT_DOSEN`, `NO_TELP_DOSEN`) VALUES
('197006221997032001', 'asmunin1', 'Asmunin', 'Jalan jalan', '085647328945'),
('197006221997032002', 'bambang1', 'Bambang Sujatmiko', 'Jalan Diponegoro', '085672673353'),
('197006221997032003', 'andi1', 'Andi Iwan', 'Jalan Bromo', '087824534562'),
('197006221997032004', 'ricky1', 'Ricky Eka', 'Jalan Merapi', '085716526362'),
('197006221997032005', 'igl1', 'I Gusti Lanang', 'Jalan Margorejo', '081256373676'),
('197006221997032006', 'budi1', 'Budi Priyo Prawoto', 'Jalan Menganti', '089675236563'),
('197006221997032007', 'naim1', 'Naim Rochmawati', 'Jalan Menanggal', '085727536462'),
('197006221997032008', 'dwi1', 'Dwi Fatrianto', 'Jalan A.Yani', '085626563566'),
('197006221997032009', 'eva1', 'Eva Rahmawati', 'Jalan Banyumas', '085772753663'),
('197006221997032010', 'agus1', 'Agus Prihanto', 'Jalan Jambangan', '085667261762');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `ID_JADWAL` varchar(20) NOT NULL,
  `KODE_RUANG` varchar(10) NOT NULL,
  `ID_KELAS` varchar(20) NOT NULL,
  `KODE_MATKUL` varchar(10) NOT NULL,
  `NIP1` varchar(20) NOT NULL,
  `NIP2` varchar(20) NOT NULL,
  `HARI` text NOT NULL,
  `JAM_AKHIR` time NOT NULL,
  `JAM_AWAL` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`ID_JADWAL`, `KODE_RUANG`, `ID_KELAS`, `KODE_MATKUL`, `NIP1`, `NIP2`, `HARI`, `JAM_AKHIR`, `JAM_AWAL`) VALUES
('J1', '601', '302', '102', '197006221997032001', '197006221997032001', 'KAMIS', '08:40:00', '07:00:00'),
('J2', '606', '302', '107', '197006221997032003', '197006221997032003', 'SENIN', '10:40:00', '09:00:00'),
('J3', '607', '302', '107', '197006221997032009', '197006221997032010', 'SELASA', '08:40:00', '07:00:00'),
('J4', '609', '302', '112', '197006221997032005', '197006221997032005', 'JUMAT', '12:20:00', '10:30:00'),
('J5', '602', '302', '105', '197006221997032002', '197006221997032004', 'RABU', '14:40:00', '13:00:00'),
('J6', '604', '302', '106', '197006221997032006', '197006221997032006', 'SELASA', '08:40:00', '07:00:00'),
('J7', '608', '302', '111', '197006221997032007', '197006221997032007', 'SENIN', '10:30:00', '08:50:00'),
('J8', '609', '302', '103', '197006221997032009', '197006221997032009', 'RABU', '12:20:00', '10:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `jurnal`
--

CREATE TABLE IF NOT EXISTS `jurnal` (
  `ID_JURNAL` varchar(10) NOT NULL,
  `PERTEMUAN` varchar(10) NOT NULL,
  `MHS_YANG_HADIR` varchar(10) NOT NULL,
  `MATERI` varchar(30) NOT NULL,
  `TTD_Dosen` varchar(10) NOT NULL,
  `TTD_pk` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurnal`
--

INSERT INTO `jurnal` (`ID_JURNAL`, `PERTEMUAN`, `MHS_YANG_HADIR`, `MATERI`, `TTD_Dosen`, `TTD_pk`) VALUES
('123', '1', '25', 'belajar', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `ID_KELAS` varchar(20) NOT NULL,
  `NAMA_KELAS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`ID_KELAS`, `NAMA_KELAS`) VALUES
('301', 'MI A 2013'),
('302', 'MI B 2013'),
('303', 'MI C 2013');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` varchar(15) NOT NULL,
  `KODE_PRODI` varchar(10) NOT NULL,
  `ID_KELAS` varchar(20) NOT NULL,
  `nama_mhs` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `KODE_PRODI`, `ID_KELAS`, `nama_mhs`, `password`) VALUES
('13050623031', '501', '302', 'Bayu Robby Sagita', 'bayu1'),
('13050623032', '501', '302', 'Yoko Afuqu Suradinata', 'yoko1'),
('13050623033', '501', '302', 'Anita Dian Pramuwati', 'anita1'),
('13050623034', '501', '302', 'Twinda Asta Nurrohma', 'twinda1'),
('13050623035', '501', '302', 'Fikri Makhzumi', 'fikri1'),
('13050623037', '501', '302', 'Mar''atul Farikhah', 'arik1'),
('13050623038', '501', '302', 'Maizatul Azuroh', 'maiza1'),
('13050623039', '501', '302', 'Citra Pratiwi Putri', 'citra1'),
('13050623040', '501', '302', 'Mokhammad Solekhudin Ghoz', 'ali1'),
('13050623041', '501', '302', 'Arif Yono Saputro', 'arif1'),
('13050623042', '501', '302', 'Mochamad Agus Heripurwant', 'heri1'),
('13050623043', '501', '302', 'Cindy Santika Putri', 'cindi1'),
('13050623044', '501', '302', 'Gilang Samodra', 'gilang1'),
('13050623045', '501', '302', 'Luthfiyyah Rona Umami', 'ona1'),
('13050623047', '501', '302', 'Andika Rizqa Putra', 'andika1'),
('13050623048', '501', '302', 'Risma Rizky Ramadhani', 'risma1'),
('13050623051', '501', '302', 'Claudia Mei Widyayanti', 'claudia1'),
('13050623052', '501', '302', 'Efy Widyawati', 'efi1'),
('13050623053', '501', '302', 'Rudi Hartanto', 'rudi1'),
('13050623054', '501', '302', 'Wella Ranggarani Ongkowij', 'wela1'),
('13050623055', '501', '302', 'Megasari Ramadhanis', 'danis1'),
('13050623056', '501', '302', 'Mohammad Adibhadiansyah', 'adib1'),
('13050623057', '501', '302', 'Carina Adji Pratiwi', 'carin'),
('13050623058', '501', '302', 'Ndaru Sendramurti', 'ndaru1'),
('13050623059', '501', '302', 'Dwi Lestari Ningsih', 'dwi1'),
('13050623080', '501', '302', 'Khori Oktaviani', 'khori1');

--
-- Triggers `mahasiswa`
--
DELIMITER //
CREATE TRIGGER `trinsertmhs` BEFORE INSERT ON `mahasiswa`
 FOR EACH ROW begin
insert into kelas (ID_KELAS, NAMA_KELAS) values (NEW.nim, NEW.nama_mhs);
end
//
DELIMITER ;
DELIMITER //
CREATE TRIGGER `trupdatemhs` BEFORE UPDATE ON `mahasiswa`
 FOR EACH ROW begin
update kelas set NAMA_KELAS=NEW.nama_mhs where ID_KELAS=NEW.nim;
end
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE IF NOT EXISTS `mata_kuliah` (
  `KODE_MATKUL` varchar(10) NOT NULL,
  `NAMA_MATKUL` varchar(25) NOT NULL,
  `SKS` varchar(5) NOT NULL,
  `SEMESTER` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`KODE_MATKUL`, `NAMA_MATKUL`, `SKS`, `SEMESTER`) VALUES
('101', 'Internet dan Pemrograman', '2', '4'),
('102', 'Praktikum Internet dan Pe', '1', '4'),
('103', 'Sistem Basis Data', '2', '4'),
('104', 'Praktikum Sistem Basis Da', '2', '4'),
('105', 'Kalkulus 2', '2', '4'),
('106', 'Kecerdasan Buatan', '2', '4'),
('107', 'Rekayasa Perangkat Lunak', '2', '4'),
('108', 'Praktikum Rekayasa Perang', '1', '4'),
('109', 'Pemrograman Visual', '2', '4'),
('110', 'Praktikum Pemrograman Vis', '2', '4'),
('111', 'Jaringan Komputer 2', '2', '4'),
('112', 'Praktikum Jaringan Komput', '2', '4'),
('113', 'Bahasa Inggris 2', '2', '4');

-- --------------------------------------------------------

--
-- Table structure for table `presensi`
--

CREATE TABLE IF NOT EXISTS `presensi` (
  `id_presensi` varchar(10) NOT NULL,
  `tgl_masuk` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ID_JADWAL` time NOT NULL,
  `JML_HADIR` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `presensi_siswa`
--

CREATE TABLE IF NOT EXISTS `presensi_siswa` (
`id_presensi_siswa` int(11) NOT NULL,
  `ID_JADWAL` varchar(10) NOT NULL,
  `NIM` text NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presensi_siswa`
--

INSERT INTO `presensi_siswa` (`id_presensi_siswa`, `ID_JADWAL`, `NIM`, `tanggal`, `keterangan`) VALUES
(13, 'J2', '13050623031', '2015-05-30', 'hadir'),
(20, 'J2', '13050623034', '2015-06-01', 'hadir'),
(21, 'J2', '13050623038', '2015-06-01', 'hadir'),
(22, 'J1', '13050623057', '2015-06-01', 'hadir'),
(23, 'J1', '13050623080', '2015-06-01', 'hadir'),
(24, 'J1', '13050623054', '2015-06-01', 'hadir'),
(25, 'J3', '13050623039', '2015-06-01', 'hadir'),
(26, 'J1', '13050623031', '2015-06-03', 'hadir'),
(27, 'J1', '13050623031', '2015-06-03', 'hadir'),
(28, 'J1', '13050623031', '2015-06-03', 'hadir'),
(29, '', '13050623032', '2015-06-10', 'hadir');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE IF NOT EXISTS `prodi` (
  `KODE_PRODI` varchar(10) NOT NULL,
  `NAMA_PRODI` varchar(25) NOT NULL,
  `JURUSAN_FAK` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`KODE_PRODI`, `NAMA_PRODI`, `JURUSAN_FAK`) VALUES
('501', 'D3 Manajemen Informatika', 'Teknik Informatika'),
('502', 'S1 Pend. Tek. Informatika', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE IF NOT EXISTS `ruang` (
  `KODE_RUANG` varchar(10) NOT NULL,
  `NAMA_RUANG` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`KODE_RUANG`, `NAMA_RUANG`) VALUES
('601', 'B20102'),
('602', 'B10201'),
('603', 'B10202'),
('604', 'B10203'),
('605', 'B10204'),
('606', 'A70201'),
('607', 'A70202'),
('608', 'A70301'),
('609', 'A70302'),
('610', 'A70303'),
('611', 'A70304');

-- --------------------------------------------------------

--
-- Table structure for table `tata_usaha`
--

CREATE TABLE IF NOT EXISTS `tata_usaha` (
  `ID_TU` varchar(3) NOT NULL,
  `NAMA_TU` varchar(20) NOT NULL,
  `ALAMAT_TU` varchar(20) NOT NULL,
  `NO_TELP_TU` varchar(12) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tata_usaha`
--

INSERT INTO `tata_usaha` (`ID_TU`, `NAMA_TU`, `ALAMAT_TU`, `NO_TELP_TU`, `password`) VALUES
('701', 'arip', 'jombang', '0819238981', 'yono'),
('702', 'efi', 'surabaya', '09123809123', 'efi');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vdetailjadwal`
--
CREATE TABLE IF NOT EXISTS `vdetailjadwal` (
`ID_JADWAL` varchar(20)
,`NIP1` varchar(20)
,`NIP2` varchar(20)
,`HARI` text
,`JAM_AWAL` time
,`JAM_AKHIR` time
,`NAMA_MATKUL` varchar(25)
,`SKS` varchar(5)
,`SEMESTER` varchar(5)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `vdetailjadwalkelas`
--
CREATE TABLE IF NOT EXISTS `vdetailjadwalkelas` (
`ID_JADWAL` varchar(20)
,`NIP1` varchar(20)
,`NIP2` varchar(20)
,`HARI` text
,`JAM_AWAL` time
,`JAM_AKHIR` time
,`NAMA_KELAS` varchar(20)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `vdetailjadwalruang`
--
CREATE TABLE IF NOT EXISTS `vdetailjadwalruang` (
`ID_JADWAL` varchar(20)
,`NIP1` varchar(20)
,`NIP2` varchar(20)
,`HARI` text
,`JAM_AWAL` time
,`JAM_AKHIR` time
,`NAMA_RUANG` varchar(10)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `vmahasiswa`
--
CREATE TABLE IF NOT EXISTS `vmahasiswa` (
`nim` varchar(15)
,`nama_mhs` varchar(25)
,`KODE_PRODI` varchar(10)
,`JURUSAN_FAK` varchar(20)
);
-- --------------------------------------------------------

--
-- Structure for view `data_mhs`
--
DROP TABLE IF EXISTS `data_mhs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_mhs` AS select `n`.`nim` AS `nim`,`n`.`nama_mhs` AS `nama_mhs`,`k`.`NAMA_KELAS` AS `nama_kelas` from (`mahasiswa` `n` join `kelas` `k` on((`n`.`nim` = `k`.`ID_KELAS`)));

-- --------------------------------------------------------

--
-- Structure for view `vdetailjadwal`
--
DROP TABLE IF EXISTS `vdetailjadwal`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vdetailjadwal` AS select `j`.`ID_JADWAL` AS `ID_JADWAL`,`j`.`NIP1` AS `NIP1`,`j`.`NIP2` AS `NIP2`,`j`.`HARI` AS `HARI`,`j`.`JAM_AWAL` AS `JAM_AWAL`,`j`.`JAM_AKHIR` AS `JAM_AKHIR`,`mk`.`NAMA_MATKUL` AS `NAMA_MATKUL`,`mk`.`SKS` AS `SKS`,`mk`.`SEMESTER` AS `SEMESTER` from (`jadwal` `j` join `mata_kuliah` `mk`) where (`j`.`KODE_MATKUL` = `mk`.`KODE_MATKUL`);

-- --------------------------------------------------------

--
-- Structure for view `vdetailjadwalkelas`
--
DROP TABLE IF EXISTS `vdetailjadwalkelas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vdetailjadwalkelas` AS select `j`.`ID_JADWAL` AS `ID_JADWAL`,`j`.`NIP1` AS `NIP1`,`j`.`NIP2` AS `NIP2`,`j`.`HARI` AS `HARI`,`j`.`JAM_AWAL` AS `JAM_AWAL`,`j`.`JAM_AKHIR` AS `JAM_AKHIR`,`k`.`NAMA_KELAS` AS `NAMA_KELAS` from (`jadwal` `j` join `kelas` `k`) where (`j`.`ID_KELAS` = `k`.`ID_KELAS`);

-- --------------------------------------------------------

--
-- Structure for view `vdetailjadwalruang`
--
DROP TABLE IF EXISTS `vdetailjadwalruang`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vdetailjadwalruang` AS select `j`.`ID_JADWAL` AS `ID_JADWAL`,`j`.`NIP1` AS `NIP1`,`j`.`NIP2` AS `NIP2`,`j`.`HARI` AS `HARI`,`j`.`JAM_AWAL` AS `JAM_AWAL`,`j`.`JAM_AKHIR` AS `JAM_AKHIR`,`r`.`NAMA_RUANG` AS `NAMA_RUANG` from (`jadwal` `j` join `ruang` `r`) where (`j`.`KODE_RUANG` = `r`.`KODE_RUANG`);

-- --------------------------------------------------------

--
-- Structure for view `vmahasiswa`
--
DROP TABLE IF EXISTS `vmahasiswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vmahasiswa` AS select `m`.`nim` AS `nim`,`m`.`nama_mhs` AS `nama_mhs`,`p`.`KODE_PRODI` AS `KODE_PRODI`,`p`.`JURUSAN_FAK` AS `JURUSAN_FAK` from (`mahasiswa` `m` join `prodi` `p`) where (`m`.`KODE_PRODI` = `p`.`KODE_PRODI`);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
 ADD PRIMARY KEY (`NIP`), ADD UNIQUE KEY `DOSEN_PK` (`NIP`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
 ADD PRIMARY KEY (`ID_JADWAL`), ADD UNIQUE KEY `JADWAL_PK` (`ID_JADWAL`), ADD KEY `TERJADWAL_FK` (`NIP1`), ADD KEY `TERDAPAT_FK` (`ID_KELAS`), ADD KEY `MEMILIKI_FK` (`KODE_RUANG`), ADD KEY `MEMPUNYAI_FK` (`KODE_MATKUL`);

--
-- Indexes for table `jurnal`
--
ALTER TABLE `jurnal`
 ADD PRIMARY KEY (`ID_JURNAL`), ADD UNIQUE KEY `JURNAL_PK` (`ID_JURNAL`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
 ADD PRIMARY KEY (`ID_KELAS`), ADD UNIQUE KEY `KELAS_PK` (`ID_KELAS`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
 ADD PRIMARY KEY (`nim`), ADD UNIQUE KEY `MAHASISWA_PK` (`nim`), ADD KEY `PUNYA_FK` (`KODE_PRODI`), ADD KEY `BERADA_FK` (`ID_KELAS`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
 ADD PRIMARY KEY (`KODE_MATKUL`), ADD UNIQUE KEY `MATA_KULIAH_PK` (`KODE_MATKUL`);

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
 ADD PRIMARY KEY (`id_presensi`), ADD UNIQUE KEY `PRESENSI_PK` (`id_presensi`);

--
-- Indexes for table `presensi_siswa`
--
ALTER TABLE `presensi_siswa`
 ADD PRIMARY KEY (`id_presensi_siswa`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
 ADD PRIMARY KEY (`KODE_PRODI`), ADD UNIQUE KEY `PRODI_PK` (`KODE_PRODI`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
 ADD PRIMARY KEY (`KODE_RUANG`), ADD UNIQUE KEY `RUANG_PK` (`KODE_RUANG`);

--
-- Indexes for table `tata_usaha`
--
ALTER TABLE `tata_usaha`
 ADD PRIMARY KEY (`ID_TU`), ADD UNIQUE KEY `TATA_USAHA_PK` (`ID_TU`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `presensi_siswa`
--
ALTER TABLE `presensi_siswa`
MODIFY `id_presensi_siswa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
