-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2020 at 01:13 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `listsong`
--

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `linksong` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `name`, `author`, `linksong`) VALUES
(1, 'Finding Hope', 'Colleen Nelson', 'finding-hope---300-am.mp3'),
(2, '1 Phút', 'Andiez', '1phut.mp3'),
(3, '3 Giờ Sáng', 'LIES Band', '3giosang.mp3'),
(4, 'Forever Alone', 'JustaTee', 'foreveralone.mp3'),
(5, 'Haru Haru', 'Big Bang', 'haruharu.mp3'),
(6, 'I love you 3000', 'Stephanie Poetri', 'loveyou3000.mp3'),
(7, 'Mãi Mãi Chẳng Thuộc Về Nhau', 'Bozitt ', 'maimaichangthuocvenhau.mp3'),
(8, 'Yêu em dài lâu', 'Anh Thư Ft. Trường Giang', 'yeuemdailau.mp3'),
(9, 'Một bản nhạc buồn nhớ Uyên', '?????', 'tuuyen.mp3'),
(10, 'Thương cái còn xương không', 'Duyên My', 'thuongcaiconxuongkhong.mp3'),
(11, 'Người Nào Đó ', 'Justeen', 'nguoinaodo.mp3'),
(12, 'Suýt Nữa Thì', 'Andiez', 'suytnuathi.mp3'),
(13, 'Trời Giấu Trời Mang Đi', 'Amee', 'troigiautroimangdi.mp3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
