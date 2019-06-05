-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2017 at 01:31 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `car_trade`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `Email` varchar(50) NOT NULL,
  `name` varchar(35) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Address` varchar(55) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`Email`, `name`, `Password`, `Phone`, `Address`) VALUES
('carworld@gmail.com', 'Car World', 'Admin', '8111832361', 'Networkz system kollam'),
('subin', 'subin', '1234', '123', 'aadasd');

-- --------------------------------------------------------

--
-- Table structure for table `color_selector`
--

CREATE TABLE IF NOT EXISTS `color_selector` (
`colid` int(11) NOT NULL,
  `man` varchar(100) NOT NULL,
  `veh` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `color_selector`
--

INSERT INTO `color_selector` (`colid`, `man`, `veh`, `code`, `name`) VALUES
(1, 'Maruti Suzuki', 'alto k10', '#ff0000', 'Red'),
(9, 'Maruti Suzuki', 'alto k10', '#ff0000', 'RED'),
(8, 'Maruti Suzuki', 'Alto 800', '#595959', 'Metallic Grey'),
(10, 'Maruti Suzuki', 'alto k10', '#000000', 'black'),
(11, 'Maruti Suzuki', 'alto k10', '#009b00', 'green'),
(12, 'Maruti Suzuki', 'Alto 800', '#00ffff', 'blue'),
(13, '--Select Manufacture--', '', '#000000', ''),
(14, '--Select Manufacture--', '', '#000000', ''),
(15, '--Select Manufacture--', '', '#000000', ''),
(16, '--Select Manufacture--', '', '#000000', ''),
(17, '--Select Manufacture--', '', '#000000', ''),
(18, 'Maruti Suzuki', 'alto k10', '#000000', ''),
(19, 'Maruti Suzuki', 'alto k10', '#000000', '');

-- --------------------------------------------------------

--
-- Table structure for table `dealer_reg`
--

CREATE TABLE IF NOT EXISTS `dealer_reg` (
`d_id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `reg_id` varchar(25) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `manufacture` varchar(1000) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1008 ;

--
-- Dumping data for table `dealer_reg`
--

INSERT INTO `dealer_reg` (`d_id`, `name`, `reg_id`, `address`, `phone`, `password`, `email`, `image`, `Status`, `manufacture`) VALUES
(1000, 'Sarathy Auto Cars', '12345', 'asds ssg', '558855', '123456789', 'sarathy@gmail.com', '', 'Accept', 'Maruti Suzuki'),
(1003, 'INDUS MOTORS', '16375', 'Near KSRTC stand,Attingal', '2693320', '123456789', 'indus@gmail.com', 'fup/1901114528Indus_Capital_Partners_logo.jpg', 'Accept', 'Maruti Suzuki'),
(1004, 'dsfsadf', '5424646', 'zdfzsd saedfsd fsd fdsdf', '4546416+5', '1234567', 'subinstancil@gmail.com', 'fup/1732132046IMG_20170417_14394311.jpg', 'Accept', 'dsfds '),
(1006, 'panchimootil', '123445', 'panchimootil kollam', '5646454', '123456789', 'hk1@gmail.com', 'fup/2817213141phxzpe3fqtxx.jpg', 'Accept', 'honda'),
(1007, 'any', '12343', 'i dnt knw', '8943312403', '123456789', 'hk1@gmail.com', 'fup/965412983phxzpe3fqtxx.jpg', 'Reject', 'aston martion');

-- --------------------------------------------------------

--
-- Table structure for table `error_details`
--

CREATE TABLE IF NOT EXISTS `error_details` (
  `id` varchar(100) NOT NULL,
  `Reason` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `error_details`
--

INSERT INTO `error_details` (`id`, `Reason`) VALUES
('7', 'dwsgwetjeyrjk5uk'),
('8', '3hg35h46j4yj');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `email` varchar(100) NOT NULL,
`fid` int(11) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `feedback` longtext NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`email`, `fid`, `sub`, `feedback`) VALUES
('hk1@gmail.com', 1, 'About Site', 'The site need to add new cars '),
('hk1@gmail.com', 2, 'anything', 'i dnt knw'),
('seller@gmail.com', 3, 'mnn,fcsfs', ' sdfdsfsdf sd sf sdf sfd'),
('hk1@gmail.com', 4, 'zd', ' dfgvxdfg sdg sdfgsxdg  df ssdfg sdg fd sgf sdf sdf sdf sd sd '),
('hk1@gmail.com', 5, 'aaaa', 'ation about reactions to a product a persons performance of a task etc which is used as a basis for improvement\r\nthe modification or control of a process or system by its results or effects for example in a biochemical pathway or behavioural response');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`SlNo` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `login_date` date NOT NULL,
  `login_time` time NOT NULL,
  `User_Type` varchar(15) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`SlNo`, `email`, `login_date`, `login_time`, `User_Type`) VALUES
