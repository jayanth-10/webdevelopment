-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2022 at 02:06 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nbkr`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user Name` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `confirm Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user Name`, `Password`, `confirm Password`) VALUES
('jayanth101', 'jayanth@101', 'jayanth@101');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `numplate` varchar(255) NOT NULL,
  `busnum` int(255) NOT NULL,
  `ROUTES` varchar(255) NOT NULL,
  `students` int(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `Subroute` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`numplate`, `busnum`, `ROUTES`, `students`, `faculty`, `Subroute`) VALUES
('AP 26 AH 2018', 14, 'Nellore', 50, 'NA', 'podalakuru road'),
('AP 26 AH 1956', 32, 'Nellore', 38, '3', 'RTC');

-- --------------------------------------------------------

--
-- Table structure for table `studentlogin`
--

CREATE TABLE `studentlogin` (
  `rollno` varchar(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentlogin`
--

INSERT INTO `studentlogin` (`rollno`, `username`, `password`) VALUES
('20kb1a0252', 'jayanth', '20kb1a0252');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `rollno` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `place` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`rollno`, `name`, `branch`, `mail`, `phone`, `place`, `amount`) VALUES
('20KB1A1252', 'T.JAYANTH', 'I.T', 'thotajayanth3822@gmail.com', '6309552662', 'NELLORE', 18000),
('20KB1A0537', 'yogish reddy', 'cse', 'yogish@gmail.com', '929324882', 'nellore', 18000),
('20KB1A0536', 'Raghava', 'Cse', 'raghava@gmail.com', '384738434', 'Gudur', 8000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
