-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2018 at 02:47 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cheapstay`
--

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `id` int(11) NOT NULL,
  `tanggal_upload` date NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tipe_file` varchar(10) NOT NULL,
  `ukuran_file` varchar(20) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`id`, `tanggal_upload`, `nama_file`, `tipe_file`, `ukuran_file`, `file`) VALUES
(1, '2018-01-05', 'poster.jpg', 'gambar', '200', 'images/e-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(5) NOT NULL,
  `id_pemesan` int(5) NOT NULL,
  `total_bayar` int(20) NOT NULL,
  `terbayar` int(30) NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pemesan`, `total_bayar`, `terbayar`, `file`) VALUES
(1, 1, 5000000, 0, 'e-3.jpg'),
(2, 2, 5000000, 5000000, '');

-- --------------------------------------------------------

--
-- Table structure for table `pemesan`
--

CREATE TABLE `pemesan` (
  `id` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nomor` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `permintaan` text NOT NULL,
  `extrabed` int(5) NOT NULL,
  `total` int(20) NOT NULL,
  `terbayar` int(10) NOT NULL,
  `file` varchar(50) NOT NULL,
  `id_user` int(20) NOT NULL,
  `id_hotel` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesan`
--

INSERT INTO `pemesan` (`id`, `nama`, `nomor`, `email`, `permintaan`, `extrabed`, `total`, `terbayar`, `file`, `id_user`, `id_hotel`) VALUES
(5, 'Ed', '6282277556416', 'ed@gmail.com', '	                		none', 1, 190000, 190000, '', 0, 0),
(6, 'Bayu', '082622555', 'no@gmail.com', '	 ac kencang               		', 1, 190000, 0, '', 0, 0),
(7, 'Devi Sirait', '2147483647', 'devi@gmail.com', '	                		', 1, 50000, 0, '', 3, 0),
(8, 'Devi Sirait', '2147483647', 'devi@gmail.com', '	                		', 1, 150000, 0, '', 3, 5),
(9, 'Devi Sirait', '2147483647', 'devi@gmail.com', '	                		', 1, 380000, 0, '', 3, 4),
(10, 'bayu prasetyo', '0', 'bayu@yahoo.com', '	                		', 1, 190000, 0, '', 1, 4),
(11, 'bayu prasetyo', '0', 'bayu@yahoo.com', '	                		', 1, 150000, 0, '', 1, 5),
(12, 'bayu prasetyo', '0', 'bayu@yahoo.com', '	                		', 1, 285000, 0, '', 1, 3),
(13, 'bayu prasetyo', '0', 'bayu@yahoo.com', '	                		', 1, 300000, 0, '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `penginapan`
--

CREATE TABLE `penginapan` (
  `id` int(4) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `harga` int(30) NOT NULL,
  `jenis` int(5) NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `luas` double NOT NULL,
  `jumlah_bed` int(11) NOT NULL,
  `jumlah_bath` int(11) NOT NULL,
  `fasilitas` text NOT NULL,
  `alamat` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penginapan`
--

INSERT INTO `penginapan` (`id`, `nama`, `harga`, `jenis`, `gambar`, `keterangan`, `luas`, `jumlah_bed`, `jumlah_bath`, `fasilitas`, `alamat`) VALUES
(1, 'Dion Homestay', 100000, 3, 'images/dion.jpg', 'Bagi anda yang ingin berlibur dengan biaya murah dan nyaman', 15.48, 5, 2, 'Homestay ini menyediakan jasa transportasi yaitu rental kereta, juga bahan bahan untuk bakar ikan. Kami juga menyediakan air panas untuk mandi. terdapat juga kasur tambahan jika anda inginkan. Pokoknya tidak akan menyesal menginap di homestay ini.', 'Lumban Bulbul, Balige'),
(2, 'ruins homestay', 50000, 2, 'images/e3.jpg', 'Cocok bagi anda yang ingin tinggal bersama keluarga', 30, 7, 3, 'Homestay ini menyediakan jasa transportasi yaitu rental kereta, juga bahan bahan untuk bakar ikan. Kami juga menyediakan air panas untuk mandi. terdapat juga kasur tambahan jika anda inginkan. Pokoknya tidak akan menyesal menginap di homestay ini.', 'Lumban Gaol, Tampubolon'),
(3, 'Devilat House', 85000, 1, 'images/e1.jpg', 'Cocok bagi anda yang ingin tinggal bersama keluarga', 20, 5, 2, 'Homestay ini menyediakan jasa transportasi yaitu rental kereta, juga bahan bahan untuk bakar ikan. Kami juga menyediakan air panas untuk mandi. terdapat juga kasur tambahan jika anda inginkan. Pokoknya tidak akan menyesal menginap di homestay ini.', 'binanga, muara'),
(4, 'Rumah Batak Ori', 95000, 1, 'images/e-3.jpg', 'Cocok bagi anda yang ingin tinggal bersama keluarga', 21.62, 3, 1, 'Homestay ini menyediakan jasa transportasi yaitu rental kereta, juga bahan bahan untuk bakar ikan. Kami juga menyediakan air panas untuk mandi. terdapat juga kasur tambahan jika anda inginkan. Pokoknya tidak akan menyesal menginap di homestay ini.', 'home, siantar'),
(5, 'mawar HomeStay', 150000, 3, 'images/mawar.jpg', 'HomeStay yang nyaman untuk ditempati dengan biaya yang murah', 15.48, 5, 2, 'Homestay ini menyediakan jasa transportasi yaitu rental kereta, juga bahan bahan untuk bakar ikan. Kami juga menyediakan air panas untuk mandi. terdapat juga kasur tambahan jika anda inginkan. Pokoknya tidak akan menyesal menginap di homestay ini.', 'Lumban Bulbul, Balige');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` int(3) NOT NULL,
  `id` int(10) NOT NULL,
  `no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nama`, `username`, `email`, `password`, `level`, `id`, `no`) VALUES
('bayu prasetyo', 'bayu', 'bayu@yahoo.com', 'bayu', 1, 1, 0),
('franky napitupulu', 'franky', 'franky@yahoo.com', 'franky', 2, 2, 0),
('Devi Sirait', 'devi', 'devi@gmail.com', 'devi', 1, 3, 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD UNIQUE KEY `id_pemesan` (`id_pemesan`);

--
-- Indexes for table `pemesan`
--
ALTER TABLE `pemesan`
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
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pemesan`
--
ALTER TABLE `pemesan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
