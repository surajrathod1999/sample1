-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2020 at 05:14 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `department`
--

-- --------------------------------------------------------

--
-- Table structure for table `d_details`
--

CREATE TABLE `d_details` (
  `id` int(11) NOT NULL,
  `d_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_details`
--

INSERT INTO `d_details` (`id`, `d_name`) VALUES
(1, 'Data Entry'),
(2, 'Programmer'),
(3, 'App Developer'),
(4, 'Networking');

-- --------------------------------------------------------

--
-- Table structure for table `intern_details`
--

CREATE TABLE `intern_details` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `department_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intern_details`
--

INSERT INTO `intern_details` (`id`, `name`, `email`, `phone`, `department_id`) VALUES
(1, 'riya ', 'riya@gmail.com', '2147483647', 1),
(2, 'haris kumar', 'haris@gmail.com', '2147483647', 2),
(3, 'haris kumar', 'haris@gmail.com', '2147483647', 2),
(5, 'anita', 'anita@gmail.com', '2147483647', 3),
(7, 'hey', 'hey@gmail.com', '2147483647', 3),
(8, 'hyyhyy', 'hy@gmail.com', '9807902208', 3),
(10, 'haris kumar', 'haris@gmail.com', '9807900899', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `d_details`
--
ALTER TABLE `d_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intern_details`
--
ALTER TABLE `intern_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `d_details`
--
ALTER TABLE `d_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `intern_details`
--
ALTER TABLE `intern_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `intern_details`
--
ALTER TABLE `intern_details`
  ADD CONSTRAINT `intern_details_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `d_details` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
