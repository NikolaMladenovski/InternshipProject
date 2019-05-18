-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2017 at 11:57 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praksa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `nasoki`
--

CREATE TABLE `nasoki` (
  `smer_id` int(10) NOT NULL,
  `smer` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nasoki`
--

INSERT INTO `nasoki` (`smer_id`, `smer`) VALUES
(1, 'KTI'),
(2, 'TKII'),
(3, 'EES'),
(4, 'KSIAR'),
(5, 'KHIE'),
(6, 'EAOIE'),
(7, 'EEUM');

-- --------------------------------------------------------

--
-- Table structure for table `predmeti`
--

CREATE TABLE `predmeti` (
  `predmet_id` int(10) NOT NULL,
  `predmet` varchar(100) CHARACTER SET utf8 NOT NULL,
  `semestar` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `predmeti`
--

INSERT INTO `predmeti` (`predmet_id`, `predmet`, `semestar`) VALUES
(1, 'KKT', 'III'),
(2, 'LKDA', 'III'),
(3, 'KA', 'IV');

-- --------------------------------------------------------

--
-- Table structure for table `profesori`
--

CREATE TABLE `profesori` (
  `prof_id` int(10) NOT NULL,
  `ime` varchar(100) CHARACTER SET utf8 NOT NULL,
  `prezime` varchar(100) CHARACTER SET utf8 NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `pass` varchar(100) CHARACTER SET utf8 NOT NULL,
  `administrator` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profesori`
--

INSERT INTO `profesori` (`prof_id`, `ime`, `prezime`, `username`, `pass`, `administrator`) VALUES
(1, 'Nikola', 'Mladenovski', 'nikola', 'nikola', 0),
(4, 'Andrej', 'Stefanovski', 'andrej', 'andrej', 0),
(5, 'Bojan', 'Lozanovski', 'bojan', 'bojan', 0),
(7, 'Profesor', 'so privilegii', 'profesor', 'profesor', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rel_prof_pred`
--

CREATE TABLE `rel_prof_pred` (
  `rel_prof_pred_id` int(10) NOT NULL,
  `prof_id` int(10) NOT NULL,
  `predmet_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rel_prof_pred`
--

INSERT INTO `rel_prof_pred` (`rel_prof_pred_id`, `prof_id`, `predmet_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 4, 1),
(4, 1, 3),
(6, 4, 2),
(7, 4, 3),
(8, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rel_smer_pred`
--

CREATE TABLE `rel_smer_pred` (
  `rel_smer_pred_id` int(10) NOT NULL,
  `smer_id` int(10) NOT NULL,
  `predmet_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rel_smer_pred`
--

INSERT INTO `rel_smer_pred` (`rel_smer_pred_id`, `smer_id`, `predmet_id`) VALUES
(12, 5, 2),
(11, 5, 1),
(10, 5, 3),
(9, 1, 3),
(8, 1, 2),
(7, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rel_stu_pred`
--

CREATE TABLE `rel_stu_pred` (
  `rel_id` int(10) NOT NULL,
  `student_id` int(10) NOT NULL,
  `rel_prof_pred_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rel_stu_pred`
--

INSERT INTO `rel_stu_pred` (`rel_id`, `student_id`, `rel_prof_pred_id`) VALUES
(8, 16, 1),
(12, 14, 1),
(9, 16, 2),
(11, 16, 3),
(13, 15, 1),
(14, 29, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rel_stu_test`
--

CREATE TABLE `rel_stu_test` (
  `rel_stu_test_id` int(10) NOT NULL,
  `student_id` int(10) NOT NULL,
  `test_id` int(10) NOT NULL,
  `poeni` int(10) NOT NULL,
  `ocena` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rel_stu_test`
--

INSERT INTO `rel_stu_test` (`rel_stu_test_id`, `student_id`, `test_id`, `poeni`, `ocena`) VALUES
(95, 15, 12, 23, 0),
(92, 15, 16, 21, 5),
(90, 15, 23, 0, 7),
(89, 16, 23, 0, 9),
(94, 14, 12, 24, 0),
(93, 16, 12, 25, 0),
(91, 16, 16, 21, 5),
(96, 29, 12, 26, 0),
(97, 16, 24, 21, 5),
(98, 14, 24, 31, 5),
(99, 15, 24, 52, 6),
(100, 29, 24, 72, 8),
(101, 14, 16, 23, 5),
(102, 29, 16, 43, 5),
(103, 14, 23, 0, 5),
(104, 29, 23, 0, 5),
(106, 16, 28, 0, 98),
(107, 16, 22, 98, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rel_test_smer`
--

CREATE TABLE `rel_test_smer` (
  `rel_test_smer_id` int(10) NOT NULL,
  `test_id` int(10) NOT NULL,
  `smer_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rel_test_smer`
--

INSERT INTO `rel_test_smer` (`rel_test_smer_id`, `test_id`, `smer_id`) VALUES
(44, 23, 1),
(43, 16, 2),
(41, 12, 7),
(40, 12, 6),
(39, 12, 4),
(38, 12, 3),
(37, 12, 2),
(36, 12, 5),
(35, 12, 1),
(42, 16, 1),
(48, 28, 1),
(49, 29, 1),
(50, 22, 1);

-- --------------------------------------------------------

--
-- Table structure for table `studenti`
--

CREATE TABLE `studenti` (
  `student_id` int(10) NOT NULL,
  `indeks` varchar(10) CHARACTER SET latin1 NOT NULL,
  `ime` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prezime` varchar(100) NOT NULL,
  `smer_id` int(10) NOT NULL,
  `god_na_zap` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `studenti`
--

INSERT INTO `studenti` (`student_id`, `indeks`, `ime`, `prezime`, `smer_id`, `god_na_zap`) VALUES
(16, '\04', 'nikola', 'mladenovski', 1, 2017),
(14, '\0252', 'nikola', 'mladen', 4, 0),
(15, '\05', 'andrej', 'stefanovski', 1, 2017),
(29, '222', 'test1', 'test1', 2, 2017);

-- --------------------------------------------------------

--
-- Table structure for table `testovi`
--

CREATE TABLE `testovi` (
  `test_id` int(10) NOT NULL,
  `predmet_id` int(10) NOT NULL,
  `prof_id` int(10) NOT NULL,
  `godina` varchar(100) NOT NULL,
  `data` date NOT NULL,
  `ispit_id` int(10) NOT NULL,
  `format` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testovi`
--

INSERT INTO `testovi` (`test_id`, `predmet_id`, `prof_id`, `godina`, `data`, `ispit_id`, `format`) VALUES
(12, 1, 1, '2016/2017', '2017-08-01', 1, 0),
(16, 1, 1, '2017/2018', '2017-11-24', 1, 2),
(19, 1, 1, '2016/2017', '2017-08-10', 2, 0),
(20, 1, 1, '2017/2018', '2018-02-08', 2, 0),
(21, 2, 1, '2017/2018', '2017-09-15', 1, 0),
(22, 1, 4, '2017/2018', '2017-10-19', 2, 0),
(23, 1, 1, '2016/2017', '2017-08-07', 2, 1),
(24, 1, 1, '2016/2017', '2017-09-06', 6, 2),
(28, 2, 1, '2016/2017', '2017-08-04', 1, 1),
(29, 3, 1, '2016/2017', '2017-08-16', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tip_test`
--

CREATE TABLE `tip_test` (
  `ispit_id` int(10) NOT NULL,
  `ispit` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tip_test`
--

INSERT INTO `tip_test` (`ispit_id`, `ispit`) VALUES
(1, 'I Kolokvium'),
(2, 'II Kolokvium'),
(3, 'prv ispiten rok'),
(4, 'vtor ispiten rok'),
(5, 'tret ispiten rok'),
(6, 'kaznena sesija');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `nasoki`
--
ALTER TABLE `nasoki`
  ADD PRIMARY KEY (`smer_id`);

--
-- Indexes for table `predmeti`
--
ALTER TABLE `predmeti`
  ADD PRIMARY KEY (`predmet_id`);

--
-- Indexes for table `profesori`
--
ALTER TABLE `profesori`
  ADD PRIMARY KEY (`prof_id`);

--
-- Indexes for table `rel_prof_pred`
--
ALTER TABLE `rel_prof_pred`
  ADD PRIMARY KEY (`rel_prof_pred_id`);

--
-- Indexes for table `rel_smer_pred`
--
ALTER TABLE `rel_smer_pred`
  ADD PRIMARY KEY (`rel_smer_pred_id`);

--
-- Indexes for table `rel_stu_pred`
--
ALTER TABLE `rel_stu_pred`
  ADD PRIMARY KEY (`rel_id`);

--
-- Indexes for table `rel_stu_test`
--
ALTER TABLE `rel_stu_test`
  ADD PRIMARY KEY (`rel_stu_test_id`);

--
-- Indexes for table `rel_test_smer`
--
ALTER TABLE `rel_test_smer`
  ADD PRIMARY KEY (`rel_test_smer_id`);

--
-- Indexes for table `studenti`
--
ALTER TABLE `studenti`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `testovi`
--
ALTER TABLE `testovi`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `tip_test`
--
ALTER TABLE `tip_test`
  ADD PRIMARY KEY (`ispit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nasoki`
--
ALTER TABLE `nasoki`
  MODIFY `smer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `predmeti`
--
ALTER TABLE `predmeti`
  MODIFY `predmet_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `profesori`
--
ALTER TABLE `profesori`
  MODIFY `prof_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `rel_prof_pred`
--
ALTER TABLE `rel_prof_pred`
  MODIFY `rel_prof_pred_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `rel_smer_pred`
--
ALTER TABLE `rel_smer_pred`
  MODIFY `rel_smer_pred_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `rel_stu_pred`
--
ALTER TABLE `rel_stu_pred`
  MODIFY `rel_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `rel_stu_test`
--
ALTER TABLE `rel_stu_test`
  MODIFY `rel_stu_test_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT for table `rel_test_smer`
--
ALTER TABLE `rel_test_smer`
  MODIFY `rel_test_smer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `studenti`
--
ALTER TABLE `studenti`
  MODIFY `student_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `testovi`
--
ALTER TABLE `testovi`
  MODIFY `test_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `tip_test`
--
ALTER TABLE `tip_test`
  MODIFY `ispit_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
