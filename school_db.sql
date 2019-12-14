-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2019 at 10:08 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountant`
--

CREATE TABLE `accountant` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accountant`
--

INSERT INTO `accountant` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `month_days` int(11) NOT NULL,
  `present_day` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `s_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `month` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `name`, `month_days`, `present_day`, `amount`, `s_date`, `month`) VALUES
(1, 'Raheel', 24, 20, 0, '2019-05-30 10:01:52', 'jan'),
(2, 'Raheel', 25, 20, 2000, '2019-05-30 10:15:12', 'feb'),
(3, 'Raheel', 29, 25, 2155, '2019-05-30 10:24:17', 'may'),
(4, 'Raheel', 30, 27, 2250, '2019-05-30 11:22:03', 'jan'),
(5, 'Sonia Sohail', 30, 29, 1450, '2019-05-30 12:27:57', 'jan'),
(6, 'Sonia Sohail', 29, 28, 1448, '2019-05-30 12:31:12', 'feb'),
(7, 'Sonia Sohail', 30, 29, 1450, '2019-05-30 12:37:34', 'mar'),
(8, 'hammad', 31, 31, 6000, '2019-05-30 12:59:49', 'jan');

-- --------------------------------------------------------

--
-- Table structure for table `salary_status`
--

CREATE TABLE `salary_status` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `jan` int(11) DEFAULT '0',
  `feb` int(11) DEFAULT '0',
  `mar` int(11) DEFAULT '0',
  `apr` int(11) DEFAULT '0',
  `may` int(11) DEFAULT '0',
  `jun` int(11) DEFAULT '0',
  `jul` int(11) DEFAULT '0',
  `aug` int(11) DEFAULT '0',
  `sep` int(11) DEFAULT '0',
  `oct` int(11) DEFAULT '0',
  `nov` int(11) DEFAULT '0',
  `december` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary_status`
--

INSERT INTO `salary_status` (`id`, `name`, `jan`, `feb`, `mar`, `apr`, `may`, `jun`, `jul`, `aug`, `sep`, `oct`, `nov`, `december`) VALUES
(2, 'Sonia Sohail', 1450, 1448, 1450, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'hammad', 6000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `job` varchar(30) NOT NULL,
  `father` varchar(30) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `salary` mediumint(9) NOT NULL,
  `joindate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `job`, `father`, `contact`, `email`, `address`, `salary`, `joindate`) VALUES
(8, 'Sonia Sohail', 'Maasi', 'Sohail Khan', 3472574584, 'so@yahoo.com', 'Karachi', 1500, '2019-05-30'),
(9, 'hammad', 'teacher', 'sanab gul', 3451539521, 'hammadsardar097@live.com', 'asdj', 6000, '2018-02-10');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Father` varchar(30) NOT NULL,
  `Contact` bigint(20) NOT NULL,
  `Address` text NOT NULL,
  `Class` varchar(15) NOT NULL,
  `admission_fee` int(11) NOT NULL,
  `tuition_fee` int(11) NOT NULL,
  `Joiningdate` date NOT NULL,
  `jan` varchar(20) DEFAULT 'Unpaid',
  `feb` varchar(20) DEFAULT 'Unpaid',
  `mar` varchar(20) DEFAULT 'Unpaid',
  `apr` varchar(20) DEFAULT 'Unpaid',
  `may` varchar(20) DEFAULT 'Unpaid',
  `jun` varchar(20) DEFAULT 'Unpaid',
  `jul` varchar(20) DEFAULT 'Unpaid',
  `aug` varchar(20) DEFAULT 'Unpaid',
  `sep` varchar(20) DEFAULT 'Unpaid',
  `oct` varchar(20) DEFAULT 'Unpaid',
  `nov` varchar(20) DEFAULT 'Unpaid',
  `decr` varchar(20) DEFAULT 'Unpaid'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `Name`, `Father`, `Contact`, `Address`, `Class`, `admission_fee`, `tuition_fee`, `Joiningdate`, `jan`, `feb`, `mar`, `apr`, `may`, `jun`, `jul`, `aug`, `sep`, `oct`, `nov`, `decr`) VALUES
