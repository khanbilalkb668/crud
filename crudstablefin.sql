-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 07:05 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `crudstablefin`
--

CREATE TABLE `crudstablefin` (
  `id` int(11) NOT NULL,
  `restaurant` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `executive` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crudstablefin`
--

INSERT INTO `crudstablefin` (`id`, `restaurant`, `email`, `mobile`, `executive`, `address`, `location`) VALUES
(21, 'EazyDiner', 'Eazydiner@gmail.com', '909090909090', 'anotne sir', 'siris road', 'dlf phase 3'),
(22, 'Zomato', 'Zomato@gmail.com', '898989876654', 'zomato waala', 'gurgaaon', 'gurugram'),
(23, 'swiggy ', 'swiggy@gmail.com', '76768898876', 'swiggy waala', 'nathupur road', 'gurugram'),
(24, 'Bikaner', 'Bikaner@gmail.com', '90987655433', 'Bikaner wala', 'delhi', 'Laxmi Nagar'),
(25, 'Aslam Butter Chicken', 'ButtenChiken@gmail.com', '8786754632', 'Aslam bhai', 'chandni chawk', 'delhi'),
(26, 'E-Momos', 'Momos@gmail.com', '1265767676', 'Momos bhai', 'Cp', 'New Delhi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crudstablefin`
--
ALTER TABLE `crudstablefin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crudstablefin`
--
ALTER TABLE `crudstablefin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
