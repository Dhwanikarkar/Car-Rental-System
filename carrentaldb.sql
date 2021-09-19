-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 27, 2019 at 08:08 AM
-- Server version: 5.6.20-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `carrentaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingtb`
--

CREATE TABLE IF NOT EXISTS `bookingtb` (
`b_id` int(20) NOT NULL,
  `c_id` int(20) NOT NULL,
  `u_id` int(20) NOT NULL,
  `fromdate` varchar(50) NOT NULL,
  `todate` varchar(50) NOT NULL,
  `start_pos` varchar(50) NOT NULL,
  `end_pos` varchar(50) NOT NULL,
  `total` int(50) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `bookingtb`
--

INSERT INTO `bookingtb` (`b_id`, `c_id`, `u_id`, `fromdate`, `todate`, `start_pos`, `end_pos`, `total`) VALUES
(1, 0, 0, '', '', 'ffff', 'dvfdf', 0),
(2, 0, 0, '', '', 'bfgn', 'fgbfv', 0),
(3, 0, 0, '', '', 'ghbg', 'hnghn', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cartb`
--

CREATE TABLE IF NOT EXISTS `cartb` (
`c_id` int(20) NOT NULL,
  `cat_id` int(20) NOT NULL,
  `v_nm` varchar(20) NOT NULL,
  `i_nm` varchar(66) NOT NULL,
  `v_img` text NOT NULL,
  `v_fueltype` varchar(20) NOT NULL,
  `v_seats` int(20) NOT NULL,
  `v_rent` int(20) NOT NULL,
  `v_status` varchar(20) NOT NULL,
  `v_trans` varchar(20) NOT NULL,
  `qty` int(20) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `cartb`
--

INSERT INTO `cartb` (`c_id`, `cat_id`, `v_nm`, `i_nm`, `v_img`, `v_fueltype`, `v_seats`, `v_rent`, `v_status`, `v_trans`, `qty`) VALUES
(25, 0, 'verna', '', 'verna.png', 'diesel', 5, 1200, 'sold out', 'manual', 1),
(24, 0, 'ciaz', '', 'ciaz.png', 'diesel', 5, 1500, 'sold out', 'manual', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cattb`
--

CREATE TABLE IF NOT EXISTS `cattb` (
`cat_id` int(20) NOT NULL,
  `c_type` varchar(20) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=75 ;

--
-- Dumping data for table `cattb`
--

INSERT INTO `cattb` (`cat_id`, `c_type`) VALUES
(1, 'hatchback'),
(73, 'sedan'),
(74, 'suv');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacktb`
--

CREATE TABLE IF NOT EXISTS `feedbacktb` (
`feed_id` int(20) NOT NULL,
  `u_id` int(33) NOT NULL,
  `feed_msg` varchar(333) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `feedbacktb`
--

INSERT INTO `feedbacktb` (`feed_id`, `u_id`, `feed_msg`) VALUES
(7, 0, 'gn n'),
(8, 0, 'bfgb'),
(9, 0, 'nhgn'),
(10, 0, 'ghjygj');

-- --------------------------------------------------------

--
-- Table structure for table `usertb`
--

CREATE TABLE IF NOT EXISTS `usertb` (
`u_id` int(15) NOT NULL,
  `ufnm` varchar(55) NOT NULL,
  `unm` varchar(10) NOT NULL,
  `ueid` varchar(15) NOT NULL,
  `upwd` varchar(15) NOT NULL,
  `ucpwd` varchar(15) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `conno` int(10) NOT NULL,
  `u_add` varchar(30) NOT NULL,
  `u_city` varchar(10) NOT NULL,
  `sec_qus` varchar(44) NOT NULL,
  `sec_ans` varchar(44) NOT NULL,
  `a_u_status` tinyint(1) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `usertb`
--

INSERT INTO `usertb` (`u_id`, `ufnm`, `unm`, `ueid`, `upwd`, `ucpwd`, `dob`, `conno`, `u_add`, `u_city`, `sec_qus`, `sec_ans`, `a_u_status`) VALUES
(74, 'admin', 'admin', 'admin@gmail.com', 'admin', 'admin', '', 0, '', '', '', '', 1),
(77, 'a', 'a', 'a@gmail.com', 'a', 'a', '', 0, '', '', 'YOUR FAVIRITE CAR?', 'a', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingtb`
--
ALTER TABLE `bookingtb`
 ADD PRIMARY KEY (`b_id`), ADD KEY `u_id` (`u_id`), ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `cartb`
--
ALTER TABLE `cartb`
 ADD PRIMARY KEY (`c_id`), ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `cattb`
--
ALTER TABLE `cattb`
 ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `feedbacktb`
--
ALTER TABLE `feedbacktb`
 ADD PRIMARY KEY (`feed_id`), ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `usertb`
--
ALTER TABLE `usertb`
 ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingtb`
--
ALTER TABLE `bookingtb`
MODIFY `b_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cartb`
--
ALTER TABLE `cartb`
MODIFY `c_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `cattb`
--
ALTER TABLE `cattb`
MODIFY `cat_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `feedbacktb`
--
ALTER TABLE `feedbacktb`
MODIFY `feed_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `usertb`
--
ALTER TABLE `usertb`
MODIFY `u_id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=78;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
