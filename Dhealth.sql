-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 04, 2021 at 02:29 AM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Dhealth`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` varchar(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `firstname`, `lastname`, `gender`, `age`, `email`, `tel`) VALUES
(9, 'Napat', 'Lertjarad', 'female', '21', 'napat.ljr@mail.kmutt.ac.th', '0949392442'),
(10, 'Pawaris', 'Thamprasom', 'male', '22', 'neoy_2542@hotmail.com', '0816348324'),
(11, 'Warisara', 'Sang', 'female', '21', 'c@c.com', '0949392442');

-- --------------------------------------------------------

--
-- Table structure for table `TMSE`
--

CREATE TABLE `TMSE` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` varchar(5) NOT NULL,
  `caution` varchar(5) NOT NULL,
  `calculation` varchar(5) NOT NULL,
  `memorySet1` varchar(5) NOT NULL,
  `memorySet2` varchar(5) NOT NULL,
  `languageSet1` varchar(5) NOT NULL,
  `languageSet2` varchar(5) NOT NULL,
  `languageSet3` varchar(5) NOT NULL,
  `total` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `TMSE`
--

INSERT INTO `TMSE` (`id`, `name`, `age`, `caution`, `calculation`, `memorySet1`, `memorySet2`, `languageSet1`, `languageSet2`, `languageSet3`, `total`) VALUES
(9, 'Napat Lertjarad', '21', '6', '4', '3', '3', '5', '4', '5', NULL),
(10, 'Pawaris Thamprasom', '22', '0', '0', '0', '0', '5', '0', '5', NULL),
(11, 'Warisara Sang', '21', '6', '4', '3', '3', '5', '4', '5', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `TMSE`
--
ALTER TABLE `TMSE`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `TMSE`
--
ALTER TABLE `TMSE`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
