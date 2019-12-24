-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2019 at 08:34 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gravity`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_campers`
--

CREATE TABLE `tbl_campers` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `nick_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `age` int(11) NOT NULL,
  `church` varchar(255) NOT NULL,
  `province` varchar(255) DEFAULT NULL,
  `group` int(11) DEFAULT NULL,
  `baptized` int(11) NOT NULL COMMENT '1 = Yes, 0 = Not',
  `additional_info` longtext NOT NULL,
  `paid` int(11) NOT NULL DEFAULT '0',
  `printed` int(11) NOT NULL DEFAULT '0',
  `picture` varchar(255) DEFAULT NULL,
  `date_registered` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_campers`
--

INSERT INTO `tbl_campers` (`id`, `full_name`, `nick_name`, `email`, `contact_no`, `birth_date`, `age`, `church`, `province`, `group`, `baptized`, `additional_info`, `paid`, `printed`, `picture`, `date_registered`) VALUES
(7, 'Karl Dale Arriba', 'tes', 'test@test.com', '0992939213', '1997-12-06', 21, 'Bacay', 'New', 1, 0, 'test', 1, 1, 'grayscale-photography-of-people-raising-hands-20147752.jpg', '2019-12-21'),
(8, 'Nicko', 'Villa', 'testTing@test', '0293023', '1996-12-13', 21, 'Lain Lugar', 'Test', 1, 0, 'Test', 1, 1, 'brown-cathedral-757422.jpg', '2019-12-21'),
(13, 'Test', 'Caloy', 'test@test.com', '0992939213', '1996-12-24', 21, 'Chercki', 'Test', 1, 0, '', 0, 0, '24231833_1973609479322933_6415092120204263777_n.jpg', '2019-12-23'),
(14, 'asds', 'dsd', 'dsad', 'dsads', '2019-12-25', 2, 'asd', 'ds', 1, 0, 'dad', 0, 0, '24231833_1973609479322933_6415092120204263777_n1.jpg', '2019-12-23'),
(15, 'Rhonda Levy', 'Sybil Mclean', 'hyzyju@mailinator.com', 'Et modi id laborios', '1925-05-20', 73, 'Velit qui vero alias', 'Quod mollitia dolore', 2, 1, 'Laboris sunt maiores', 0, 0, '10171109_943047899045964_7136779767159531100_n.jpg', '2019-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_church`
--

CREATE TABLE `tbl_church` (
  `church_id` int(11) NOT NULL,
  `church_name` varchar(255) NOT NULL,
  `status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_groups`
--

CREATE TABLE `tbl_groups` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `leader` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '0 = Trashed, 1 = Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_groups`
--

INSERT INTO `tbl_groups` (`group_id`, `group_name`, `leader`, `status`) VALUES
(1, 'Group 1', 8, 1),
(2, 'Group 2', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_campers`
--
ALTER TABLE `tbl_campers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_church`
--
ALTER TABLE `tbl_church`
  ADD UNIQUE KEY `church_id` (`church_id`);

--
-- Indexes for table `tbl_groups`
--
ALTER TABLE `tbl_groups`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_campers`
--
ALTER TABLE `tbl_campers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_church`
--
ALTER TABLE `tbl_church`
  MODIFY `church_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_groups`
--
ALTER TABLE `tbl_groups`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
