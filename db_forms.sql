-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2022 at 04:20 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_forms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admission`
--

CREATE TABLE `tbl_admission` (
  `admission_id` int(10) NOT NULL,
  `date` varchar(20) NOT NULL,
  `na` varchar(50) NOT NULL,
  `ca` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guardian`
--

CREATE TABLE `tbl_guardian` (
  `guardian_id` int(11) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `fatheroccu` varchar(50) NOT NULL,
  `mothername` varchar(50) NOT NULL,
  `motheroccu` varchar(50) NOT NULL,
  `ng` varchar(50) NOT NULL,
  `contactnum` varchar(20) NOT NULL,
  `salary` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_information`
--

CREATE TABLE `tbl_student_information` (
  `student_id` int(10) NOT NULL,
  `ln` varchar(20) NOT NULL,
  `fn` varchar(50) NOT NULL,
  `mn` varchar(20) NOT NULL,
  `bd` varchar(10) NOT NULL,
  `age` int(3) NOT NULL,
  `gen` varchar(6) NOT NULL,
  `cs` varchar(20) NOT NULL,
  `pb` varchar(100) NOT NULL,
  `ny` varchar(20) NOT NULL,
  `rn` varchar(20) NOT NULL,
  `mobilenum` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `resadd` varchar(100) NOT NULL,
  `schadd` varchar(100) NOT NULL,
  `awards` varchar(100) NOT NULL,
  `sig` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admission`
--
ALTER TABLE `tbl_admission`
  ADD PRIMARY KEY (`admission_id`);

--
-- Indexes for table `tbl_guardian`
--
ALTER TABLE `tbl_guardian`
  ADD PRIMARY KEY (`guardian_id`);

--
-- Indexes for table `tbl_student_information`
--
ALTER TABLE `tbl_student_information`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admission`
--
ALTER TABLE `tbl_admission`
  MODIFY `admission_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_guardian`
--
ALTER TABLE `tbl_guardian`
  MODIFY `guardian_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_student_information`
--
ALTER TABLE `tbl_student_information`
  MODIFY `student_id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
