-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2020 at 08:31 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zakatonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'sulthoni', '171011401685'),
(2, 'sonasa', '12345'),
(4, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `jeniszakat`
--

CREATE TABLE IF NOT EXISTS `jeniszakat` (
  `id` int(10) NOT NULL,
  `jeniszakat` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jeniszakat`
--

INSERT INTO `jeniszakat` (`id`, `jeniszakat`) VALUES
(1, 'ZakatPenghasilan'),
(2, 'ZakatMaal'),
(3, 'ZakatFitrah');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(20) NOT NULL,
  `jeniszakat` varchar(30) NOT NULL,
  `nominal` varchar(40) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `namabank` varchar(20) NOT NULL,
  `nomorrekening` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `jeniszakat`, `nominal`, `namalengkap`, `nohp`, `email`, `namabank`, `nomorrekening`) VALUES
(1, 'ZakatFitrah', '250000', 'SonasaRinusantoro', '08121579288', 'sonasa123@gmail.com', 'BRI', '11738762390'),
(8, 'ZakatPenghasilan', '200000', 'sulthoni', '08964668978', 'toni_click00@yahoo.co.id', 'BNI', '113224455678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jeniszakat`
--
ALTER TABLE `jeniszakat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jeniszakat`
--
ALTER TABLE `jeniszakat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
