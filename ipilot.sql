-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 29, 2014 at 04:09 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ipilot`
--
CREATE DATABASE IF NOT EXISTS `ipilot` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ipilot`;

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE IF NOT EXISTS `donations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL DEFAULT '0000-00-00',
  `amount` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `receipt` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `validated` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50002 ;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `date`, `amount`, `receipt`, `validated`) VALUES
(1, '2013-09-03', '15000', 'F4A9544E9791F4A6C89D7D5B1AA44D81EF3C1B54', 0),
(2, '2013-09-11', '30000', '818AF4CC29C5977DE45BFBA5ACE35FEB0AB8CB3B', 0),
(3, '2013-09-17', '50000', '0258CFE198BF810D178FAB0D04A833E1E58331C6', 0),
(50001, '2013-09-19', '20000', '79EFB0C0DAED2777C1F39D92B4BE47AA3DE3FC4C', 1);

-- --------------------------------------------------------

--
-- Table structure for table `entries`
--

CREATE TABLE IF NOT EXISTS `entries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL DEFAULT '0000-00-00',
  `title` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `contents` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `author` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `entries`
--

INSERT INTO `entries` (`id`, `date`, `title`, `contents`, `author`) VALUES
(15, '2013-10-01', 'October 2013 Newsletter (Bacon Ipsum)', '<div class="row">\r\n          <div class="large-6 columns">\r\n            <p>Bacon ipsum dolor sit amet nulla ham qui sint exercitation eiusmod commodo, chuck duis velit. Aute in reprehenderit, dolore aliqua non est magna in labore pig pork biltong. Eiusmod swine spare ribs reprehenderit culpa.</p>\r\n            <p>Boudin aliqua adipisicing rump corned beef. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>\r\n          </div>\r\n          <div class="large-6 columns">\r\n            <img src="http://placehold.it/400x300&text=bacon" />\r\n          </div>\r\n        </div>\r\n\r\n        <p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>\r\n\r\n        <p>Pork drumstick turkey fugiat. Tri-tip elit turducken pork chop in. Swine short ribs meatball irure bacon nulla pork belly cupidatat meatloaf cow. Nulla corned beef sunt ball tip, qui bresaola enim jowl. Capicola short ribs minim salami nulla nostrud pastrami.</p>', 'Juan Dela Cruz'),
(16, '2013-09-01', '2013 September Newsletter (50Shades)', '<div class="row">\r\n          <div class="large-6 columns">\r\n            <p>When he removed his chorizo howitzer from my turd cutter, he was pleasantly surprised to see a hardened fudge nugget staring back as him. He knew I couldn''t wait to gobble the toilet twinkie off his washington monument. I awoke the next morning with my furry cup still seeping. I thought it was over but his stilton spear had other ideas. The slamming of my ring piece was so vigorous, he soon found his wrecking balls joining his jebend deep in my Oxo orifice.</p>\r\n          </div>\r\n          <div class="large-6 columns">\r\n            <img src="http://placehold.it/400x300&text=R18" />\r\n          </div>\r\n        </div>\r\n\r\n        <p>The seemingly never-ending streams of steamin'' semen emanating from his bald-headed yogurt slinger soon had me coated like a plasterer''s radio. The slamming of my turd cutter was so vigorous, he soon found his love spuds joining his cunt stretcher deep in my puckered brown eye. With my meaty hangers now much like the Japanese flag, he thought it was time to start probing my turd-herder. Is now the time to tell him I really need to cop a hardened fudge nugget, I wondered? With his love muscle raiding deep into my carp cavity, the sensation of his ramrod smashing my cervix made me quake like Muhammad Ali on a tumble dryer. He eased out a giant stink pickle on my chest puppies just so he could devour it up like a bulldog eating porridge.</p>\r\n\r\n        <p>The plowing makes me splurge my clunge gunge all over his stilton spear. The feeling of his cock snot flowing down my throat got my tuna tunnel tears flowing quicker than snot off a whip. He munched on my panty hamster, even though I''d been up on bricks for the best part of a week. The unrelenting orgasms from his eight inches of throbbing pink jesus hammering my kipper dinghy made me come so hard, I began sweating like Joseph Fritzel on Cribs. Hours of hammering like this would leave any girl''s piss flaps looking like a gutted trout, and I was no different!</p>', 'Juan Dela Cruz');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  `mobilenumber` varchar(20) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `work` varchar(64) DEFAULT NULL,
  `position` varchar(64) DEFAULT NULL,
  `startedworking` int(11) DEFAULT NULL,
  `workaddress` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `fullname`, `mobilenumber`, `email`, `address`, `work`, `position`, `startedworking`, `workaddress`) VALUES
(1, 'dion', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Dion Melosantos', '09173611773', 'dpmelosantos@gmail.com', 'Hoyu-ryo 1-483 Takizawa, Hachioji-shi, Tokyo', 'UP', 'CNN', 2013, 'Diliman QC');

-- --------------------------------------------------------

--
-- Table structure for table `users_`
--

CREATE TABLE IF NOT EXISTS `users_` (
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_`
--

INSERT INTO `users_` (`username`, `password`, `fullname`) VALUES
('dion', '5f4dcc3b5aa765d61d8327deb882cf99', 'Dion Melosantos'),
('joshua', 'e10adc3949ba59abbe56e057f20f883e', 'Joshua Nidea');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
