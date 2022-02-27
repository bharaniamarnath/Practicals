-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 02, 2014 at 02:45 PM
-- Server version: 5.5.24
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webstar`
--

-- --------------------------------------------------------

--
-- Table structure for table `bulletin`
--

CREATE TABLE IF NOT EXISTS `bulletin` (
  `ID` varchar(6) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Message` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bulletin`
--

INSERT INTO `bulletin` (`ID`, `Username`, `Message`, `Image`, `Time`) VALUES
('976543', 'antony', 'hi da\r\n', 'images/userprofile.png', '2013-02-20 19:40:42'),
('236846', 'amardus', 'hi da', 'album/l.jpg', '2013-02-20 19:41:00'),
('430441', 'vijayan', 'Hi ;)\r\n', 'images/userprofile.png', '2013-02-20 19:54:58'),
('236846', 'amardus', 'hello vijayan :D thanks for registering here :) :D', 'album/l.jpg', '2013-02-20 20:03:35'),
('236846', 'amardus', 'thank you guys for paying  attention to the site :)', 'album/l.jpg', '2013-02-25 20:56:44');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `Username` varchar(30) NOT NULL,
  `Event` varchar(50) NOT NULL,
  `Date` date DEFAULT NULL,
  `Type` varchar(25) NOT NULL,
  `Description` varchar(150) DEFAULT NULL,
  `Included` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`Username`, `Event`, `Date`, `Type`, `Description`, `Included`) VALUES
('amardus', 'My Birthday', '1991-02-21', 'Birthday', 'Its my birthday... YEY !', '2013-02-21 03:17:30'),
('amardus', 'Final School Day', '2008-03-26', 'School', 'My last official day at school. ', '2013-03-21 07:04:42'),
('amardus', 'College Ends', '2013-08-01', 'School', 'My final result for the college came ! And I passed all the papers finally !', '2013-08-12 01:25:51');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE IF NOT EXISTS `feedbacks` (
  `ID` int(6) NOT NULL,
  `From` varchar(50) NOT NULL,
  `Subject` varchar(75) DEFAULT NULL,
  `Feedback` varchar(200) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `Username` varchar(25) DEFAULT NULL,
  `Friend` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`Username`, `Friend`) VALUES
('amardus', 'antony'),
('antony', 'amardus'),
('vijayan', 'amardus'),
('amardus', 'vijayan'),
('amardus', '9677245646'),
('9677245646', 'amardus'),
('amardus', 'yusuffsalman'),
('yusuffsalman', 'amardus');

-- --------------------------------------------------------

--
-- Table structure for table `groupmembers`
--

CREATE TABLE IF NOT EXISTS `groupmembers` (
  `ID` int(6) DEFAULT NULL,
  `Username` varchar(225) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groupmembers`
--

INSERT INTO `groupmembers` (`ID`, `Username`, `Date`) VALUES
(744598, 'amardus', '2014-01-02 14:37:05');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `ID` int(6) NOT NULL,
  `Name` varchar(225) DEFAULT NULL,
  `Type` varchar(225) DEFAULT NULL,
  `Description` varchar(1024) DEFAULT NULL,
  `Admin` varchar(225) DEFAULT NULL,
  `Image` varchar(1024) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`ID`, `Name`, `Type`, `Description`, `Admin`, `Image`, `Date`) VALUES
(691711, 'Bharane Amarnath', 'Person', 'Founder of Webstar Network', 'amardus', 'groups/691711.jpg', '2014-01-02 13:55:31'),
(744598, 'James Deen', 'Person', 'This is a james deen group', 'jamesdeen', 'groups/744598.jpg', '2014-01-02 12:41:30');

-- --------------------------------------------------------

--
-- Table structure for table `imagedetails`
--

