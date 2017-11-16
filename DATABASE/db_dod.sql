-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2017 at 12:30 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dod`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id_answer` int(11) NOT NULL,
  `answer` text NOT NULL,
  `id_user` int(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_answer_to` int(255) NOT NULL,
  `voting` int(255) NOT NULL,
  `is_correct` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id_answer`, `answer`, `id_user`, `created_at`, `id_answer_to`, `voting`, `is_correct`) VALUES
(1, 'Kasitau ndak ya?', 2, '2017-11-15 21:07:57', 2, 0, 0),
(2, 'Just google for it..', 4, '2017-11-15 21:07:57', 1, 0, 0),
(3, 'mySqli mah gampang aja gan.', 4, '2017-11-16 01:26:11', 2, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ask`
--

CREATE TABLE `ask` (
  `id_asking` int(255) NOT NULL,
  `asking` text NOT NULL,
  `id_user` int(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `point` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ask`
--

INSERT INTO `ask` (`id_asking`, `asking`, `id_user`, `created_at`, `point`) VALUES
(1, 'How to Integrated MongoDB and Codeigniter', 1, '2017-11-15 00:00:00', 0),
(2, 'Mysqli and mysql and PDO. What such an different?', 3, '2017-11-15 21:04:31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(255) NOT NULL,
  `comment` text NOT NULL,
  `id_user` int(255) NOT NULL,
  `id_com_to_answer` int(255) NOT NULL,
  `id_com_to_ask` int(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id_comment`, `comment`, `id_user`, `id_com_to_answer`, `id_com_to_ask`, `created_at`) VALUES
(1, 'Pakek server apa gan?', 1, 0, 1, '2017-11-15 21:16:15'),
(3, 'You need to provide to us what server you are using', 5, 0, 1, '2017-11-16 00:21:00'),
(5, 'Kasitau lah, lu jadi olang jangan pelit laa..', 3, 1, 0, '2017-11-16 01:12:49'),
(6, 'Google taroos.', 2, 2, 0, '2017-11-16 01:13:56'),
(7, 'Lah mau gimana lagi cobak kalo bukan google?', 1, 2, 0, '2017-11-16 01:14:42'),
(8, 'Tau deh ah', 3, 0, 1, '2017-11-16 01:35:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name`) VALUES
(1, 'Angga'),
(2, 'Badrul'),
(3, 'Carli'),
(4, 'Dany'),
(5, 'Elan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id_answer`);

--
-- Indexes for table `ask`
--
ALTER TABLE `ask`
  ADD PRIMARY KEY (`id_asking`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id_answer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ask`
--
ALTER TABLE `ask`
  MODIFY `id_asking` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
