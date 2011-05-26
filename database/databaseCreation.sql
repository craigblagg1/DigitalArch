-- phpMyAdmin SQL Dump
-- version 2.11.9.4
-- http://www.phpmyadmin.net
--
-- Host: 72.167.233.29
-- Generation Time: May 26, 2011 at 07:38 AM
-- Server version: 5.0.91
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `digitalarch`
--

-- --------------------------------------------------------

--
-- Table structure for table `DataCapture`
--

CREATE TABLE `DataCapture` (
  `UserID` varchar(99) default NULL,
  `FirstName` varchar(99) default NULL,
  `Surname` varchar(99) default NULL,
  `Email` varchar(99) default NULL,
  `City` varchar(99) default NULL,
  `Country` varchar(99) default NULL,
  `Gender` varchar(99) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `DataCapture`
--

INSERT INTO `DataCapture` VALUES('502848059', 'Craig', 'Blagg', 'talktome@iwillreply.com', 'London', 'United Kingdom', 'male');
INSERT INTO `DataCapture` VALUES('100002074012756', 'Craig', 'Blagg', 'craig@jezebelle.tv', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `Votes`
--

CREATE TABLE `Votes` (
  `UserID` varchar(99) default NULL,
  `FirstName` varchar(99) default NULL,
  `Surname` varchar(99) default NULL,
  `Vote` text,
  `VoteName` varchar(999) default NULL,
  `CreatedDate` datetime default NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Votes`
--

INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '3', 'SiteName3', '2011-05-13 02:27:23');
INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '6', 'SiteName6', '2011-05-13 02:27:31');
INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '3', 'SiteName3', '2011-05-13 02:27:43');
INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '8', 'SiteName8', '2011-05-13 02:27:49');
INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '1', 'SiteName1', '2011-05-13 02:28:00');
INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '6', 'SiteName6', '2011-05-13 02:36:59');
INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '8', 'SiteName8', '2011-05-13 02:37:10');
INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '1', 'SiteName1', '2011-05-16 02:09:15');
INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '1', 'SiteName1', '2011-05-16 02:17:55');
INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '1', 'SiteName1', '2011-05-16 02:21:29');
INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '4', 'SiteName4', '2011-05-16 02:21:58');
INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '3', 'SiteName3', '2011-05-16 02:23:05');
INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '3', 'SiteName3', '2011-05-16 02:44:56');
INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '3', 'SiteName3', '2011-05-16 02:45:07');
INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '6', 'SiteName6', '2011-05-16 02:45:11');
INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '4', 'SiteName4', '2011-05-16 02:45:40');
INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '4', 'SiteName4', '2011-05-16 02:46:27');
INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '4', 'SiteName4', '2011-05-16 02:48:39');
INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '1', 'SiteName1', '2011-05-16 02:51:29');
INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '5', 'SiteName5', '2011-05-16 02:53:03');
INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '5', 'SiteName5', '2011-05-16 02:55:09');
INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '4', 'SiteName4', '2011-05-16 02:56:07');
INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '6', 'SiteName6', '2011-05-16 03:02:06');
INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '4', 'SiteName4', '2011-05-16 03:02:24');
INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '5', 'SiteName5', '2011-05-16 03:03:03');
INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '4', 'SiteName4', '2011-05-17 07:09:54');
INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '5', 'SiteName5', '2011-05-17 07:10:13');
INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '8', 'SiteName8', '2011-05-17 07:33:16');
INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '4', 'SiteName4', '2011-05-17 07:46:35');
INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '6', 'SiteName6', '2011-05-17 09:16:53');
INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '2', 'SiteName2', '2011-05-17 09:17:16');
INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '1', 'SiteName1', '2011-05-17 09:20:44');
INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '1', 'SiteName1', '2011-05-17 09:21:14');
INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '8', 'SiteName8', '2011-05-17 09:25:26');
INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '8', 'SiteName8', '2011-05-17 09:51:07');
INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '1', 'SiteName1', '2011-05-24 07:33:39');
INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '1', 'SiteName1', '2011-05-24 07:39:29');
INSERT INTO `Votes` VALUES('502848059', 'Craig', 'Blagg', '1', 'SiteName1', '2011-05-24 07:44:21');