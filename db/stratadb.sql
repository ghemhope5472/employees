-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2021 at 11:09 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stratadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `emptbl`
--

CREATE TABLE `emptbl` (
  `id` int(11) NOT NULL,
  `eid` varchar(255) NOT NULL,
  `date_hired` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `family_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `tin_number` varchar(255) NOT NULL,
  `pagibig_number` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `sss_number` varchar(255) NOT NULL,
  `philhealth_number` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `spouse_name` varchar(255) NOT NULL,
  `spouse_birthday` varchar(255) NOT NULL,
  `spouse_number` varchar(255) NOT NULL,
  `spouse_email` varchar(255) NOT NULL,
  `spouse_occupation` varchar(255) NOT NULL,
  `children` varchar(255) NOT NULL,
  `elementary` varchar(255) NOT NULL,
  `elementary_address` varchar(255) NOT NULL,
  `elementary_graduate_year` varchar(255) NOT NULL,
  `secondary` varchar(255) NOT NULL,
  `secondary_address` varchar(255) NOT NULL,
  `secondary_graduate_year` varchar(255) NOT NULL,
  `tertiary` varchar(255) NOT NULL,
  `tertiary_address` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `tertiary_graduate_year` varchar(255) NOT NULL,
  `emergency_name` varchar(255) NOT NULL,
  `emergency_address` varchar(255) NOT NULL,
  `emergency_relationship` varchar(255) NOT NULL,
  `emergency_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emptbl`
--

INSERT INTO `emptbl` (`id`, `eid`, `date_hired`, `department`, `position`, `status`, `family_name`, `first_name`, `middle_name`, `contact_number`, `email_address`, `birthday`, `religion`, `address`, `weight`, `tin_number`, `pagibig_number`, `height`, `sss_number`, `philhealth_number`, `civil_status`, `spouse_name`, `spouse_birthday`, `spouse_number`, `spouse_email`, `spouse_occupation`, `children`, `elementary`, `elementary_address`, `elementary_graduate_year`, `secondary`, `secondary_address`, `secondary_graduate_year`, `tertiary`, `tertiary_address`, `course`, `tertiary_graduate_year`, `emergency_name`, `emergency_address`, `emergency_relationship`, `emergency_number`) VALUES
(2, 'adasd', '2021-11-27', 'HCAD', 'Director', 'regular', 'Search Test', 'gle', 'asd', 'asd', 'asd', '2021-11-20', 'Test', 'asdw', 'asda', 'asd', 'asd', 'asd', 'asd', 'asd', 'Married', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '1234', '2021-11-03', 'HCAD', 'Director', 'regular', 'Search Test', 'Glendy John ', 'Estrera', '9755733135', 'ghemhope@gmail.com', '2021-11-20', 'Test', 'Block 6 Lot 4 Phase 3 Vetallia Highland Homes Subdivision, Brgy. Manga', 'Test', 'asd', 'asd', 'asd', 'asd', 'asd', 'Single', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'ad', 'asd', ' asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `mytbl`
--

CREATE TABLE `mytbl` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `account_type` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mytbl`
--

INSERT INTO `mytbl` (`id`, `username`, `password`, `account_type`) VALUES
(1, 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emptbl`
--
ALTER TABLE `emptbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mytbl`
--
ALTER TABLE `mytbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emptbl`
--
ALTER TABLE `emptbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mytbl`
--
ALTER TABLE `mytbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
