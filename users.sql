-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 05:36 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `surname`, `email`, `gender`, `dob`) VALUES
(23, 'Kailash', 'e10adc3949ba59abbe56e057f20f883e', 'Kailash', 'Ichigo', 'kai@ichigo.com', 'male', '2000-11-12'),
(24, 'Christophe', 'e10adc3949ba59abbe56e057f20f883e', 'Nicolas', 'Fidele', 'asdf@gmail.com', 'male', '1983-12-31'),
(25, 'Dupouy', 'e10adc3949ba59abbe56e057f20f883e', 'Dupouy', 'Jean', 'asdf@gmail.com', 'male', '1983-12-31'),
(26, 'user123', 'e10adc3949ba59abbe56e057f20f883e', 'user', '123', 'asdf@gmail.com', 'male', '1983-12-31'),
(27, 'user1', 'e10adc3949ba59abbe56e057f20f883e', 'user', '1', 'asdfasdf@asdfasdf.com', 'male', '1983-12-31'),
(28, 'user2', 'e10adc3949ba59abbe56e057f20f883e', 'user', '2', 'asdfasdf@asdfasdf.com', 'male', '1983-12-31'),
(29, 'user3', 'e10adc3949ba59abbe56e057f20f883e', 'user3', 'user3', 'asdfasdf@asdfasdf.com', '', '1983-12-31'),
(30, 'user5', 'e10adc3949ba59abbe56e057f20f883e', '123', '123', 'asdfasdf@asdfasdf.com', 'male', '1983-12-31'),
(31, 'user6', 'e10adc3949ba59abbe56e057f20f883e', 'asdf', 'asdf', 'asdfasdf@asdfasdf.com', '', '0000-00-00'),
(32, 'Minouche', 'e10adc3949ba59abbe56e057f20f883e', 'Minouche', 'Pascal', 'asdfasdf@asdfasdf.com', 'male', '1983-12-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
