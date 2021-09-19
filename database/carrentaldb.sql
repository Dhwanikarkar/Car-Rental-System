-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 07, 2019 at 08:04 AM
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
  `city` varchar(100) NOT NULL,
  `fd` date NOT NULL,
  `td` date NOT NULL,
  `start_pos` varchar(100) NOT NULL,
  `end_pos` varchar(100) NOT NULL,
  `total` int(100) NOT NULL,
  `c_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `bookingtb`
--

INSERT INTO `bookingtb` (`b_id`, `city`, `fd`, `td`, `start_pos`, `end_pos`, `total`, `c_id`, `u_id`) VALUES
(37, 'Chennai', '2019-09-16', '2019-09-13', 'dxx', 'xx', 6600, 5, 77),
(38, 'Ahmedabad', '2019-09-09', '2019-09-06', 'aa', 'aaa', 6000, 4, 77),
(39, 'Chandigarh', '2019-09-09', '2019-09-06', 'rhtyht', 'fghf', 6200, 4, 77),
(40, 'Hyderabad', '2019-09-21', '2019-09-13', 'GNBFGH', 'FHNGH', 17800, 5, 77),
(41, 'Chandigarh', '2019-09-14', '2019-09-07', 'referg', 'ergerg', 14200, 4, 77),
(42, 'Hyderabad', '2019-09-21', '2019-09-19', 'gfd', 'dfg', 4200, 4, 77),
(43, 'Delhi', '2019-09-20', '2019-09-13', 'dswfvgdf', 'vdfsvb', 15600, 5, 77),
(44, 'Chandigarh', '2019-09-14', '2019-09-07', 'vc', 'xvbcv', 14200, 4, 77),
(45, 'Ahmedabad', '2019-09-21', '2019-09-13', 'ahmedabad', 'gandhinagar', 17800, 7, 77),
(46, 'Chandigarh', '2019-09-21', '2019-09-19', 'sdc', 'dv', 4200, 4, 77);

-- --------------------------------------------------------

--
-- Table structure for table `cartb`
--

CREATE TABLE IF NOT EXISTS `cartb` (
`c_id` int(20) NOT NULL,
  `v_nm` varchar(20) NOT NULL,
  `v_img` text NOT NULL,
  `v_fueltype` varchar(20) NOT NULL,
  `v_seats` int(20) NOT NULL,
  `v_rent` int(20) NOT NULL,
  `v_status` varchar(20) NOT NULL,
  `v_trans` varchar(20) NOT NULL,
  `qty` int(20) NOT NULL,
  `c_type` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `cartb`
--

INSERT INTO `cartb` (`c_id`, `v_nm`, `v_img`, `v_fueltype`, `v_seats`, `v_rent`, `v_status`, `v_trans`, `qty`, `c_type`) VALUES
(4, 'ciaz', 'ciaz.png', 'diesel', 5, 2000, 'available', 'available', 1, 'sedan'),
(5, 'brezza', 'creta.png', 'diesel', 5, 2200, 'available', 'manual', 1, 'hatchback'),
(6, ' xuv', 'xuv.png', 'diesel', 7, 3000, 'available', 'available', 1, 'suv'),
(7, 'creta', 'creta.png', 'diesel', 5, 2200, 'availabel', 'manual', 1, 'hatchback');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacktb`
--

CREATE TABLE IF NOT EXISTS `feedbacktb` (
`feed_id` int(11) NOT NULL,
  `feed_msg` varchar(22) NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `feedbacktb`
--

INSERT INTO `feedbacktb` (`feed_id`, `feed_msg`, `u_id`) VALUES
(1, 'mmljkuji', 77),
(2, 'dfbfgnb', 77),
(3, 'cvbcb', 77),
(4, 'dvfdv', 78);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=84 ;

--
-- Dumping data for table `usertb`
--

INSERT INTO `usertb` (`u_id`, `ufnm`, `unm`, `ueid`, `upwd`, `ucpwd`, `dob`, `conno`, `u_add`, `u_city`, `sec_qus`, `sec_ans`, `a_u_status`) VALUES
(74, 'admin', 'admin', 'admin@gmail.com', 'admin', 'admin', '', 0, '', '', '', '', 1),
(77, 'a', 'a', 'a@gmail.com', 'a', 'a', '', 0, '', '', 'YOUR FAVIRITE CAR?', 'a', 0),
(78, 'q', 'q', 'q@gmail.com', 'q', 'q', '', 0, '', '', 'YOUR FAVIRITE CAR?', 'q', 0),
(79, 'fgnfgn', 'gfnfhn', 'erghrth@gmail.c', 'dfvdfgb_fnhghmn', 'bgfgbfgbbgfnbfg', '', 0, '', '', 'YOUR FAVIRITE CAR?', 'fgnfgn', 0),
(80, 'dvc', 'vfdv', '', '', '', '', 0, '', '', 'YOUR FAVIRITE CAR?', '', 0),
(81, 'dsvcd', 'vvd', 'dvdfv@gamil.com', 'aaa', 'aaa', '', 0, '', '', 'YOUR FAVIRITE CAR?', 'aaa', 0),
(82, 'fgnfgn', 'gfnfhn', 'erghrth@gmail.c', 'aa', 'aa', '', 0, '', '', 'YOUR FAVIRITE CAR?', 'as', 0),
(83, '', '', '', '', '', '', 0, '', '', 'YOUR FAVIRITE CAR?', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingtb`
--
ALTER TABLE `bookingtb`
 ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `cartb`
--
ALTER TABLE `cartb`
 ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `feedbacktb`
--
ALTER TABLE `feedbacktb`
 ADD PRIMARY KEY (`feed_id`);

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
MODIFY `b_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `cartb`
--
ALTER TABLE `cartb`
MODIFY `c_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `feedbacktb`
--
ALTER TABLE `feedbacktb`
MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `usertb`
--
ALTER TABLE `usertb`
MODIFY `u_id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=84;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
