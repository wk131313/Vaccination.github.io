-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 12:32 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaccine`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `a_id` int(11) NOT NULL,
  `vaccine` varchar(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`a_id`, `vaccine`, `hospital`, `username`, `email`, `date`, `time`) VALUES
(1, 'weqw', 'qwedqw', '3e23e2', 'r23r32r23', 'r3r23r3r', '3r3r3r3'),
(2, 'E-Shifa	', 'E-Shifa	', 'kjknkj', 'jjk jnj', '11/29/2022', '11:49 PM'),
(3, 'Agha Khan Hospital', 'Bahria International Hospital', 'ddwqdqwd', 'wdqwqwdq', '12/04/2022', '10:14 AM'),
(5, '', '22', 'Wajahat', 'wqk12@gmail.com', '12/09/2022', '4:05 AM'),
(6, 'hos', 's', 's', 'as', '12', '22');

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

CREATE TABLE `children` (
  `c_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `vaccine` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`c_id`, `name`, `age`, `vaccine`, `date`, `city`, `hospital`, `username`) VALUES
(1, 'Sohan', 2, 'Doss', '21/11/2022', 'Karachi', 'National', 'sk'),
(12, 'Mosa', 14, 'Fat', '21/2/2022', 'Karachi', 'Agha Khan Hospital', 'mk'),
(13, 'Usman', 21, 'Ror', '12/2/22', 'Karachi', 'City', 'Uk'),
(15, 'Osama', 12, 'HIV', '12/12/2022', 'Karachi', 'City', 'ok'),
(16, 'KHAN', 12, 'DHO', '19-Jan-2013', 'KARACHI', 'Siut', 'rk');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `h_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `vaccine` int(11) NOT NULL,
  `hospital_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`h_id`, `name`, `phone`, `email`, `address`, `city`, `vaccine`, `hospital_img`) VALUES
(22, 'Agha Khan', 214378783, 'agha@gmail.com', 'sector 9 Lahore', 'Lahore', 11, 'hosital1.jpg'),
(23, 'National', 213692121, 'nk12@gmail.com', 'Sector 9 Karachi', 'KArachi', 11, 'hosital4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `p_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`p_id`, `name`, `phone`, `email`, `address`, `username`, `city`) VALUES
(1, 'Huzaifa', 312312312, 'hq11@gmail.com', 'D-19 North', 'dk', 'Karachi'),
(10, 'Abdullah', 123123123, 'Ak123@gmail.com', '12 North', 'ab', 'Karachi'),
(14, 'Carolyn Beck', 1212112, 'hetohyb@mailinator.com', 'Fugit dignissimos d', 'radiqelu', 'Hic fuga Ipsum cum');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` int(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `f_name`, `l_name`, `phone`, `email`, `address`, `role`, `city`, `username`, `password`) VALUES
(1, 'Wajahat', 'Khan', 312312312, 'wk123@gmail,com', 'SEC-18 north', 1, 'Karachi', 'wk', 'admin'),
(5, 'Shahid', 'Khan', 312312, 'sk123@gmail.com', 'H-123 karachi', 1, 'Karachi', 'sk', 'admin'),
(6, 'Rasheed', 'khan', 12312, 'asdasd', 'J-123 Karachi', 1, 'Karachi', 'Rk', 'admin'),
(7, 'Usman', 'khan', 2147483647, 'uk21@gmail.com', 'U0123 North', 1, 'Karachi', 'uk', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `vaccines`
--

CREATE TABLE `vaccines` (
  `v_id` int(11) NOT NULL,
  `vname` varchar(255) NOT NULL,
  `img-vaccine` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccines`
--

INSERT INTO `vaccines` (`v_id`, `vname`, `img-vaccine`) VALUES
(8, 'Covid-19', 'v1.jpg'),
(9, 'Health Checkup', 'blog-2.jpg'),
(10, 'Toxoid Vaccines', 'blog-9.jpg'),
(11, 'Hepatitis B', 'blog-4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `children`
--
ALTER TABLE `children`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `vaccines`
--
ALTER TABLE `vaccines`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `children`
--
ALTER TABLE `children`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vaccines`
--
ALTER TABLE `vaccines`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
