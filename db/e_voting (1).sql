-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 01:12 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `ev_kandidat`
--

CREATE TABLE `ev_kandidat` (
  `kandidat_id` int(11) NOT NULL,
  `kandidat_nama` varchar(128) NOT NULL,
  `kandidat_visi` text NOT NULL,
  `kandidat_misi` text NOT NULL,
  `kandidat_foto` varchar(255) NOT NULL,
  `kandidat_aktif` int(10) NOT NULL,
  `kandidat_sesi_kode` varchar(255) NOT NULL,
  `kandidat_vote` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ev_kandidat`
--

INSERT INTO `ev_kandidat` (`kandidat_id`, `kandidat_nama`, `kandidat_visi`, `kandidat_misi`, `kandidat_foto`, `kandidat_aktif`, `kandidat_sesi_kode`, `kandidat_vote`) VALUES
(13, 'kandidat1', 'asd', 'asd', 'a_(2)4.jpg', 0, '1-26', '2'),
(14, 'kandidat2', 'asd', 'asd', 'g2.jpg', 0, '1-26', '');

-- --------------------------------------------------------

--
-- Table structure for table `ev_kandidat_sesi`
--

CREATE TABLE `ev_kandidat_sesi` (
  `id` int(11) NOT NULL,
  `ses_kandidat_id` varchar(255) NOT NULL,
  `ses_sesi_kode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ev_sesi`
--

CREATE TABLE `ev_sesi` (
  `sesi_id` int(11) NOT NULL,
  `sesi_nama` varchar(128) NOT NULL,
  `sesi_status` varchar(128) NOT NULL,
  `sesi_kode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ev_sesi`
--

INSERT INTO `ev_sesi` (`sesi_id`, `sesi_nama`, `sesi_status`, `sesi_kode`) VALUES
(2, 's', '0', '1-36'),
(3, 'pemilihan ketua', '1', '1-26'),
(4, 'pemilihan bendahara', '1', '2-71'),
(5, 'pemilihan sekretaris', '1', '3-93');

-- --------------------------------------------------------

--
-- Table structure for table `ev_user`
--

CREATE TABLE `ev_user` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ev_user`
--

INSERT INTO `ev_user` (`id`, `username`, `nama`, `password`, `role_id`) VALUES
(3, 'test1', '', '$2y$10$kd8q9604Glb4FaUgs4b5mO1AvEzlLX/7KeYdKo0N4Q0A1kZ.y6/82', 0),
(4, 'admin2', 'test2', 'asdasdas', 1),
(10, 'pemilih1', 'pemilih 1', '$2y$10$ksgdWvJmKSg7TnOak.RgluS.wZhj1UWk/MXO.JGvxE84u7KXIA3jG', 1),
(11, 'pemilih2', 'pemilih 2', '$2y$10$Y8ZYDKzVX4eOXJWArImc1uToNyVxufOD83iheKSekLUsgKzx3YUkS', 1),
(12, 'pemilih3', 'pemilih 3', '$2y$10$Ok/O4KGn67Y5GapjH2uz1uNS0UyGO3Mu1X8dEg.I6Z2ong1paBlUW', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ev_user_role`
--

CREATE TABLE `ev_user_role` (
  `id` int(11) NOT NULL,
  `role_id` int(10) NOT NULL,
  `role_name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ev_user_role`
--

INSERT INTO `ev_user_role` (`id`, `role_id`, `role_name`) VALUES
(1, 0, 'administrator'),
(2, 1, 'pemilih');

-- --------------------------------------------------------

--
-- Table structure for table `ev_vote`
--

CREATE TABLE `ev_vote` (
  `vote_id` int(11) NOT NULL,
  `vote_user_id` varchar(255) NOT NULL,
  `vote_kandidat_id` varchar(255) NOT NULL,
  `vote_sesi_kode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ev_vote`
--

INSERT INTO `ev_vote` (`vote_id`, `vote_user_id`, `vote_kandidat_id`, `vote_sesi_kode`) VALUES
(9, '10', '13', '1-26'),
(10, '10', '13', '1-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ev_kandidat`
--
ALTER TABLE `ev_kandidat`
  ADD PRIMARY KEY (`kandidat_id`);

--
-- Indexes for table `ev_kandidat_sesi`
--
ALTER TABLE `ev_kandidat_sesi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ev_sesi`
--
ALTER TABLE `ev_sesi`
  ADD PRIMARY KEY (`sesi_id`);

--
-- Indexes for table `ev_user`
--
ALTER TABLE `ev_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ev_user_role`
--
ALTER TABLE `ev_user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ev_vote`
--
ALTER TABLE `ev_vote`
  ADD PRIMARY KEY (`vote_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ev_kandidat`
--
ALTER TABLE `ev_kandidat`
  MODIFY `kandidat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ev_kandidat_sesi`
--
ALTER TABLE `ev_kandidat_sesi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ev_sesi`
--
ALTER TABLE `ev_sesi`
  MODIFY `sesi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ev_user`
--
ALTER TABLE `ev_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ev_user_role`
--
ALTER TABLE `ev_user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ev_vote`
--
ALTER TABLE `ev_vote`
  MODIFY `vote_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
