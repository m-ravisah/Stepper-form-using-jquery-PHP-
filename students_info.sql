-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2022 at 07:19 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `students_info`
--

CREATE TABLE `students_info` (
  `id` int(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass_word` varchar(16) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `hobbies` varchar(15) NOT NULL,
  `tenth_marks` varchar(51) NOT NULL,
  `tenth_subject` varchar(51) NOT NULL,
  `twelve_marks` varchar(51) NOT NULL,
  `twelve_branch` varchar(51) NOT NULL,
  `grad_marks` varchar(51) NOT NULL,
  `grad_branch` varchar(51) NOT NULL,
  `mast_marks` varchar(51) NOT NULL,
  `mast_branch` varchar(51) NOT NULL,
  `profile_pic` varchar(20) NOT NULL,
  `tenth_doc` varchar(20) NOT NULL,
  `twelveth_doc` varchar(20) NOT NULL,
  `graduation_doc` varchar(20) NOT NULL,
  `masters_doc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
--


--
-- Indexes for table `students_info`
--
ALTER TABLE `students_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students_info`
--
ALTER TABLE `students_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
