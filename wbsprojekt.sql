-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2020 at 12:46 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wbsprojekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_Users` int(11) NOT NULL,
  `first_name` tinytext NOT NULL,
  `last_name` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `pass` longtext NOT NULL,
  `occupation` tinytext NOT NULL,
  `interests` tinytext NOT NULL,
  `gender` tinytext NOT NULL,
  `user_text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_Users`, `first_name`, `last_name`, `email`, `pass`, `occupation`, `interests`, `gender`, `user_text`) VALUES
(18, 'UserOne', 'UserOne', 'userone@gmail.com', '$2y$10$cWDy54.maSuecfGfd9fSo.5Ol9j290XNvwsqEpVtCmW2awLQsOB/m', 'investor', 'web_dev', 'male', 'password user'),
(19, 'UserTwo', 'UserTwo', 'usertwo@gmail.com', '$2y$10$hzeQJrJ48QLzB/xTflMP3.Oq6LaDAzvAYnIiEpyWbjxoXmHqk8s/O', 'investor', 'soft_dev', 'male', 'password is user1'),
(20, 'wbs', 'wbs', 'wbs@gmail.com', '$2y$10$jvaFWO5eI3HhpA3TtMq.J.vVP3seK8PQwsKV9bEIEN7aMXhzPLzg.', 'employee', 'web_dev', 'male', 'Password is wbstraining');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_Users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_Users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
