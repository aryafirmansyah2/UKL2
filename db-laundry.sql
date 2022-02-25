-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2022 at 12:37 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_transaksi`
--

CREATE TABLE `tb_detail_transaksi` (
  `id` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `qty` double NOT NULL,
  `keterangan` text NOT NULL,
  `total_harga` int(12) NOT NULL,
  `total_bayar` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_detail_transaksi`
--

INSERT INTO `tb_detail_transaksi` (`id`, `id_transaksi`, `id_paket`, `qty`, `keterangan`, `total_harga`, `total_bayar`) VALUES
(18, 21, 7, 2, '', 20000, 60000),
(19, 22, 8, 4, '', 60000, 70000),
(20, 23, 9, 2, '', 40000, 50000),
(21, 24, 11, 4, '', 60000, 60000),
(22, 25, 8, 2, '', 30000, 60000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

CREATE TABLE `tb_member` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `tlp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`id`, `nama`, `alamat`, `jenis_kelamin`, `tlp`) VALUES
(14, 'fawas', 'malang', 'L', '082134567825'),
(15, 'agunk', 'jombang jawa timur', 'L', '08213456726384'),
(16, 'baji', 'kediri jawa timur ', 'L', '0823637467382');

-- --------------------------------------------------------

--
-- Table structure for table `tb_outlet`
--

CREATE TABLE `tb_outlet` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `tlp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_outlet`
--

INSERT INTO `tb_outlet` (`id`, `nama`, `alamat`, `tlp`) VALUES
(9, 'clean', 'jombang jawa timur 2', '0821342092648'),
(10, 'vacum', 'malang jawa timur', '0821324567892'),
(11, 'resik', 'kediri jawa timur', '0821456782456');

-- --------------------------------------------------------

--
-- Table structure for table `tb_paket`
--

CREATE TABLE `tb_paket` (
  `id` int(11) NOT NULL,
  `id_outlet` int(11) NOT NULL,
  `jenis` enum('kiloan','selimut','bed_cover','kaos','lain') NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_paket`
--

INSERT INTO `tb_paket` (`id`, `id_outlet`, `jenis`, `nama_paket`, `harga`) VALUES
(7, 9, 'kiloan', 'bronze', 10000),
(8, 9, 'kiloan', 'silver', 15000),
(9, 9, 'kiloan', 'gold', 20000),
(10, 10, 'kiloan', 'bronze', 10000),
(11, 10, 'kiloan', 'silver', 15000),
(12, 10, 'kiloan', 'gold', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` int(11) NOT NULL,
  `id_outlet` int(11) NOT NULL,
  `kode_invoice` varchar(100) NOT NULL,
  `id_member` int(11) NOT NULL,
  `tgl` datetime NOT NULL,
  `batas_waktu` datetime NOT NULL,
  `tgl_bayar` datetime NOT NULL,
  `biaya_tambahan` int(11) NOT NULL,
  `diskon` double NOT NULL,
  `pajak` int(11) NOT NULL,
  `status` enum('baru','proses','selesai','diambil') NOT NULL,
  `dibayar` enum('dibayar','belum_dibayar') NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id`, `id_outlet`, `kode_invoice`, `id_member`, `tgl`, `batas_waktu`, `tgl_bayar`, `biaya_tambahan`, `diskon`, `pajak`, `status`, `dibayar`, `id_user`) VALUES
(18, 9, 'CCIAN202201285338', 14, '2022-01-28 02:38:53', '2022-02-04 12:00:00', '0000-00-00 00:00:00', 0, 0, 0, 'baru', 'belum_dibayar', 14),
(19, 9, 'CCIAN202201280643', 15, '2022-01-28 02:43:06', '2022-02-04 12:00:00', '0000-00-00 00:00:00', 0, 0, 0, 'baru', 'belum_dibayar', 14),
(20, 9, 'CCIAN202201281545', 15, '2022-01-28 02:45:15', '2022-02-04 12:00:00', '0000-00-00 00:00:00', 0, 0, 0, 'baru', 'belum_dibayar', 14),
(21, 9, 'CCIAN202201280455', 15, '2022-01-28 02:55:04', '2022-02-04 12:00:00', '2022-02-03 02:32:19', 0, 0, 0, 'baru', 'dibayar', 14),
(22, 9, 'CCIAN202201283101', 14, '2022-01-28 03:01:31', '2022-02-04 12:00:00', '2022-02-03 02:38:20', 0, 0, 0, 'selesai', 'dibayar', 14),
(23, 9, 'CCIAN202201284301', 16, '2022-01-28 03:01:43', '2022-02-04 12:00:00', '2022-02-03 02:38:11', 0, 0, 0, 'baru', 'dibayar', 14),
(24, 10, 'CCIAN202202031655', 15, '2022-02-03 02:55:16', '2022-02-10 12:00:00', '2022-02-03 02:55:26', 0, 0, 0, 'baru', 'dibayar', 20),
(25, 9, 'CCIAN202202034538', 15, '2022-02-03 03:38:45', '2022-02-10 12:00:00', '2022-02-03 03:39:04', 0, 0, 0, 'baru', 'dibayar', 15);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `id_outlet` int(11) NOT NULL,
  `role` enum('admin','kasir','owner') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `id_outlet`, `role`) VALUES