CREATE TABLE IF NOT EXISTS `imagedetails` (
  `ID` int(6) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Image` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imagedetails`
--

INSERT INTO `imagedetails` (`ID`, `Username`, `Image`) VALUES
(236846, 'amardus', 'album/236846.jpg'),
(976543, 'antony', 'images/userprofile.png'),
(430441, 'vijayan', 'album/limestone_mountain_thailand-1366x768.jpg'),
(661435, 'santhoshinso', 'images/userprofile.png'),
(991685, 'shyams', 'images/userprofile.png'),
(791485, 'koreancell', 'images/userprofile.png'),
(883722, '9677245646', 'images/userprofile.png'),
(960305, 'yusuffsalman', 'images/userprofile.png'),
(171781, 'Shadow', 'images/userprofile.png'),
(542500, 'shivaram', 'images/userprofile.png'),
(50781, 'jamesdeen', 'album/50781.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `maildetails`
--

CREATE TABLE IF NOT EXISTS `maildetails` (
  `ID` int(6) DEFAULT NULL,
  `Sender` varchar(25) NOT NULL,
  `Reciever` varchar(25) NOT NULL,
  `Subject` varchar(50) DEFAULT NULL,
  `Mail` varchar(150) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maildetails`
--

INSERT INTO `maildetails` (`ID`, `Sender`, `Reciever`, `Subject`, `Mail`, `Date`) VALUES
(NULL, 'amardus', 'antony', 'Hi da !', 'Hi machi. Thanks for joining in Webstar ! I have left an ad banner in your facebook account. Check it out !  ', '2013-02-20 21:45:19'),
(NULL, 'amardus', 'santhoshinso', 'hey santosh :D', 'Thanks very much  for joining macha :D', '2013-02-20 21:47:25'),
(NULL, 'amardus', 'antony', 'GOOD LUCk !', 'Good luck with your interview today machi :D', '2013-02-20 21:52:23'),
(NULL, 'amardus', '9677245646', 'Hey Sai !', 'Thank you for joining the Webstar Network ! - Bharane :) :D ', '2013-02-21 02:35:08'),
(NULL, 'amardus', '9677245646', 'hey', 'hey... cool :D thanks for the reply bro :) have fun !', '2013-02-21 02:40:43'),
(NULL, 'amardus', '9677245646', 'Haha', 'You rock too bro :D ', '2013-02-21 03:02:22'),
(NULL, 'amardus', 'vijayan', 'Hey', 'Thanks for joining Webstar da :D I am expecting a special feedback from you :)', '2013-02-21 03:45:50'),
(NULL, 'amardus', 'antony', 'Hi da !', 'Why dont you just peak in here once in a month or year atleast ! Come on !!!! I am trying to run a social network !!!! :D :D', '2013-05-20 18:49:08'),
(NULL, 'amardus', 'yusuffsalman', 'Hello Boss', 'Hello Boss... How are you ?', '2013-07-10 19:40:37'),
(NULL, 'amardus', 'antony', 'Hey', 'Hey buddy. How are you ?', '2013-11-04 23:57:21');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `ID` int(6) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Message` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`ID`, `Username`, `Message`, `Image`, `Time`) VALUES
(236846, 'amardus', 'Welcome to Webstar !', 'album/l.jpg', '2013-02-20 20:04:10'),
(236846, 'amardus', 'I expect this to be good :)', 'album/l.jpg', '2013-02-21 05:57:20'),
(236846, 'amardus', 'Just finished rendering a new dub step track. I\\''ll be soon uploading it ! YEY !', 'album/l.jpg', '2013-02-22 21:29:57'),
(236846, 'amardus', 'its kind of getting inactive !', 'album/l.jpg', '2013-03-05 05:07:04'),
(236846, 'amardus', 'i will be trying to make an update soon with this site !', 'album/l.jpg', '2013-03-05 05:07:33'),
(236846, 'amardus', 'Haha ! Now I see the funny side...', 'album/l.jpg', '2013-03-21 06:56:08'),
(236846, 'amardus', 'haha its weird that i am the only guy who is using my social network !', 'album/l.jpg', '2013-07-10 19:42:12');

-- --------------------------------------------------------

--
-- Table structure for table `personaldetails`
--

CREATE TABLE IF NOT EXISTS `personaldetails` (
  `ID` int(6) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Occupation` varchar(25) NOT NULL,
  `Contact` bigint(10) NOT NULL,
  `City` varchar(50) DEFAULT NULL,
  `Country` varchar(30) NOT NULL,
  `School` varchar(75) NOT NULL,
  `Work` varchar(50) NOT NULL,
  `Language` varchar(50) DEFAULT NULL,
  `About` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personaldetails`
--

INSERT INTO `personaldetails` (`ID`, `Username`, `Occupation`, `Contact`, `City`, `Country`, `School`, `Work`, `Language`, `About`) VALUES
(236846, 'amardus', 'Unemployed', 9962145430, 'Madras', 'India', 'VVMHSS', 'Home', 'English, Hindi, Tamil', 'Hello. I am Bharane Amarnath. Founder and developer of Webstar Social Network.'),
(976543, 'antony', '', 0, NULL, '', '', '', NULL, NULL),
(430441, 'vijayan', 'Engineer', 9710444444, 'Chennai', 'India', 'Vyasa Vidyalaya Matric.Hr.Sec.School', 'Hostindya', 'English, , Tamil', ':P'),
(661435, 'santhoshinso', 'Business', 9677039173, 'chennai', 'India', 'vyasa vidyalaya Mat.Hr.Sec.school', 'singara Chennai', 'English, , Tamil,English', 'I am someone who strongly believes that our memories makes us who we are.'),
(991685, 'shyams', '', 0, NULL, '', '', '', NULL, NULL),
(791485, 'koreancell', '', 0, NULL, '', '', '', NULL, NULL),
(883722, '9677245646', '', 0, NULL, '', '', '', NULL, NULL),
(960305, 'yusuffsalman', '', 0, NULL, '', '', '', NULL, NULL),
(171781, 'Shadow', '', 0, NULL, '', '', '', NULL, NULL),
(542500, 'shivaram', '', 0, NULL, '', '', '', NULL, NULL),
(50781, 'jamesdeen', '', 0, NULL, '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `photocomments`
--

CREATE TABLE IF NOT EXISTS `photocomments` (
  `ID` varchar(6) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `Comment` varchar(75) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photocomments`
--

INSERT INTO `photocomments` (`ID`, `Username`, `Photo`, `Comment`, `Date`) VALUES
('236846', 'amardus', 'publicphotos/857397_10200629054471424_1166080788_o.jpg', 'this is a ad banner ;)', '2013-02-21 03:10:21'),
('236846', 'amardus', 'publicphotos/199737.jpg', 'sexy !', '2014-01-01 02:55:19'),
('236846', 'amardus', 'publicphotos/199737.jpg', 'he is the man !', '2014-01-01 03:50:51');

-- --------------------------------------------------------

--
-- Table structure for table `photodetails`
--

CREATE TABLE IF NOT EXISTS `photodetails` (
  `ID` varchar(6) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `Filename` varchar(30) NOT NULL,
  `Description` varchar(75) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photodetails`
--

INSERT INTO `photodetails` (`ID`, `Username`, `Photo`, `Filename`, `Description`, `Date`) VALUES
('219329', 'amardus', 'photos/219329.jpg', 'plane engine', 'This is an airplane engine', '2014-01-01 04:36:44'),
('601287', 'amardus', 'photos/601287.jpg', 'blue', 'me in blue', '2014-01-01 04:22:46'),
('4516', 'amardus', 'photos/4516.jpg', 'blue', 'me in blue', '2013-12-31 14:52:45');

-- --------------------------------------------------------

--
-- Table structure for table `publicphotos`
--

CREATE TABLE IF NOT EXISTS `publicphotos` (
  `ID` varchar(6) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Photo` varchar(100) DEFAULT NULL,
  `Filename` varchar(50) DEFAULT NULL,
  `Description` varchar(75) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publicphotos`
--

INSERT INTO `publicphotos` (`ID`, `Username`, `Photo`, `Filename`, `Description`, `Date`) VALUES
('199737', 'jamesdeen', 'publicphotos/199737.jpg', 'Jame Deen', 'I m a ****star!', '2014-01-01 02:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `publicvotes`
--

CREATE TABLE IF NOT EXISTS `publicvotes` (
  `ID` int(6) DEFAULT NULL,
  `Username` varchar(225) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publicvotes`
--

INSERT INTO `publicvotes` (`ID`, `Username`) VALUES
(199737, 'amardus');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE IF NOT EXISTS `requests` (
  `ID` varchar(6) DEFAULT NULL,
  `Username` varchar(30) DEFAULT NULL,
  `Requested` varchar(30) DEFAULT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`ID`, `Username`, `Requested`, `Date`) VALUES
('236846', 'amardus', 'santhoshinso', '2013-02-20 21:39:53'),
('236846', 'amardus', 'shyams', '2013-02-21 00:10:19'),
('236846', 'amardus', 'koreancell', '2013-02-21 02:13:47'),
('236846', 'amardus', '9677245646', '2013-02-21 02:29:48'),
('960305', 'yusuffsalman', 'yusuffsalman', '2013-04-02 05:16:32'),
('960305', 'yusuffsalman', 'shyams', '2013-04-02 05:16:45'),
('960305', 'yusuffsalman', 'koreancell', '2013-04-02 05:16:50'),
('236846', 'amardus', 'Shadow', '2013-07-10 19:39:42');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE IF NOT EXISTS `userdetails` (
  `ID` int(6) NOT NULL,
  `Firstname` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Dob` date NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`ID`, `Firstname`, `Lastname`, `Gender`, `Dob`, `Username`, `Password`, `Email`, `Created`) VALUES
(236846, 'Bharane', 'Amarnath', 'Male', '1991-02-21', 'amardus', 'c9f0039f44332d44592d540cf67f3f0c', 'cephilo@gmail.com', '2013-02-20 18:37:38'),
(976543, 'antony', 'vivek', 'Male', '1989-09-17', 'antony', 'be9524f72ba1cd3815cb5f2c2082b6ab', 'antonyvivek.w@gmail.com', '2013-02-20 19:39:02'),
(430441, 'Vijayan', 'SMP', 'Male', '1990-08-31', 'vijayan', '78c73c4e7b7d7d53f7781cc5cdd107c9', 'vijayan@live.in', '2013-02-20 19:54:15'),
(661435, 'santhosh', 'chande', 'Male', '1989-01-02', 'santhoshinso', '3818dc9ec68bb6e1a78900bdfeb92157', 'santhoshinso@gmail.com', '2013-02-20 21:24:56'),
(991685, 'Shyam', 'S', 'Male', '1990-04-09', 'shyams', 'd7158e3c542051af69ce6bb062ad3966', 'shyam_freebird@yahoo.com', '2013-02-20 23:17:35'),
(791485, 'Ram', 'kumar', 'Male', '1991-08-17', 'koreancell', 'e10adc3949ba59abbe56e057f20f883e', 'ramkumar22477375@gmail.com', '2013-02-21 01:54:52'),
(883722, 'sai', 'krishnan', 'Male', '1993-10-26', '9677245646', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'sairam.2610@yahoo.com', '2013-02-21 02:25:00'),
(960305, 'Salman', 'yusuff', 'Male', '1991-05-17', 'yusuffsalman', '0a2c97ef11c1b1bcbd4e838150dc1f73', 'yusuffsalman@gmail.com', '2013-04-02 05:15:18'),
(171781, 'Jagan', 'Nathan', 'Male', '1991-04-07', 'Shadow', '2587a89967353f568d606a1318cf09bc', 'jack12gamer@yahoo.co.in', '2013-05-26 01:52:46'),
(542500, 'shiva', 'ram', 'Male', '1993-04-10', 'shivaram', 'd47fd32903b95d833dac7983a056d385', 'shiva.siva10@gmail.com', '2013-12-09 00:50:12'),
(50781, 'James', 'Deen', 'Male', '1990-01-01', 'jamesdeen', 'c4e27d9b94f4af06958a3c92d2c99f66', 'jamesdeen@gmail.com', '2013-12-31 05:18:23');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
