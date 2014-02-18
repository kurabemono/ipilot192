-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 18, 2014 at 03:38 PM
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
  `userid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50006 ;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `date`, `amount`, `receipt`, `userid`) VALUES
(1, '2013-09-03', '15000', 'F4A9544E9791F4A6C89D7D5B1AA44D81EF3C1B54', 0),
(2, '2013-09-11', '30000', '818AF4CC29C5977DE45BFBA5ACE35FEB0AB8CB3B', 0),
(3, '2013-09-17', '50000', '0258CFE198BF810D178FAB0D04A833E1E58331C6', 0),
(50001, '2013-09-19', '20000', '79EFB0C0DAED2777C1F39D92B4BE47AA3DE3FC4C', 1),
(50002, '2014-02-18', '50000', '1d825eee9c3cfa2d60c03d50527a1d4cc5b9e9d1', 0),
(50003, '2014-02-18', '23000', 'f8ea274f063076ad210f8c04b514cb531b9df29a', 0),
(50004, '2014-02-18', '1000', 'f8ea274f063076ad210f8c04b514cb531b9df29a', 0),
(50005, '2014-02-18', '2323', '9d3d3572f8cf272524358d3c708fe53f727413c4', 0);

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
  `studentnumber` varchar(12) DEFAULT NULL,
  `batch` int(11) DEFAULT NULL,
  `mobilenumber` varchar(20) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `workplace` varchar(64) DEFAULT NULL,
  `wposition` varchar(64) DEFAULT NULL,
  `wstarted` int(11) DEFAULT NULL,
  `waddress` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `fullname`, `studentnumber`, `batch`, `mobilenumber`, `email`, `address`, `workplace`, `wposition`, `wstarted`, `waddress`) VALUES
(0, '_default', 'f7aa78b8812ddc2957aeedb7a0765a069fd473bf', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1, 'dion', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Dion Melosantos', '2010-04217', 2015, '09173611773', 'dpmelosantos@gmail.com', 'Hoyu-ryo 1-483 Takizawa-cho, Hachioji-shi, Tokyo', 'UP Diliman', 'Janitor', 2012, 'Diliman QC'),
(2, 'joshua', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Joshua Nidea', '2018-22323', 2022, '09074561285', 'joshua@apple.com', 'Under Nagtahan', 'Unemployed', 'Leech', 2012, 'Bahay');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donations`
--
ALTER TABLE `donations`
  ADD CONSTRAINT `donations_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