(14, 'arya', 'admin', '21232f297a57a5a743894a0e4a801fc3', 9, 'admin'),
(15, 'aryaa', 'kasir', 'c7911af3adbd12a035b289556d96470a', 9, 'kasir'),
(16, 'aryaaa', 'owner', '72122ce96bfec66e2396d2e25225d70a', 9, 'owner'),
(20, 'baji', 'admin', 'e00cf25ad42683b3df678c61f42c6bda', 10, 'admin'),
(21, 'bajii', 'kasir', '29c748d4d8f4bd5cbc0f3f60cb7ed3d0', 10, 'kasir'),
(22, 'bajiii', 'owner', '4ef5ba0c918c537fadba2ada54e3dd68', 10, 'owner'),
(23, 'galih', 'kasir', '8c86013d8ba23d9b5ade4d6463f81c45', 11, 'kasir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_paket` (`id_paket`),
  ADD KEY `qty` (`qty`);

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`),
  ADD KEY `jenis_kelamin` (`jenis_kelamin`),
  ADD KEY `tlp` (`tlp`);

--
-- Indexes for table `tb_outlet`
--
ALTER TABLE `tb_outlet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`),
  ADD KEY `tlp` (`tlp`);

--
-- Indexes for table `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_outlet` (`id_outlet`),
  ADD KEY `jenis` (`jenis`),
  ADD KEY `nama_paket` (`nama_paket`),
  ADD KEY `harga` (`harga`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_outlet` (`id_outlet`),
  ADD KEY `kode_invoice` (`kode_invoice`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `tgl` (`tgl`),
  ADD KEY `batas_waktu` (`batas_waktu`),
  ADD KEY `tgl_bayar` (`tgl_bayar`),
  ADD KEY `biaya_tambahan` (`biaya_tambahan`),
  ADD KEY `diskon` (`diskon`),
  ADD KEY `pajak` (`pajak`),
  ADD KEY `status` (`status`),
  ADD KEY `dibayar` (`dibayar`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`),
  ADD KEY `username` (`username`),
  ADD KEY `id_outlet` (`id_outlet`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_outlet`
--
ALTER TABLE `tb_outlet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  ADD CONSTRAINT `tb_detail_transaksi_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `tb_paket` (`id`),
  ADD CONSTRAINT `tb_detail_transaksi_ibfk_2` FOREIGN KEY (`id`) REFERENCES `tb_transaksi` (`id`);

--
-- Constraints for table `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD CONSTRAINT `tb_paket_ibfk_1` FOREIGN KEY (`id_outlet`) REFERENCES `tb_outlet` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`id_outlet`) REFERENCES `tb_outlet` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_transaksi_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`),
  ADD CONSTRAINT `tb_transaksi_ibfk_3` FOREIGN KEY (`id_member`) REFERENCES `tb_member` (`id`);

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`id_outlet`) REFERENCES `tb_outlet` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
