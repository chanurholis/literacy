-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 15, 2020 at 09:53 PM
-- Server version: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `literacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `post_date` varchar(20) NOT NULL,
  `posted` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `description`, `post_date`, `posted`) VALUES
(11, 'Programmer', '<p><strong>Programmer</strong>&nbsp;adalah seseorang yang mampu menyelesaikan masalah dengan menggunakan bahasa pemrograman. Mereka mempunyai banyak kemampuan terdiri dari berbagai level, mereka handal dalam menulis kode, mengerti algoritma dan sering bekerja sendiri.</p>\r\n', '21 October 2019', 'Administrator'),
(13, 'Jurnalistik', '<p><strong>JURNALISTIK</strong>Â adalah ilmu, teknik, dan proses yang berkenaan dengan penulisan berita, feature, dan artikel opini di media massa, baik media cetak, media elektronik, maupun media online (media siber). PengertianÂ <strong>jurnalistik</strong>Â pun terkait erat dengan kewartawanan dan media massa atau komunikasi media.</p>', '21 October 2019', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `is_active` varchar(10) NOT NULL,
  `role_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `email`, `password`, `is_active`, `role_id`) VALUES
(1, 'Administrator', 'Admin', 'admin@administrator.com', '$2y$10$pQy8VHh3Dop3V58R516R6uef8fOjxD4q.3RQ/8SF91geDbcHW7n3G', '1', '1'),
(11, 'Chacha Nurholis', 'Chanurholis', 'chachanurholis29@gmail.com', '$2y$10$MC.0YqCpofhMfd8954Rn3.De.oItCJz63CMuewN7Q.Zz8fRL3eyR2', '1', '2'),
(12, 'Zulfikar Augusta', 'Zul', 'zulfikarsubang89@gmail.com', '$2y$10$gii0gA2bCE7LV3YFTfqZHuZxWZMO6Kb5GOrdPaiDWIaKlgLqCpyGO', '1', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