(62, 'hk1@gmail.com', '2017-05-06', '10:09:54', 'User'),
(63, 'hk1@gmail.com', '2017-05-06', '10:10:01', 'User'),
(64, 'hk1@gmail.com', '2017-05-07', '07:36:08', 'User'),
(65, 'hk1@gmail.com', '2017-05-07', '07:45:00', 'User'),
(66, 'hk1@gmail.com', '2017-05-07', '07:46:39', 'User'),
(67, 'hk1@gmail.com', '2017-05-07', '08:05:04', 'User'),
(68, 'hk1@gmail.com', '2017-05-07', '09:13:00', 'User'),
(69, 'hk1@gmail.com', '2017-05-07', '09:46:39', 'User'),
(70, 'hk1@gmail.com', '2017-05-07', '09:49:04', 'User'),
(71, 'hk1@gmail.com', '2017-05-07', '09:53:51', 'User'),
(72, 'hk1@gmail.com', '2007-05-17', '12:22:23', 'User'),
(73, 'hk1@gmail.com', '2017-05-07', '12:32:54', 'User'),
(74, 'hk1@gmail.com', '2017-05-07', '12:49:42', 'User'),
(75, 'hk1@gmail.com', '2017-05-07', '12:51:29', 'User'),
(76, 'hk1@gmail.com', '2017-05-08', '04:56:21', 'User'),
(77, 'hk1@gmail.com', '2017-05-14', '01:10:51', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `manufacture`
--

CREATE TABLE IF NOT EXISTS `manufacture` (
`m_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `imgemb` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `manufacture`
--

INSERT INTO `manufacture` (`m_id`, `name`, `country`, `imgemb`) VALUES
(1, 'Maruti Suzuki', 'Britain', 'fup/2494124994maruty.PNG'),
(13, 'BMW', 'German', 'fup/208377738bmw-logo-248C3D90E6-seeklogo.com.png'),
(12, 'Bentley', 'England', 'fup/2478331324bentley_logo_desktop_wallpaper_3-1920x1080.jpg'),
(11, 'Audi', 'German', 'fup/9129238549d167058a918a79ecb4f839ca08684f9.jpg'),
(10, 'Aston Martin', 'UK', 'fup/67813442Aston_logo3_2003hr.jpg'),
(14, 'Chevrolet', 'American', 'fup/966711840Chevrolet-Logo.jpg'),
(15, 'Fiat', 'Italian', 'fup/249533774fiat-logo.jpg'),
(16, 'Volkswagen', 'German', 'fup/2332728268Wolksvagen-Logo.jpg'),
(17, 'Ford', 'American', 'fup/1508324648ford-logo.jpg'),
(18, 'Honda', 'Japan', 'fup/790525606honda-logo.jpg'),
(19, 'Hyundai', 'Japan', 'fup/685514580hyundai-logo.jpg'),
(20, 'Lamborghini ', 'Italian', 'fup/1846114994lamborghini-logo.jpg'),
(21, 'Land Rover', 'UK', 'fup/726728768land-rover-logo1.jpg'),
(22, 'Mercedes-Benz ', 'German', 'fup/1871328126Mercedes-Benz-Logo.jpg'),
(23, 'Nissan', 'Japan', 'fup/710312940nissan-logo.jpg'),
(24, 'Renault', 'France', 'fup/240212538renault-logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `preown_reg`
--

CREATE TABLE IF NOT EXISTS `preown_reg` (
`pr_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mob` int(11) NOT NULL,
  `address` varchar(25) NOT NULL,
  `v_type` varchar(50) NOT NULL,
  `v_name` varchar(50) NOT NULL,
  `variant` varchar(10) NOT NULL,
  `v_make` varchar(50) NOT NULL,
  `regno` varchar(25) NOT NULL,
  `year_reg` int(4) NOT NULL,
  `km` double NOT NULL,
  `color` varchar(40) NOT NULL,
  `price` double NOT NULL,
  `secquest` varchar(255) NOT NULL,
  `ans` varchar(50) NOT NULL,
  `image1` varchar(150) NOT NULL,
  `image2` varchar(150) NOT NULL,
  `image3` varchar(150) NOT NULL,
  `image4` varchar(150) NOT NULL,
  `imgrc` varchar(255) NOT NULL,
  `mileage` varchar(100) NOT NULL,
  `fuel` varchar(25) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=112 ;

--
-- Dumping data for table `preown_reg`
--

INSERT INTO `preown_reg` (`pr_id`, `name`, `pass`, `email`, `mob`, `address`, `v_type`, `v_name`, `variant`, `v_make`, `regno`, `year_reg`, `km`, `color`, `price`, `secquest`, `ans`, `image1`, `image2`, `image3`, `image4`, `imgrc`, `mileage`, `fuel`) VALUES
(110, 'hk', '12345678', 'hk11@gmail.com', 2147483647, 'zdfzsd saedfsd fsd fdsdf', 'sedan', 'DB9', '1500', 'volks wagon', 'KL 02 AW 2656', 2012, 10000, 'black', 1000000, 'help?', 'no', 'fup/2726196872015_Silverado 1500_1.png', 'fup/206285949astonmartin_2005_db9_coupe_1.jpg', 'fup/1105820611aston-martin-db9-coupe-S2755454-1.jpg', 'fup/2508827193aston-martin-db9-coupe-S2755454-2.jpg', 'fup/1855829151USC60CHT272A021001.jpg', '25', 'petrol'),
(109, 'subin s', '123456789', 'seller@gmail.com', 12345678, 'anything', 'sedan', 'polo', 'GT', 'volks wagon', 'KL 02 AW 2656', 2012, 10000, 'black', 1000000, 'help?', 'no', 'fup/259631117$(KGrHqQOKosFHm0s+Qk+BR-4DSLld!~~60_35.JPG', 'fup/264341723558.jpg', 'fup/936085853.jpg', 'fup/13710168152000_aston_martin_vanquish-1.jpg', 'fup/31164197813UTKEeFRLfyba9VeKFHrLfHT_2.jpg', '25', 'petrol'),
(111, 'subin', '123456789', 'hk2@gmail.com', 2147483647, 'asdasd', 'sedan', 'DB9', 'ax3443', 'volks wagon', 'KL 02 AW 2656', 2012, 10000, 'black', 1000000, 'help?', 'no', 'fup/1468911398bmw-x3-5d-weiss-2014.png', 'fup/3104730068bmw-x3-5d-weiss-2014.png', 'fup/27172834bmw-x3-5d-weiss-2014.png', 'fup/2531529920services.edmunds-media.com.jpg', 'fup/1320918014Summit White-GAZ-241,241,243-640-en_US.jpg', '25', 'petrol');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
`rid` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `manufacture` varchar(100) NOT NULL,
  `vehicle` varchar(100) NOT NULL,
  `variant` varchar(100) NOT NULL,
  `old` double NOT NULL,
  `rcar` varchar(50) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `good` varchar(1000) NOT NULL,
  `improve` varchar(1000) NOT NULL,
  `rmil` varchar(100) NOT NULL,
  `mcity` double NOT NULL,
  `mhigh` double NOT NULL,
  `mcost` double NOT NULL,
  `rext` varchar(100) NOT NULL,
  `rextcon` varchar(1000) NOT NULL,
  `rint` varchar(100) NOT NULL,
  `rintcon` varchar(1000) NOT NULL,
  `rride` varchar(100) NOT NULL,
  `rridecon` varchar(1000) NOT NULL,
  `comments` varchar(1000) NOT NULL,
  `imcar` varchar(500) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`rid`, `email`, `manufacture`, `vehicle`, `variant`, `old`, `rcar`, `title`, `good`, `improve`, `rmil`, `mcity`, `mhigh`, `mcost`, `rext`, `rextcon`, `rint`, `rintcon`, `rride`, `rridecon`, `comments`, `imcar`) VALUES
(2, 'hk1@gmail.com', 'Maruti Suzuki ', 'alto k10', 'lxi', 1, 'Excellent', 'About Alto K10 LXI', 'Good at its price', 'Increase in interior space', 'Very Good', 15, 18, 250, 'Good', 'Its good looking', 'Bad', 'Its interior need some modifications', 'Very Bad', 'Its not efficient for Long Rides', 'Its Good at its price', 'fup/download.jpg'),
(3, 'hk1@gmail.com', 'Maruti Suzuki', 'alto k10', 'lxi', 1, 'Excellent', 'sdasd', 'asdasd', '', 'Excellent', 25, 25, 300, 'Excellent', 'sdsdzsd', 'Excellent', 'zdcdsf', 'Excellent', 'sadasd', 'sadasd', 'fup/27482629IMG_20170417_143956.jpg'),
(4, 'hk1@gmail.com', 'Maruti Suzuki', 'alto k10', 'lxi', 1, 'Excellent', 'sdasd', 'asdasd', '', 'Excellent', 25, 25, 300, 'Excellent', 'sdsdzsd', 'Excellent', 'zdcdsf', 'Excellent', 'sadasd', 'sadasd', 'fup/166083993IMG_20170417_143956.jpg'),
(5, 'hk1@gmail.com', 'Maruti Suzuki', 'alto k10', 'lxi', 1, 'Excellent', 'sdasd', 'asdasd', '', 'Excellent', 25, 25, 300, 'Excellent', 'sdsdzsd', 'Excellent', 'zdcdsf', 'Excellent', 'sadasd', 'sadasd', 'fup/292781599IMG_20170417_143956.jpg'),
(6, 'hk1@gmail.com', 'Maruti Suzuki', 'alto k10', 'lxi', 0, 'Excellent', '', '', '', 'Excellent', 0, 0, 0, 'Excellent', '', 'Excellent', '', 'Excellent', '', '', 'fup/252349315'),
(7, 'hk1@gmail.com', 'Maruti Suzuki', 'alto k10', 'lxi', 0, 'Excellent', '', '', '', 'Excellent', 0, 0, 0, 'Excellent', '', 'Excellent', '', 'Excellent', '', '', 'fup/226244377');

-- --------------------------------------------------------

--
-- Table structure for table `stock_reg`
--

CREATE TABLE IF NOT EXISTS `stock_reg` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(100) NOT NULL,
  `v_name` int(50) NOT NULL,
  `variant` int(30) NOT NULL,
  `manufacture` int(50) NOT NULL,
  `chassisno` varchar(150) NOT NULL,
  `engineno` varchar(150) NOT NULL,
  `yom` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE IF NOT EXISTS `user_reg` (
  `name` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(8) NOT NULL,
  `mob` int(12) NOT NULL,
  `secque` varchar(255) NOT NULL,
  `answer` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`name`, `address`, `dob`, `gender`, `mob`, `secque`, `answer`, `email`, `password`) VALUES
('HK', 'yynnggn', '2016-07-03', 'male', 88878, 'mama name', 'mom', 'hk1@gmail.com', '123456789'),
('subin', 'zdfzsd saedfsd fsd fdsdf', '0000-00-00', 'male', 2147483647, 'sfrdgsgfs', 'sds', 'subinstancil@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `veh_detail`
--

CREATE TABLE IF NOT EXISTS `veh_detail` (
`v_id` int(11) NOT NULL,
  `v_name` varchar(50) NOT NULL,
  `manufature` varchar(50) NOT NULL,
  `v_type` varchar(30) NOT NULL,
  `minprice` double NOT NULL,
  `maxprice` double NOT NULL,
  `cc_engine` int(11) NOT NULL,
  `colour` varchar(100) NOT NULL,
  `seatcap` int(11) NOT NULL,
  `engine` varchar(20) NOT NULL,
  `bhp` varchar(15) NOT NULL,
  `len` int(11) NOT NULL,
  `wid` int(11) NOT NULL,
  `hgt` int(11) NOT NULL,
  `gc` int(11) NOT NULL,
  `wb` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `bootspace` int(11) NOT NULL,
  `turn_rad` float NOT NULL,
  `tyre_frnt` varchar(25) NOT NULL,
  `tyre_back` varchar(25) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `img4` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=116 ;

--
-- Dumping data for table `veh_detail`
--

INSERT INTO `veh_detail` (`v_id`, `v_name`, `manufature`, `v_type`, `minprice`, `maxprice`, `cc_engine`, `colour`, `seatcap`, `engine`, `bhp`, `len`, `wid`, `hgt`, `gc`, `wb`, `weight`, `bootspace`, `turn_rad`, `tyre_frnt`, `tyre_back`, `img1`, `img2`, `img3`, `img4`) VALUES
(100, 'alto k10', 'Maruti Suzuki', 'Hatchback', 300000, 0, 1000, 'white', 18, 'sds', 'dsd', 111, 1111, 1111111, 11111, 1111, 111, 111, 11111, '1111', '111111', 'fup/download.jpg', '', '', ''),
(105, 'Alto 800', 'Maruti Suzuki', 'Hatchback', 259000, 374000, 796, '', 5, 'F8D', '48bhp@600rpm', 3430, 1490, 0, 160, 2360, 1185, 117, 0, '', '145?80R12', 'fup/66821669images_Color_Alto800_green.png', 'fup/1224139maruti-alto-800-rear-left-view-121.jpg', 'fup/114005665New Granite Grey_0.jpg', 'fup/108221031maruti-suzuki-alto-800-facelift-interior_827x510_41463563933.jpg'),
(115, 'Silverado', 'Chevrolet', 'truck', 3000000, 3200000, 2500, '', 4, 'V16', '2400', 3400, 2000, 3000, 12220, 500, 1000, 12, 200, '12449', '122', 'fup/227302619images.jpg', 'fup/1368180972015_Silverado 1500_1.png', 'fup/142303863Summit White-GAZ-241,241,243-640-en_US.jpg', 'fup/79407405USC60CHT272A021001.jpg'),
(114, 'X6', 'BMW', 'suv', 500000, 550000, 2016, '', 8, 'V16', '2400', 3400, 2000, 3000, 12220, 5000, 12212, 12, 200, '12449', '1224', 'fup/993311138bmw.jpg', 'fup/211398912bmw-x3-5d-weiss-2014.png', 'fup/2528932206bmw-x6-suv-2012-main.jpg', 'fup/12637164services.edmunds-media.com.jpg'),
(113, 'DB9', 'Aston Martin', 'coupe', 4000000, 4500000, 2016, '', 4, 'V8', '2400', 3400, 2000, 3000, 12220, 5000, 12212, 12, 200, '12449', '1224', 'fup/189658490aston-martin-db9-coupe-S2755454-1.jpg', 'fup/693929880aston-martin-db9-coupe-S2755454-2.jpg', 'fup/293299718astonmartin_2005_db9_coupe_1.jpg', 'fup/199599316aston-martin-db9-image-11115.jpg'),
(112, 'Audi A3', 'Audi', 'sedan', 3100000, 3600000, 1968, '', 4, 'V8', '2400', 3400, 2000, 3000, 100, 500, 1000, 12, 200, '12', '122', 'fup/27741107062017_audi_s3_angularfront.jpg', 'fup/3139545122017_audi_s3_frontview.jpg', 'fup/290174382000.png', 'fup/767910188A3_Ibis_White.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `veh_variant`
--

CREATE TABLE IF NOT EXISTS `veh_variant` (
`var_id` int(11) NOT NULL,
  `v_id` int(11) NOT NULL,
  `variant` varchar(10) NOT NULL,
  `price` double NOT NULL,
  `fuel` varchar(15) NOT NULL,
  `trans` varchar(10) NOT NULL,
  `no_gear` int(11) DEFAULT NULL,
  `ac` varchar(5) DEFAULT NULL,
  `clmt_cntrl` varchar(5) DEFAULT NULL,
  `cntrl_lock` varchar(5) DEFAULT NULL,
  `player` varchar(5) DEFAULT NULL,
  `pow_steer` varchar(5) DEFAULT NULL,
  `pow_window` varchar(5) DEFAULT NULL,
  `steer_adj` varchar(10) DEFAULT NULL,
  `ele_seat` varchar(5) DEFAULT NULL,
  `steer_cntrls` varchar(5) DEFAULT NULL,
  `rear_acvent` varchar(5) DEFAULT NULL,
  `remote_boot` varchar(5) DEFAULT NULL,
  `rear_wiper` varchar(5) DEFAULT NULL,
  `leather_seats` varchar(5) DEFAULT NULL,
  `ele_mirror` varchar(5) DEFAULT NULL,
  `abs` varchar(5) DEFAULT NULL,
  `airbag` varchar(5) DEFAULT NULL,
  `parking_sensor` varchar(5) DEFAULT NULL,
  `traction` varchar(5) DEFAULT NULL,
  `mileage` double NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `veh_variant`
--

INSERT INTO `veh_variant` (`var_id`, `v_id`, `variant`, `price`, `fuel`, `trans`, `no_gear`, `ac`, `clmt_cntrl`, `cntrl_lock`, `player`, `pow_steer`, `pow_window`, `steer_adj`, `ele_seat`, `steer_cntrls`, `rear_acvent`, `remote_boot`, `rear_wiper`, `leather_seats`, `ele_mirror`, `abs`, `airbag`, `parking_sensor`, `traction`, `mileage`) VALUES
(10, 100, 'lxi', 300000, 'petrol', 'manual', 5, 'y', '', '', 'y', 'y', 'y', '', '', '', '', '', '', '', '', '', '', '', '', 18),
(11, 105, 'STD', 259000, 'Petrol', 'Manual', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 24.7),
(30, 115, '1500', 310000, 'Diesel', 'Manual', 6, 'n', '', 'n', 'n', 'n', 'n', 'n', 'n', 'n', 'y', '', 'n', 'n', 'n', 'n', 'n', '', 'n', 10),
(29, 114, '2016', 5500000, 'Diesel', 'Manual', 5, 'n', 'n', 'n', 'n', 'n', 'n', 'n', 'n', 'n', 'y', 'n', 'n', 'n', 'n', 'n', 'n', 'n', 'n', 15),
(28, 113, 'Coupe', 4100000, 'petrol', 'Auto', 6, 'n', 'n', 'n', '', 'n', 'n', '', 'n', 'n', 'y', 'n', 'n', 'n', 'n', '', 'n', 'n', 'n', 25),
(27, 112, '35 TFSI ', 31000000, 'petrol', 'Auto', 6, 'n', 'n', 'n', 'n', 'n', 'n', 'n', 'n', 'n', 'y', '', 'n', '', 'n', '', 'n', 'n', '', 20.1);

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE IF NOT EXISTS `visitor` (
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`no`) VALUES
(140);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `color_selector`
--
ALTER TABLE `color_selector`
 ADD PRIMARY KEY (`colid`);

--
-- Indexes for table `dealer_reg`
--
ALTER TABLE `dealer_reg`
 ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
 ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`SlNo`);

--
-- Indexes for table `manufacture`
--
ALTER TABLE `manufacture`
 ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `preown_reg`
--
ALTER TABLE `preown_reg`
 ADD PRIMARY KEY (`pr_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
 ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
 ADD PRIMARY KEY (`email`);

--
-- Indexes for table `veh_detail`
--
ALTER TABLE `veh_detail`
 ADD PRIMARY KEY (`v_id`);

--
-- Indexes for table `veh_variant`
--
ALTER TABLE `veh_variant`
 ADD PRIMARY KEY (`var_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `color_selector`
--
ALTER TABLE `color_selector`
MODIFY `colid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `dealer_reg`
--
ALTER TABLE `dealer_reg`
MODIFY `d_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1008;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `SlNo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `manufacture`
--
ALTER TABLE `manufacture`
MODIFY `m_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `preown_reg`
--
ALTER TABLE `preown_reg`
MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `veh_detail`
--
ALTER TABLE `veh_detail`
MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=116;
--
-- AUTO_INCREMENT for table `veh_variant`
--
ALTER TABLE `veh_variant`
MODIFY `var_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