(46, 'Hunain', 'Aqeel', 2664, 'karachi', 'two', 1500, 1000, '2019-04-25', 'Paid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid'),
(47, 'Raheel', 'Akbar Shah', 5645, 'karachi', 'three', 1500, 100, '2019-04-26', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid'),
(48, 'Umair', 'Hakim Shah', 54864, 'kohat', 'four', 1400, 2000, '2019-04-27', 'Paid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid'),
(49, 'Haris', 'Hakim Shah', 1236, 'Gumbat', 'five', 1400, 2000, '2019-04-26', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid'),
(50, 'Anas', 'Faisal', 1254, 'karachi', 'seven', 3600, 3000, '2019-04-20', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid'),
(51, 'Aqeel', 'Akbar Shah', 5656, 'karachi', 'eight', 1200, 2000, '2019-04-20', 'Paid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid'),
(52, 'Shakil', 'Akbar Shah', 156423, 'karachi', 'nine', 1200, 2000, '2019-04-19', 'Paid', 'Paid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid'),
(53, 'Farooq', 'Abbas', 54562, 'peshawar', 'ten', 1300, 3200, '2019-04-25', 'Paid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid'),
(54, 'Bushra', 'Sohail', 56464, 'karachi', 'kgone', 2000, 1000, '2019-04-17', 'Paid', 'Paid', 'Paid', 'Paid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid'),
(55, 'Sajjal', 'Gulzar', 45645, 'Lahor', 'kgtwo', 2500, 1000, '2019-04-08', 'Unpaid', 'Paid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid'),
(56, 'Raza', 'Haider', 23654, 'Karachi', 'one', 1500, 1000, '2019-04-18', 'Paid', 'Paid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid'),
(57, 'Sohail', 'Hakim Shah', 2453532, 'karachi', 'six', 1200, 1500, '2019-05-07', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid'),
(59, 'Raheel', 'Aqeel', 2664, 'karachi', 'two', 1500, 1000, '2019-04-25', 'Paid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid'),
(61, 'Farooq', 'Aqeel', 2664, 'karachi', 'two', 1500, 1000, '2019-04-25', 'Paid', 'Paid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid'),
(62, 'Saqib', 'Aqeel', 2664, 'karachi', 'two', 1500, 1000, '2019-04-25', 'Paid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid', 'Unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `father` varchar(30) NOT NULL,
  `class` varchar(20) NOT NULL,
  `_date` date NOT NULL,
  `month` varchar(30) NOT NULL,
  `tuition_fee` int(11) NOT NULL,
  `dues` int(11) NOT NULL,
  `annual_fee` int(11) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`id`, `name`, `father`, `class`, `_date`, `month`, `tuition_fee`, `dues`, `annual_fee`, `time`) VALUES
(2, 'Nabeel Ahmed', 'Akbar Shah', 'six', '2019-04-26', 'July', 1000, 200, 0, '2019-04-26 17:19:38'),
(3, 'Nabeel', 'Akbar Shah', 'six', '2019-04-26', 'july', 1000, 200, 0, '2019-04-26 17:19:38'),
(5, 'Sohail', 'HakimShah', 'six', '0012-12-12', 'july', 1000, 200, 100, '2019-04-26 17:19:38'),
(6, 'Nabeel', 'Akbar Shah', 'six', '2019-04-26', 'july', 1000, 173, 0, '2019-04-26 17:19:38'),
(7, 'Nabeel', 'Akbar Shah', 'six', '2019-06-19', 'Jan', 1000, 200, 100, '2019-04-26 17:19:38'),
(8, 'Sohail', 'HakimShah', 'six', '2019-04-19', 'feb', 500, 100, 100, '2019-04-26 17:19:38'),
(9, 'Sohail', 'HakimShah', 'six', '2019-04-18', 'apr', 1000, 200, 0, '2019-04-26 17:19:38'),
(10, 'Sohail', 'HakimShah', 'six', '2019-04-18', 'Aug', 1000, 200, 0, '2019-04-26 17:19:38'),
(11, 'Sohail', 'HakimShah', 'six', '2019-04-18', 'Sep', 1000, 200, 0, '2019-04-26 17:19:38'),
(12, 'Nabeel', 'Akbar Shah', 'six', '2019-04-03', 'jan', 1500, 200, 100, '2019-04-26 17:20:41'),
(13, 'Raheel', 'Akbar Shah', 'one', '2019-04-26', 'Jan', 1000, 200, 100, '2019-04-26 18:00:24'),
(14, 'Nabeel', 'Akbar Shah', 'six', '2019-04-26', 'Jan', 1000, 200, 0, '2019-04-27 05:12:33'),
(15, 'Kainat', 'Akbar Shah', 'one', '2019-04-27', 'july', 1000, 200, 100, '2019-04-27 14:58:21'),
(16, 'Kainat', 'Akbar Shah', 'one', '2019-04-19', 'feb', 800, 100, 0, '2019-04-27 14:59:28'),
(17, 'Ayesha', 'Akbar Shah', 'nursery', '0012-12-12', 'Jan', 1000, 200, 0, '2019-04-27 15:06:26'),
(41, 'Bushra ', 'Sohail', 'kgone', '0012-12-12', 'apr', 100, 20, 0, '2019-04-27 20:28:40'),
(42, 'Farooq', 'abbas', 'seven', '2019-04-19', 'Jan', 26, 16, 0, '2019-04-27 20:31:25'),
(43, 'Nabeel', 'Akbar Shah', 'six', '2019-04-25', 'feb', 12500, 200, 0, '2019-04-28 05:28:44'),
(44, 'Nabeel', 'Akbar Shah', 'six', '2019-04-28', 'July', 1200, 200, 0, '2019-04-28 08:03:37'),
(45, 'Umair', 'Hakim Shah', 'four', '2019-04-25', 'jan', 13000, 1000, 0, '2019-04-28 08:06:08'),
(46, 'Shakil', 'Akbar Shah', 'nine', '2019-05-04', 'feb', 1494, 100, 0, '2019-05-04 11:40:46'),
(47, 'Raza', 'Haider', 'one', '2019-05-29', 'feb', 2500, 100, 1000, '2019-05-29 09:19:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary_status`
--
ALTER TABLE `salary_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `salary_status`
--
ALTER TABLE `salary_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
