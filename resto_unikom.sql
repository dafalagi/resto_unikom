-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 17, 2021 at 12:31 PM
-- Server version: 5.7.31
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resto_unikom`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_detail_pesanan`
--

DROP TABLE IF EXISTS `t_detail_pesanan`;
CREATE TABLE IF NOT EXISTS `t_detail_pesanan` (
  `id_detail_pesanan` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu` int(11) NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `sub_total` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_detail_pesanan`),
  KEY `id_menu` (`id_menu`),
  KEY `id_pesanan` (`id_pesanan`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_detail_pesanan`
--

INSERT INTO `t_detail_pesanan` (`id_detail_pesanan`, `id_menu`, `id_pesanan`, `jumlah`, `sub_total`) VALUES
(1, 31, 1, 2, 64000),
(2, 32, 2, 2, 46000),
(3, 33, 3, 2, 64000),
(4, 34, 4, 4, 148000),
(5, 35, 5, 1, 12000),
(6, 36, 6, 2, 54000),
(7, 37, 7, 3, 111000),
(8, 38, 8, 1, 7000),
(9, 39, 9, 2, 24000),
(10, 40, 10, 2, 64000);

-- --------------------------------------------------------

--
-- Table structure for table `t_kasir`
--

DROP TABLE IF EXISTS `t_kasir`;
CREATE TABLE IF NOT EXISTS `t_kasir` (
  `nipr` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  PRIMARY KEY (`nipr`),
  KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_kasir`
--

INSERT INTO `t_kasir` (`nipr`, `username`) VALUES
(12, 'asep120'),
(11, 'friska120');

-- --------------------------------------------------------

--
-- Table structure for table `t_koki`
--

DROP TABLE IF EXISTS `t_koki`;
CREATE TABLE IF NOT EXISTS `t_koki` (
  `nipr` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  PRIMARY KEY (`nipr`),
  KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_koki`
--

INSERT INTO `t_koki` (`nipr`, `username`) VALUES
(8, 'abdul115'),
(11, 'angel115'),
(13, 'dafa123'),
(6, 'megumi115'),
(7, 'mora115'),
(9, 'stevany115'),
(10, 'yui115');

-- --------------------------------------------------------

--
-- Table structure for table `t_meja`
--

DROP TABLE IF EXISTS `t_meja`;
CREATE TABLE IF NOT EXISTS `t_meja` (
  `nomor_meja` int(11) NOT NULL AUTO_INCREMENT,
  `jumlah_kursi` int(11) DEFAULT NULL,
  `status_meja` varchar(255) DEFAULT 'tersedia',
  PRIMARY KEY (`nomor_meja`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_meja`
--

INSERT INTO `t_meja` (`nomor_meja`, `jumlah_kursi`, `status_meja`) VALUES
(1, 2, 'tersedia'),
(2, 2, 'terisi'),
(3, 2, 'tersedia'),
(4, 4, 'terisi'),
(5, 4, 'tersedia'),
(6, 4, 'terisi'),
(7, 4, 'tersedia'),
(8, 6, 'terisi'),
(9, 6, 'tersedia'),
(10, 6, 'terisi');

-- --------------------------------------------------------

--
-- Table structure for table `t_menu`
--

DROP TABLE IF EXISTS `t_menu`;
CREATE TABLE IF NOT EXISTS `t_menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `nipr` int(11) NOT NULL,
  `nama_menu` varchar(255) DEFAULT NULL,
  `deskripsi_menu` varchar(255) DEFAULT NULL,
  `harga_menu` int(11) DEFAULT NULL,
  `stok_menu` int(11) DEFAULT '0',
  `menu_hari_ini` varchar(255) DEFAULT 'tidak',
  `gambar` longblob,
  PRIMARY KEY (`id_menu`),
  KEY `nipr` (`nipr`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_menu`
--

INSERT INTO `t_menu` (`id_menu`, `nipr`, `nama_menu`, `deskripsi_menu`, `harga_menu`, `stok_menu`, `menu_hari_ini`, `gambar`) VALUES
(31, 11, 'Bebek Tempur', 'Bebek Bakar dengan bumbu cabe yang membara siap menggempur bibir anda', 32000, 21, 'ya', NULL),
(32, 8, 'Ayam Geprek', 'Ayam yang digeprek lalu digabung dengan racikan sambal special kami siap memuat perut anda kenyang', 23000, 11, 'ya', NULL),
(33, 8, 'Lele Terbang', 'Lele yang dipotong dengan cara yang khas membuat lele ini terlihat seperti mempunyai sayap', 12000, 0, 'tidak', NULL),
(34, 7, 'Pepes Tahu', 'Tahu yang lembut dengan rempah rempah nusantara', 12000, 22, 'ya', NULL),
(35, 6, 'Ayam Bakar', 'Ayam yang dibakar hingga matang sempurna', 19000, 31, 'ya', NULL),
(36, 10, 'Es Serut', 'Hidangan yang siap membuat anda merasa segar', 9000, 26, 'ya', NULL),
(37, 9, 'Gurame Asam Manis', 'Gurame segar dengan bumbu asam manis', 37000, 11, 'ya', NULL),
(38, 7, 'Bok choy', 'Sayuran sayi sendok', 7000, 21, 'ya', NULL),
(39, 8, 'Gurame Bakar', 'Gurame Bakar nikmat siap membuat perut anda kenyang', 37000, 0, 'tidak', NULL),
(40, 10, 'Cumi Ring', 'Cumi yang dipotong hingga berbentu cincin', 27000, 11, 'ya', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_pegawai`
--

DROP TABLE IF EXISTS `t_pegawai`;
CREATE TABLE IF NOT EXISTS `t_pegawai` (
  `username` varchar(255) NOT NULL,
  `password` varchar(225) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jam_kerja` varchar(255) DEFAULT NULL,
  `gaji` int(11) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pegawai`
--

INSERT INTO `t_pegawai` (`username`, `password`, `nama`, `jam_kerja`, `gaji`) VALUES
('abdul115', 'kokiabdul', 'Abdul Hakim', '12:00 - 22:00', 9000000),
('angel115', 'kokiangel', 'Angel Lagan', '12:00 - 22:00', 9000000),
('asep120', 'kasirasep', 'Asep Sopia', '12:00 - 22:00', 9000000),
('dafa123', 'kokidafa', 'dafa', '12:00 - 17:00', 9000000),
('diluc114', 'pelayandiluc', 'Diluc Ragnvindr', '12:00 - 22:00', 7000000),
('friska120', 'kasirfriska', 'Friska Hamidah', '06:00 - 14:00', 9000000),
('hendra114', 'pelayanhendra', 'Hendra Herlambang', '06:00 - 14:00', 6000000),
('hendro114', 'pelayanhendro', 'Hendro Darmawan', '06:00 - 14:00', 6000000),
('irwan114', 'pelayanirwan', 'Irwansyah', '06:00 - 14:00', 6000000),
('komar114', 'pelayankomar', 'komarudin', '06:00 - 14:00', 6000000),
('megumi115', 'kokimegumi', 'Kato Megumi', '06:00 - 14:00', 7000000),
('mora115', 'kokimora', 'Mora Rei', '06:00 - 14:00', 9000000),
('stevany115', 'kokistevany', 'Stevany Wulandari', '12:00 - 22:00', 9000000),
('tatang114', 'pelayantatang', 'Tatang Childe', '12:00 - 22:00', 7000000),
('wawan114', 'pelayanwawan', 'Wawan Grom', '12:00 - 22:00', 7000000),
('yui115', 'kokiyui', 'Yui Hana', '06:00 - 14:00', 7000000);

-- --------------------------------------------------------

--
-- Table structure for table `t_pelayan`
--

DROP TABLE IF EXISTS `t_pelayan`;
CREATE TABLE IF NOT EXISTS `t_pelayan` (
  `nipr` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  PRIMARY KEY (`nipr`),
  KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pelayan`
--

INSERT INTO `t_pelayan` (`nipr`, `username`) VALUES
(17, 'diluc114'),
(11, 'hendra114'),
(13, 'hendro114'),
(14, 'irwan114'),
(12, 'komar114'),
(16, 'tatang114'),
(15, 'wawan114');

-- --------------------------------------------------------

--
-- Table structure for table `t_pembayaran`
--

DROP TABLE IF EXISTS `t_pembayaran`;
CREATE TABLE IF NOT EXISTS `t_pembayaran` (
  `nomor_pembayaran` int(11) NOT NULL AUTO_INCREMENT,
  `nipr` int(11) NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `total_tagihan` int(11) DEFAULT NULL,
  `tipe_bayar` varchar(255) DEFAULT NULL,
  `tanggal_pembayaran` date DEFAULT NULL,
  PRIMARY KEY (`nomor_pembayaran`),
  KEY `nipr` (`nipr`),
  KEY `id_pesanan` (`id_pesanan`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pembayaran`
--

INSERT INTO `t_pembayaran` (`nomor_pembayaran`, `nipr`, `id_pesanan`, `total_tagihan`, `tipe_bayar`, `tanggal_pembayaran`) VALUES
(1, 11, 1, 40000, 'tunai', '2021-07-15'),
(2, 12, 2, 50000, 'tunai', '2021-07-16'),
(3, 12, 3, 100000, 'kartu', '2021-07-17'),
(4, 12, 4, 150000, 'kartu', '2021-07-18'),
(5, 11, 5, 55000, 'tunai', '2021-07-19'),
(6, 11, 6, 71000, 'tunai', '2021-07-20'),
(7, 11, 7, 125000, 'kartu', '2021-07-21'),
(8, 12, 8, 140000, 'kartu', '2021-07-22'),
(9, 11, 9, 37000, 'tunai', '2021-07-23'),
(10, 12, 10, 48000, 'tunai', '2021-07-24');

-- --------------------------------------------------------

--
-- Table structure for table `t_pesanan`
--

DROP TABLE IF EXISTS `t_pesanan`;
CREATE TABLE IF NOT EXISTS `t_pesanan` (
  `id_pesanan` int(11) NOT NULL AUTO_INCREMENT,
  `nipr` int(11) NOT NULL,
  `nomor_meja` int(11) NOT NULL,
  `konfirmasi` varchar(255) DEFAULT 'tidak',
  `total_harga` int(11) DEFAULT NULL,
  `status_pesanan` varchar(255) DEFAULT 'antrian',
  PRIMARY KEY (`id_pesanan`),
  KEY `nipr` (`nipr`),
  KEY `nomor_meja` (`nomor_meja`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pesanan`
--

INSERT INTO `t_pesanan` (`id_pesanan`, `nipr`, `nomor_meja`, `konfirmasi`, `total_harga`, `status_pesanan`) VALUES
(1, 15, 1, 'ya', 40000, 'dibuat'),
(2, 17, 2, 'ya', 50000, 'antrian'),
(3, 13, 3, 'tidak', 100000, 'selesai'),
(4, 14, 4, 'tidak', 150000, 'disajikan'),
(5, 16, 5, 'ya', 55000, 'dibuat'),
(6, 16, 6, 'ya', 71000, 'antrian'),
(7, 17, 7, 'tidak', 125000, 'selesai'),
(8, 11, 8, 'tidak', 140000, 'disajikan'),
(9, 14, 9, 'ya', 37000, 'dibuat'),
(10, 15, 10, 'ya', 48000, 'antrian');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_detail_pesanan`
--
ALTER TABLE `t_detail_pesanan`
  ADD CONSTRAINT `t_detail_fk_1` FOREIGN KEY (`id_menu`) REFERENCES `t_menu` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_detail_fk_2` FOREIGN KEY (`id_pesanan`) REFERENCES `t_pesanan` (`id_pesanan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_kasir`
--
ALTER TABLE `t_kasir`
  ADD CONSTRAINT `t_kasir_fk_1` FOREIGN KEY (`username`) REFERENCES `t_pegawai` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_koki`
--
ALTER TABLE `t_koki`
  ADD CONSTRAINT `t_koki_fk_1` FOREIGN KEY (`username`) REFERENCES `t_pegawai` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_menu`
--
ALTER TABLE `t_menu`
  ADD CONSTRAINT `t_menu_fk_1` FOREIGN KEY (`nipr`) REFERENCES `t_koki` (`nipr`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_pelayan`
--
ALTER TABLE `t_pelayan`
  ADD CONSTRAINT `t_pelayan_fk_1` FOREIGN KEY (`username`) REFERENCES `t_pegawai` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_pembayaran`
--
ALTER TABLE `t_pembayaran`
  ADD CONSTRAINT `t_bayar_fk_1` FOREIGN KEY (`nipr`) REFERENCES `t_kasir` (`nipr`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_bayar_fk_2` FOREIGN KEY (`id_pesanan`) REFERENCES `t_pesanan` (`id_pesanan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_pesanan`
--
ALTER TABLE `t_pesanan`
  ADD CONSTRAINT `t_pesanan_fk_1` FOREIGN KEY (`nipr`) REFERENCES `t_pelayan` (`nipr`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_pesanan_fk_2` FOREIGN KEY (`nomor_meja`) REFERENCES `t_meja` (`nomor_meja`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
