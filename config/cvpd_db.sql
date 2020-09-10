-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2020 at 10:25 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvpd_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `rapport_journalie`
--

CREATE TABLE `rapport_journalie` (
  `id` int(11) NOT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `About` varchar(255) DEFAULT NULL,
  `File_docs` text,
  `Username` varchar(255) DEFAULT NULL,
  `Created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `email`, `content`, `create_at`) VALUES
(1, '', '', '2020-09-10 09:24:29'),
(2, '', '', '2020-09-10 09:25:19'),
(3, 'chiruzabisimwa@gmail.com', 'voire si sa marche', '2020-09-10 09:27:09'),
(4, 'chiruzabisimwa@gmail.com', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste rerum aliquam autem facere vitae repellat culpa aperiam iusto? Provident quos et dicta aut aspernatur quia? Sed delectus repellendus ipsa dolorem!\n\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae quae cumque nam modi, atque, repellat iure laudantium doloribus, inventore natus beatae maxime et? Vel, minus, consequuntur voluptates ipsa ex explicabo consequatur laudantium cum rerum possimus error accusantium veritatis, unde ipsum fugit neque quos. Consequuntur blanditiis, delectus veniam itaque alias incidunt.', '2020-09-10 09:27:34'),
(5, 'sniper@gmail.com', 'quel est role CVPD', '2020-09-10 09:29:09'),
(6, 'noella@us.nyc', 'I would like to know if this ONG works truly? because i need to help people also', '2020-09-10 10:15:34'),
(7, 'sniper@gmail.com', 'jgkgkgj', '2020-09-10 10:17:14');

-- --------------------------------------------------------

--
-- Table structure for table `task_tbl`
--

CREATE TABLE `task_tbl` (
  `id` int(11) NOT NULL,
  `TaskName` varchar(255) DEFAULT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL,
  `CustomerName` varchar(100) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `PostalCode` int(64) DEFAULT NULL,
  `Country` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `CustomerName`, `Address`, `City`, `PostalCode`, `Country`) VALUES
(1, 'himbi', 'Goma', '131', 0, ''),
(2, 'Gisozi', 'Kigali', '250', 0, ''),
(3, 'University bughema', 'Bugema', '256', 0, ''),
(4, 'Downtown', 'Nairobi', '267', 0, ''),
(5, 'Airport', 'Dodoma', '249', 0, ''),
(6, 'DownTown', 'Abudabi', '204', 0, ''),
(7, 'himbi', 'Goma', '131', 0, ''),
(8, 'Gisozi', 'Kigali', '250', 0, ''),
(9, 'University bughema', 'Bugema', '256', 0, ''),
(10, 'Downtown', 'Nairobi', '267', 0, ''),
(11, 'Airport', 'Dodoma', '249', 0, ''),
(12, 'DownTown', 'Abudabi', '204', 0, ''),
(13, 'himbi', 'Goma', '131', 0, ''),
(14, 'Gisozi', 'Kigali', '250', 0, ''),
(15, 'University bughema', 'Bugema', '256', 0, ''),
(16, 'Downtown', 'Nairobi', '267', 0, ''),
(17, 'Airport', 'Dodoma', '249', 0, ''),
(18, 'DownTown', 'Abudabi', '204', 0, ''),
(19, 'himbi', 'Goma', '131', 0, ''),
(20, 'Gisozi', 'Kigali', '250', 0, ''),
(21, 'University bughema', 'Bugema', '256', 0, ''),
(22, 'Downtown', 'Nairobi', '267', 0, ''),
(23, 'Airport', 'Dodoma', '249', 0, ''),
(24, 'DownTown', 'Abudabi', '204', 0, ''),
(25, 'himbi', 'Goma', '131', 0, ''),
(26, 'Gisozi', 'Kigali', '250', 0, ''),
(27, 'University bughema', 'Bugema', '256', 0, ''),
(28, 'Downtown', 'Nairobi', '267', 0, ''),
(29, 'Airport', 'Dodoma', '249', 0, ''),
(30, 'DownTown', 'Abudabi', '204', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `post` varchar(100) NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `profile_pic` text NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_level` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`id`, `username`, `name`, `email`, `post`, `sexe`, `address`, `phone`, `pass`, `profile_pic`, `start`, `end`, `created_at`, `user_level`) VALUES
(1, 'chiruza', 'grace el bisimwa', 'chiruzabisimwa@gmail.com', 'Informaticien', 'M', 'Himbi 2 Goma no 131 avenu du lac', '+243976353543', '81dc9bdb52d04dc20036dbd8313ed055', '', '2020-09-15', '0000-00-00', '2020-09-04 08:56:09', 1),
(2, 'arnold', 'arnold djuma', 'arnolddjuma@gmail.com', '', '', 'Goma ndosho avenue de la mission', '1236547890', '81dc9bdb52d04dc20036dbd8313ed055', '', '0000-00-00', '0000-00-00', '2020-09-04 08:58:53', 1),
(3, 'chiruza12', 'grace el bisimwa12', 'chiruzabisimwa12@gmail.com', 'logisticien', '', 'Himbi 2 Goma no 131 avenu du lac', '0975848171', '81dc9bdb52d04dc20036dbd8313ed055', '', '0000-00-00', '0000-00-00', '2020-09-04 09:17:08', 0),
(4, 'cecile', 'cecile cvpd', 'cecile@cvpd.cd', 'Directeur', 'M', 'Himbi', '0994770680', '81dc9bdb52d04dc20036dbd8313ed055', '', '2020-02-05', '0000-00-00', '2020-09-04 09:21:32', 0),
(5, 'fautin', 'fautin cvpd', 'fautin@gm.cd', 'Logisticien', 'M', 'himbi', '+243999363404', '81dc9bdb52d04dc20036dbd8313ed055', '', '2015-01-02', '0000-00-00', '2020-09-04 09:23:06', 0),
(6, 'test', 'test new', 'test@example.com', '', '', 'vinofvion', '0975848171', '81dc9bdb52d04dc20036dbd8313ed055', '../public/images/Twitter.png', '0000-00-00', '0000-00-00', '2020-09-06 11:53:35', 0),
(7, 'Amani', 'Wande', 'amaninuwase@gmail.rw', 'Receptioniste', 'M', 'ndosho rue 30juin', '0784545120', '81dc9bdb52d04dc20036dbd8313ed055', '../public/images/GitHub.png', '2020-09-08', '0000-00-00', '2020-09-06 12:10:48', 0),
(8, 'bora', 'Bora rulundo', 'bora@gmail.com', 'Comptable', 'F', 'Himbi 2 Goma no 131 avenu du lac', '45698712', '81dc9bdb52d04dc20036dbd8313ed055', '../public/images/GitHub.png', '2020-09-14', '0000-00-00', '2020-09-06 12:12:46', 0),
(9, 'Grace', 'Wande', 'chiruzabisimwa1@gmail.com', 'Directeur', 'M', 'Himbi 2 Goma no 131 avenu du lac', '0976353543', '81dc9bdb52d04dc20036dbd8313ed055', '../public/images/Twitter.png', '2020-09-29', '0000-00-00', '2020-09-06 12:21:13', 0),
(10, 'mak', 'Arnold2', 'mak@gmail.com', 'Informaticien', 'M', 'Goma', '0975848171', '81dc9bdb52d04dc20036dbd8313ed055', '../public/images/Twitter.png', '2020-09-22', '0000-00-00', '2020-09-06 12:22:04', 0),
(11, 'update', 'try try name', 'try@gmail.com', 'Directeur', 'M', 'Rwanda Gisenyi', '0975848171', '81dc9bdb52d04dc20036dbd8313ed055', '../public/images/Twitter.png', '2020-09-22', '0000-00-00', '2020-09-06 12:23:10', 0),
(12, 'try', 'try try name', 'try@gmail.com', 'Coordon', 'M', 'Rwanda Gisenyi', '0975848171', '81dc9bdb52d04dc20036dbd8313ed055', '../public/images/GitHub.png', '2020-09-22', '0000-00-00', '2020-09-06 12:24:28', 0),
(13, 'alice update', 'alice mbula', 'alice@gmail.com', 'Directeur', 'M', 'Goma  office 2', '099698754', '81dc9bdb52d04dc20036dbd8313ed055', '../public/images/Twitter.png', '2020-09-14', '0000-00-00', '2020-09-07 11:15:26', 0),
(14, 'test2', 'test nom', 'test@gmail.com', 'Informaticien', 'F', 'Goma bukavu', '0976353543', '81dc9bdb52d04dc20036dbd8313ed055', '../public/images/GitHub.png', '2020-09-06', '0000-00-00', '2020-09-10 08:37:16', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rapport_journalie`
--
ALTER TABLE `rapport_journalie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_tbl`
--
ALTER TABLE `task_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rapport_journalie`
--
ALTER TABLE `rapport_journalie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `task_tbl`
--
ALTER TABLE `task_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
