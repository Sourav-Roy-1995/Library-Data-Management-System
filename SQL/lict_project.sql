-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2019 at 01:07 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lict_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(40) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `image`) VALUES
(1, 'sourav', 'sourav@gmail.com', '1234', '');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(100) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `writer` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_name`, `writer`, `description`, `date`, `time`, `file`) VALUES
(7, 'Prothom Alo', 'Sunil Gongopadday', 'Historical', '2018/03/15 ', '01:29:07am ', '41WRZ0im+bL._SX346_BO1,204,203,200_.jpg'),
(9, 'Modhanno', 'humayun Ahmed', 'Uponnas', '2018/03/15 ', '02:48:50pm ', '1263034_0_original.jpg'),
(10, 'Aj Ami Kothao Jabo  Na', 'humayun Ahmed', 'Uponnas', '2018/03/15 ', '02:49:52pm ', '1464924999.jpg'),
(11, 'Aj Ami Kothao Jabo  Na', 'humayun Ahmed', 'Uponnas', '2018/03/15 ', '02:50:16pm ', 'images (1).jpg'),
(13, 'Ekjon Otimanobi', 'Zafor Iqbal', ' Science Fiction', '2018/03/15 ', '02:51:25pm ', 'Ekjon Oti Manobi By Muhammad Zafar Iqbal (www.ebookshead.com).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `country` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `firstname`, `lastname`, `mobile`, `country`, `subject`) VALUES
(1, 'Sourav', 'Roy', '01685383674', 'Bangladesh', 'this Is Sourav'),
(2, 'Sourav', 'Roy', '91823098123', 'Bangladesh', 'aSDD'),
(3, 'Anik', 'Roy', '01848281', 'canada', 'This is anik'),
(4, 'Anik', 'Roy', '01848281', 'canada', 'This is anik');

-- --------------------------------------------------------

--
-- Table structure for table `unique_visitors`
--

CREATE TABLE `unique_visitors` (
  `id` int(20) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(100) NOT NULL,
  `ip` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unique_visitors`
--

INSERT INTO `unique_visitors` (`id`, `date`, `time`, `ip`, `city`, `region`, `country`) VALUES
(143, '2019-04-02', '03:35:13', '::1', '', '', ''),
(144, '2019-04-02', '03:35:16', '::1', '', '', ''),
(145, '2019-04-02', '03:35:18', '::1', '', '', ''),
(146, '2019-04-02', '03:58:10', '::1', '', '', ''),
(147, '2019-04-02', '03:58:13', '::1', '', '', ''),
(148, '2019-04-02', '04:01:37', '::1', '', '', ''),
(149, '2019-04-02', '04:03:29', '::1', '', '', ''),
(150, '2019-04-02', '04:03:31', '::1', '', '', ''),
(151, '2019-04-02', '04:03:37', '::1', '', '', ''),
(152, '2019-04-02', '04:03:43', '::1', '', '', ''),
(153, '2019-04-02', '04:07:41', '::1', '', '', ''),
(154, '2019-04-02', '04:07:50', '::1', '', '', ''),
(155, '2019-04-02', '04:09:07', '::1', '', '', ''),
(156, '2019-04-02', '04:09:11', '::1', '', '', ''),
(157, '2019-04-02', '04:09:30', '::1', '', '', ''),
(158, '2019-04-02', '05:01:05', '::1', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unique_visitors`
--
ALTER TABLE `unique_visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `unique_visitors`
--
ALTER TABLE `unique_visitors`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
