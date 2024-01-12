-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 18, 2023 at 04:29 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cusinecart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int NOT NULL AUTO_INCREMENT,
  `auser` varchar(50) NOT NULL,
  `aemail` varchar(50) NOT NULL,
  `apass` varchar(50) NOT NULL,
  `adob` date NOT NULL,
  `aphone` varchar(15) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `auser`, `aemail`, `apass`, `adob`, `aphone`) VALUES
(1, 'punya', 'punyalalu4632@gmail.com', 'punya', '2001-05-08', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cid` int NOT NULL AUTO_INCREMENT,
  `iid` int NOT NULL,
  `pname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pprice` bigint NOT NULL,
  `pimage` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pquantity` int NOT NULL,
  `uemail` varchar(200) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cid`, `iid`, `pname`, `pprice`, `pimage`, `pquantity`, `uemail`) VALUES
(36, 9, 'muringa', 80, 'menu2.jpg', 1, 'punyalalu4632@gmail.com'),
(32, 7, 'pinapple', 140, 'menu5.jpg', 1, 'nizamudheenmj@gmail.com'),
(31, 4, 'chicken', 140, 'blog1.jpg', 1, 'nizamudheenmj@gmail.com'),
(29, 6, 'oil', 80, 'blog4.jpg', 1, 'nizamudheenmj@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

DROP TABLE IF EXISTS `ingredients`;
CREATE TABLE IF NOT EXISTS `ingredients` (
  `iid` int NOT NULL AUTO_INCREMENT,
  `iimage` varchar(400) NOT NULL,
  `iname` varchar(100) NOT NULL,
  `iprice` int NOT NULL,
  `recipetitle` varchar(100) NOT NULL,
  PRIMARY KEY (`iid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`iid`, `iimage`, `iname`, `iprice`, `recipetitle`) VALUES
(6, 'blog4.jpg', 'oil', 80, 'chicken_curry'),
(5, 'menu3.jpg', 'onion', 80, 'chicken_curry'),
(4, 'blog1.jpg', 'chicken', 140, 'chicken_curry'),
(7, 'menu5.jpg', 'pinapple', 140, 'chicken_curry'),
(8, 'menu3.jpg', 'ladies_finger', 80, 'sambar'),
(9, 'menu2.jpg', 'muringa', 80, 'sambar');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

DROP TABLE IF EXISTS `recipes`;
CREATE TABLE IF NOT EXISTS `recipes` (
  `rid` int NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `rcontent` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `serving` varchar(100) NOT NULL,
  `ingredientsno` bigint NOT NULL,
  `preptime` varchar(100) NOT NULL,
  `amount` bigint NOT NULL,
  `adminid` bigint NOT NULL,
  `comment` varchar(300) NOT NULL,
  `category` varchar(50) NOT NULL,
  `rimage` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `rimage1` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `rimage2` varchar(300) NOT NULL,
  `utubelink` varchar(500) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`rid`, `title`, `rcontent`, `serving`, `ingredientsno`, `preptime`, `amount`, `adminid`, `comment`, `category`, `rimage`, `rimage1`, `rimage2`, `utubelink`) VALUES
(2, 'chicken_curry', '<p>fasfasfjs;dlafj</p>\r\n<p>adfasfasdfasdf</p>\r\n<p>asdfasdfasfa</p>\r\n<p>asdfasfadsdf</p>', '4', 3, '55', 120, 1, 'idajfpdjfjdk;lf asjflasjdflasj; asl;fjasfj;as', 'non-veg', 'salad-2756467_1280.jpg', 'salad-7040875_1280.jpg', 'eat-2834549_1280.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/9DdEsL-XO-c?si=jnOuzj_oHPQpL9Kz\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(3, 'Chicken curry', '<p>asfasdfasdfasdfasd</p>\r\n<p>asdfasdfasdfasdf</p>\r\n<p>asfdasdfasdfsadfasd</p>', '4', 3, '55', 120, 1, 'asfdadslfjsadl;fadslf asdfsadfasdfsd lasjdflsdjaf asfdasdfasffsadf', 'non-veg', 'salad-7040875_1280.jpg', 'salad-2756467_1280.jpg', 'eat-2834549_1280.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/9DdEsL-XO-c?si=jnOuzj_oHPQpL9Kz\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(4, 'sambar', '<p>asdfasdfasdfasdf sdfasfadsfdsafdsaf</p>\r\n<p>adfasfsadfasdfasf asfasdfasdfasdf</p>\r\n<p>afdasdfsadfasdfasf</p>', '4', 3, '55', 120, 1, 'lsajdflsadjfasdf fasdfasfasdfasasd fasd flasjflkasdjflasdjf lsajflasjflkasdjf', 'non-veg', 'salad-7040875_1280.jpg', 'salad-2756467_1280.jpg', 'eat-2834549_1280.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/9DdEsL-XO-c?si=jnOuzj_oHPQpL9Kz\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `uid` int NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `uphone` bigint NOT NULL,
  `upass` varchar(100) NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `uniemail` (`uemail`),
  UNIQUE KEY `unipass` (`upass`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `uemail`, `uphone`, `upass`) VALUES
(1, 'Punya Lalu', 'punyalalu4632@gmail.com', 7593938014, 'a6e82da80f605f2d9fce3cce03422407d02a4b43'),
(2, 'hisana', 'hisanathaznim1234@gmail.com', 8891177141, 'cba12e2847b8376ee9357ae96855f365aafaaac2'),
(3, 'reenu', 'cherian.reenu@gmail.com', 12345, 'd6fc15b8ff3bd1497e30b3e6cf51fcb45110585f'),
(4, 'nizam', 'nizamudheenmj@gmail.com', 3423424, 'ee7fdd5750b182adcf070b0b1b72bc36ac255e99'),
(5, 'sona', 'sona@gmail.com', 9823492243, '8acea69df109d35a1682ced66cdec92da9e324bc');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
