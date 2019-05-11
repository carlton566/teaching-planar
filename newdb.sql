-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2017 at 03:46 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `Dept` varchar(50) NOT NULL,
  `SubCat` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `AcadYear` date NOT NULL,
  `Category` int(50) NOT NULL,
  `AuditBy` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `f_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`Dept`, `SubCat`, `Name`, `AcadYear`, `Category`, `AuditBy`, `Date`, `f_id`) VALUES
('IT', 'SWS', 'me', '2017-04-10', 1, 'uyd', '2017-04-10', 7),
('IT', 'OST', 'me', '2017-04-10', 5, 'cjhc', '2017-04-10', 8),
('IT', 'DSA', 'fname', '2017-08-22', 3, 'ff', '2017-08-22', 9);

-- --------------------------------------------------------

--
-- Table structure for table `facultyinput`
--

CREATE TABLE `facultyinput` (
  `feedback_id` int(100) NOT NULL COMMENT 'feedback id',
  `Sr_no` int(11) NOT NULL,
  `Remarks_by_faculty` varchar(10) DEFAULT NULL,
  `Justification_by_faculty` varchar(500) NOT NULL,
  `Remarks_by_Audit_members` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultyinput`
--

INSERT INTO `facultyinput` (`feedback_id`, `Sr_no`, `Remarks_by_faculty`, `Justification_by_faculty`, `Remarks_by_Audit_members`) VALUES
(1, 1, '1', 'uoufoufof', 'fou'),
(1, 2, '1', 'fo', 'uf'),
(1, 3, '1', 'of', 'uof'),
(1, 4, '1', 'ouf', 'ouf'),
(1, 5, '1', 'of', 'ouf'),
(1, 6, '1', 'ouf', 'ofo'),
(1, 7, 'YES', 'ouf', 'of'),
(1, 8, 'YES', 'uf', 'ouf'),
(1, 9, 'YES', 'ouf', 'ouf'),
(1, 10, 'YES', 'f', 'ouf'),
(1, 11, 'YES', 'ouf', 'ouf'),
(1, 12, 'YES', 'uf', 'f'),
(2, 1, '1', 'jvljvl', 'kkckhc'),
(2, 2, '1', 'chkkhkhc', 'khkh'),
(2, 3, '1', 'ckhckh', 'ckh'),
(2, 4, '1', 'chk', 'ckc'),
(2, 5, '1', 'kh', 'chc'),
(2, 6, '1', 'kh', 'ckh'),
(2, 7, 'YES', 'ck', 'ckh'),
(2, 8, 'YES', 'ckc', 'k'),
(2, 9, 'YES', 'c', 'hk'),
(2, 10, 'YES', 'cc', 'hk'),
(2, 11, 'YES', 'cc', 'c'),
(2, 12, 'YES', 'ckh', 'c'),
(3, 1, '1', 'ffo', 'uf'),
(3, 2, '1', 'fu', 'foufouf'),
(3, 3, '1', 'fo', 'fo'),
(3, 4, '1', 'ofouf', 'fo'),
(3, 5, '1', 'fo', 'fof'),
(3, 6, '1', 'ouf', 'oufof'),
(3, 7, 'YES', 'ouf', 'of'),
(3, 8, 'YES', 'oufo', 'ufo'),
(3, 9, 'YES', 'fu', 'fou'),
(3, 10, 'YES', 'of', 'of'),
(3, 11, 'YES', 'ouf', 'ofou'),
(3, 12, 'YES', 'fou', 'fou'),
(5, 1, '1', 'diy', 'diyd'),
(5, 2, '1', 'yid', 'iydi'),
(5, 3, '1', 'iyd', 'yid'),
(5, 4, '1', 'ydiy', 'diyd'),
(5, 5, '1', 'iy', 'dg'),
(5, 6, '1', 'xjgx', 'jgx'),
(5, 7, 'YES', 'xjg', 'xg'),
(5, 8, 'YES', 'x', 'nb'),
(5, 9, 'YES', 'nvx', 'nvx'),
(5, 10, 'YES', 'xvx', 'nvx'),
(5, 11, 'NO', 'xn', 'xnvx'),
(5, 12, 'YES', 'nvx', 'vxn'),
(6, 1, '1', 'shdkshf', 'hhh'),
(6, 2, '1', 'ghgg', 'ggg'),
(6, 3, '1', 'ggggghjj', 'ggdfggdgf'),
(6, 4, '1', 'bfdhfhdgfhgdj', 'ghjgjj'),
(6, 5, '1', 'dhjsdfhhg', 'kjhkjhhk'),
(6, 6, '1', 'hhkjhkh', 'hhkjhjk'),
(6, 7, 'YES', 'gtjgghdfhgfg', 'hkhkhkj'),
(6, 8, 'YES', 'bhjgjtjtyt', 'ghgjgjhgjh'),
(6, 9, 'YES', 'tytytjhghjgj', 'gjhgjgjhgjhghj'),
(6, 10, 'YES', 'jytyutyt', 'fhfhghf'),
(6, 11, 'YES', 'fghfh', 'fhgu'),
(6, 12, 'YES', 'fghgh', 'jhghjg'),
(7, 1, '1', 'rgfjhgsfs', 'ugouff'),
(7, 2, '1', 'ouf', 'fu'),
(7, 3, '1', 'f', 'fuo'),
(7, 4, '1', 'f', 'fo'),
(7, 5, '1', 'f', 'f'),
(7, 6, '1', 'f', 'f'),
(7, 7, 'YES', 'uf', 'f'),
(7, 8, 'YES', 'fuf', 'fd'),
(7, 9, 'YES', 'dd', 'uyd'),
(7, 10, 'YES', 'uyd', 'uyd'),
(7, 11, 'YES', 'yd', 'yud'),
(7, 12, 'YES', 'd', 'd'),
(7, 1, '1', 'ufuof', 'fouf'),
(7, 2, '1', 'ouf', 'uof'),
(7, 3, '1', 'fou', 'f'),
(7, 4, '1', 'uf', 'u'),
(7, 5, '1', 'fuf', 'i'),
(7, 6, '1', 'fi', 'f'),
(7, 7, 'YES', 'jhc', 'jc'),
(7, 8, 'YES', 'jhc', 'jhc'),
(7, 9, 'YES', 'cj', 'hc'),
(7, 10, 'YES', 'jhc', 'hjc'),
(7, 11, 'YES', 'jhc', 'hc'),
(7, 12, 'YES', 'hc', 'jh'),
(9, 1, '2', 'gug', 'gu'),
(9, 2, '1', 'gug', 'ug'),
(9, 3, '1', 'ug', 'ug'),
(9, 4, '1', 'u', 'gg'),
(9, 5, '1', 'cutc', 'txct'),
(9, 6, '1', 'xutx', 'tu'),
(9, 7, 'YES', 'txctu', 'cxucx'),
(9, 8, 'YES', 'cciig', 'ygiy'),
(9, 9, 'YES', 'yf', 'iyf'),
(9, 10, 'YES', 'fif', 'iyf'),
(9, 11, 'YES', 'f', 'iyf'),
(9, 12, 'YES', 'yi', 'fy');

