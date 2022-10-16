/*
MySQL Backup
Database: blog
Backup Time: 2022-10-16 14:05:41
*/

SET FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `blog`.`admin`;
DROP TABLE IF EXISTS `blog`.`article`;
DROP TABLE IF EXISTS `blog`.`web_system`;
CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `cookie` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `article` (
  `create_time` datetime DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `source` text,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
CREATE TABLE `web_system` (
  `web_name` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `icp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
BEGIN;
LOCK TABLES `blog`.`admin` WRITE;
DELETE FROM `blog`.`admin`;
INSERT INTO `blog`.`admin` (`username`,`password`,`cookie`) VALUES ('admin', '1937dzl.', '');
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `blog`.`article` WRITE;
DELETE FROM `blog`.`article`;
INSERT INTO `blog`.`article` (`create_time`,`title`,`description`,`source`,`id`) VALUES ('2022-09-11 17:38:26', 'Miss.', 'C9ZoBMLAOe', 'To connect to a database or schema, simply double-click it in the pane. Instead of wondering when your next', 5),('2018-04-15 03:09:26', 'Mrs.', 'OX37ZRD6Vr', 'Navicat allows you to transfer data from one database and/or schema to another with detailed analytical process. Sometimes you win, sometimes you learn. After logged in the Navicat Cloud feature, the Navigation pane will be divided into Navicat Cloud and My Connections sections. The Information Pane shows the detailed object information, project activities, the DDL of database objects, object dependencies, membership of users/roles and preview. You cannot save people, you can just love them. To get a secure connection, the first thing you need to do is to install OpenSSL Library and download Database Source. What you get by achieving your goals is not as important as what you become by achieving your goals. I destroy my enemies when I make them my friends. In other words, Navicat provides the ability for data in different databases and/or schemas to be kept up-to-date so that each repository contains the same information. I will greet this day with love in my heart. Difficult circumstances serve as a textbook of life for people. It provides strong authentication and secure encrypted communications between two hosts, known as SSH Port Forwarding (Tunneling), over an insecure network. Sometimes you win, sometimes you learn. The Main Window consists of several toolbars and panes for you to work on connections, database objects and advanced tools. I destroy my enemies when I make them my friends. Optimism is the one quality more associated with success and happiness than any other. How we spend our days is, of course, how we spend our lives. It collects process metrics such as CPU load, RAM usage, and a variety of other resources over SSH/SNMP.', 6),('2022-09-11 17:38:40', 'test', 'adsfgfhgjh', 'adsfgfhgjh,kcx', 21),('2022-09-11 17:39:41', 'test', 'asfgdfhngj', 'asfgdfhngjhkjlk', 22);
UNLOCK TABLES;
COMMIT;
BEGIN;
LOCK TABLES `blog`.`web_system` WRITE;
DELETE FROM `blog`.`web_system`;
INSERT INTO `blog`.`web_system` (`web_name`,`keywords`,`description`,`author`,`email`,`icp`) VALUES ('my blog', 'my blog', '我的自制博客', '凡尘扰凡心', '2962283762@qq.com', '12356');
UNLOCK TABLES;
COMMIT;
