-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2020 at 06:24 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citrustest`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `text` varchar(250) NOT NULL,
  `isApproved` bit(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `text`, `isApproved`) VALUES
(1, 'Marc', 'marc@gmail.com', 'This is comment of Marc', b'01'),
(2, 'Steve', 'steve@gmail.com', 'This is comment of Steve', b'01'),
(3, 'Josh', 'josh@gmail.com', 'This is comment of Josh', b'01'),
(10, 'Lily', 'lily@gmail.com', 'This is Liliy\'s comment', b'01'),
(29, 'Peter', 'peter@gmail.com', 'Hello i am Peter i like fruits.', b'00'),
(30, 'Nikola', 'nikola@gmail.com', 'Hey this company is very cool', b'00'),
(31, 'Zane', 'zane@gmail.com', 'Well, this look really nice', b'01'),
(32, 'Henry', 'hery@gmail.com', 'Ok, this is nice.', b'00');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `imgsrc` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `imgsrc`, `title`, `description`) VALUES
(1, 'img1.jpg', 'Product 1', 'Descriprion of product 1'),
(2, 'img2.jpg', 'Product 2', 'Descriprion of product 2'),
(3, 'img3.jpg', 'Product 3', 'Description of product 3'),
(4, 'img4.jpg', 'Product 4', 'Description of product 4'),
(5, 'img5.jpg', 'Product 5', 'Description of product 5'),
(6, 'img6.jpg', 'Product 6', 'Description of product 6'),
(7, 'img7.jpg', 'Product 7', 'Description of product 7'),
(8, 'img8.jpg', 'Product 8', 'Description of product 8'),
(9, 'img9.jpg', 'Product 9', 'Description of product 9');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$x/MY.xCyShvqmp3vgwYOnOpSsovd9GUc7cHLOxC5wMreAwPKlZSOm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
