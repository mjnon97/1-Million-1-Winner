-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: ספטמבר 28, 2019 בזמן 11:56 PM
-- גרסת שרת: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1milion`
--

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL,
  `password` text COLLATE utf8_bin NOT NULL,
  `votes` int(11) NOT NULL,
  `photo` text COLLATE utf8_bin NOT NULL,
  `country` text COLLATE utf8_bin NOT NULL,
  `title` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- הוצאת מידע עבור טבלה `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `email`, `password`, `votes`, `photo`, `country`, `title`) VALUES
(1, 'Mhmad Saade', 'abos3ade@gmail.com', 'mjnon9797', 82, 'img/photoProfil/3.jpg', 'barazel', 'I photograph very instinctively. I\r\n                                    see how it is taken like that. I do not follow certain styles, philosophies or\r\n                                    teachers.'),
(2, 'Basem Bwerat', 'Basem@gmail.com', 'basem9797', 30, 'img/bg-img/2.jpg', 'israel', 'I photograph very instinctively. I\r\n                                    see how it is taken like that. I do not follow certain styles, philosophies or\r\n                                    teachers.'),
(3, 'Nsaar Saade', 'Nsar@gmail.com', 'nsar9797', 26, 'img/bg-img/12.jpg', 'spania', 'I photograph very instinctively. I\r\n                                    see how it is taken like that. I do not follow certain styles, philosophies or\r\n                                    teachers.'),
(4, 'Kamal Mhamid', 'Kamal@gmail.com', 'kamak9797', 24, 'img/bg-img/3.jpg', 'bakstan', 'I photograph very instinctively. I\r\n                                    see how it is taken like that. I do not follow certain styles, philosophies or\r\n                                    teachers.'),
(5, 'Ali Mostfa', 'abos3ade@gmail.com\r\n', 'mjnon1997', 30, 'img/photoProfil/8.jpg\r\n', 'Yapan', 'I photograph very instinctively. I\r\n                                    see how it is taken like that. I do not follow certain styles, philosophies or\r\n                                    teachers.');

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `allphoto`
--

CREATE TABLE `allphoto` (
  `id` int(11) NOT NULL,
  `photo` text COLLATE utf8_bin NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- הוצאת מידע עבור טבלה `allphoto`
--

INSERT INTO `allphoto` (`id`, `photo`, `userid`) VALUES
(1, 'img/allphoto/1.jpg', 1),
(2, 'img/allphoto/2.jpg', 1),
(3, 'img/allphoto/3.jpg', 1),
(4, 'img/allphoto/4.jpg', 1),
(5, 'img/allphoto/5.jpg', 1),
(6, 'img/allphoto/6.jpg', 1),
(7, 'img/allphoto/7.jpg', 1),
(8, 'img/allphoto/8.jpg', 1),
(9, 'img/allphoto/9.jpg', 1),
(10, 'img/allphoto/10.jpg', 1),
(11, 'img/allphoto/11.jpg', 1),
(12, 'img/allphoto/12.jpg', 1);

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_bin NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL,
  `phone` int(11) NOT NULL,
  `fromt` text COLLATE utf8_bin NOT NULL,
  `message` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- אינדקסים לטבלה `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- אינדקסים לטבלה `allphoto`
--
ALTER TABLE `allphoto`
  ADD PRIMARY KEY (`id`);

--
-- אינדקסים לטבלה `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `allphoto`
--
ALTER TABLE `allphoto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
