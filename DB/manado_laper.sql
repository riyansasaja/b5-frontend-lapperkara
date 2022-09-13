-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2022 at 04:28 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manado_laper`
--

-- --------------------------------------------------------

--
-- Table structure for table `catatan_laporan`
--

CREATE TABLE `catatan_laporan` (
  `id` int(11) NOT NULL,
  `laper_id` int(11) DEFAULT NULL,
  `id_triwulan` int(11) DEFAULT NULL,
  `tgl_catatan` datetime DEFAULT NULL,
  `catatan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catatan_laporan`
--

INSERT INTO `catatan_laporan` (`id`, `laper_id`, `id_triwulan`, `tgl_catatan`, `catatan`) VALUES
(1, NULL, 3, '2022-08-16 08:43:43', 'tes doang'),
(2, 1, NULL, '2022-08-16 08:43:43', 'tes juga'),
(3, NULL, 2, '2022-08-16 08:45:06', 'tes triwulan id 2'),
(4, 4, NULL, '2022-08-16 08:45:06', 'tes lagi'),
(5, 1, NULL, '2022-08-31 00:00:00', 'coba lagi ya'),
(8, NULL, 2, '2022-08-31 17:49:25', 'hhh'),
(10, NULL, 3, '2022-09-11 16:30:25', 'ehem'),
(11, NULL, 3, '2022-09-11 18:35:10', 'hayo'),
(12, NULL, 2, '2022-09-12 14:00:25', 'kurang 1 file');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_perkara`
--

CREATE TABLE `laporan_perkara` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `periode` varchar(20) DEFAULT NULL,
  `berkas_laporan` varchar(100) DEFAULT NULL,
  `laper_pdf` varchar(100) DEFAULT NULL,
  `laper_xls` varchar(100) DEFAULT NULL,
  `tgl_upload` date DEFAULT NULL,
  `tgl_terakhir_rev` date DEFAULT NULL,
  `status` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan_perkara`
--

INSERT INTO `laporan_perkara` (`id`, `id_user`, `periode`, `berkas_laporan`, `laper_pdf`, `laper_xls`, `tgl_upload`, `tgl_terakhir_rev`, `status`) VALUES
(1, 3, '2022-06', 'Lap Per 2022-06', 'IKM_IPK_TERBARU2.pdf', 'REGISTER_PONEK_VK1.zip', '2022-06-11', NULL, 'Revisi'),
(4, 2, '2022-07', 'Lap Per 2022-07', 'panduan_aplikasi_e-organisasi.pdf', 'REGISTER_PONEK_VK.xlsx', '2022-07-11', NULL, 'Validasi'),
(5, 3, '2022-08', 'Lap Per 2022-08', 'Surat_pernyataan_tidak_sedang_menjalani_pendidikan.pdf', 'REGISTER_PONEK_VK1_(4).xlsx', '2023-07-04', NULL, 'Validasi');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_triwulan`
--

CREATE TABLE `laporan_triwulan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `berkas_laporan` varchar(50) DEFAULT NULL,
  `periode_triwulan` varchar(20) DEFAULT NULL,
  `periode_tahun` varchar(20) DEFAULT NULL,
  `tgl_upload` date DEFAULT NULL,
  `tgl_terakhir_revisi` date DEFAULT NULL,
  `status_laporan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan_triwulan`
--

INSERT INTO `laporan_triwulan` (`id`, `id_user`, `berkas_laporan`, `periode_triwulan`, `periode_tahun`, `tgl_upload`, `tgl_terakhir_revisi`, `status_laporan`) VALUES
(3, 3, 'Triwulan I', '03', '2022', '2022-08-15', '2022-09-12', NULL),
(4, 3, 'Triwulan II', '06', '2023', '2022-08-07', NULL, 'Belum Validasi');

-- --------------------------------------------------------

--
-- Table structure for table `lap_tri_detail`
--

CREATE TABLE `lap_tri_detail` (
  `id` int(11) NOT NULL,
  `id_lap_tri` int(11) DEFAULT NULL,
  `nm_laporan` varchar(25) DEFAULT NULL,
  `tgl_kirim` date DEFAULT NULL,
  `lap_pdf` varchar(100) DEFAULT NULL,
  `lap_xls` varchar(100) DEFAULT NULL,
  `rev_pdf` varchar(100) DEFAULT NULL,
  `rev_xls` varchar(100) DEFAULT NULL,
  `tgl_revisi` date DEFAULT NULL,
  `status_validasi` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lap_tri_detail`
