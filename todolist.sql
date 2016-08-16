-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-04-29 12:42:16
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `todolist`
--

-- --------------------------------------------------------

--
-- 表的结构 `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `item` varchar(100) NOT NULL,
  `isComplete` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- 转存表中的数据 `tasks`
--

INSERT INTO `tasks` (`id`, `item`, `isComplete`) VALUES
(36, 'Getting up', 'T'),
(37, 'Having breakfast', 'T'),
(38, 'Going to school', 'T'),
(39, 'Having lunch', 'F'),
(40, 'Going home', 'F');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