-- --------------------------------------------------------

--
-- Table structure for table `teaching_planar`
--

CREATE TABLE `teaching_planar` (
  `id` int(4) NOT NULL,
  `lec` int(4) NOT NULL,
  `contcov` longtext NOT NULL,
  `contncov` longtext NOT NULL,
  `ref` longtext NOT NULL,
  `meth` longtext NOT NULL,
  `mapp` longtext NOT NULL,
  `remarks` longtext NOT NULL,
  `sem` text NOT NULL,
  `sub` text NOT NULL,
  `fac` text NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teaching_planar`
--

INSERT INTO `teaching_planar` (`id`, `lec`, `contcov`, `contncov`, `ref`, `meth`, `mapp`, `remarks`, `sem`, `sub`, `fac`, `verified`) VALUES
(1, 1, 'bbhbhbhb', 'bhb', 'hb', 'hbhb', 'bh', 'hbhb', '1', 'Applied Maths 1', 'carlton', 1),
(2, 2, ' bhjsbhbhb', 'hvvgv ', 'vgvgvgv ', 'gvg ', 'vgvg ', 'gvvhg ', '6', 'DMBI', 'kalpana', 1),
(3, 2, ' bhb', 'hbhb ', 'hbhb ', 'hjbh ', 'bbh ', 'bhhjbhb ', '3', 'DSA', 'carlton', 1),
(4, 1, ' bhb', 'hbhb ', 'hbhb ', 'hjbh ', 'bbh ', 'bhhjbhb ', '6', 'DMBI', 'poonam', 1),
(5, 1, ' bhb', 'hbhj ', 'bjhbjh ', 'bhjbhj ', 'bhjbhj ', 'bhjbjhh ', '6', 'SWS', 'kalpana', 1),
(6, 1, ' hgjhg', 'jb ', 'jh ', 'gyg ', 'ygg ', 'yg ', '6', 'SE', 'Kalpana', 1),
(7, 1, ' jio', ' ygig', ' vtgfj', ' gygug', ' fugfu', 'gugug', '1', 'Applied Physics 1', 'hoj', 1),
(8, 1, ' jio', ' ygig', ' vtgfj', ' gygug', ' fugfu', 'gugug', '1', 'Applied Physics 1', 'hoj', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `teaching_planar`
--
ALTER TABLE `teaching_planar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `f_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `teaching_planar`
--
ALTER TABLE `teaching_planar`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
