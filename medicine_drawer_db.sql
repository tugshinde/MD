-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 06:35 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28
create database medicine_drawer_db;
use medicine_drawer_db;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicine_drawer_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `usrname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `usrname`, `password`) VALUES
(1, 'vk@gmail.com', 'vk');

-- --------------------------------------------------------

--
-- Table structure for table `brand_name`
--

CREATE TABLE `brand_name` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `brand_name`
--

INSERT INTO `brand_name` (`ID`, `NAME`, `user_id`) VALUES
(4, 'pfizer', 1),
(6, 'jhonson & jhonson', 1),
(7, 'jhonson & jhonson', 2),
(9, 'cipla ', 2),
(10, 'pfizer ', 2),
(11, 'cipla', 3),
(12, 'jhonson & jhonson', 3),
(13, 'pfizer', 3),
(14, 'Dabar Company', 2),
(17, 'ACIDITY', 1),
(19, 'seignior', 1);

-- --------------------------------------------------------

--
-- Table structure for table `catagory_name`
--

CREATE TABLE `catagory_name` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagory_name`
--

INSERT INTO `catagory_name` (`ID`, `NAME`, `user_id`) VALUES
(1, 'POWDER', 1),
(2, 'SYRUP', 1),
(3, 'TABLET', 1),
(4, 'gel', 1),
(9, 'TABLET', 2),
(10, 'SYRUP ', 2),
(12, 'CAPSULE', 2),
(13, 'TABLET', 3),
(14, 'POWDER', 3),
(15, 'SYRUP', 3),
(16, 'GEL', 3),
(17, 'SYRUP', 1),
(18, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(200) NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `PHON NO` bigint(20) NOT NULL,
  `MESSAGE` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `NAME`, `EMAIL`, `PHON NO`, `MESSAGE`) VALUES
