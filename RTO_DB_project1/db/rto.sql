-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2017 at 10:34 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rto`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `a_id` int(11) NOT NULL,
  `a_username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_username`, `password`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `b_id` int(11) NOT NULL,
  `b_name` varchar(20) NOT NULL,
  `b_address` varchar(100) NOT NULL,
  `b_pin` char(6) NOT NULL,
  `b_phone` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`b_id`, `b_name`, `b_address`, `b_pin`, `b_phone`) VALUES
(1, 'bangalore', 'j.p.nagar', '560001', '9147483647'),
(5, 'tumkur', 'b.h,road', '1331', '1321442'),
(6, 'mysuru', 'JC.nagar,musuru', '589289', '9898989809');

-- --------------------------------------------------------

--
-- Table structure for table `dl`
--

CREATE TABLE IF NOT EXISTS `dl` (
  `d_id` int(11) NOT NULL,
  `dl_no` int(11) NOT NULL,
  `b_id` int(11) NOT NULL,
  `dl_class` char(4) NOT NULL,
  `issue_date` date NOT NULL,
  `expiry_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dl`
--

INSERT INTO `dl` (`d_id`, `dl_no`, `b_id`, `dl_class`, `issue_date`, `expiry_date`) VALUES
(1, 1, 1, 'B', '2017-03-15', '2022-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE IF NOT EXISTS `driver` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(20) NOT NULL,
  `d_gender` varchar(8) NOT NULL,
  `d_dob` date NOT NULL,
  `d_phone` varchar(12) NOT NULL,
  `d_address` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`d_id`, `d_name`, `d_gender`, `d_dob`, `d_phone`, `d_address`) VALUES
(1, 'ram', 'male', '1997-05-21', '8654433232', 'RR.nagar,bangalore'),
(4, 'jerry', 'male', '1998-03-14', '889767576', 'mysuru');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `u_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` text NOT NULL,
  `message` text
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`u_id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'sanvi', 'sanvi123@gmail.com', 'good', 'keep on updating');

-- --------------------------------------------------------

--
-- Table structure for table `licence`
--

CREATE TABLE IF NOT EXISTS `licence` (
  `l_no` int(11) NOT NULL,
  `l_class` varchar(20) NOT NULL,
  `issue_d` date NOT NULL,
  `expiry_d` date NOT NULL,
  `d_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `licence`
--

INSERT INTO `licence` (`l_no`, `l_class`, `issue_d`, `expiry_d`, `d_id`) VALUES
(1, 'd', '2017-11-08', '2018-11-30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`) VALUES
(1, 'tejas', 'tejas432@gmail.com', '1234'),
(2, 'san', 'santhoshkb02@gmail.c', '0000'),
(3, 'John', 'john@gmail.com', '90909');

-- --------------------------------------------------------

--
-- Table structure for table `test1`
--

CREATE TABLE IF NOT EXISTS `test1` (
  `d_id` int(11) NOT NULL,
  `b_id` int(11) NOT NULL,
  `t_type` varchar(20) NOT NULL,
  `t_date` date NOT NULL,
  `t_result` varchar(10) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test1`
--

INSERT INTO `test1` (`d_id`, `b_id`, `t_type`, `t_date`, `t_result`, `id`) VALUES
(1, 5, 'B', '2017-11-08', 'pass', 1),
(4, 6, 'A', '2017-11-18', 'fail', 2);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE IF NOT EXISTS `vehicle` (
  `r_no` int(11) NOT NULL,
  `class_v` varchar(30) NOT NULL,
  `type_v` varchar(10) NOT NULL,
  `engine_no` int(11) NOT NULL,
  `reg_date` date NOT NULL,
  `chasis_no` int(11) NOT NULL,
  `b_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`r_no`, `class_v`, `type_v`, `engine_no`, `reg_date`, `chasis_no`, `b_id`) VALUES
(1, 'medium rigid', 'B', 76787, '2017-11-01', 8675, 1),
(2156, 'mideum', 'B', 5335, '2017-11-18', 3434, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`b_id`), ADD KEY `b_name` (`b_name`), ADD KEY `b_name_2` (`b_name`);

--
-- Indexes for table `dl`
--
ALTER TABLE `dl`
  ADD PRIMARY KEY (`dl_no`), ADD KEY `d_id` (`d_id`), ADD KEY `b_id` (`b_id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `licence`
--
ALTER TABLE `licence`
  ADD PRIMARY KEY (`l_no`), ADD KEY `d_id` (`d_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test1`
--
ALTER TABLE `test1`
  ADD PRIMARY KEY (`id`), ADD KEY `d_id` (`d_id`,`b_id`), ADD KEY `b_id` (`b_id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`r_no`), ADD KEY `b_id` (`b_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `dl`
--
ALTER TABLE `dl`
  MODIFY `dl_no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `test1`
--
ALTER TABLE `test1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `dl`
--
ALTER TABLE `dl`
ADD CONSTRAINT `dl_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `driver` (`d_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `dl_ibfk_2` FOREIGN KEY (`b_id`) REFERENCES `branch` (`b_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `licence`
--
ALTER TABLE `licence`
ADD CONSTRAINT `licence_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `driver` (`d_id`);

--
-- Constraints for table `test1`
--
ALTER TABLE `test1`
ADD CONSTRAINT `test1_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `driver` (`d_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `test1_ibfk_2` FOREIGN KEY (`b_id`) REFERENCES `branch` (`b_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
ADD CONSTRAINT `vehicle_ibfk_1` FOREIGN KEY (`b_id`) REFERENCES `branch` (`b_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
