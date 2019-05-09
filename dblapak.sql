-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2019 at 01:21 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dblapak`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbbarang`
--

CREATE TABLE IF NOT EXISTS `tbbarang` (
  `judul` varchar(20) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `katagori` varchar(20) NOT NULL,
  `diskripsi` varchar(100) NOT NULL,
  `foto` blob NOT NULL,
  `harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbbarang`
--

INSERT INTO `tbbarang` (`judul`, `kota`, `katagori`, `diskripsi`, `foto`, `harga`) VALUES
('sepatu vans', 'yogyakarta', 'fasion', 'barang sangat bagus ', 0x686f686f, '1200000'),
('sepatu vans old scho', 'yogyakarta', 'fasion', 'murah aja gan', 0x6b6b, '4800000'),
('vans era', 'bantul', 'fasion', 'barang bagus dan mantul', 0x6a6a, '3000000'),
('fajar', 'Sleman', 'Fasion', 'fajar nugrahaaaaaa hahahahahaha', 0x5052504c323031392d5475676173203031622d4b656c617320412d313730303031383032332d52697a6b7920416b6261722050757472612e6a7067, '5000000'),
('eko', 'bantul', 'properti', 'apik iki lurd', 0x76616e732e706e67, '67689900');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(32) NOT NULL,
  `level` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`, `email`, `level`) VALUES
(1, 'admin', 'admin', 'Administrator', 'admin@gmail.com', '1'),
(2, 'banu', 'banu', 'pelanggan', 'banu@gmail.com', '2'),
(3, 'eko', 'eko', 'pelangan', 'eko1986@gmail.com', '3'),
(7, 'ayam', 'ayam', 'ayamku', 'fanu2@gmail.com', 'pelanggan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
