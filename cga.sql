-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2017 at 10:01 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+5:30";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cga`
--

-- --------------------------------------------------------

--
-- Table structure for table `ignored`
--

CREATE TABLE `ignored` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `usn` varchar(20) NOT NULL,
  `certificateName` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `processed`
--

CREATE TABLE `processed` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `usn` varchar(20) NOT NULL,
  `certificateName` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `usn` varchar(20) NOT NULL,
  `fathersname` varchar(50) NOT NULL,
  `certificateName` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobileno` varchar(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `name`, `usn`, `fathersname`, `certificateName`, `email`, `mobileno`, `message`) VALUES
(2, 'Sanath', '4MC14EC062', '', 'Birth Certificate', '', '', 'I want a certificate.'),
(3, 'Sanath', '4mc14ec062', '', 'Birth Certificate', '', '', 'I need it.'),
(4, 'Akshatha', '4MC14CS003', '', 'College Certificate', '', '', 'please provide'),
(5, 'adad', '6565', '', 'Birth Certificate', '', '', ''),
(6, 'Umesh', '4MC14ec062', '', 'School Certificate', '', '', 'I need it.'),
(7, 'Akshatha', '4MC14CS003', 'Sudarshan', 'Character Certificat', 'akshatha.s2496@gmail', '7411603791', 'Give certificate'),
(8, 'Akshatha', '4MC14CS003', 'Sudarshan', 'Character Certificat', 'akshatha.s2496@gmail', '7411603791', 'provide certi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ignored`
--
ALTER TABLE `ignored`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `processed`
--
ALTER TABLE `processed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ignored`
--
ALTER TABLE `ignored`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `processed`
--
ALTER TABLE `processed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
