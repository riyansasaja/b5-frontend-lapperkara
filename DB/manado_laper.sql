-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2022 at 08:47 AM
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
-- Table structure for table `laporan_perkara`
--

CREATE TABLE `laporan_perkara` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `periode` varchar(20) DEFAULT NULL,
  `laper_pdf` varchar(100) DEFAULT NULL,
  `laper_xls` varchar(100) DEFAULT NULL,
  `tgl_upload` date DEFAULT NULL,
  `status` varchar(250) DEFAULT NULL,
  `comment` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan_perkara`
--

INSERT INTO `laporan_perkara` (`id`, `id_user`, `periode`, `laper_pdf`, `laper_xls`, `tgl_upload`, `status`, `comment`) VALUES
(1, 3, '2022-06', 'IKM_IPK_TERBARU2.pdf', 'REGISTER_PONEK_VK1.xlsx', '2022-06-17', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `revisi_laporan`
--

CREATE TABLE `revisi_laporan` (
  `id` int(11) NOT NULL,
  `laper_id` int(11) DEFAULT NULL,
  `tgl_terakhir_rev` date DEFAULT NULL,
  `rev_pdf` varchar(250) DEFAULT NULL,
  `rev_xls` varchar(250) DEFAULT NULL
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
(37, 'Hasbiah', '', 'pm-hasbiah', '$2y$10$0zIjxIJCI9ITIKDSJCUXqe8Y9GJMxFetU.LLOyL3/XmvktXiCqvD6', 4, '', 1, NULL),
(38, 'Hakim Percobaan', '', 'ht-percobaan', '$2y$10$yN4U93XVthSP9j4.g/mocOR36k6Chvlm93eJZGresXUFRx2VTiNwi', 3, '', 1, NULL),
(39, 'Bambang Suroso', '', 'pp-bambang', '$2y$10$uAhZZTwlmLOfsx0mPVYjzOQVJeWcX2oMbfzdqj7a/v7yDwMOtS02e', 5, '', 1, NULL),
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan_perkara`
--
ALTER TABLE `laporan_perkara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `revisi_laporan`
--
ALTER TABLE `revisi_laporan`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `revisi_laporan`
--
ALTER TABLE `revisi_laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
