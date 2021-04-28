-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2021 at 01:26 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rfid_read`
--

-- --------------------------------------------------------

--
-- Table structure for table `p_table`
--

CREATE TABLE `p_table` (
  `product_code` int(11) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `p_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_table`
--

INSERT INTO `p_table` (`product_code`, `p_name`, `p_description`) VALUES
(1, 'data card', 'this is the white card rfid tag'),
(2, 'vit card', 'this is thee card issued by VIT');

-- --------------------------------------------------------

--
-- Table structure for table `rfid_data`
--

CREATE TABLE `rfid_data` (
  `Member_ID` varchar(15) NOT NULL,
  `allowed_members` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rfid_data`
--

INSERT INTO `rfid_data` (`Member_ID`, `allowed_members`) VALUES
('1442918850', 1),
('1442918850', 2),
('1442918850', 3),
('1442918850', 4),
('1442918850', 5),
('1442918850', 6),
('4846813', 7);

-- --------------------------------------------------------

--
-- Table structure for table `r_table`
--

CREATE TABLE `r_table` (
  `tag_no` int(11) NOT NULL,
  `product_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `r_table`
--

INSERT INTO `r_table` (`tag_no`, `product_code`) VALUES
(1442918850, 1),
(4846813, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rfid_data`
--
ALTER TABLE `rfid_data`
  ADD PRIMARY KEY (`allowed_members`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rfid_data`
--
ALTER TABLE `rfid_data`
  MODIFY `allowed_members` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
