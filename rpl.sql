-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2016 at 01:28 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `datasoal`
--

CREATE TABLE IF NOT EXISTS `datasoal` (
`IdSoal` int(11) NOT NULL,
  `Soal` text NOT NULL,
  `PilihanA` text NOT NULL,
  `PilihanB` text NOT NULL,
  `PilihanC` text NOT NULL,
  `PilihanD` text NOT NULL,
  `Ans` varchar(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datasoal`
--

INSERT INTO `datasoal` (`IdSoal`, `Soal`, `PilihanA`, `PilihanB`, `PilihanC`, `PilihanD`, `Ans`) VALUES
(1, 'Fungsi marka jalan adalah?', 'Untuk memberi batas jalan agar jalan terlihat jelas oleh pemakai jalan yang sedang berlalu lintas di jalan\r\n', 'Untuk menambah dan mengurangi kecepatan pemakai jalan yang berlalu lintas di jalan\r\n', 'Untuk mengatur lalu lintas atau memperingatkan atau menuntun pemakai jalan dalam berlalu  lintas di jalan\r\n', 'Untuk memberi akses jalan', 'c'),
(2, 'Yang bukan merupakan marka lambang adalah?', 'Segitiga', 'Gambar', 'Panas', 'Lingkaran', 'c'),
(3, 'Rambu dengan warna dasar kuning dengan lambang atau tulisan berwarna hitam merupakan?\r\n', 'Rambu petunjuk', 'Rambu peringatan', 'Rambu perintah', 'Rambu arah', 'b'),
(4, 'Garis ganda yang terdiri dari garis utuh dan garis putus-putus termasuk?', 'Marka membujur', 'Marka melintang', 'Marka serong', 'Marka lurus', 'a'),
(5, 'Dalam suatu persimpangan jalan terdapat alat pemberi isyarat lalu lintas, polisi lalu lintas dan polisi pamong praja. Isyarat lalu lintas yang manakah yang harus diikuti oleh para pemakai jalan?\r\n', 'Alat pemberi isyarat lalu lintas', 'Polisi lalu lintas', 'Polisi pamong praja', 'TNI', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
`IdKomen` int(11) NOT NULL,
  `IdPosting` int(11) NOT NULL,
  `idMember` int(11) NOT NULL,
  `IsiKomen` text NOT NULL,
  `TanggalKomen` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`IdKomen`, `IdPosting`, `idMember`, `IsiKomen`, `TanggalKomen`) VALUES
(1, 1, 3, 'komentar 1', '---'),
(8, 1, 2, 'komentar 2', 'Saturday 12th of December 2015 05:22:06 PM'),
(9, 1, 2, 'komentar 3', 'Sunday 13th of December 2015 03:03:27 PM'),
(10, 1, 3, 'komentar 4', 'Sunday 13th of December 2015 03:14:09 PM'),
(11, 2, 2, 'komentar 1', 'Sunday 13th of December 2015 07:17:34 PM');

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE IF NOT EXISTS `posting` (
`IdPosting` int(11) NOT NULL,
  `idMember` int(11) NOT NULL,
  `JudulPosting` varchar(255) NOT NULL,
  `IsiPosting` text NOT NULL,
  `TanggalPosting` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`IdPosting`, `idMember`, `JudulPosting`, `IsiPosting`, `TanggalPosting`) VALUES
(2, 3, 'careful', '$%%buktikan kalo kamu benar benar seorang agent of change bukan agen sembarangan yang merubah lingkungan sendiri menjadi tempat sampah', 'Saturday 12th of December 2015 05:17:29 PM'),
(3, 2, 'test 3', 'huhuhuhuhuhuhuhuhuhuhuhuhuhuhuhuhuhu', 'Saturday 12th of December 2015 03:02:57 PM'),
(6, 2, 'test4', '$%%!@$^&#&!*ahdhahdba', 'Saturday 12th of December 2015 04:16:38 PM'),
(8, 3, 'test 5', '!&#!@&*(!', 'Saturday 12th of December 2015 04:22:42 PM'),
(9, 2, 'test 6', 'hahahhaha', 'Sunday 13th of December 2015 04:47:54 PM');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`NoId` int(11) NOT NULL,
  `NamaLengkap` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(256) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Avatar` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`NoId`, `NamaLengkap`, `Username`, `Password`, `Email`, `Avatar`) VALUES
(2, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'adminsicbl@gmail.com', 'assets/uploads/admin_ava.png'),
(3, 'maulana putra p', 'maulanapp', '827ccb0eea8a706c4c34a16891f84e7b', 'maulanaputra59@gmail.com', 'assets/uploads/maulanapp_ava.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datasoal`
--
ALTER TABLE `datasoal`
 ADD PRIMARY KEY (`IdSoal`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
 ADD PRIMARY KEY (`IdKomen`);

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
 ADD PRIMARY KEY (`IdPosting`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`NoId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datasoal`
--
ALTER TABLE `datasoal`
MODIFY `IdSoal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
MODIFY `IdKomen` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
MODIFY `IdPosting` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `NoId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
