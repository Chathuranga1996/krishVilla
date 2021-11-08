-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 17, 2021 at 05:54 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `krish_villa`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`category`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'Vegetable'),
(2, 'Fruit');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

DROP TABLE IF EXISTS `farmer`;
CREATE TABLE IF NOT EXISTS `farmer` (
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `farm_name` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `size_perches` int(11) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  PRIMARY KEY (`email`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`email`, `farm_name`, `size_perches`, `id`) VALUES
('test9@email.com', 'someonesfarm', 100, NULL),
('morty@email.com', 'Myfarm', 160, NULL),
('wyvrnxeno@gmail.com', 'someonesfarm', 100, NULL),
('Darshani@gmail.com', 'someonesfarm', 100, NULL),
('geralt@email.com', 'someonesfarm', 160, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `item_name` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`item_name`),
  UNIQUE KEY `id` (`id`),
  KEY `category` (`category`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `category`, `item_name`) VALUES
(20, 'Vegetable', 'dynamic'),
(19, 'Vegetable', 'broccoli'),
(18, 'Vegetable', 'beans'),
(17, 'Fruit', 'mango'),
(16, 'Fruit', 'pineapple'),
(15, 'Fruit', 'banana'),
(21, 'Fruit', 'stilldynamic');

-- --------------------------------------------------------

--
-- Table structure for table `sell_item`
--

DROP TABLE IF EXISTS `sell_item`;
CREATE TABLE IF NOT EXISTS `sell_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `farmer_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `date_item_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category` varchar(100) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `qty` int(11) NOT NULL,
  `sell_date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category` (`category`),
  KEY `item_name` (`item_name`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `sell_item`
--

INSERT INTO `sell_item` (`id`, `farmer_name`, `date_item_added`, `category`, `item_name`, `qty`, `sell_date`) VALUES
(1, 'chathuranga', '2021-08-17 12:46:25', 'vegetable', 'carrot', 11, '2021-08-17'),
(2, 'wijitha', '2021-08-17 13:42:03', 'Fruit', 'mango', 11, '2021-08-17'),
(3, 'wijitha', '2021-08-17 13:47:42', 'Vegetable', 'broccoli', 5, '2021-08-17'),
(4, 'wijitha', '2021-08-17 14:01:38', 'Fruit', 'banana', 11, '2021-08-18'),
(5, 'wijitha', '2021-08-17 14:01:55', 'Fruit', '', 100, '2021-08-18'),
(6, 'wijitha', '2021-08-17 14:03:26', 'Fruit', '', 5555, '2021-08-18'),
(7, 'wijitha', '2021-08-17 18:50:25', 'Fruit', 'banana', 10, '2021-08-18'),
(8, 'wijitha', '2021-08-17 18:50:56', 'Vegetable', 'broccoli', 100, '2021-08-18'),
(9, 'wijitha', '2021-08-17 18:51:30', 'Vegetable', 'broccoli', 200, '2021-08-18'),
(10, 'wijitha', '2021-08-17 18:51:40', 'Fruit', 'banana', 50, '2021-08-18'),
(11, 'someone', '2021-08-17 20:34:48', 'Fruit', 'SomeFruit', 100, '2021-08-17'),
(12, 'wijitha', '2021-08-17 20:37:19', 'Fruit', 'mango', 50, '2021-08-17');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `last_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `address` varchar(100) COLLATE utf8_bin NOT NULL,
  `city` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(32) COLLATE utf8_bin NOT NULL,
  `contact_number` int(100) NOT NULL,
  `loyalty_points` int(11) DEFAULT '0',
  `position` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT 'customer',
  `profile_image` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=383 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `address`, `city`, `email`, `password`, `contact_number`, `loyalty_points`, `position`, `profile_image`) VALUES
(382, 'Dimitri', 'vegas', 'No 51, Diwulwewa, Hidogama', 'Anuradhapura', 'dimitri@gmail.com', '111', 773064960, 0, 'customer', NULL),
(377, 'David', 'Smith', 'somewhere, some street', 'somecity', 'someemail@email.com', '400', 2147483647, 0, 'customer', NULL),
(373, 'Morty', 'Smith', 'somewhere, some street', 'somecity', 'morty@email.com', '300', 2147483647, 0, 'farmer', NULL),
(372, 'bebe', 'rexha', 'somewhere in the world', 'acity', 'bebe@email.com', '200', 1234567890, 0, 'admin', NULL),
(369, 'wijitha', 'wijekoon', 'No 51, Diwulwewa, Hidogama', 'Anuradhapura', 'wyvrnxeno@gmail.com', '100', 773064960, 0, 'farmer', NULL),
(380, 'Darshani', 'Nisansala', 'No 51, Diwulwewa, Hidogama', 'Anuradhapura', 'Darshani@gmail.com', 'dara', 773064960, 0, 'farmer', NULL),
(379, 'wijitha', 'wijekoon', 'No 51, Diwulwewa, Hidogama', 'Anuradhapura', 'test9@email.com', '5000', 773064960, 0, 'farmer', NULL),
(381, 'geralt', 'revia', 'No 51, some street', 'somecity', 'geralt@email.com', '1000', 2147483647, 0, 'farmer', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
