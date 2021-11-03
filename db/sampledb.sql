-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2021 at 10:13 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sampledb`
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
  `emergency_number` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emptbl`
--

INSERT INTO `emptbl` (`id`, `eid`, `date_hired`, `department`, `position`, `status`, `family_name`, `first_name`, `middle_name`, `contact_number`, `email_address`, `birthday`, `religion`, `address`, `weight`, `tin_number`, `pagibig_number`, `height`, `sss_number`, `philhealth_number`, `civil_status`, `spouse_name`, `spouse_birthday`, `spouse_number`, `spouse_email`, `spouse_occupation`, `children`, `elementary`, `elementary_address`, `elementary_graduate_year`, `secondary`, `secondary_address`, `secondary_graduate_year`, `tertiary`, `tertiary_address`, `course`, `tertiary_graduate_year`, `emergency_name`, `emergency_address`, `emergency_relationship`, `emergency_number`, `img`) VALUES
(0, '001-908', '2021-11-20', 'HCAD', 'Graphic Designer', 'regular', 'Malalis', 'asd', 'asd', 'asd', 'asd', '1993-09-23', 'asd', 'ad', 'asd', 'asd', 'asd', 'asd', 'ad', 'asd', 'Single', 'asd', 'asd ', 'asd ', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', ' f', 'asdasd', 'asdasd', 'asdasd', 'asda', 'asd', 'asdasd', 'asd', 'asd', 'asd', 'asdasd', ''),
(0, '909', '2021-11-20', 'HCAD', 'Graphic Designer', 'regular', 'asd', 'asd', 'asd', 'asd', 'asd', '2021-11-24', 'asd', 'asdsad', 'asd', 'asdasd', 'asdsd', 'adad', 'asd', 'asdasd', 'Single', 'asd ', 'sad ', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'sad', ' asd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasdasd', 'asdadasd', 'asdasdasd', '../photo_folder/SECRETARIO, JULIE ANN front.png');

-- --------------------------------------------------------

--
-- Table structure for table `mytbl`
--

CREATE TABLE `mytbl` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `account_type` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mytbl`
--

INSERT INTO `mytbl` (`id`, `username`, `password`, `account_type`) VALUES
(1, 'admin', 'admin', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