--

INSERT INTO `lap_tri_detail` (`id`, `id_lap_tri`, `nm_laporan`, `tgl_kirim`, `lap_pdf`, `lap_xls`, `rev_pdf`, `rev_xls`, `tgl_revisi`, `status_validasi`) VALUES
(2, 3, 'Meja Informasi', '2022-08-15', 'Data_Absen_Harian_-_12_Aug_2022_202208151.pdf', 'REGISTER_PONEK_VK11.xlsx', '34852585-95cd-4b5e-943a-85eacbf64e75-June.pdf', 'Progress_Eksaminasi_(1).xlsx', '2022-08-16', 'Revisi'),
(3, 3, 'Keuangan', '2022-08-15', 'Data_Absen_Bulanan_-_July_2022_20220727.pdf', 'REGISTER_PONEK_VK12.xlsx', NULL, NULL, NULL, 'Validasi'),
(4, 3, 'Laporan Pengaduan', '2022-08-15', 'Daftar_Peserta_GOL_PROA_B3_2.pdf', 'REGISTER_PONEK_VK13.xlsx', NULL, NULL, NULL, 'Belum Validasi'),
(5, 4, 'Keuangan', '2022-08-16', 'april_2022.pdf', 'Progress_Eksaminasi_(1).xlsx', NULL, NULL, NULL, 'Belum Validasi'),
(6, 4, 'Meja Informasi', '2022-08-16', 'Sertifikat_Diklat.pdf', 'Progress_Eksaminasi_(1)1.xlsx', NULL, NULL, NULL, 'Belum Validasi');

--
-- Triggers `lap_tri_detail`
--
DELIMITER $$
CREATE TRIGGER `tgl_rev_triwulan` AFTER UPDATE ON `lap_tri_detail` FOR EACH ROW BEGIN
    update laporan_triwulan set tgl_terakhir_revisi = CURDATE() where id = new.id_lap_tri;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `rekap_laporan_perkara`
--

CREATE TABLE `rekap_laporan_perkara` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `periode` varchar(20) DEFAULT NULL,
  `rekap_pdf` varchar(100) DEFAULT NULL,
  `rekap_xls` varchar(100) DEFAULT NULL,
  `tgl_upload` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekap_laporan_perkara`
--

INSERT INTO `rekap_laporan_perkara` (`id`, `id_user`, `periode`, `rekap_pdf`, `rekap_xls`, `tgl_upload`) VALUES
(3, 1, '2022-01', 'panduan_aplikasi_e-organisasi1.pdf', 'REGISTER_PONEK_VK1_(4)2.xlsx', '2022-01-01'),
(5, 1, '2023-09', 'Honorer.pdf', 'Progress_Eksaminasi_(1).xlsx', '2023-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `rekap_triwulan`
--

CREATE TABLE `rekap_triwulan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `berkas_laporan` varchar(50) DEFAULT NULL,
  `periode_triwulan` varchar(20) DEFAULT NULL,
  `periode_tahun` varchar(20) DEFAULT NULL,
  `tgl_upload` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekap_triwulan`
--

INSERT INTO `rekap_triwulan` (`id`, `id_user`, `berkas_laporan`, `periode_triwulan`, `periode_tahun`, `tgl_upload`) VALUES
(2, 1, 'Triwulan I', '03', '2022', '2022-09-05'),
(3, 1, 'Triwulan II', '06', '2023', '2022-09-06');

-- --------------------------------------------------------

--
-- Table structure for table `rekap_tri_detail`
--

CREATE TABLE `rekap_tri_detail` (
  `id` int(11) NOT NULL,
  `id_rekap_tri` int(11) DEFAULT NULL,
  `nm_laporan` varchar(25) DEFAULT NULL,
  `tgl_kirim` date DEFAULT NULL,
  `lap_pdf` varchar(100) DEFAULT NULL,
  `lap_xls` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekap_tri_detail`
--

