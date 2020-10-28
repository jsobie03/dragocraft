-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2020 at 10:57 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drago_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblappeal`
--

CREATE TABLE `tblappeal` (
  `appeal_ID` int(4) NOT NULL,
  `user_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `user_email` varchar(255) COLLATE utf8_bin NOT NULL,
  `reason` varchar(255) COLLATE utf8_bin NOT NULL,
  `appeal` longtext COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tblappeal`
--

INSERT INTO `tblappeal` (`appeal_ID`, `user_name`, `user_email`, `reason`, `appeal`) VALUES
(1, 'David The Creator', 'daviddesigns@gmail.com', 'Testing, Testing, Testing', 'There are very few words since this is only a test!');

-- --------------------------------------------------------

--
-- Table structure for table `tblapply`
--

CREATE TABLE `tblapply` (
  `applicationID` int(4) NOT NULL,
  `fName` varchar(255) COLLATE utf8_bin NOT NULL,
  `lName` varchar(255) COLLATE utf8_bin NOT NULL,
  `mcUname` varchar(100) COLLATE utf8_bin NOT NULL,
  `disUname` varchar(100) COLLATE utf8_bin NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(150) COLLATE utf8_bin NOT NULL,
  `timezone` varchar(100) COLLATE utf8_bin NOT NULL,
  `joinMonth` varchar(100) COLLATE utf8_bin NOT NULL,
  `applymessage` longtext COLLATE utf8_bin NOT NULL,
  `dateapplied` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tblapply`
--

INSERT INTO `tblapply` (`applicationID`, `fName`, `lName`, `mcUname`, `disUname`, `age`, `email`, `timezone`, `joinMonth`, `applymessage`, `dateapplied`) VALUES
(1, 'Jon', 'Sobier', 'David_designs', 'David The Creator', 27, 'jonsobier@outlook.com', 'Pacific Standard Time (PST)', 'June 2020', 'Because I am amazing and I love great cock which is what Guardian is hiding beneath his pants and one day I will ride him raw until he cums up inside of my tight ass.', '2020-08-16 01:19:23');

-- --------------------------------------------------------

--
-- Table structure for table `tblreport`
--

CREATE TABLE `tblreport` (
  `entryID` int(4) NOT NULL,
  `reportedName` varchar(200) COLLATE utf8_bin NOT NULL,
  `reportingName` varchar(200) COLLATE utf8_bin NOT NULL,
  `rulesBroken` varchar(200) COLLATE utf8_bin NOT NULL,
  `message` longtext COLLATE utf8_bin NOT NULL,
  `datereported` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tblreport`
--

INSERT INTO `tblreport` (`entryID`, `reportedName`, `reportingName`, `rulesBroken`, `message`, `datereported`) VALUES
(4, 'Guardian', 'David the Creator', 'every single one', 'hopefully the last time I have to test this damn form', '2020-08-17 09:10:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblappeal`
--
ALTER TABLE `tblappeal`
  ADD PRIMARY KEY (`appeal_ID`);

--
-- Indexes for table `tblapply`
--
ALTER TABLE `tblapply`
  ADD PRIMARY KEY (`applicationID`);

--
-- Indexes for table `tblreport`
--
ALTER TABLE `tblreport`
  ADD PRIMARY KEY (`entryID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblappeal`
--
ALTER TABLE `tblappeal`
  MODIFY `appeal_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblapply`
--
ALTER TABLE `tblapply`
  MODIFY `applicationID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblreport`
--
ALTER TABLE `tblreport`
  MODIFY `entryID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
