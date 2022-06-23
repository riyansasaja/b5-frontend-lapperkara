-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 08:38 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
-- Table structure for table `laporan_perkara`
--

CREATE TABLE `laporan_perkara` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `laper_pdf` varchar(100) DEFAULT NULL,
  `laper_xls` varchar(100) DEFAULT NULL,
  `periode` varchar(20) DEFAULT NULL,
  `tgl_upload` date DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `comment` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rev_laporan_perkara`
--

CREATE TABLE `rev_laporan_perkara` (
  `id` int(11) NOT NULL,
  `laper_id` int(11) DEFAULT NULL,
  `tgl_terakhir_rev` date DEFAULT NULL,
  `rev_pdf` varchar(100) DEFAULT NULL,
  `rev_xls` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rev_triwulan_laporan`
--

CREATE TABLE `rev_triwulan_laporan` (
  `id` int(11) NOT NULL,
  `triwulan_id` int(11) DEFAULT NULL,
  `rev_keuangan_pdf` varchar(11) DEFAULT NULL,
  `rev_keuangan_xls` varchar(11) DEFAULT NULL,
  `rev_mejainformasi_pdf` varchar(11) DEFAULT NULL,
  `rev_mejainformasi_xls` varchar(11) DEFAULT NULL,
  `rev_pengaduan_pdf` varchar(11) DEFAULT NULL,
  `rev_pengaduan_xls` varchar(11) DEFAULT NULL,
  `tgl_rev_triwulan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rktriwulan_lap_perkara`
--

CREATE TABLE `rktriwulan_lap_perkara` (
  `id` int(11) NOT NULL,
  `rk_id` int(11) DEFAULT NULL,
  `rk_keuangan_pdf` varchar(100) DEFAULT NULL,
  `rk_keuangan_xls` varchar(100) DEFAULT NULL,
  `rk_mejainformasi_pdf` varchar(100) DEFAULT NULL,
  `rk_mejainformasi_xls` varchar(100) DEFAULT NULL,
  `rk_pengaduan_pdf` varchar(100) DEFAULT NULL,
  `rk_pengaduan_xls` varchar(100) DEFAULT NULL,
  `rk_penilaianbanding_pdf` varchar(100) DEFAULT NULL,
  `rk_penilaianbanding_xls` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rk_lap_perkara`
--

CREATE TABLE `rk_lap_perkara` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `bulan` varchar(20) DEFAULT NULL,
  `rk_pdf` varchar(100) DEFAULT NULL,
  `rk_xls` varchar(100) DEFAULT NULL,
  `tgl_upload` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `triwulan_lap_perkara`
--

CREATE TABLE `triwulan_lap_perkara` (
  `id` int(11) NOT NULL,
  `laper_id` int(11) DEFAULT NULL,
  `lap_keuangan_pdf` varchar(100) DEFAULT NULL,
  `lap_keuangan_xls` varchar(100) DEFAULT NULL,
  `lap_mejainformasi_pdf` varchar(100) DEFAULT NULL,
  `lap_mejainformasi_xls` varchar(100) DEFAULT NULL,
  `lap_pengaduan_pdf` varchar(100) DEFAULT NULL,
  `lap_pengaduan_xls` varchar(100) DEFAULT NULL,
  `tgl_upload` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(25, 'Riyan', 'riyanboyuhu@gmail.com', 'riyan', '$2y$10$zBqkwdXsGc5dNraCKR5ucepPHX5znT6UlGhIJM7dqv0rXbFzISLw6', 1, '', 1, NULL),
(26, 'Dedy', 'papah.dika@gmail.com', 'dedy', '$2y$10$kvHN/pCmOg27OaahgAmrb.1d0leqCuHxUOgYjx.Rz1y8/3s25/Zr6', 1, '', 1, NULL),
(28, ' Drs.H. Muhamad Camuda, M.H.', '', 'ht-camuda', '$2y$10$oFjGVOMKpRFLb05R/QV5WuaSQihQb.iiyhEa/AYeaV9WWda97zYKO', 3, '', 1, NULL),
(29, 'Dr. H. Barmawi, M.H.', '', 'ht-barmawi', '$2y$10$OH7hcK0u64ACNdWhjMsCFeK60b/7lOQNrrL2WohYd.b/ABSwDwnAW', 3, '', 1, NULL),
(30, 'Drs. Zainal Aripin, S.H.,M.Hum.', '', 'ht-zainal', '$2y$10$Whp2JFKwyPwlHcQjmK.9u.bX/mpRNOKrXVxyy/GjXkuYy4WS22sAu', 3, '', 1, NULL),
(31, ' Drs. H. Wachid Ridwan, M.H.', '', 'ht-wachid', '$2y$10$oPHSMZQSH3kmnanurlFjKeR/5T0CQ.M1pTd5ktRlarcMVKRDRjLFa', 3, '', 1, NULL),
(32, 'Drs. Faizal Kamil,S.H.,M.H.', '', 'ht-faizal', '$2y$10$6Rb2U0acG23hoZoahMFUfuS/.h0Y2VSLQdLEE9KSOal2FGFhkpmpe', 3, '', 1, NULL),
(34, 'Iskandar Paputungan', 'iskandar@.com', 'ht-iskandar', '$2y$10$i8Jgi54G1Op9620XgoOcsOeYSC9EvFWJjCwMKs./lu361yc.7hyz6', 3, '', 1, NULL),
(35, 'Damsir', 'damsir@gmail.com', 'wk-damsir', '$2y$10$FJE03Bkzei.azZGZm/9PSO6cifuFVINWQ8t6CCsbjoMVBXrjRIQ4e', 3, '', 1, NULL),
(36, 'Pengadilan Agama Percobaan', '', 'pa-percobaan', '$2y$10$JPTNRHK/FEP0akWoVeoXUeELQdfZYrMkFg2YwX2EBSCp8rAwF4rjy', 2, 'PA.Per', 1, NULL),
(37, 'Hasbiah', '', 'pm-hasbiah', '$2y$10$0zIjxIJCI9ITIKDSJCUXqe8Y9GJMxFetU.LLOyL3/XmvktXiCqvD6', 4, '', 1, NULL),
(38, 'Hakim Percobaan', '', 'ht-percobaan', '$2y$10$yN4U93XVthSP9j4.g/mocOR36k6Chvlm93eJZGresXUFRx2VTiNwi', 3, '', 1, NULL),
(39, 'Bambang Suroso', '', 'pp-bambang', '$2y$10$teMlwxqq4uWcH6epgK21teqpqNvVx./.Ry5eugltGQyfvKJ5db4LC', 5, '', 1, NULL),
(40, 'Dra.Hj.Sa\'i Sumaila', '', 'pp-sai', '$2y$10$5VjXU0.3/meWjLSObwx4iOC5jqtHTq56rPtRnog.jn1cPsG8rKNpW', 5, '', 1, NULL),
(41, 'Musa Antu, S.H.', '', 'pp-musa', '$2y$10$IJKUdS58DCtoIL42enDqYudohdUyzjoAiHyMlAkNOnfuru8LkAqJC', 5, '', 1, NULL),
(42, 'Hj. Rusna Poli, S.H., M.H.', '', 'pp-rusna', '$2y$10$dxQFHOFaB7rZyrXMf2p.d.jXNjFGEFL2aURggzwNdYc5H/rKfNA/q', 5, '', 1, NULL),
(43, ' Masita Mayang, S.Ag.', '', 'pp-masita', '$2y$10$xsyRCZ7YDQ98AWEYsM.xbuldyaHvyFlocPi1gyFX5CnQ1CRdlP25e', 5, '', 1, NULL),
(44, 'Rosna Ali, S.Ag.', '', 'pp-rosna', '$2y$10$EdTrXbcCGDko54Q64WiSbOncXHkgRZxduHqyQszlBDtvMn8VBnntO', 5, '', 1, NULL),
(45, 'Drs. Abdul Haris Makaminan', '', 'pp-haris', '$2y$10$CpqojFYJbtcfWeUWwCodz.F/sGXFPtZ.T1LetIFeayDs3iEqnzYfa', 5, '', 1, NULL),
(46, 'Drs. H. DAMSIR, S.H., M.H.', 'damsir.md@gmail.com', 'Damsir', '$2y$10$I7Uh/QnkSru0ie9ts0blqu0zyTLAh1fvOe9SR9DMCT4HQYwSBDsdm', 3, '', 1, NULL),
(47, 'naja', '', 'st-naja', '$2y$10$BQyz2mPttNfhsatZVm4QbevO397HMm0ld2HSvvCzcaO630uXxssCC', 1, '', 1, NULL);

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan_perkara`
--
ALTER TABLE `laporan_perkara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rev_laporan_perkara`
--
ALTER TABLE `rev_laporan_perkara`
  ADD PRIMARY KEY (`id`),
  ADD KEY `laper_id` (`laper_id`);

--
-- Indexes for table `rev_triwulan_laporan`
--
ALTER TABLE `rev_triwulan_laporan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `triwulan_id` (`triwulan_id`);

--
-- Indexes for table `rktriwulan_lap_perkara`
--
ALTER TABLE `rktriwulan_lap_perkara`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rk_id` (`rk_id`);

--
-- Indexes for table `rk_lap_perkara`
--
ALTER TABLE `rk_lap_perkara`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `triwulan_lap_perkara`
--
ALTER TABLE `triwulan_lap_perkara`
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
-- AUTO_INCREMENT for table `laporan_perkara`
--
ALTER TABLE `laporan_perkara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rev_laporan_perkara`
--
ALTER TABLE `rev_laporan_perkara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rev_triwulan_laporan`
--
ALTER TABLE `rev_triwulan_laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rktriwulan_lap_perkara`
--
ALTER TABLE `rktriwulan_lap_perkara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rk_lap_perkara`
--
ALTER TABLE `rk_lap_perkara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `triwulan_lap_perkara`
--
ALTER TABLE `triwulan_lap_perkara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rev_laporan_perkara`
--
ALTER TABLE `rev_laporan_perkara`
  ADD CONSTRAINT `rev_laporan_perkara_ibfk_1` FOREIGN KEY (`laper_id`) REFERENCES `laporan_perkara` (`id`);

--
-- Constraints for table `rev_triwulan_laporan`
--
ALTER TABLE `rev_triwulan_laporan`
  ADD CONSTRAINT `rev_triwulan_laporan_ibfk_1` FOREIGN KEY (`triwulan_id`) REFERENCES `triwulan_lap_perkara` (`id`);

--
-- Constraints for table `rktriwulan_lap_perkara`
--
ALTER TABLE `rktriwulan_lap_perkara`
  ADD CONSTRAINT `rktriwulan_lap_perkara_ibfk_1` FOREIGN KEY (`rk_id`) REFERENCES `rk_lap_perkara` (`id`);

--
-- Constraints for table `rk_lap_perkara`
--
ALTER TABLE `rk_lap_perkara`
  ADD CONSTRAINT `rk_lap_perkara_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `triwulan_lap_perkara`
--
ALTER TABLE `triwulan_lap_perkara`
  ADD CONSTRAINT `triwulan_lap_perkara_ibfk_1` FOREIGN KEY (`laper_id`) REFERENCES `laporan_perkara` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