INSERT INTO `rekap_tri_detail` (`id`, `id_rekap_tri`, `nm_laporan`, `tgl_kirim`, `lap_pdf`, `lap_xls`) VALUES
(2, 2, 'Keuangan', '2022-09-06', 'panduan_aplikasi_e-organisasi.pdf', 'REGISTER_PONEK_VK1_(4).xlsx'),
(3, 2, 'Meja Informasi', '2022-09-06', 'Honorer.pdf', 'Progress_Eksaminasi_(1).xlsx'),
(4, 2, 'Pengaduan', NULL, NULL, NULL),
(5, 2, 'Penilaian Banding', '2022-09-06', NULL, NULL),
(6, 3, 'Keuangan', '2022-09-06', 'Daftar_Peserta_GOL_PROA_B3_2.pdf', 'REGISTER_PONEK_VK1.xlsx'),
(7, 3, 'Meja Informasi', '2022-09-06', NULL, NULL),
(8, 3, 'Pengaduan', '2022-09-06', 'Data_Absen_Harian_-_27_Jul_2022_20220727.pdf', 'REGISTER_PONEK_VK1_(4).xlsx'),
(9, 3, 'Penilaian Banding', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `revisi_laporan`
--

CREATE TABLE `revisi_laporan` (
  `id` int(11) NOT NULL,
  `laper_id` int(11) DEFAULT NULL,
  `rev_pdf` varchar(250) DEFAULT NULL,
  `rev_xls` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `revisi_laporan`
--

INSERT INTO `revisi_laporan` (`id`, `laper_id`, `rev_pdf`, `rev_xls`) VALUES
(1, 1, 'Surat_pernyataan_tidak_sedang_menjalani_pendidikan1.pdf', 'REGISTER_PONEK_VK1_(1).xlsx'),
(5, 5, 'Daftar_Peserta_GOL_PROA_B3_2.pdf', 'Progress_Eksaminasi_(1).xlsx');

--
-- Triggers `revisi_laporan`
--
DELIMITER $$
CREATE TRIGGER `tgl_rev` AFTER INSERT ON `revisi_laporan` FOR EACH ROW BEGIN
    update laporan_perkara set tgl_terakhir_rev = CURDATE() where id = new.laper_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `kode_pa` varchar(20) NOT NULL,
  `is_active` int(11) DEFAULT NULL,
  `data_created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `username`, `password`, `role_id`, `kode_pa`, `is_active`, `data_created`) VALUES
(1, 'Pengadilan Tinggi Agama Manado', '', 'pta-manado', '$2y$10$zKNxC63heZCgpGadi9mWVO9.zBp5FcUE/mjdJjMrDBj/z/6IctVue', 1, 'PTA.Mdo', 1, '2021-05-27'),
(2, 'Pengadilan Agama Manado', 'pa.manado307225@gmail.com', 'pa-manado', '$2y$10$XgCSCiSV50OVnB0kCNAgFeCA7JQuKxD5HuvJ/yJGgmjdS8TXsbqVy', 2, 'PA.Mdo', 1, '2021-05-27'),
(3, 'Pengadilan Agama Tutuyan', '', 'pa-tutuyan', '$2y$10$zKNxC63heZCgpGadi9mWVO9.zBp5FcUE/mjdJjMrDBj/z/6IctVue', 2, 'PA.Tty', 1, '2021-05-27'),
(4, 'Pengadilan Agama Bolaang Uki', 'pa.bolaanguki@gmail.com', 'pa-blu', '$2y$10$lgR9YMOK/wxME3ZgJNpon.biuAgjzwvL6TQxJ8YjfGCZdqDYarvLm', 2, 'PA.Blu', 1, '2021-05-27'),
(5, 'Pengadilan Agama Tondano', 'pa.tondano@gmail.com', 'pa-tondano', '$2y$10$Jzl9b95ASJHkehkK6wrTeOBhDXPZ64A.dT3NMWsPOw3PdcsnOPFlS', 2, 'PA.Tdo', 1, '2021-05-27'),
(6, 'Pengadilan Agama Lolak', 'pa.lolak.sulut@gmail.com', 'pa-lolak', '$2y$10$hhI.UlPPjUlXuhfGGVBIpeF8bz9ls.wcC3MxUWzy4EF.1uXBZjSfe', 2, 'PA.Llk', 1, '2021-05-27'),
(7, 'Pengadilan Agama Boroko', '', 'pa-boroko', '$2y$10$zKNxC63heZCgpGadi9mWVO9.zBp5FcUE/mjdJjMrDBj/z/6IctVue', 2, 'PA.Brk', 1, '2021-05-27'),
(8, 'Pengadilan Agama Amurang', '', 'pa-amurang', '$2y$10$MlJvFdjkTcwx0V/AFRGdSe5Ys4Ky/pgQeUXSRPxfFKiA5CyrDGoGe', 2, 'PA.Amg', 1, '2021-05-27'),
(9, 'Pengadilan Agama Kotamobagu', 'pa.kotamobagu@gmail.com', 'pa-kotamobagu', '$2y$10$QrSYnuMTBbsJb3pGPfr5VeT5XoBAhQ36GJzJ8c6pXSNstGoKtz8Ei', 2, 'PA.Ktg', 1, '2021-05-27'),
(10, 'Pengadilan Agama Tahuna', 'patahuna3@gmail.com', 'pa-tahuna', '$2y$10$R80xcFUpZPXovPrrZuNpi.Yz5O.w3WxIz4NP6iIri0XtQvNLveB76', 2, 'PA.Thn', 1, '2021-05-27'),
(11, 'Pengadilan Agama Bitung', '', 'pa-bitung', '$2y$10$zKNxC63heZCgpGadi9mWVO9.zBp5FcUE/mjdJjMrDBj/z/6IctVue', 2, 'PA.Btg', 1, '2021-05-27'),
(22, 'Drs. H. Abdul Hakim, M.HI.', '', 'ht-hakim', '$2y$10$Iqkt35Uui8ZrhmrPJPwlVOKawxfckxMdcRyQ/ybhU1VqHbsWzARR.', 3, '', 1, NULL),
(25, 'Riyan', 'riyanboyuhu@gmail.com', 'riyan', '$2y$10$AuEU9Y6Fovtx7cqa78YHse7jWdjP0qIWABfgR6mKCZ3UbvQMewcym', 3, '', 1, NULL),
(26, 'Dedy', 'papah.dika@gmail.com', 'dedy', '$2y$10$kvHN/pCmOg27OaahgAmrb.1d0leqCuHxUOgYjx.Rz1y8/3s25/Zr6', 1, '', 1, NULL),
(28, ' Drs.H. Muhamad Camuda, M.H.', '', 'ht-camuda', '$2y$10$oFjGVOMKpRFLb05R/QV5WuaSQihQb.iiyhEa/AYeaV9WWda97zYKO', 3, '', 1, NULL),
(29, 'Dr. H. Barmawi, M.H.', '', 'ht-barmawi', '$2y$10$OH7hcK0u64ACNdWhjMsCFeK60b/7lOQNrrL2WohYd.b/ABSwDwnAW', 3, '', 1, NULL),
(30, 'Drs. Zainal Aripin, S.H.,M.Hum.', '', 'ht-zainal', '$2y$10$Whp2JFKwyPwlHcQjmK.9u.bX/mpRNOKrXVxyy/GjXkuYy4WS22sAu', 3, '', 1, NULL),
(31, ' Drs. H. Wachid Ridwan, M.H.', '', 'ht-wachid', '$2y$10$oPHSMZQSH3kmnanurlFjKeR/5T0CQ.M1pTd5ktRlarcMVKRDRjLFa', 3, '', 1, NULL),
(32, 'Drs. Faizal Kamil,S.H.,M.H.', '', 'ht-faizal', '$2y$10$6Rb2U0acG23hoZoahMFUfuS/.h0Y2VSLQdLEE9KSOal2FGFhkpmpe', 3, '', 1, NULL),
(34, 'Iskandar Paputungan', 'iskandar@.com', 'ht-iskandar', '$2y$10$i8Jgi54G1Op9620XgoOcsOeYSC9EvFWJjCwMKs./lu361yc.7hyz6', 3, '', 1, NULL),
(35, 'Muhammad Alwi', 'alwi@gmail.com', 'ht-alwi', '$2y$10$ykJ7H3kTChw1UeXDlXP4Y.aGoRavkP.iRcKAaWZlSxT7YIG7d5E1C', 3, '', 1, NULL),
(36, 'Pengadilan Agama Percobaan', '', 'pa-percobaan', '$2y$10$JPTNRHK/FEP0akWoVeoXUeELQdfZYrMkFg2YwX2EBSCp8rAwF4rjy', 2, 'PA.Per', 1, NULL),
(37, 'Hasbiah', '', 'pm-hasbiah', '$2y$10$zKNxC63heZCgpGadi9mWVO9.zBp5FcUE/mjdJjMrDBj/z/6IctVue', 4, '', 1, NULL),
(38, 'Hakim Percobaan', '', 'ht-percobaan', '$2y$10$yN4U93XVthSP9j4.g/mocOR36k6Chvlm93eJZGresXUFRx2VTiNwi', 3, '', 1, NULL),
(39, 'Bambang Suroso', '', 'pp-bambang', '$2y$10$zKNxC63heZCgpGadi9mWVO9.zBp5FcUE/mjdJjMrDBj/z/6IctVue', 5, '', 1, NULL),
(40, 'Musa Antu', '', 'pp-musa', 'pta123', 5, '', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `token` varchar(255) NOT NULL,
  `date_created` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_detail_triwulan`
-- (See below for the actual view)
--
CREATE TABLE `v_detail_triwulan` (
`id` int(11)
,`id_user` int(11)
,`berkas_laporan` varchar(50)
,`periode_triwulan` varchar(20)
,`periode_tahun` varchar(20)
,`tgl_upload` date
,`tgl_terakhir_revisi` date
,`status_laporan` varchar(30)
,`id_triwulan` int(11)
,`nm_laporan` varchar(25)
,`tgl_kirim` date
,`lap_pdf` varchar(100)
,`lap_xls` varchar(100)
,`rev_pdf` varchar(100)
,`rev_xls` varchar(100)
,`tgl_revisi` date
,`status_validasi` varchar(25)
,`nama` varchar(50)
,`kode_pa` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_rekap_laporan`
-- (See below for the actual view)
--
CREATE TABLE `v_rekap_laporan` (
`id` int(11)
,`id_user` int(11)
,`periode` varchar(20)
,`rekap_pdf` varchar(100)
,`rekap_xls` varchar(100)
,`tgl_upload` date
,`nama` varchar(50)
,`kode_pa` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_rekap_triwulan`
-- (See below for the actual view)
--
CREATE TABLE `v_rekap_triwulan` (
`id` int(11)
,`id_user` int(11)
,`berkas_laporan` varchar(50)
,`periode_triwulan` varchar(20)
,`periode_tahun` varchar(20)
,`tgl_upload` date
,`id_triwulan` int(11)
,`nm_laporan` varchar(25)
,`tgl_kirim` date
,`lap_pdf` varchar(100)
,`lap_xls` varchar(100)
,`kode_pa` varchar(20)
,`nama` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_triwulan_laporan`
-- (See below for the actual view)
--
CREATE TABLE `v_triwulan_laporan` (
`id` int(11)
,`id_user` int(11)
,`berkas_laporan` varchar(50)
,`periode_triwulan` varchar(20)
,`periode_tahun` varchar(20)
,`tgl_upload` date
,`tgl_terakhir_revisi` date
,`status_laporan` varchar(30)
,`nama` varchar(50)
,`kode_pa` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_user_laporan`
-- (See below for the actual view)
--
CREATE TABLE `v_user_laporan` (
`id` int(11)
,`id_user` int(11)
,`periode` varchar(20)
,`berkas_laporan` varchar(100)
,`laper_pdf` varchar(100)
,`laper_xls` varchar(100)
,`tgl_upload` date
,`tgl_terakhir_rev` date
,`status` varchar(250)
,`user_id` int(11)
,`nama` varchar(50)
,`kode_pa` varchar(20)
);

-- --------------------------------------------------------

--
-- Structure for view `v_detail_triwulan`
--
DROP TABLE IF EXISTS `v_detail_triwulan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_detail_triwulan`  AS SELECT `laporan_triwulan`.`id` AS `id`, `laporan_triwulan`.`id_user` AS `id_user`, `laporan_triwulan`.`berkas_laporan` AS `berkas_laporan`, `laporan_triwulan`.`periode_triwulan` AS `periode_triwulan`, `laporan_triwulan`.`periode_tahun` AS `periode_tahun`, `laporan_triwulan`.`tgl_upload` AS `tgl_upload`, `laporan_triwulan`.`tgl_terakhir_revisi` AS `tgl_terakhir_revisi`, `laporan_triwulan`.`status_laporan` AS `status_laporan`, `lap_tri_detail`.`id` AS `id_triwulan`, `lap_tri_detail`.`nm_laporan` AS `nm_laporan`, `lap_tri_detail`.`tgl_kirim` AS `tgl_kirim`, `lap_tri_detail`.`lap_pdf` AS `lap_pdf`, `lap_tri_detail`.`lap_xls` AS `lap_xls`, `lap_tri_detail`.`rev_pdf` AS `rev_pdf`, `lap_tri_detail`.`rev_xls` AS `rev_xls`, `lap_tri_detail`.`tgl_revisi` AS `tgl_revisi`, `lap_tri_detail`.`status_validasi` AS `status_validasi`, `users`.`nama` AS `nama`, `users`.`kode_pa` AS `kode_pa` FROM ((`laporan_triwulan` join `lap_tri_detail` on(`lap_tri_detail`.`id_lap_tri` = `laporan_triwulan`.`id`)) join `users` on(`users`.`id` = `laporan_triwulan`.`id_user`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_rekap_laporan`
--
DROP TABLE IF EXISTS `v_rekap_laporan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_rekap_laporan`  AS SELECT `rekap_laporan_perkara`.`id` AS `id`, `rekap_laporan_perkara`.`id_user` AS `id_user`, `rekap_laporan_perkara`.`periode` AS `periode`, `rekap_laporan_perkara`.`rekap_pdf` AS `rekap_pdf`, `rekap_laporan_perkara`.`rekap_xls` AS `rekap_xls`, `rekap_laporan_perkara`.`tgl_upload` AS `tgl_upload`, `users`.`nama` AS `nama`, `users`.`kode_pa` AS `kode_pa` FROM (`rekap_laporan_perkara` join `users` on(`rekap_laporan_perkara`.`id_user` = `users`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_rekap_triwulan`
--
DROP TABLE IF EXISTS `v_rekap_triwulan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_rekap_triwulan`  AS SELECT `rekap_triwulan`.`id` AS `id`, `rekap_triwulan`.`id_user` AS `id_user`, `rekap_triwulan`.`berkas_laporan` AS `berkas_laporan`, `rekap_triwulan`.`periode_triwulan` AS `periode_triwulan`, `rekap_triwulan`.`periode_tahun` AS `periode_tahun`, `rekap_triwulan`.`tgl_upload` AS `tgl_upload`, `rekap_tri_detail`.`id` AS `id_triwulan`, `rekap_tri_detail`.`nm_laporan` AS `nm_laporan`, `rekap_tri_detail`.`tgl_kirim` AS `tgl_kirim`, `rekap_tri_detail`.`lap_pdf` AS `lap_pdf`, `rekap_tri_detail`.`lap_xls` AS `lap_xls`, `users`.`kode_pa` AS `kode_pa`, `users`.`nama` AS `nama` FROM ((`rekap_triwulan` join `rekap_tri_detail` on(`rekap_tri_detail`.`id_rekap_tri` = `rekap_triwulan`.`id`)) join `users` on(`users`.`id` = `rekap_triwulan`.`id_user`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_triwulan_laporan`
--
DROP TABLE IF EXISTS `v_triwulan_laporan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_triwulan_laporan`  AS SELECT `laporan_triwulan`.`id` AS `id`, `laporan_triwulan`.`id_user` AS `id_user`, `laporan_triwulan`.`berkas_laporan` AS `berkas_laporan`, `laporan_triwulan`.`periode_triwulan` AS `periode_triwulan`, `laporan_triwulan`.`periode_tahun` AS `periode_tahun`, `laporan_triwulan`.`tgl_upload` AS `tgl_upload`, `laporan_triwulan`.`tgl_terakhir_revisi` AS `tgl_terakhir_revisi`, `laporan_triwulan`.`status_laporan` AS `status_laporan`, `users`.`nama` AS `nama`, `users`.`kode_pa` AS `kode_pa` FROM (`laporan_triwulan` join `users` on(`laporan_triwulan`.`id_user` = `users`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_user_laporan`
--
DROP TABLE IF EXISTS `v_user_laporan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_user_laporan`  AS SELECT `laporan_perkara`.`id` AS `id`, `laporan_perkara`.`id_user` AS `id_user`, `laporan_perkara`.`periode` AS `periode`, `laporan_perkara`.`berkas_laporan` AS `berkas_laporan`, `laporan_perkara`.`laper_pdf` AS `laper_pdf`, `laporan_perkara`.`laper_xls` AS `laper_xls`, `laporan_perkara`.`tgl_upload` AS `tgl_upload`, `laporan_perkara`.`tgl_terakhir_rev` AS `tgl_terakhir_rev`, `laporan_perkara`.`status` AS `status`, `users`.`id` AS `user_id`, `users`.`nama` AS `nama`, `users`.`kode_pa` AS `kode_pa` FROM (`laporan_perkara` join `users` on(`laporan_perkara`.`id_user` = `users`.`id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catatan_laporan`
--
ALTER TABLE `catatan_laporan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `laper_id` (`laper_id`),
  ADD KEY `triwulan_id` (`id_triwulan`);

--
-- Indexes for table `laporan_perkara`
--
ALTER TABLE `laporan_perkara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan_triwulan`
--
ALTER TABLE `laporan_triwulan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `lap_tri_detail`
--
ALTER TABLE `lap_tri_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_lap_tri` (`id_lap_tri`);

--
-- Indexes for table `rekap_laporan_perkara`
--
ALTER TABLE `rekap_laporan_perkara`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `rekap_triwulan`
--
ALTER TABLE `rekap_triwulan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `rekap_tri_detail`
--
ALTER TABLE `rekap_tri_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rekap_tri` (`id_rekap_tri`);

--
-- Indexes for table `revisi_laporan`
--
ALTER TABLE `revisi_laporan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `laper_id` (`laper_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catatan_laporan`
--
ALTER TABLE `catatan_laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `laporan_perkara`
--
ALTER TABLE `laporan_perkara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `laporan_triwulan`
--
ALTER TABLE `laporan_triwulan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lap_tri_detail`
--
ALTER TABLE `lap_tri_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rekap_laporan_perkara`
--
ALTER TABLE `rekap_laporan_perkara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rekap_triwulan`
--
ALTER TABLE `rekap_triwulan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rekap_tri_detail`
--
ALTER TABLE `rekap_tri_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `revisi_laporan`
--
ALTER TABLE `revisi_laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `catatan_laporan`
--
ALTER TABLE `catatan_laporan`
  ADD CONSTRAINT `catatan_laporan_ibfk_1` FOREIGN KEY (`laper_id`) REFERENCES `laporan_perkara` (`id`),
  ADD CONSTRAINT `catatan_laporan_ibfk_2` FOREIGN KEY (`id_triwulan`) REFERENCES `lap_tri_detail` (`id`);

--
-- Constraints for table `laporan_triwulan`
--
ALTER TABLE `laporan_triwulan`
  ADD CONSTRAINT `laporan_triwulan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `lap_tri_detail`
--
ALTER TABLE `lap_tri_detail`
  ADD CONSTRAINT `lap_tri_detail_ibfk_1` FOREIGN KEY (`id_lap_tri`) REFERENCES `laporan_triwulan` (`id`);

--
-- Constraints for table `rekap_laporan_perkara`
--
ALTER TABLE `rekap_laporan_perkara`
  ADD CONSTRAINT `rekap_laporan_perkara_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `rekap_triwulan`
--
ALTER TABLE `rekap_triwulan`
  ADD CONSTRAINT `rekap_triwulan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `rekap_tri_detail`
--
ALTER TABLE `rekap_tri_detail`
  ADD CONSTRAINT `rekap_tri_detail_ibfk_1` FOREIGN KEY (`id_rekap_tri`) REFERENCES `rekap_triwulan` (`id`);

--
-- Constraints for table `revisi_laporan`
--
ALTER TABLE `revisi_laporan`
  ADD CONSTRAINT `revisi_laporan_ibfk_1` FOREIGN KEY (`laper_id`) REFERENCES `laporan_perkara` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