(2, '', '+919975989591', 0, ''),
(3, '', '+919975989591', 0, ''),
(4, '', '+919975989591', 0, ''),
(5, '', '', 0, ''),
(6, 'vicky', 'bjbj@bj', 8890, ''),
(7, 'vicky', 'bjbj@bj', 8890, ''),
(8, 'Vikrant Patil', 'vikrantpatil6666@gmail.com', 919975989591, ''),
(9, 'Vikrant Patil', 'vikrantpatil6666@gmail.com', 919975989591, 'eafaefa3'),
(10, 'Vikrant Patil', 'vikrantpatil6666@gmail.com', 919975989591, 'n'),
(11, 'Vikrant Patil', 'vikrantpatil6666@gmail.com', 919975989591, 'n'),
(12, 'Vikrant Patil', 'vikrantpatil6666@gmail.com', 919975989591, 'saate'),
(13, 'vrushali', 'vrush@123', 9846573641, 'i want to buy the medicines'),
(14, '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `disease_name`
--

CREATE TABLE `disease_name` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disease_name`
--

INSERT INTO `disease_name` (`ID`, `NAME`, `user_id`) VALUES
(1, 'ACIDITY', 1),
(2, 'allergi', 1),
(3, 'cough', 1),
(4, 'cold', 1),
(5, 'aciditiy', 1),
(7, 'hddd', 2),
(8, 'uiu', 2),
(9, 'io', 2),
(10, 'ACIDITY', 3),
(11, 'allergi', 3),
(12, 'cold', 3),
(13, 'cough', 3);

-- --------------------------------------------------------

--
-- Table structure for table `drawer`
--

CREATE TABLE `drawer` (
  `ID` int(11) NOT NULL,
  `NAME` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drawer`
--

INSERT INTO `drawer` (`ID`, `NAME`, `user_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 1, 2),
(5, 2, 2),
(6, 3, 2),
(7, 4, 1),
(8, 5, 1),
(9, 6, 1),
(10, 7, 1),
(11, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `medicine_info`
--

CREATE TABLE `medicine_info` (
  `ID` int(11) NOT NULL,
  `company` int(11) NOT NULL,
  `catagory` int(11) NOT NULL,
  `disease` int(11) NOT NULL,
  `medicine` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine_info`
--

INSERT INTO `medicine_info` (`ID`, `company`, `catagory`, `disease`, `medicine`, `user_id`, `status`) VALUES
(1, 4, 2, 1, 'yy', 1, 'fixed'),
(3, 7, 9, 7, 'Pytt', 2, 'fixed'),
(4, 9, 10, 0, 'Gripe water', 2, 'fixed'),
(5, 10, 10, 7, 'ere', 2, 'nfixed'),
(6, 14, 10, 9, 'Dabar Chavanprash', 2, 'nfixed'),
(7, 0, 0, 0, 'oio', 2, 'nfixed'),
(8, 4, 1, 2, 'oooo', 1, 'fixed'),
(9, 17, 1, 4, 'kkk', 1, 'fixed'),
(10, 5, 1, 1, 'Powdepp', 1, 'fixed'),
(11, 6, 4, 3, 'omi gel', 1, 'fixed'),
(12, 5, 2, 2, '', 1, 'nfixed'),
(13, 17, 17, 0, 'OMEE', 1, 'fixed'),
(14, 17, 3, 0, 'ttrp', 1, 'nfixed');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_setup`
--

CREATE TABLE `medicine_setup` (
  `ID` int(11) NOT NULL,
  `MEDI_ID` int(11) NOT NULL,
  `DRAWER_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine_setup`
--

INSERT INTO `medicine_setup` (`ID`, `MEDI_ID`, `DRAWER_ID`) VALUES
(1, 11, 1),
(2, 1, 1),
(3, 4, 4),
(4, 2, 1),
(5, 9, 1),
(6, 3, 4),
(7, 10, 8),
(8, 8, 2),
(9, 0, 4),
(10, 13, 9);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `ID` int(11) NOT NULL,
  `mediid` int(11) NOT NULL,
  `pprice` int(11) NOT NULL,
  `sprice` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `totalqty` int(11) NOT NULL,
  `purchase_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`ID`, `mediid`, `pprice`, `sprice`, `quantity`, `totalqty`, `purchase_date`, `expiry_date`, `user_id`) VALUES
(2, 4, 10, 20, 300, 3000, '2021-11-20', '2022-02-03', 2),
(3, 2, 10, 20, 100, 1000, '2021-12-31', '2021-12-31', 1),
(6, 1, 15, 20, 40, 600, '2022-01-06', '2022-02-03', 1),
(7, 1, 11, 21, 20, 220, '2022-01-20', '2024-05-06', 1),
(8, 10, 40, 50, 50, 2000, '2022-01-20', '2022-01-30', 1),
(10, 11, 100, 120, 10, 1000, '2022-01-01', '2022-05-21', 1),
(11, 11, 90, 100, 10, 900, '2022-05-04', '2022-05-16', 1),
(12, 9, 100, 120, 10, 1000, '2022-05-03', '2022-05-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(11) NOT NULL,
  `MEDICAL NAME` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `FEES` bigint(200) NOT NULL,
  `OWNER NAME` varchar(100) NOT NULL,
  `OWNER MOBILE` bigint(20) NOT NULL,
  `OWNER EMAIL` varchar(100) NOT NULL,
  `ADRESSES` varchar(200) NOT NULL,
  `ADHAR` bigint(20) NOT NULL,
  `USERNAME` varchar(100) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `Image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `MEDICAL NAME`, `EMAIL`, `FEES`, `OWNER NAME`, `OWNER MOBILE`, `OWNER EMAIL`, `ADRESSES`, `ADHAR`, `USERNAME`, `PASSWORD`, `Image`) VALUES
(1, 'PULSE MEDICAL', 'pulsemedi111@gmail.com', 10000, 'aniket shah', 123567776, 'aniketshah123@gmail.com', 'shivaji chowk,latur', 44343444343, 'vrushali', '123', 'upload/1_regi.png'),
(2, 'apollo medical', 'apollomedi456@gmailcom', 0, 'vicky rathod', 2424545353, 'vicky_ra12@gmail.com', 'ganjgolai,latur', 3242324, 'swati', '123', 'upload/2_regi.png'),
(3, 'shivani medical', 'shivanimedi23@gmail.com', 10000, 'shivani patil', 737823423794, 'shivani_patil@gmail.com', 'main road,shubash chowk,latur', 3242324, 'shivani', '123', 'upload/3_regi.png');

-- --------------------------------------------------------

--
-- Table structure for table `sell_details`
--

CREATE TABLE `sell_details` (
  `ID` int(11) NOT NULL,
  `med_id` int(11) NOT NULL,
  `comp_id` int(11) NOT NULL,
  `catagory` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `exp_date` date NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `date` date NOT NULL,
  `cust_name` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sell_details`
--

INSERT INTO `sell_details` (`ID`, `med_id`, `comp_id`, `catagory`, `price`, `exp_date`, `quantity`, `total`, `date`, `cust_name`, `user_id`) VALUES
(2, 6, 0, 0, 20, '2023-10-12', 20, 400, '2022-01-27', 'vikrant', 1),
(3, 4, 6, 1, 15, '2022-01-27', 20, 300, '2022-01-06', 'aniket', 1),
(4, 3, 6, 1, 20, '2021-12-31', 122, 2440, '0000-00-00', 'vishal', 1),
(5, 8, 5, 1, 50, '2022-01-30', 10, 500, '2022-02-27', 'shivani', 1),
(6, 6, 4, 2, 20, '2022-02-03', 1, 20, '2022-02-28', 'tanuja', 1),
(7, 10, 6, 4, 120, '2022-05-21', 2342, 281040, '2022-02-28', 'alia', 1),
(8, 8, 5, 1, 50, '2022-01-30', 10, 500, '2022-03-04', 'Abc abc', 1),
(9, 10, 6, 4, 120, '2022-05-21', 10, 1200, '2022-05-16', 'bani', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `brand_name`
--
ALTER TABLE `brand_name`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `catagory_name`
--
ALTER TABLE `catagory_name`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `disease_name`
--
ALTER TABLE `disease_name`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `drawer`
--
ALTER TABLE `drawer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `medicine_info`
--
ALTER TABLE `medicine_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `medicine_setup`
--
ALTER TABLE `medicine_setup`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sell_details`
--
ALTER TABLE `sell_details`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brand_name`
--
ALTER TABLE `brand_name`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `catagory_name`
--
ALTER TABLE `catagory_name`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `disease_name`
--
ALTER TABLE `disease_name`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `drawer`
--
ALTER TABLE `drawer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `medicine_info`
--
ALTER TABLE `medicine_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `medicine_setup`
--
ALTER TABLE `medicine_setup`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sell_details`
--
ALTER TABLE `sell_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
