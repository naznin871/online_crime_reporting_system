-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2020 at 07:16 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_crime_report`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `user_name`, `password`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin'),
(2, 'vbb', 'aa', ''),
(4, 'hello@gmail.com', 'addd', ''),
(6, '', '', ''),
(7, '1', 'a', ''),
(8, '1', '1', ''),
(10, '111', '111', ''),
(11, 'xxx@gg.com', 'aaa', ''),
(12, 'asd223@gmail.com', 'rakibhgh', ''),
(14, 'ass@gmail.com', 'qqq', ''),
(21, 'abc@gmail.com', 'dd', ''),
(24, 'aaa@gmail.com', 'djkfhkdj', '');

-- --------------------------------------------------------

--
-- Table structure for table `citizendb`
--

CREATE TABLE `citizendb` (
  `user_id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phn_no` int(15) NOT NULL,
  `citizen_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `citizendb`
--

INSERT INTO `citizendb` (`user_id`, `name`, `email`, `phn_no`, `citizen_id`) VALUES
(1, 'nourin neela', 'nourinneela@gmail.com', 1706018876, 13),
(2, 'naznin sultana', 'nazninsultana@gmail.com', 170595624, 11),
(4, 'Serena Whitaker', 'wejisyzy@mailinator.com', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `complaintdb`
--

CREATE TABLE `complaintdb` (
  `complaint_id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `loc_crime` varchar(50) NOT NULL,
  `type_crime` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaintdb`
--

INSERT INTO `complaintdb` (`complaint_id`, `name`, `email`, `loc_crime`, `type_crime`, `date`, `phone`, `image`) VALUES
(2, 'bristy', 'bristy@gmail.com', 'dhaka,banasree', 'kidnapping', '13-12-2020', '01947545244', '1608616791-index.jpg'),
(3, 'banna', 'banna35-2443@gmail.c', 'rajshahi', 'robbery', '02-03-19', '0170607186', ''),
(5, 'Noel Shepherd', '154de3f32d8fcc685510', 'Khulna', 'Rape', '09-Apr-1993', '+1 (764) 282-18', ''),
(6, 'Clementine Howard', 'db8479e1e8015b4f92b9', 'Dhaka', 'Robbery', '29-Oct-1971', '+1 (807) 319-48', ''),
(7, 'Clementine Howard', 'db8479e1e8015b4f92b9', 'Dhaka', 'Robbery', '29-Oct-1971', '+1 (807) 319-48', ''),
(8, 'Nell Valencia', '9de0cc4d22836f2879a2', 'Dhaka', 'Murder', '25-Dec-1984', '+1 (882) 712-96', ''),
(9, 'Aidan Mills', 'c6b728299fcdba17cbf9', 'Location Of Crime', 'Pick Pocket', '21-Apr-1994', '+1 (575) 609-98', ''),
(11, 'Lila Weiss', 'af18ac9fa11813eed4ad', 'Rajshahi', 'Theft', '29-Mar-1994', '+1 (492) 174-86', ''),
(12, 'Lila Weiss', 'af18ac9fa11813eed4ad', 'Rajshahi', 'Theft', '29-Mar-1994', '+1 (492) 174-86', ''),
(13, 'Lila Weiss', 'af18ac9fa11813eed4ad', 'Rajshahi', 'Theft', '29-Mar-1994', '+1 (492) 174-86', ''),
(14, 'nurunnahar khanam', 'd41d8cd98f00b204e980', 'Dhaka', 'Robbery', '12-01-2020', '01705558822', ''),
(15, 'Walker Bradshaw', '1a837c5a5d0d96d203e7', 'Chittagong', 'Kidnapping', '05-Jul-1970', '+1 (574) 167-10', ''),
(16, 'Walker Bradshaw', '1a837c5a5d0d96d203e7', 'Chittagong', 'Kidnapping', '05-Jul-1970', '+1 (574) 167-10', ''),
(17, 'Kieran Rodriguez', '1ce738a5b3db107762f4', 'Dhaka', 'Theft', '27-Mar-1992', '+1 (505) 241-76', ''),
(18, 'Isabelle James', '2991f821565a097a84ba', 'Location Of Crime', 'Murder', '30-Aug-2004', '+1 (883) 156-86', ''),
(19, 'Damian Richard', '3a41a017ae68ec8b3d29', 'Sylhet', 'Molestation', '23-Jun-2001', '+1 (357) 908-46', ''),
(20, 'Adrienne Ray', 'e70b00e24c0d668f5f03', 'Sylhet', 'Missing Person', '21-Mar-1993', '+1 (821) 988-40', ''),
(21, 'Gregory Henderson', 'dd0cb642c51b15544e0a', 'Sylhet', 'Missing Person', '08-Mar-2011', '+1 (627) 236-60', ''),
(22, 'Paul Bowman', '5f699619ea11efcc6ad5', 'Chittagong', 'Theft', '21-Feb-1989', '+1 (374) 823-36', ''),
(23, 'Darius Watkins', '2d1c24085c479687bb68', 'Rajshahi', 'Kidnapping', '28-Aug-1970', '+1 (642) 754-28', ''),
(24, 'Nathaniel Carver', '9551b46624420b60df54', 'Khulna', 'Molestation', '09-May-1972', '+1 (265) 517-46', ''),
(25, 'Bo Mccoy', '552673609dfa8bdd05e1', 'Khulna', 'Types Of Crime', '08-Jun-1982', '+1 (583) 374-36', ''),
(26, 'Reese Robbins', '9b1a00cff0626f1bbbd7', 'Chittagong', 'Theft', '15-Jul-2014', '+1 (251) 454-61', '');

-- --------------------------------------------------------

--
-- Table structure for table `complaint_status`
--

CREATE TABLE `complaint_status` (
  `complaint_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `complaint` text NOT NULL,
  `complaint_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint_status`
--

INSERT INTO `complaint_status` (`complaint_id`, `name`, `email`, `complaint`, `complaint_status`) VALUES
(10, 'neela', 'neela35@gmail.com', 'dfgeredfsddawreeqgdqfsd', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `emergency_complaint`
--

CREATE TABLE `emergency_complaint` (
  `cpt_id` int(50) NOT NULL,
  `nid` int(50) NOT NULL,
  `loc_crime` varchar(50) NOT NULL,
  `type_crime` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `date_crime` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emergency_complaint`
--

INSERT INTO `emergency_complaint` (`cpt_id`, `nid`, `loc_crime`, `type_crime`, `phone`, `date_crime`) VALUES
(3, 1123456789, 'sylhet', 'theft', '017525255', '1-2-2020'),
(6, 2147483647, 'Khulna', 'Kidnapping', '1845769588', '2019-10-03'),
(9, 0, 'Sylhet', 'Types Of Crime', '82', '1988-12-26'),
(10, 0, 'Chittagong', 'Theft', '51', '2016-12-29'),
(11, 0, 'Chittagong', 'Theft', '51', '2016-12-29'),
(12, 0, 'Location Of Crime', 'Pick Pocket', '76', '1972-12-25'),
(13, 0, 'Location Of Crime', 'Molestation', '100', '1979-07-27'),
(14, 0, 'Dhaka', 'Kidnapping', '26', '1985-09-23'),
(15, 0, 'Location Of Crime', 'Theft', '43', '2012-02-03'),
(16, 0, 'Dhaka', 'Missing Person', '55', '1997-05-31'),
(17, 0, 'Khulna', 'Murder', '38', '1995-09-14'),
(18, 0, 'Chittagong', 'Rape', '31', '1975-07-03');

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

CREATE TABLE `loginform` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`id`, `user`, `pass`) VALUES
(1, 'user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `registration_form`
--

CREATE TABLE `registration_form` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `nid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration_form`
--

INSERT INTO `registration_form` (`id`, `name`, `pwd`, `email`, `district`, `phone`, `gender`, `nid`) VALUES
(1, 'Sawyer Workman', '2284d8b8dd757cebce75bd34d9c68e4b', 'vocary@mailinator.com', 'Dhaka', '12', 'Gender', 0),
(2, 'Isabelle Gomez', '8765940b0a79f0b6b941cf7743de0a67', 'wykisuwy@mailinator.com', 'Khulna', '28', 'Male', 0),
(3, 'Damian Bradley', 'dcc0cb22eab597acd333524b0b8c1662', 'wyjonimeva@mailinator.com', 'Chittagong', '82', 'Female', 0),
(4, 'Wynne Aguirre', 'd1befb26a431195c7f03016ec57a981a', 'fylud@mailinator.com', 'Khulna', '49', 'Male', 0),
(5, 'Cade Mcguire', 'cb0c108d9648fc0f4560784591297f28', 'wixo@mailinator.com', 'Sylhet', '24', 'Male', 0),
(6, 'Britanney Sparks', 'c16d545862037ba75f9f578c6e811ebf', 'locys@mailinator.com', 'Sylhet', '29', 'Female', 0),
(7, 'naznin', '4a68da16264aac5c178cd4685c6bafe9', 'nazninsultanabonna@gmail.com', 'Rajshahi', '01706018876', 'Female', 259828),
(8, 'neela', 'fff4dca67f359752ed6739334477664a', 'nourinneela@gmail.com', 'Khulna', '154871887', 'Female', 287548724),
(9, 'Abigail West', '619584b2aeee499806e7cb856ef1ac45', 'cacerul@mailinator.com', 'Dhaka', '32', 'Male', 0),
(10, 'Rhiannon Vinson', 'da2c1399e88476362275e154ee7b04d2', 'jekuzagu@mailinator.com', 'Rajshahi', '29', 'Female', 0),
(11, 'kawser', '6058d0498db27f1932709a7d1c320b0d', 'kawser@gmail.com', 'Rajshahi', '0145896895', 'Male', 2147483647),
(12, 'bristy', '1797eb6bafc20c94a47ca09c3f2ad5f9', 'kuzocy@mailinator.com', 'Chittagong', '22', 'Female', 0),
(13, 'tom', '34b7da764b21d298ef307d04d8152dc5', 'hivafuwuja@mailinator.com', 'Rajshahi', '3', 'Male', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pwd` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `district` varchar(26) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `nid` int(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `user_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `police_id` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(199) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`user_id`, `name`, `email`, `phone`, `police_id`, `username`, `password`) VALUES
(8, 'Tonmoy Das', 'tonmoy@gmail.com', '01645678909', 110, '', ''),
(15, 'Monirul Islam', 'monirul35@gmail.com', '09876543212', 31, '', ''),
(17, 'Sumon Hassan', 'summon@gmail.com', '01950986687', 31, '', ''),
(18, 'naznin sultana', 'nazninsultana@gmail.com', '01706018879', 2443, '', ''),
(19, 'nourin neela', 'nourinneela@gmail.com', '0170520505', 11, '', ''),
(20, 'Elaine Alvarado', 'bicog@mailinator.com', '+1 (462) 811-2254', 111, 'banna', 'e10adc3949ba59abbe56e057f20f883e'),
(21, 'Hakeem Harrington', 'nozysy@mailinator.com', '+1 (684) 887-9424', 0, 'senom', '016ced17b33750cd40af15b4c812bae7'),
(22, 'Brooke Avery', 'guxivimed@mailinator.com', '+1 (485) 646-7053', 0, 'bani', '497a333d611f80dfddb5407f81632a85');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `citizendb`
--
ALTER TABLE `citizendb`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `complaintdb`
--
ALTER TABLE `complaintdb`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `complaint_status`
--
ALTER TABLE `complaint_status`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `emergency_complaint`
--
ALTER TABLE `emergency_complaint`
  ADD PRIMARY KEY (`cpt_id`);

--
-- Indexes for table `loginform`
--
ALTER TABLE `loginform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration_form`
--
ALTER TABLE `registration_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `citizendb`
--
ALTER TABLE `citizendb`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `complaintdb`
--
ALTER TABLE `complaintdb`
  MODIFY `complaint_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `complaint_status`
--
ALTER TABLE `complaint_status`
  MODIFY `complaint_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `emergency_complaint`
--
ALTER TABLE `emergency_complaint`
  MODIFY `cpt_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `loginform`
--
ALTER TABLE `loginform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration_form`
--
ALTER TABLE `registration_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
