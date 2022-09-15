-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 16, 2022 at 09:29 PM
-- Server version: 10.3.22-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patemitm_bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_info`
--

CREATE TABLE `book_info` (
  `book_id` int(6) NOT NULL,
  `book_name` varchar(20) NOT NULL,
  `author` varchar(20) NOT NULL,
  `price` int(3) NOT NULL,
  `description` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_info`
--

INSERT INTO `book_info` (`book_id`, `book_name`, `author`, `price`, `description`) VALUES
(4, 'bookhello', 'bookhello ', 20, 'klckld'),
(2, 'books', 'book', 88, 'nkjndknkj'),
(3, 'data', 'world', 10, 'data is good'),
(1, 'dcd', 'frfrfr', 32, 'nfvkjfnkv'),
(5, 'm', 'knkmk', 545, 'nkkkknkkn'),
(6, 'six', 'sixth', 80, 'kjkjkjjkjk'),
(7, 'seven', 'seven', 56, 'seven'),
(8, 'eight', 'eight', 5656, 'njdnjdnjknjk'),
(9, 'nine', 'ninth', 40, 'nkjdijhdihdi'),
(10, 'ten', 'tenth', 1212, 'kjhjkhkjl');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_info`
--
ALTER TABLE `book_info`
  ADD PRIMARY KEY (`book_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
