-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2022 at 02:48 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collegeclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `aunm` varchar(50) NOT NULL,
  `apassword` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aunm`, `apassword`) VALUES
(1, 'pmgohil45', 'pm21052003');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `lid` int(11) NOT NULL,
  `lunm` varchar(250) DEFAULT NULL,
  `lemail` varchar(250) DEFAULT NULL,
  `lpassword` varchar(11) DEFAULT NULL,
  `lnumber` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`lid`, `lunm`, `lemail`, `lpassword`, `lnumber`) VALUES
(46, 'pmgohil', 'pmgohil45@gmail.com', '21052003', 2147483647),
(50, 'p', 'aa@gmail.com', 'aa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub1pdfdownload`
--

CREATE TABLE `sub1pdfdownload` (
  `s1id` int(11) NOT NULL,
  `s1name` varchar(250) NOT NULL,
  `s1pdf` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub1pdfdownload`
--

INSERT INTO `sub1pdfdownload` (`s1id`, `s1name`, `s1pdf`) VALUES
(97, 'Abc', 'uploadpdf/Pm Resume_CV.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `sub2pdfdownload`
--

CREATE TABLE `sub2pdfdownload` (
  `s2id` int(11) NOT NULL,
  `s2name` varchar(250) NOT NULL,
  `s2pdf` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub3pdfdownload`
--

CREATE TABLE `sub3pdfdownload` (
  `s3id` int(11) NOT NULL,
  `s3name` varchar(250) NOT NULL,
  `s3pdf` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub4pdfdownload`
--

CREATE TABLE `sub4pdfdownload` (
  `s4id` int(11) NOT NULL,
  `s4name` varchar(250) NOT NULL,
  `s4pdf` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE `syllabus` (
  `sid` int(11) NOT NULL,
  `sname` varchar(250) NOT NULL,
  `spdf` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`lid`),
  ADD UNIQUE KEY `lemail` (`lemail`);

--
-- Indexes for table `sub1pdfdownload`
--
ALTER TABLE `sub1pdfdownload`
  ADD PRIMARY KEY (`s1id`);

--
-- Indexes for table `sub2pdfdownload`
--
ALTER TABLE `sub2pdfdownload`
  ADD PRIMARY KEY (`s2id`);

--
-- Indexes for table `sub3pdfdownload`
--
ALTER TABLE `sub3pdfdownload`
  ADD PRIMARY KEY (`s3id`);

--
-- Indexes for table `sub4pdfdownload`
--
ALTER TABLE `sub4pdfdownload`
  ADD PRIMARY KEY (`s4id`);

--
-- Indexes for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `sub1pdfdownload`
--
ALTER TABLE `sub1pdfdownload`
  MODIFY `s1id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `sub2pdfdownload`
--
ALTER TABLE `sub2pdfdownload`
  MODIFY `s2id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sub3pdfdownload`
--
ALTER TABLE `sub3pdfdownload`
  MODIFY `s3id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub4pdfdownload`
--
ALTER TABLE `sub4pdfdownload`
  MODIFY `s4id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `syllabus`
--
ALTER TABLE `syllabus`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
