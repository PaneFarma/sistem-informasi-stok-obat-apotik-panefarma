-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 10:28 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_stokobat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alatkesehatan`
--

CREATE TABLE IF NOT EXISTS `tbl_alatkesehatan` (
`id` int(15) NOT NULL,
  `nama_alat` varchar(25) NOT NULL,
  `harga` int(7) NOT NULL,
  `stok_alat` int(7) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=115 ;

--
-- Dumping data for table `tbl_alatkesehatan`
--

INSERT INTO `tbl_alatkesehatan` (`id`, `nama_alat`, `harga`, `stok_alat`) VALUES
(112, 'nald', 90000, 45),
(113, 'selang inpus', 20000, 67),
(114, 'gunting bedah', 90000, 34);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_syrup`
--

CREATE TABLE IF NOT EXISTS `tbl_syrup` (
  `kode` int(20) NOT NULL,
  `nama_syrup` varchar(50) NOT NULL,
  `harga` int(25) NOT NULL,
  `stok` int(25) NOT NULL,
  `exp_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_syrup`
--

INSERT INTO `tbl_syrup` (`kode`, `nama_syrup`, `harga`, `stok`, `exp_date`) VALUES
(101, 'lambucit', 15000, 34, '2020-12-31'),
(102, 'cetizien', 15000, 56, '2023-12-26'),
(103, 'mylanta', 45000, 70, '2023-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tablet`
--

CREATE TABLE IF NOT EXISTS `tbl_tablet` (
  `kode` int(20) NOT NULL,
  `nama_tablet` varchar(50) NOT NULL,
  `harga` int(20) NOT NULL,
  `stok` int(10) NOT NULL,
  `exp_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tablet`
--

INSERT INTO `tbl_tablet` (`kode`, `nama_tablet`, `harga`, `stok`, `exp_date`) VALUES
(211, 'neurobion', 31000, 23, '2023-11-02'),
(212, 'cetizien', 12000, 67, '2024-10-01'),
(213, 'lazenta', 30000, 65, '2023-08-06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_zalef`
--

CREATE TABLE IF NOT EXISTS `tbl_zalef` (
  `kode` int(20) NOT NULL,
  `nama_zalef` varchar(50) NOT NULL,
  `harga` int(20) NOT NULL,
  `stok` int(10) NOT NULL,
  `exp_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_zalef`
--

INSERT INTO `tbl_zalef` (`kode`, `nama_zalef`, `harga`, `stok`, `exp_date`) VALUES
(1, 'bioplacenton', 20000, 50, '2023-12-26'),
(2, 'kalpanax', 24000, 40, '2021-07-10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'devk@gmail.com', 'Developer Kampoeng', 1, 'Staff Kepaniteraan Hukum'),
('Emi', '827ccb0eea8a706c4c34a16891f84e7b', 'emipermatasari@gmail.com', 'Develover Kampoeng', 2, 'staff'),
('Wulan', '827ccb0eea8a706c4c34a16891f84e7b', 'sriwulanoppo@gmail.com', 'Develover Kampoeng', 2, 'staff'),
('Zilca', '827ccb0eea8a706c4c34a16891f84e7b', 'ZilcaShevi@gmail.com', 'Develover Kampoeng', 2, 'staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_alatkesehatan`
--
ALTER TABLE `tbl_alatkesehatan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_alatkesehatan`
--
ALTER TABLE `tbl_alatkesehatan`
MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=115;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
