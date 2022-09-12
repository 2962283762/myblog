-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2022-09-12 17:08:50
-- 服务器版本： 5.6.50-log
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `cookie` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`username`, `password`, `cookie`) VALUES
('admin', '1937dzl.', '');

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `create_time` datetime DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `source` text,
  `id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`create_time`, `title`, `description`, `source`, `id`) VALUES
('2022-09-11 17:38:26', 'Miss.', 'C9ZoBMLAOe', 'To connect to a database or schema, simply double-click it in the pane. Instead of wondering when your next', 5),
('2018-04-15 03:09:26', 'Mrs.', 'OX37ZRD6Vr', 'Navicat allows you to transfer data from one database and/or schema to another with detailed analytical process. Sometimes you win, sometimes you learn. After logged in the Navicat Cloud feature, the Navigation pane will be divided into Navicat Cloud and My Connections sections. The Information Pane shows the detailed object information, project activities, the DDL of database objects, object dependencies, membership of users/roles and preview. You cannot save people, you can just love them. To get a secure connection, the first thing you need to do is to install OpenSSL Library and download Database Source. What you get by achieving your goals is not as important as what you become by achieving your goals. I destroy my enemies when I make them my friends. In other words, Navicat provides the ability for data in different databases and/or schemas to be kept up-to-date so that each repository contains the same information. I will greet this day with love in my heart. Difficult circumstances serve as a textbook of life for people. It provides strong authentication and secure encrypted communications between two hosts, known as SSH Port Forwarding (Tunneling), over an insecure network. Sometimes you win, sometimes you learn. The Main Window consists of several toolbars and panes for you to work on connections, database objects and advanced tools. I destroy my enemies when I make them my friends. Optimism is the one quality more associated with success and happiness than any other. How we spend our days is, of course, how we spend our lives. It collects process metrics such as CPU load, RAM usage, and a variety of other resources over SSH/SNMP.', 6),
('2022-09-11 17:38:40', 'test', 'adsfgfhgjh', 'adsfgfhgjh,kcx', 21),
('2022-09-11 17:39:41', 'test', 'asfgdfhngj', 'asfgdfhngjhkjlk', 22);

-- --------------------------------------------------------

--
-- 表的结构 `web_system`
--

CREATE TABLE IF NOT EXISTS `web_system` (
  `web_name` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `icp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `web_system`
--

INSERT INTO `web_system` (`web_name`, `keywords`, `description`, `author`, `email`, `icp`) VALUES
('my blog', 'my blog', '我的自制博客', '凡尘扰凡心', '2962283762@qq.com', '12356');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
