-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 19, 2020 at 12:26 AM
-- Server version: 5.6.41-84.1-log
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `glam_jit`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads_lists`
--

CREATE TABLE `ads_lists` (
  `ads_list_id` int(11) NOT NULL,
  `ads_name` varchar(50) NOT NULL,
  `ads_url` varchar(100) DEFAULT NULL,
  `ads_cpi` int(50) DEFAULT NULL,
  `ads_image` varchar(150) DEFAULT NULL,
  `click_count` int(200) NOT NULL,
  `birthday` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads_lists`
--

INSERT INTO `ads_lists` (`ads_list_id`, `ads_name`, `ads_url`, `ads_cpi`, `ads_image`, `click_count`, `birthday`) VALUES
(11, 'shoes', 'https://www.flipkart.com/vimalnath-synthetics-checkered-fashion-pure-silk-saree/p/itmeb63f1dd75259?p', 6, 'http://www.glamwoodinteriors.com/mediatest/images/free-sandhy2-vimalnath-synthetics-original-imafa9a6mgk38fhg.jpeg', 3, NULL),
(12, 'flipkart tv', 'https://www.flipkart.com/mi-4a-100-cm-40-full-hd-led-smart-android-tv/p/itmaaa9224388773?pid=TVSFJRF', 8, 'http://www.glamwoodinteriors.com/mediatest/images/mi-l40m5-5ain-original-imafrjtbrjazqtgr.jpeg', 5, NULL),
(9, 'zim', 'https://www.flipkart.com/health-personal-care-appliances/~cs-jueulbws3f/pr?sid=zlw&sort=popularity&p', 5, 'http://www.glamwoodinteriors.com/mediatest/images/philips-usb-charging-qt3310-15-original-imaet4kyztbzgrnx.jpeg', 0, NULL),
(8, 'flipkart', 'https://www.flipkart.com/mi-4a-100-cm-40-full-hd-led-smart-android-tv/p/itmaaa9224388773?pid=TVSFJRF', 2, 'http://www.glamwoodinteriors.com/mediatest/images/mi-l40m5-5ain-original-imafrjtbrjazqtgr.jpeg', 1, NULL),
(13, 'shoes', 'https://www.flipkart.com/rudraaksha-women-fit-flare-yellow-dress/p/itmfb7y35fqppjfp?pid=DREFB7U7SZHB', 6, 'http://www.glamwoodinteriors.com/mediatest/images/s-rkrtidr-18-rudrakriti-original-imafb7y4teha9dfy.jpeg', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads_lists`
--
ALTER TABLE `ads_lists`
  ADD PRIMARY KEY (`ads_list_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads_lists`
--
ALTER TABLE `ads_lists`
  MODIFY `ads_list_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
