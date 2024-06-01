-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2020 at 01:34 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_gurukul`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `contact_us_id` int(11) NOT NULL,
  `contact_us_name` varchar(255) NOT NULL,
  `contact_us_email` varchar(255) NOT NULL,
  `contact_us_address` text NOT NULL,
  `contact_us_mobile` varchar(13) NOT NULL,
  `contact_us_telephone` varchar(13) NOT NULL,
  `contact_us_fax` varchar(13) NOT NULL,
  `contact_us_website` varchar(255) NOT NULL,
  `contact_us_facebook` varchar(255) NOT NULL,
  `contact_us_twitter` varchar(255) NOT NULL,
  `contact_us_linkedin` varchar(255) NOT NULL,
  `contact_us_google` varchar(255) NOT NULL,
  `contact_us_iframe` text NOT NULL,
  `contact_us_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `contact_us_modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fld_delete` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_us_id`, `contact_us_name`, `contact_us_email`, `contact_us_address`, `contact_us_mobile`, `contact_us_telephone`, `contact_us_fax`, `contact_us_website`, `contact_us_facebook`, `contact_us_twitter`, `contact_us_linkedin`, `contact_us_google`, `contact_us_iframe`, `contact_us_date`, `contact_us_modified_date`, `fld_delete`) VALUES
(1, 'Gurukul Polytechnic', 'gurukulpolytechnic@gmail.com', 'Survey No.34/1/B &34/2,At- Phulenagar,Post Nandgaon Tal-Nandgaon, Dist-Nashik Nandgaon Nashik Maharashtra India 423106', '9403525221', '02552-243388', '02552-243688', 'www.gurukulpolytechnic.org', '', '', '', '', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3741.694562773624!2d74.63254631498164!3d20.31290598639046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdc1f2b7eb90337%3A0xf47c003d1bda5b2e!2sGurukul%20Polytechnic%2C%20Nandgaon!5e0!3m2!1sen!2sin!4v1582797813397!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>', '2020-02-26 16:41:14', '2020-02-29 17:08:35', 0);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `Department_id` int(11) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Department_delete` int(11) NOT NULL DEFAULT '0',
  `Department_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Department_id`, `Department`, `Department_delete`, `Department_date`) VALUES
(1, 'Civil', 0, '2020-02-28 13:55:41'),
(2, 'Computer', 0, '2020-02-28 13:55:55'),
(3, 'Eelctronics And Telecommunications', 0, '2020-02-28 13:58:58'),
(4, 'Electrical', 0, '2020-02-28 13:59:18'),
(5, 'Mechanical', 0, '2020-02-28 13:59:41'),
(6, 'Fgdsfdsfdsfgdsf', 1, '2020-02-28 14:00:50'),
(7, 'Applied Science', 0, '2020-02-28 17:03:10'),
(8, 'Math Teacher', 0, '2020-02-29 10:38:56'),
(9, 'Student Section Scholarship', 1, '2020-02-29 10:43:01'),
(10, 'Student Section Scholarship', 1, '2020-02-29 10:44:36'),
(11, 'Student Section Scholarship', 0, '2020-02-29 10:49:00'),
(12, 'Account Section ', 0, '2020-02-29 10:51:57'),
(13, 'Library Section', 0, '2020-02-29 10:53:15'),
(14, 'Office', 0, '2020-02-29 10:53:32');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE IF NOT EXISTS `designation` (
  `Designation_id` int(11) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `Designation_delete` int(11) NOT NULL DEFAULT '0',
  `Designation_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`Designation_id`, `Designation`, `Designation_delete`, `Designation_date`) VALUES
(1, 'Principal', 0, '2020-02-27 18:21:54'),
(2, 'HOD', 0, '2020-02-27 18:22:04'),
(3, 'Jr Clerk', 0, '2020-02-27 18:23:08'),
(4, 'Peon', 0, '2020-02-27 18:23:59'),
(5, 'Sr Cleark', 0, '2020-02-27 18:41:01'),
(6, 'Lecturer', 1, '2020-02-27 18:41:57'),
(7, 'Lecturer', 0, '2020-02-27 18:48:11'),
(8, 'Principal Member Secretory', 0, '2020-02-28 10:00:48'),
(9, 'Member', 0, '2020-02-28 10:01:02'),
(10, 'Chairman', 0, '2020-02-28 10:01:28'),
(11, 'Teaching staff Representative', 0, '2020-02-28 10:02:07'),
(12, 'Academic Coordinator', 0, '2020-02-28 10:02:43'),
(13, 'Training and Placement Officer', 0, '2020-02-28 10:03:35'),
(14, 'Clerk', 0, '2020-02-29 10:46:55'),
(15, 'Student Section Scholarship', 0, '2020-02-29 10:47:09'),
(16, 'TECHONO FAIR', 0, '2020-03-03 17:20:33');

-- --------------------------------------------------------

--
-- Table structure for table `index_count`
--

CREATE TABLE IF NOT EXISTS `index_count` (
  `count_id` int(11) NOT NULL,
  `count_title` varchar(255) NOT NULL,
  `count_record` varchar(255) NOT NULL,
  `count_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `count_modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fld_delete` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `index_count`
--

INSERT INTO `index_count` (`count_id`, `count_title`, `count_record`, `count_date`, `count_modified_date`, `fld_delete`) VALUES
(1, 'pqr', '9879456512', '2020-02-28 11:05:32', '2020-02-29 11:29:09', 1),
(3, 'xyz', '123', '2020-02-28 11:29:22', '2020-02-28 11:44:37', 1),
(4, 'Subjects', '568', '2020-02-29 11:29:29', '2020-02-29 11:29:29', 0),
(5, 'Students', '3500', '2020-02-29 11:29:44', '2020-02-29 11:29:44', 0),
(6, 'Modern Lab', '65', '2020-02-29 11:29:57', '2020-02-29 11:29:57', 0),
(7, 'Teachers', '250', '2020-02-29 11:30:11', '2020-02-29 11:30:11', 0),
(8, 'fdsfds', '4553', '2020-02-29 11:45:03', '2020-02-29 11:45:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `fld_id` int(11) NOT NULL,
  `fld_name` varchar(255) NOT NULL,
  `fld_email` varchar(255) NOT NULL,
  `fld_password` varchar(50) NOT NULL,
  `fld_photo` varchar(255) NOT NULL,
  `fld_address` text NOT NULL,
  `fld_mobile` varchar(10) NOT NULL,
  `fld_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`fld_id`, `fld_name`, `fld_email`, `fld_password`, `fld_photo`, `fld_address`, `fld_mobile`, `fld_created_date`, `fld_modified_date`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin', '224897.jpg', 'Mumbai', '7878979478', '2020-02-26 10:40:55', '2020-03-05 12:18:06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_team`
--

CREATE TABLE IF NOT EXISTS `tbl_admin_team` (
  `fld_admin_id` int(11) NOT NULL,
  `fld_admin_name` varchar(50) NOT NULL,
  `Designation_id` int(11) NOT NULL,
  `Department_id` varchar(50) NOT NULL,
  `fld_admin_qualification` varchar(255) NOT NULL,
  `fld_admin_experiance` varchar(100) NOT NULL,
  `fld_admin_email` varchar(255) NOT NULL,
  `fld_admin_mobile` varchar(20) NOT NULL,
  `fld_admin_photo` varchar(255) NOT NULL,
  `admin_team_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `admin_team_modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fld_delete` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin_team`
--

INSERT INTO `tbl_admin_team` (`fld_admin_id`, `fld_admin_name`, `Designation_id`, `Department_id`, `fld_admin_qualification`, `fld_admin_experiance`, `fld_admin_email`, `fld_admin_mobile`, `fld_admin_photo`, `admin_team_created_date`, `admin_team_modified_date`, `fld_delete`) VALUES
(1, 'yogita', 12, '5', 'BE', '2years', 'y@gmail.com', '7887878978', '5e590abcdb9560Koala.jpg', '2020-02-28 18:12:36', '2020-02-29 10:58:59', 1),
(2, 'yogitaghfhgf', 9, '2', 'BEdfgfdg', '2yearsfgdfg', 'y@gmail.com', '7887878978', '5e591479d7c4d0Tulips.jpg', '2020-02-28 18:45:25', '2020-02-29 10:58:54', 1),
(3, 'Prof.N.R.Thakre', 1, '8', 'ME (Electrical Power System)', '', 'nrthakre.gurukul@gmail.com', '', '5e59f27a19fcd0admin1.jpg', '2020-02-29 10:41:22', '2020-02-29 10:41:22', 0),
(4, 'Mr.V.S.Nikam', 5, '', 'M.A', '', 'vijaynikam624@gmail.com', '', '5e59f2c7b84c20admin2.jpg', '2020-02-29 10:42:39', '2020-03-05 14:59:13', 1),
(5, 'Mr.V.S.Nikam', 5, '11', 'M.A', '', 'vijaynikam624@gmail.com', '', '5e59f472ad9190admin2.jpg', '2020-02-29 10:49:46', '2020-02-29 10:49:46', 0),
(6, 'M/s A.D. Adhav', 14, '12', 'Bsc.Bed', '', 'ahire.gurukul@gmail.com', '', '5e59f52a375020admin3.jpg', '2020-02-29 10:52:50', '2020-02-29 10:52:50', 0),
(7, 'Mr.N.A.Dhase', 14, '13', ' B.com/LTC', '', 'nirmaldhase@gmail.com', '', '5e59f58e07de20admin4.jpg', '2020-02-29 10:54:30', '2020-02-29 10:54:30', 0),
(8, 'Mr.R.P.Deore', 3, '12', 'Bsc', '', '', '8830834583', '5e59f5c1134fd0admin5.jpg', '2020-02-29 10:55:21', '2020-02-29 10:55:21', 0),
(9, 'Shri.M.D.Sor', 4, '14', '', '', '', '7798328851', '5e59f5e0913260admin6.jpg', '2020-02-29 10:55:52', '2020-02-29 10:55:52', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_affiliation_certificates`
--

CREATE TABLE IF NOT EXISTS `tbl_affiliation_certificates` (
  `fld_affiliation_id` int(11) NOT NULL,
  `fld_affiliation_image` varchar(255) NOT NULL,
  `affiliation_certificates_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `affiliation_certificates_modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fld_delete` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_affiliation_certificates`
--

INSERT INTO `tbl_affiliation_certificates` (`fld_affiliation_id`, `fld_affiliation_image`, `affiliation_certificates_created_date`, `affiliation_certificates_modified_date`, `fld_delete`) VALUES
(1, '5e57b27c1ab3fAffiliation 2012-13.JPG', '2020-02-27 17:16:00', '2020-02-27 17:49:17', 1),
(2, '5e57ac024db971Affiliation 2013-14.JPG', '2020-02-27 17:16:10', '2020-02-27 17:16:10', 0),
(3, '5e57ac0b016e32Affiliation 2014-15.JPG', '2020-02-27 17:16:19', '2020-02-27 17:16:19', 0),
(4, '5e57ac13090f53Affiliation 2016-17.JPG', '2020-02-27 17:16:27', '2020-02-27 17:16:27', 0),
(5, '5e57ace80e4e10Affiliation 2018-19.JPG', '2020-02-27 17:20:00', '2020-02-27 17:20:00', 0),
(7, '5e57b3e0dd40a0Affiliation 2012-13.JPG', '2020-02-27 17:49:44', '2020-02-27 17:49:44', 0),
(8, '5e57b3e9bebc21Affiliation 2019-20.JPG', '2020-02-27 17:49:53', '2020-02-27 17:49:53', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alumini`
--

CREATE TABLE IF NOT EXISTS `tbl_alumini` (
  `fld_a_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `passout_year` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fld_delete` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_alumini`
--

INSERT INTO `tbl_alumini` (`fld_a_id`, `name`, `email`, `mobile`, `passout_year`, `department`, `message`, `created_date`, `modified_date`, `fld_delete`) VALUES
(1, 'yogita', 'admin@gmail.com', '8974874874', '2000-2014', 'Computer', 'dfds', '2020-03-03 15:26:22', '2020-03-03 15:40:14', 1),
(2, 'sdffds', 'fsdf@fgf.hyj', '7857878787', '2000-2014', 'Computer', 'drdghfh', '2020-03-04 11:42:57', '2020-03-04 11:43:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alumini_committee`
--

CREATE TABLE IF NOT EXISTS `tbl_alumini_committee` (
  `fld_ac_id` int(11) NOT NULL,
  `fld_ac_name` varchar(50) NOT NULL,
  `Designation_id` int(11) NOT NULL,
  `fld_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fld_delete` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_alumini_committee`
--

INSERT INTO `tbl_alumini_committee` (`fld_ac_id`, `fld_ac_name`, `Designation_id`, `fld_created_date`, `fld_modified_date`, `fld_delete`) VALUES
(1, 'Prof. N. R. Thakre', 1, '2020-02-28 17:19:15', '2020-02-29 12:02:04', 0),
(2, 'Prof. S. R. Jain', 12, '2020-02-28 17:19:33', '2020-02-28 17:19:33', 0),
(3, 'Prof. A. E. Deore', 2, '2020-02-28 17:19:42', '2020-02-28 17:19:42', 0),
(4, 'Prof. A. L. Chaudhari', 2, '2020-02-28 17:19:51', '2020-02-29 12:02:08', 0),
(5, 'Prof. S. A. Mahevi', 2, '2020-02-28 17:19:59', '2020-02-28 17:19:59', 0),
(6, 'Prof. T. V. Thakur', 2, '2020-02-28 17:20:06', '2020-02-28 17:20:06', 0),
(7, 'Prof. P. L. Chaudhari', 2, '2020-02-28 17:20:19', '2020-02-28 17:56:34', 0),
(8, 'ghf', 3, '2020-03-03 15:41:22', '2020-03-03 15:44:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_board_members`
--

CREATE TABLE IF NOT EXISTS `tbl_board_members` (
  `fld_bm_id` int(11) NOT NULL,
  `fld_bm_name` varchar(50) NOT NULL,
  `Designation_id` int(11) NOT NULL,
  `fld_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fld_delete` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_board_members`
--

INSERT INTO `tbl_board_members` (`fld_bm_id`, `fld_bm_name`, `Designation_id`, `fld_created_date`, `fld_modified_date`, `fld_delete`) VALUES
(1, 'Mrs.Shobha S.Kande', 10, '2020-02-28 18:10:14', '2020-02-29 12:05:28', 0),
(2, 'Mr.Nilesh R. Thakre', 8, '2020-02-28 18:11:00', '2020-02-28 18:11:00', 0),
(3, 'Mr.Bhausaheb A.Sonawane', 2, '2020-02-28 18:11:10', '2020-02-29 16:48:14', 0),
(4, 'Mr.Ashok Kela', 9, '2020-02-28 18:11:19', '2020-02-28 18:11:19', 0),
(5, 'Mr. Major Jagannath Solunke', 9, '2020-02-28 18:11:28', '2020-02-28 18:11:28', 0),
(6, 'Prof. S.R.Jain', 11, '2020-02-28 18:11:39', '2020-02-28 18:11:39', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `fld_contact_id` int(11) NOT NULL,
  `fld_contact_name` varchar(50) NOT NULL,
  `fld_contact_email` varchar(255) NOT NULL,
  `fld_contact_subject` varchar(50) NOT NULL,
  `fld_contact_message` text NOT NULL,
  `fld_contact_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_contact_modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fld_delete` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`fld_contact_id`, `fld_contact_name`, `fld_contact_email`, `fld_contact_subject`, `fld_contact_message`, `fld_contact_created_date`, `fld_contact_modified_date`, `fld_delete`) VALUES
(1, 'yogita', 'y@gmail.com', 'enquiry', 'sadadas', '2020-02-28 14:18:58', '2020-02-28 14:20:56', 1),
(2, 'Sneha', 's@yahoo.com', 'abc', 'Hello..........\r\n', '2020-02-28 14:21:41', '2020-02-28 14:21:41', 0),
(3, 'gfdgdf', 'fdgfdg@cgfdg.fgf', 'fdgfdg', 'fgfg', '2020-03-04 12:26:28', '2020-03-04 12:26:42', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_courese_offered`
--

CREATE TABLE IF NOT EXISTS `tbl_courese_offered` (
  `fld_co_id` int(11) NOT NULL,
  `fld_co_course_name` varchar(100) NOT NULL,
  `fld_co_year` varchar(50) NOT NULL,
  `fld_co_intake` varchar(40) NOT NULL,
  `fld_co_choice_code` varchar(50) NOT NULL,
  `fld_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fld_delete` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_courese_offered`
--

INSERT INTO `tbl_courese_offered` (`fld_co_id`, `fld_co_course_name`, `fld_co_year`, `fld_co_intake`, `fld_co_choice_code`, `fld_created_date`, `fld_modified_date`, `fld_delete`) VALUES
(1, 'Civil Engineering', '2012', '60', '540419110', '2020-02-29 10:48:19', '2020-02-29 11:31:22', 0),
(2, 'Computer Engineering', '2012', '60', '540424510', '2020-02-29 10:49:08', '2020-02-29 10:49:08', 0),
(3, 'Electronics & Telecommunication Engineering', '2012', '60', '540437210', '2020-02-29 10:49:37', '2020-02-29 10:49:37', 0),
(4, 'Mechanical Engineering', '2012', '60', '540461210', '2020-02-29 10:49:59', '2020-02-29 10:49:59', 0),
(5, 'Electrical Engineering', '2012', '60', '540429310', '2020-02-29 10:50:19', '2020-02-29 10:50:19', 0),
(6, 'Total Intake', '', '300', '', '2020-02-29 10:51:21', '2020-02-29 11:53:24', 0),
(7, 'fgfdg', 'fdgdf', 'dfg', 'dfgdf', '2020-03-04 10:43:37', '2020-03-04 10:44:41', 1),
(8, 'fgfdgdfsa43', 'fdgdf3424', 'dfg432423', 'dfgdf42342', '2020-03-04 10:44:13', '2020-03-04 10:44:59', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enquiry`
--

CREATE TABLE IF NOT EXISTS `tbl_enquiry` (
  `fld_enquiry_id` int(11) NOT NULL,
  `fld_enquiry_name` varchar(100) NOT NULL,
  `fld_enquiry_email` varchar(255) NOT NULL,
  `fld_enquiry_basic_qualification` varchar(50) NOT NULL,
  `fld_enquiry_percentage` varchar(50) NOT NULL,
  `fld_enquiry_course_name` varchar(50) NOT NULL,
  `fld_enquiry_parents_contact_no` varchar(10) NOT NULL,
  `fld_enquiry_address` text NOT NULL,
  `fld_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fld_delete` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_enquiry`
--

INSERT INTO `tbl_enquiry` (`fld_enquiry_id`, `fld_enquiry_name`, `fld_enquiry_email`, `fld_enquiry_basic_qualification`, `fld_enquiry_percentage`, `fld_enquiry_course_name`, `fld_enquiry_parents_contact_no`, `fld_enquiry_address`, `fld_created_date`, `fld_modified_date`, `fld_delete`) VALUES
(1, 'Yogita', 'y@gmail.com', 'BE', '80%', 'IT', '9875458787', 'Nashik', '2020-02-28 14:31:15', '2020-02-28 14:40:37', 1),
(2, 'Sneha', 's@yahoo.com', 'BE', '75%', 'Computer', '9787978897', 'Pune', '2020-02-28 14:42:08', '2020-02-28 14:42:08', 0),
(3, 'fdd', 'dsfdsf@dfd.gfhg', 'dsfdsf', '65', 'fgf', '9887979789', 'fghfdh', '2020-03-04 11:40:46', '2020-03-04 11:41:36', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fee_structure`
--

CREATE TABLE IF NOT EXISTS `tbl_fee_structure` (
  `fld_fee_id` int(11) NOT NULL,
  `fld_fee_acadamic_year` varchar(40) NOT NULL,
  `fld_fee_year` varchar(50) NOT NULL,
  `fld_fee_tution_fees` varchar(50) NOT NULL,
  `fld_fee_development_fees` varchar(50) NOT NULL,
  `fld_fee_total` varchar(50) NOT NULL,
  `fld_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fld_delete` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_fee_structure`
--

INSERT INTO `tbl_fee_structure` (`fld_fee_id`, `fld_fee_acadamic_year`, `fld_fee_year`, `fld_fee_tution_fees`, `fld_fee_development_fees`, `fld_fee_total`, `fld_created_date`, `fld_modified_date`, `fld_delete`) VALUES
(1, '2017-183432', 'FIRST YEARdfgfdgfdg', '3727356', '37276', '3764632', '2020-02-28 15:47:33', '2020-02-28 16:49:22', 1),
(2, '2017-18', 'FIRST YEAR', '37273', '3727', '41000', '2020-02-28 16:50:19', '2020-02-28 16:50:19', 0),
(3, '2017-18', 'SECOND YEAR', '37273', '3727', '41000', '2020-02-28 16:51:28', '2020-02-28 16:51:28', 0),
(4, '2017-18', 'DIRECT SECOND YEAR', '37273', '3727', '41000', '2020-02-28 16:52:38', '2020-02-28 16:52:38', 0),
(5, '2017-18', 'THIRD YEAR', '37273', '3727', '41000', '2020-02-28 16:53:04', '2020-02-28 16:53:04', 0),
(6, '2018-19', 'FIRST YEAR', '37273', '3727', '41000', '2020-02-28 16:53:24', '2020-02-28 16:53:24', 0),
(7, '2018-19', 'SECOND YEAR', '37273', '3727', '41000', '2020-02-28 16:53:43', '2020-02-28 16:53:43', 0),
(8, '2018-19', 'DIRECT SECOND YEAR', '37273', '3727', '41000', '2020-02-28 16:53:59', '2020-02-28 16:53:59', 0),
(9, '2018-19', 'THIRD YEAR', '37273', '3727', '41000', '2020-02-28 16:54:36', '2020-02-28 16:54:36', 0),
(10, '2019-20', 'FIRST YEAR', '40271', '4229', '44500', '2020-02-28 16:55:17', '2020-02-28 16:55:17', 0),
(11, '2019-20', 'SECOND YEAR', '40271', '4229', '44500', '2020-02-28 16:57:28', '2020-02-28 16:57:28', 0),
(12, '2019-20', 'DIRECT SECOND YEAR', '40271', '4229', '44500', '2020-02-28 16:57:43', '2020-02-28 16:57:43', 0),
(13, '2019-20', 'THIRD YEAR', '40271', '4229', '44500', '2020-02-28 16:58:02', '2020-02-28 16:58:02', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery_images`
--

CREATE TABLE IF NOT EXISTS `tbl_gallery_images` (
  `fld_gallery_id` int(11) NOT NULL,
  `fld_image_title_id` int(11) NOT NULL,
  `fld_gallery_photo` varchar(255) NOT NULL,
  `gallery_images_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gallery_images_modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fld_delete` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallery_images`
--

INSERT INTO `tbl_gallery_images` (`fld_gallery_id`, `fld_image_title_id`, `fld_gallery_photo`, `gallery_images_created_date`, `gallery_images_modified_date`, `fld_delete`) VALUES
(1, 6, '5e58b9f889ce5IMG-20170729-WA0029.jpg', '2020-02-28 11:26:09', '2020-02-28 12:28:04', 0),
(2, 6, '5e58ab7d9e8c61IMG-20170729-WA0042.jpg', '2020-02-28 11:26:13', '2020-02-28 11:26:13', 0),
(3, 5, '5e58af1f9af8d0visit  Hero 2 wheeler manmad.jpg', '2020-02-28 11:41:43', '2020-02-28 11:41:43', 0),
(4, 5, '5e58af2720e6d1visit  MSEB Bhusawal.jpg', '2020-02-28 11:41:51', '2020-02-28 11:41:51', 0),
(5, 5, '5e58af2d564eb2Visit  MSEB manmad.jpg', '2020-02-28 11:41:57', '2020-02-28 11:41:57', 0),
(6, 5, '5e58af334378f3visit CDAC company pune.jpg', '2020-02-28 11:42:03', '2020-02-28 11:42:03', 0),
(7, 5, '5e58af376d6f24visit CDACcompanypune.jpg', '2020-02-28 11:42:07', '2020-02-28 11:42:07', 0),
(8, 5, '5e58af3b8fc435visit Hero2 wheelermanmad.jpg', '2020-02-28 11:42:11', '2020-02-28 11:42:11', 0),
(9, 4, '5e58b119b71b00D3P_8429.JPG', '2020-02-28 11:50:09', '2020-02-28 11:50:09', 0),
(10, 4, '5e58b12563e5b1D3P_8463.JPG', '2020-02-28 11:50:21', '2020-02-28 11:50:21', 0),
(11, 4, '5e58b12a0c28c2D3P_8470.JPG', '2020-02-28 11:50:26', '2020-02-28 11:50:26', 0),
(12, 4, '5e58b12dceb573D3P_8498.JPG', '2020-02-28 11:50:29', '2020-02-28 11:50:29', 0),
(13, 4, '5e58b1318ddbe4D3P_8551.JPG', '2020-02-28 11:50:33', '2020-02-28 11:50:33', 0),
(14, 4, '5e58b135863ac5D3P8429.JPG', '2020-02-28 11:50:37', '2020-02-28 11:50:37', 0),
(15, 4, '5e58b2264284c0D3P8463.JPG', '2020-02-28 11:54:38', '2020-02-28 11:54:38', 0),
(16, 4, '5e58b22bb12511D3P8470.JPG', '2020-02-28 11:54:43', '2020-02-28 11:54:43', 0),
(17, 4, '5e58b22f704b82D3P8498.JPG', '2020-02-28 11:54:47', '2020-02-28 11:54:47', 0),
(18, 4, '5e58b2332f71f3D3P8551.JPG', '2020-02-28 11:54:51', '2020-02-28 11:54:51', 0),
(19, 4, '5e58b23777eca4IMG_0307.JPG', '2020-02-28 11:54:55', '2020-02-28 11:54:55', 0),
(20, 4, '5e58b24078a3c5IMG_9792.JPG', '2020-02-28 11:55:04', '2020-02-28 11:55:04', 0),
(21, 4, '5e58b2479ec960D3P8463.JPG', '2020-02-28 11:55:11', '2020-02-28 11:55:11', 0),
(22, 4, '5e58b24bd4e861D3P8470.JPG', '2020-02-28 11:55:15', '2020-02-28 11:55:15', 0),
(23, 4, '5e58b24f9baff2D3P8498.JPG', '2020-02-28 11:55:19', '2020-02-28 11:55:19', 0),
(24, 4, '5e58b2534f64b3D3P8551.JPG', '2020-02-28 11:55:23', '2020-02-28 11:55:23', 0),
(25, 3, '5e58b2e2b30d60images.jpg', '2020-02-28 11:57:46', '2020-02-28 11:57:46', 0),
(26, 3, '5e58b2e6af3cd1IMG-20200117-WA0003.jpg', '2020-02-28 11:57:50', '2020-02-28 11:57:50', 0),
(27, 3, '5e58b2eae0d422IMG-20200117-WA0008.jpg', '2020-02-28 11:57:54', '2020-02-28 11:57:54', 0),
(28, 3, '5e58b2eef3e6f3index1.jpg', '2020-02-28 11:57:58', '2020-02-28 11:57:58', 0),
(29, 3, '5e58b2f2483da4lab1.jpg', '2020-02-28 11:58:02', '2020-02-28 11:58:02', 0),
(30, 2, '5e58b5c1a66a80blooddonation.jpg', '2020-02-28 12:10:01', '2020-02-28 12:10:01', 0),
(31, 1, '5e58b5ee21daf0anath.jpg', '2020-02-28 12:10:46', '2020-02-28 12:10:46', 0),
(32, 1, '5e58b5f2409c81anath_aashram.jpg', '2020-02-28 12:10:50', '2020-02-28 12:10:50', 0),
(33, 2, '5e58ba19ecfcf0Desert.jpg', '2020-02-28 12:28:33', '2020-02-28 12:30:28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery_image_title`
--

CREATE TABLE IF NOT EXISTS `tbl_gallery_image_title` (
  `fld_image_title_id` int(11) NOT NULL,
  `fld_image_title` varchar(50) NOT NULL,
  `fld_gallery_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_gallery_modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fld_delete` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallery_image_title`
--

INSERT INTO `tbl_gallery_image_title` (`fld_image_title_id`, `fld_image_title`, `fld_gallery_created_date`, `fld_gallery_modified_date`, `fld_delete`) VALUES
(1, 'Anath Ashram', '2020-02-28 10:46:30', '2020-02-28 10:46:30', 0),
(2, 'Blood Donation camp', '2020-02-28 10:47:06', '2020-02-28 10:47:06', 0),
(3, 'Expert Lecture', '2020-02-28 10:47:17', '2020-02-28 10:47:17', 0),
(4, 'Gathering', '2020-02-28 10:47:28', '2020-02-28 10:47:28', 0),
(5, 'IV', '2020-02-28 10:47:43', '2020-02-28 10:47:43', 0),
(6, 'Workshop', '2020-02-28 10:47:53', '2020-02-28 10:47:53', 0),
(7, 'fsdfdsf', '2020-02-28 10:52:14', '2020-02-28 11:00:05', 1),
(8, 'dfdsfdsffdsfdsfdsf4524254', '2020-02-28 11:00:20', '2020-02-28 11:02:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_marquee`
--

CREATE TABLE IF NOT EXISTS `tbl_marquee` (
  `fld_marquee_id` int(11) NOT NULL,
  `marquee_text` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifed_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fld_delete` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_marquee`
--

INSERT INTO `tbl_marquee` (`fld_marquee_id`, `marquee_text`, `created_date`, `modifed_date`, `fld_delete`) VALUES
(1, '<div><b>Campus Done:</b> 30 students were selected in Haire &amp; Dhoot Company...</div><div><i><b></b></i><br></div>', '2020-03-04 11:02:29', '2020-03-04 11:25:32', 0),
(2, 'dfgfdgfdsg<br>', '2020-03-04 11:09:08', '2020-03-04 11:09:13', 1),
(3, 'sadsaf<br>', '2020-03-04 13:54:24', '2020-03-04 13:54:39', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_placement_cell_member`
--

CREATE TABLE IF NOT EXISTS `tbl_placement_cell_member` (
  `fld_pcm_id` int(11) NOT NULL,
  `fld_name` varchar(200) NOT NULL,
  `Department_id` varchar(20) NOT NULL,
  `Designation_id` varchar(20) NOT NULL,
  `pcm_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pcm_modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fld_delete` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_placement_cell_member`
--

INSERT INTO `tbl_placement_cell_member` (`fld_pcm_id`, `fld_name`, `Department_id`, `Designation_id`, `pcm_created_date`, `pcm_modified_date`, `fld_delete`) VALUES
(1, 'Prof. S. S. Khandizod', '5', '13', '2020-03-02 12:07:18', '2020-03-02 12:07:18', 0),
(2, 'Prof. S. R. Jain', '2', '9', '2020-03-02 12:08:35', '2020-03-02 12:08:35', 0),
(3, 'Prof. A. H. Wadakte', '1', '9', '2020-03-02 12:09:23', '2020-03-02 12:09:23', 0),
(4, 'Prof. A. E. Deore', '5', '9', '2020-03-02 12:09:43', '2020-03-02 12:09:43', 0),
(5, 'Prof. R. R. Pardeshi', '3', '9', '2020-03-02 12:10:37', '2020-03-02 12:10:37', 0),
(6, 'Prof. V. B. Lahane', '4', '9', '2020-03-02 12:10:58', '2020-03-02 12:28:17', 0),
(7, 'sdfsdaf', '14', '14', '2020-03-02 12:20:20', '2020-03-02 12:20:25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_principal_desk`
--

CREATE TABLE IF NOT EXISTS `tbl_principal_desk` (
  `fld_principal_id` int(11) NOT NULL,
  `fld_principal_name` varchar(50) NOT NULL,
  `fld_principal_photo` varchar(255) NOT NULL,
  `fld_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fld_delete` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_principal_desk`
--

INSERT INTO `tbl_principal_desk` (`fld_principal_id`, `fld_principal_name`, `fld_principal_photo`, `fld_created_date`, `fld_modified_date`, `fld_delete`) VALUES
(1, 'Prof . N.R.Thakre.', '5e58f407c88390principal.jpg', '2020-02-28 16:35:43', '2020-02-29 10:36:33', 1),
(2, 'Prof . N.R.Thakre.', '5e58fa44a385b0principal.jpg', '2020-02-28 17:02:20', '2020-03-05 14:53:26', 0),
(3, 'Prof . N.R.Thakre.', '5e59f173a51830principal.jpg', '2020-02-29 10:36:59', '2020-03-05 14:52:55', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prize_slider`
--

CREATE TABLE IF NOT EXISTS `tbl_prize_slider` (
  `fld_pslider_id` int(11) NOT NULL,
  `fld_pslider_title` varchar(60) NOT NULL,
  `fld_pslider_subtitle` varchar(60) NOT NULL,
  `fld_pslider_image` varchar(255) NOT NULL,
  `fld_pslider_description` text NOT NULL,
  `prize_slider_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `prize_slider_modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fld_delete` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prize_slider`
--

INSERT INTO `tbl_prize_slider` (`fld_pslider_id`, `fld_pslider_title`, `fld_pslider_subtitle`, `fld_pslider_image`, `fld_pslider_description`, `prize_slider_created_date`, `prize_slider_modified_date`, `fld_delete`) VALUES
(1, '1st Prize in Photo Fest Competition', '3rd year Computer Engineering students', '5e5788ca62b480achivment1.jpg', 'Third Year Computer Engineering students of Gurukul Polytechnic, Samir Shaikh  Won First Prize in Photo Fest Competition organized at SNJB Polytechnic,Chandwad Dist:Nashik', '2020-02-27 14:45:54', '2020-02-27 15:03:06', 1),
(2, 'Won Third  Prize in Micro Project Competition', 'Third Year Computer Engineering students', '5e578c0e90f560achivment2.jpg', 'Third Year Computer Engineering students of Gurukul Polytechnic, Samir Shaikh&nbsp; Won Third&nbsp; Prize in Micro Project Competition organized at KKW Polytechnic,Nashik Dist:Nashik.<br><br>', '2020-02-27 14:59:50', '2020-02-27 15:03:14', 1),
(3, '1st Prize in Photo Fest Competition', '3rd year Computer Engineering students', '5e578d8792a090achivment1.jpg', 'Third Year Computer Engineering students of Gurukul Polytechnic, Samir Shaikh&nbsp; Won First Prize in Photo Fest Competition organized at SNJB Polytechnic,Chandwad Dist:Nashik<br><br>', '2020-02-27 15:06:07', '2020-02-27 15:06:07', 0),
(4, 'Won Third  Prize in Micro Project Competition', 'Third Year Computer Engineering students', '5e578dbcca6ad0achivment2.jpg', 'Third Year Computer Engineering students of Gurukul Polytechnic, Samir Shaikh&nbsp; Won Third&nbsp; Prize in Micro Project Competition organized at KKW Polytechnic,Nashik Dist:Nashik.<br><br>', '2020-02-27 15:07:00', '2020-02-27 15:07:00', 0),
(5, 'Participation  in MSBTE Paper Presentation  Competition', 'Third Year Computer Engineering students', '5e578def62b480achivment3.jpg', 'Third Year Computer Engineering students of Gurukul Polytechnic, Sayli&nbsp; Raut And Neha Adhav Won Participation&nbsp; in MSBTE Paper Presentation&nbsp; Competition organized at J.T.Mahajan&nbsp; Polytechnic, Faizpur Dist:Jalgaon.<br><br>', '2020-02-27 15:07:51', '2020-02-27 15:07:51', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_result`
--

CREATE TABLE IF NOT EXISTS `tbl_result` (
  `fld_student_id` int(11) NOT NULL,
  `Department_id` varchar(11) NOT NULL,
  `fld_exam` varchar(100) NOT NULL,
  `fld_exam_year` varchar(100) NOT NULL,
  `fld_class` varchar(50) NOT NULL,
  `fld_student_name` varchar(60) NOT NULL,
  `fld_student_photo` varchar(255) NOT NULL,
  `fld_student_percentage` varchar(50) NOT NULL,
  `fld_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fld_delete` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_result`
--

INSERT INTO `tbl_result` (`fld_student_id`, `Department_id`, `fld_exam`, `fld_exam_year`, `fld_class`, `fld_student_name`, `fld_student_photo`, `fld_student_percentage`, `fld_created_date`, `fld_modified_date`, `fld_delete`) VALUES
(1, '1', 'Summer', '2019-2020', 'Third Year', 'Kanchan', '576504.jpg', '78', '2020-02-29 00:57:56', '2020-02-29 00:59:19', 0),
(2, '4', 'Winter', '2019', 'Second Year', 'Saima', '342028.jpg', '80', '2020-02-29 01:00:28', '2020-02-29 01:00:28', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE IF NOT EXISTS `tbl_slider` (
  `fld_slider_id` int(11) NOT NULL,
  `fld_slider_image` varchar(255) NOT NULL,
  `fld_slider_title` varchar(60) NOT NULL,
  `fld_slider_subtitle` varchar(40) NOT NULL,
  `fld_slider_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_slider_modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fld_delete` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`fld_slider_id`, `fld_slider_image`, `fld_slider_title`, `fld_slider_subtitle`, `fld_slider_created_date`, `fld_slider_modified_date`, `fld_delete`) VALUES
(1, '5e577d09d56270banner1.jpg', 'We Will Help You To ', 'Welcome To GurukulPolytechnic<br><br>', '2020-02-27 13:55:45', '2020-02-27 14:08:10', 1),
(2, '5e577e307c7450banner3.jpg', 'Education For Everyone', 'Exclusively For Education<br><br>', '2020-02-27 14:00:40', '2020-02-27 14:27:36', 0),
(3, '5e5780a3b5acc0banner1.jpg', 'We Will Help You To Learn', 'Welcome To Gurukul Polytechnic<br><br>', '2020-02-27 14:11:07', '2020-02-27 14:27:29', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE IF NOT EXISTS `tbl_staff` (
  `fld_staff_id` int(11) NOT NULL,
  `fld_staff_name` varchar(255) NOT NULL,
  `Designation_id` int(11) NOT NULL,
  `Department_id` int(11) NOT NULL,
  `fld_staff_qualification` varchar(255) NOT NULL,
  `fld_staff_experiance` varchar(100) NOT NULL,
  `fld_staff_email` varchar(255) NOT NULL,
  `fld_staff_mobile` varchar(20) NOT NULL,
  `fld_staff_photo` varchar(255) NOT NULL,
  `fld_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fld_delete` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`fld_staff_id`, `fld_staff_name`, `Designation_id`, `Department_id`, `fld_staff_qualification`, `fld_staff_experiance`, `fld_staff_email`, `fld_staff_mobile`, `fld_staff_photo`, `fld_created_date`, `fld_modified_date`, `fld_delete`) VALUES
(1, 'MS. A.V.TAPASE', 2, 7, '', '', '', '', '5e5e37fbd09dc0scifaculty.jpg', '2020-03-03 16:26:59', '2020-03-03 16:26:59', 0),
(2, 'MS.K.S.SHINDE', 7, 7, '', '', '', '', '5e5e38441d5350scifaculty2.jpg', '2020-03-03 16:28:12', '2020-03-03 16:28:12', 0),
(3, 'MRS.A.D.ADHAV', 7, 7, '', '', '', '', '5e5e38728fc430scifaculty3.jpg', '2020-03-03 16:28:58', '2020-03-03 16:28:58', 0),
(4, 'MS.M.D.CHAUDHARI', 7, 7, '', '', '', '', '5e5e3898f36ce0scifaculty4.jpg', '2020-03-03 16:29:36', '2020-03-03 16:29:36', 0),
(5, 'Mr. S. A. Mahevi', 2, 1, 'M.E. Structure', '6.5 Years', '', '', '5e5e38d4c1d590', '2020-03-03 16:30:36', '2020-03-03 16:30:36', 0),
(6, 'Ms. M. R. Sonawane', 7, 1, 'B. E. Civil', '2.5 Years', '', '', '5e5e3903269fb0', '2020-03-03 16:31:23', '2020-03-03 16:31:23', 0),
(7, 'Ms. U. B. Kekan', 7, 1, 'B. E. Civil', '6 Months', '', '', '5e5e39247e5ca0', '2020-03-03 16:31:56', '2020-03-03 16:31:56', 0),
(8, 'Ms. N. R. Sonawane', 7, 1, 'B. E. Civil', 'Fresher', '', '', '5e5e39447a8c10', '2020-03-03 16:32:28', '2020-03-03 16:32:28', 0),
(9, 'Mr. A. H. Vadakte', 7, 1, 'B. E. Civil', 'Fresher', '', '', '5e5e398cbf3630', '2020-03-03 16:33:40', '2020-03-03 16:33:40', 0),
(10, 'Prof.S.R.Jain', 2, 2, 'ME (Appear)', '8 Year', '', '', '5e5e3b471be5101.png', '2020-03-03 16:41:03', '2020-03-03 16:41:03', 0),
(11, 'Prof.P.L.Chaudhari', 7, 2, 'BE', '2 Years', '', '', '5e5e3b800d59f02.png', '2020-03-03 16:42:00', '2020-03-03 16:42:00', 0),
(12, 'Prof. U.A.Sable', 7, 2, 'BE', '2 Years', '', '', '5e5e3ba30d59f03.png', '2020-03-03 16:42:35', '2020-03-03 16:42:35', 0),
(13, 'Prof. S.S.Badjate', 7, 2, 'BE', '0.7 Year', '', '', '5e5e3bda55d4a04.png', '2020-03-03 16:43:30', '2020-03-03 16:43:30', 0),
(14, 'Miss. S.S.Raut', 7, 2, 'Diploma', '0.6 Year ', '', '', '5e5e3c190989605.png', '2020-03-03 16:44:33', '2020-03-03 16:44:33', 0),
(15, 'Prof.A.L.Chaudhari', 2, 3, 'M-Tech', '3 Year ', '', '', '5e5e3ce86924805.png', '2020-03-03 16:48:00', '2020-03-04 18:02:04', 0),
(16, 'Prof.R.R. Pardeshi', 7, 3, 'BE', '1.6 Year', '', '', '5e5e3d221538206.png', '2020-03-03 16:48:58', '2020-03-03 16:48:58', 0),
(17, 'Prof. R. R. Janrao', 7, 3, 'BE', '1.6 Year', '', '', '5e5e3d73a66a807.png', '2020-03-03 16:50:19', '2020-03-03 16:50:19', 0),
(18, 'Prof. P.R. Paithankar', 7, 3, 'ME', '2 Years', '', '', '5e5e3daf470c708.png', '2020-03-03 16:51:19', '2020-03-04 18:01:58', 0),
(19, 'PROF. DEORE AMOL E', 2, 5, 'BE', '', '', '', '5e5e3ed07e99a0', '2020-03-03 16:56:08', '2020-03-03 16:56:08', 0),
(20, 'PROF. M.S.BORSE', 7, 5, 'BE', '', '', '', '5e5e3eec10ed70', '2020-03-03 16:56:36', '2020-03-03 16:56:36', 0),
(21, 'PROF. S.S.KHSNDIZOD', 7, 5, 'BE', '', '', '', '5e5e3f0a371310', '2020-03-03 16:57:06', '2020-03-03 16:57:06', 0),
(22, 'PROF. S.B.PATIL', 7, 5, 'BE', '', '', '', '5e5e3f1de2bc60', '2020-03-03 16:57:25', '2020-03-03 16:57:25', 0),
(23, 'PROF. P.L.SHAIKH', 7, 5, 'BE', '', '', '', '5e5e3f38a1e2d0', '2020-03-03 16:57:52', '2020-03-03 16:57:52', 0),
(24, 'PROF. BORSE MANISHA. S', 7, 5, 'BE', '', '', '', '5e5e441b1406f0', '2020-03-03 17:18:43', '2020-03-03 17:18:43', 0),
(25, 'MR. R.S.VHADGAR', 16, 5, 'BE', '', '', '', '5e5e44b2247a60', '2020-03-03 17:21:14', '2020-03-03 17:21:14', 0),
(26, 'yogita', 14, 5, 'BE', '5years', '', '', '5e5e4d331d90508.png', '2020-03-03 17:25:57', '2020-03-03 17:57:38', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff_training`
--

CREATE TABLE IF NOT EXISTS `tbl_staff_training` (
  `staff_taining_id` int(11) NOT NULL,
  `Department_id` int(11) NOT NULL,
  `name_of_staff` varchar(100) NOT NULL,
  `name_and_address_of_organization` varchar(255) NOT NULL,
  `from_date` varchar(40) NOT NULL,
  `to_date` varchar(40) NOT NULL,
  `no_of_days` varchar(20) NOT NULL,
  `staff_training_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `staff_training_modifed_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fld_delete` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_staff_training`
--

INSERT INTO `tbl_staff_training` (`staff_taining_id`, `Department_id`, `name_of_staff`, `name_and_address_of_organization`, `from_date`, `to_date`, `no_of_days`, `staff_training_created_date`, `staff_training_modifed_date`, `fld_delete`) VALUES
(1, 2, 'Prof.P.L.Choudhari', 'SumagoInfotech,Nashik', '2019-09-16', '2019-09-20', '5', '2020-03-02 18:13:29', '2020-03-02 18:13:44', 0),
(2, 2, 'Prof. U.A.Sable', 'SumagoInfotech,Nashik', '2019-09-30', '2019-10-04', '5', '2020-03-02 18:15:39', '2020-03-02 18:15:39', 0),
(3, 2, 'Prof. S.S.Badjate', 'SumagoInfotech,Nashik', '2020-01-01', '2020-01-05', '5', '2020-03-02 18:17:06', '2020-03-02 18:17:06', 0),
(4, 3, 'Ms. R.R.Pardeshi', 'SumagoInfotech,Nashik', '', '', '5', '2020-03-02 18:17:44', '2020-03-02 18:18:06', 0),
(5, 3, 'Mr.P.R.Paithankar', 'SumagoInfotech,Nashik', '', '', '5', '2020-03-02 18:18:33', '2020-03-02 18:22:15', 0),
(6, 4, 'Mr. M.S. Ansari', '', '2020-01-13', '2020-01-17', '5', '2020-03-02 18:20:42', '2020-03-02 18:20:42', 0),
(7, 4, 'Ms. T.V. Thakur', '', '2020-02-01', '', '1', '2020-03-02 18:21:21', '2020-03-02 18:22:01', 0),
(8, 4, 'Mr. R.V. Burkul', '', '2020-02-01', '', '1', '2020-03-02 18:22:42', '2020-03-02 18:22:54', 0),
(9, 4, 'Mr. V.B. Lahane', '', '2020-01-27', '2020-01-29', '3', '2020-03-02 18:23:29', '2020-03-02 18:23:29', 0),
(10, 5, 'Prof.S.S.Khandizod', 'Marathwada Auto Cluster Aurangabad', '2018-07-23', '2018-07-27', '5', '2020-03-02 18:25:55', '2020-03-02 18:29:09', 0),
(11, 5, 'Prof. S. S. Khandizod', 'CIPET Aurangabad', '2019-09-16', '2019-09-20', '5', '2020-03-02 18:31:02', '2020-03-02 18:31:02', 0),
(12, 5, 'Prof.M.S.Borse', 'ACCURATE SALES & SERVICE PVT LTD . PUNE', '2010-01-27', '2010-01-29', '3', '2020-03-02 18:32:35', '2020-03-02 18:32:35', 0),
(13, 14, 'fddsf', 'sdfdsfs', '2020-03-02', '2020-03-11', '543', '2020-03-02 18:41:08', '2020-03-02 18:41:12', 1),
(14, 13, 'dfgfdgfdg', 'sadads453543fdgfdgfdsg', '03/04/2020 - 03/11/2020 - 03/04/2020 - 0', '03/04/2020 - 03/11/2020 - 03/04/2020 - 0', '54', '2020-03-03 10:34:15', '2020-03-03 11:24:47', 1),
(19, 14, 'nfnhsd', 'bdfhdbshf', '2020-03-31', '2020-04-02', '2', '2020-03-05 16:49:28', '2020-03-05 17:03:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_training`
--

CREATE TABLE IF NOT EXISTS `tbl_student_training` (
  `student_id` int(11) NOT NULL,
  `Department_id` int(11) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `name_of_company` varchar(255) NOT NULL,
  `student_training_craeted_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fld_delete` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student_training`
--

INSERT INTO `tbl_student_training` (`student_id`, `Department_id`, `student_name`, `name_of_company`, `student_training_craeted_date`, `modified_date`, `fld_delete`) VALUES
(1, 1, 'yogita', 'Tanhaji S. KadamConstruction at PVT. LTD.', '2020-03-03 11:41:18', '2020-03-03 12:51:45', 1),
(2, 1, 'PawarAsmita Kailas', 'Tanhaji S. KadamConstruction at PVT. LTD.', '2020-03-03 11:42:11', '2020-03-03 11:42:11', 0),
(3, 1, 'ChakorKomal Kailas', 'Tanhaji S. KadamConstruction at PVT. LTD.', '2020-03-03 11:42:39', '2020-03-03 11:42:39', 0),
(4, 1, 'SonawanePoojaDattu', 'Siddhivinayak Infrastructure at PVT. LTD.', '2020-03-03 11:43:11', '2020-03-03 11:43:11', 0),
(5, 1, 'Ulhale Rupali Balu', 'Siddhivinayak Infrastructure at PVT. LTD.', '2020-03-03 11:43:33', '2020-03-03 11:43:33', 0),
(6, 1, 'Bhamare Anil Pralhad', 'Mr. UmeshHiraman More Engg. & Gov. Construction', '2020-03-03 11:43:51', '2020-03-03 11:43:51', 0),
(7, 1, 'Jadhav Rahul Padmsing', 'Mr. UmeshHiraman More Engg. & Gov. KadamConstruction', '2020-03-03 11:44:09', '2020-03-03 11:44:09', 0),
(8, 1, 'Shelake Sakshi Sunil', 'Prashant Construction (Gov. Conractor)', '2020-03-03 11:44:32', '2020-03-03 11:44:32', 0),
(9, 1, 'Dargude Amol Subhash', 'Matoshri Construction, Manmad', '2020-03-03 11:44:53', '2020-03-03 11:44:53', 0),
(10, 1, 'Darade Rushikesh Baban', 'Matoshri Construction, Manmad', '2020-03-03 11:45:15', '2020-03-03 11:45:15', 0),
(11, 1, 'Chavhan Rasika Kantilal', 'My World My Pride PVT. LTD. Aurangabad', '2020-03-03 11:45:36', '2020-03-03 11:45:36', 0),
(12, 1, 'Kumavat Sonali Dnyaneshwar', 'V. T. Pardeshi& Sonâ€™s Nandgaon.', '2020-03-03 11:46:04', '2020-03-03 11:46:04', 0),
(13, 2, 'SANSARE KALYANI ARJUN', 'SumagoInfotech,Nashik', '2020-03-03 11:46:30', '2020-03-03 11:46:30', 0),
(14, 2, 'SHAIKH SAMIR HASAN', 'SumagoInfotech,Nashik', '2020-03-03 11:46:46', '2020-03-03 11:46:46', 0),
(15, 2, 'MISAL VAISHALI NANDLAL', 'SumagoInfotech,Nashik', '2020-03-03 11:47:10', '2020-03-03 11:47:10', 0),
(16, 2, 'TAMBOLI JASMIN AKIL', 'SumagoInfotech,Nashik', '2020-03-03 11:47:25', '2020-03-03 11:47:25', 0),
(17, 2, 'SHENDGE RINKU NANDU', 'SumagoInfotech,Nashik', '2020-03-03 11:47:42', '2020-03-03 11:47:42', 0),
(18, 2, 'SONAR KAVITA DAMODHAR', 'SumagoInfotech,Nashik', '2020-03-03 11:47:57', '2020-03-03 11:47:57', 0),
(19, 2, 'SHAIKH NIGAR RAEES', 'SumagoInfotech,Nashik', '2020-03-03 11:48:17', '2020-03-03 11:48:17', 0),
(20, 2, 'AHER RITIKA KAILAS', 'SumagoInfotech,Nashik', '2020-03-03 11:48:34', '2020-03-03 11:48:34', 0),
(21, 2, 'CHAVAN SURABHI DILIP', 'SumagoInfotech,Nashik', '2020-03-03 11:48:48', '2020-03-03 11:48:48', 0),
(22, 2, 'AVHAD SHITAL TULSIDAS', 'SumagoInfotech,Nashik', '2020-03-03 11:49:04', '2020-03-03 11:49:04', 0),
(23, 2, 'SHAIKH RAMEEZA SABIR', 'SumagoInfotech,Nashik', '2020-03-03 11:49:21', '2020-03-03 11:49:21', 0),
(24, 2, 'PAGAR SHEETAL RAVINDRA', 'SumagoInfotech,Nashik', '2020-03-03 11:49:38', '2020-03-03 11:49:38', 0),
(25, 2, 'PAWAR MANISHA JIBHAU', 'SumagoInfotech,Nashik', '2020-03-03 11:49:53', '2020-03-03 11:49:53', 0),
(26, 3, 'SANAP VAISHNAVI SUSHIL', 'Sumago Infotech, Nashik', '2020-03-03 11:50:50', '2020-03-03 11:50:50', 0),
(27, 3, 'SAUNDANE SANDHYA ARJUN', 'Maxico PVT. LTD.', '2020-03-03 11:51:07', '2020-03-03 11:51:07', 0),
(28, 3, 'SHENDGE MONIKA GANESH', 'Sumago Infotech, Nashik', '2020-03-03 11:51:24', '2020-03-03 11:51:24', 0),
(29, 3, 'SONWANE RAJ SANJAY', 'Jayesh Enterprises, Satpur, Nashik', '2020-03-03 11:51:42', '2020-03-03 11:51:42', 0),
(30, 3, 'TIWARI LAJIMA RAMPRATAP', 'Sumago Infotech, Nashik', '2020-03-03 11:51:58', '2020-03-03 11:51:58', 0),
(31, 3, 'PARIK ASHUTOSH CHARUCHANDRA', 'Anant Enterprises,Satpur, Nashik', '2020-03-03 11:52:14', '2020-03-03 11:52:14', 0),
(32, 4, 'PAWAR DHIRAJ RAJENDRA', 'Sonic Automation Pvt. Ltd', '2020-03-03 11:53:32', '2020-03-03 11:53:32', 0),
(33, 4, 'DHATRAK AMOL SUNIL', 'Koyna Industries Pvt. Ltd', '2020-03-03 11:53:45', '2020-03-03 11:53:45', 0),
(34, 4, 'SURYAVANSHI MAYUR KISAN', 'Trupa Electricals, Pvt. Ltd.', '2020-03-03 11:53:58', '2020-03-03 11:53:58', 0),
(35, 4, 'KAMBLE RINKU MANOJ', 'Electro Control , Pvt. Ltd', '2020-03-03 11:54:14', '2020-03-03 11:54:14', 0),
(36, 4, 'GHIGE MAHESH DEVIDAS', 'Five Star Decor,Pvt. Ltd.', '2020-03-03 11:54:42', '2020-03-03 11:54:42', 0),
(37, 4, 'BHAVSAR VAISHNAVI GHANSHAM', 'Electro Control , Pvt. Ltd.', '2020-03-03 11:54:57', '2020-03-03 11:54:57', 0),
(38, 4, 'GHIGE ADITYA SHEKHAR', 'Koyna Industries Pvt. Ltd.', '2020-03-03 11:55:14', '2020-03-03 11:55:14', 0),
(39, 4, 'DALVI YASHASHRI KAMLESH', 'Nibe Motors, Pvt. Ltd.', '2020-03-03 11:55:32', '2020-03-03 11:55:32', 0),
(40, 4, 'IPAR JOTSNA SANJAY', 'Electro Control , Pvt. Ltd.', '2020-03-03 11:55:48', '2020-03-03 11:55:48', 0),
(41, 4, 'SALUNKE SACHIN MANOHAR', 'Koyna Industries Pvt. Ltd.', '2020-03-03 11:56:05', '2020-03-03 11:56:05', 0),
(42, 4, 'SOLUNKE JAYESH DHANSING', 'Koyna Industries Pvt. Ltd.', '2020-03-03 11:56:21', '2020-03-03 11:56:21', 0),
(43, 4, 'BHAVSAR RUSHIKESH NITIN', 'Mahadiscom Substation', '2020-03-03 11:56:37', '2020-03-03 11:56:37', 0),
(44, 4, 'SHEREKAR AMIT SATISH', 'Suyogi Electricals, Pvt. Ltd.', '2020-03-03 11:56:54', '2020-03-03 11:56:54', 0),
(45, 4, 'PATIL SWARAJ RAJENDRA', 'Koyna Industries Pvt. Ltd.', '2020-03-03 11:57:10', '2020-03-03 11:57:10', 0),
(46, 4, 'MAGAR TEJAS KAILAS', 'Koyna Industries Pvt. Ltd.', '2020-03-03 11:57:32', '2020-03-03 11:57:32', 0),
(47, 4, 'SANAP SOMNATH GORAKNATH', 'Adhija Electro Enterprises.', '2020-03-03 11:57:46', '2020-03-03 11:57:46', 0),
(48, 5, 'BAVISKAR SHRADDHA SUNIL', 'A.R.Technology ,Nasik', '2020-03-03 11:59:47', '2020-03-03 11:59:47', 0),
(49, 5, 'CHAUDHARI TEJAS VIJAY', 'ASA Assembly Automation Pune', '2020-03-03 12:00:00', '2020-03-03 12:00:00', 0),
(50, 5, 'VISHAKARMA RAJ TEJBAHADUR', 'Sankalecha Showroom ,Hero Motors, Manmad', '2020-03-03 12:00:26', '2020-03-03 12:00:26', 0),
(51, 5, 'JADHAV SHUBHAM C', 'Krushibhushan Traders, Mahindra Tractors ,Nandgaon', '2020-03-03 12:00:40', '2020-03-03 12:00:40', 0),
(52, 5, 'KHAIRNAR SHUBHANGI S.', 'Dwaraka Engg. Works, Nandgaon', '2020-03-03 12:00:59', '2020-03-03 12:00:59', 0),
(53, 5, 'ULHALE PANKAJ PRAKASH', 'Print Art ,Nasik', '2020-03-03 12:01:16', '2020-03-03 12:01:16', 0),
(54, 5, 'PRAVIN ANNA DIVE', 'Mahabali Trailers & Farming IND. Nandgaon', '2020-03-03 12:01:30', '2020-03-03 12:01:30', 0),
(55, 5, 'GUNJAL AJAY MANIK', 'Mahabali Trailers & Farming IND. Nandgaon', '2020-03-03 12:01:44', '2020-03-03 12:01:44', 0),
(56, 5, 'SHAIKH SHOEB NISAR', 'Sankalecha Showroom ,Hero Motors, Manmad', '2020-03-03 12:01:59', '2020-03-03 12:01:59', 0),
(57, 5, 'SURVE KALASH BABAN', 'Sankalecha Showroom ,Hero Motors, Manmad', '2020-03-03 12:02:15', '2020-03-03 12:02:15', 0),
(58, 5, 'PATHAN HASIB ANIS', 'Sankalecha Showroom ,Hero Motors, Manmad', '2020-03-03 12:02:29', '2020-03-03 12:02:29', 0),
(59, 5, 'JADHAV SHUBHAM DINKAR', 'Krushibhushan Traders, Mahindra Tractors ,Nandgaon', '2020-03-03 12:02:44', '2020-03-03 12:02:44', 0),
(60, 5, 'RANDHAVA HARDIPSING L.', 'Gavali Auto & servicing Center,Sivur Bangala', '2020-03-03 12:03:00', '2020-03-03 12:03:00', 0),
(61, 5, 'SHINDE SHUBHAM SANJAY', 'Krushibhushan Traders, Mahindra Tractors ,Nandgaon', '2020-03-03 12:03:16', '2020-03-03 12:03:16', 0),
(62, 13, 'dfdsf', 'dsfdsfd', '2020-03-03 12:09:46', '2020-03-03 12:10:59', 1),
(63, 0, '5', 'nagpur\r\n', '2020-03-03 12:10:22', '2020-03-03 12:54:07', 1),
(64, 14, 'sdsa1', 'dsad1', '2020-03-03 12:53:04', '2020-03-03 12:53:32', 1),
(65, 7, 'sdda34', 'sdsad3453', '2020-03-03 12:56:27', '2020-03-03 12:58:15', 1),
(66, 13, 'dfdsf45', 'fgdfg4535', '2020-03-03 13:44:28', '2020-03-03 13:44:44', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_us_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Department_id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`Designation_id`);

--
-- Indexes for table `index_count`
--
ALTER TABLE `index_count`
  ADD PRIMARY KEY (`count_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`fld_id`), ADD UNIQUE KEY `fld_email` (`fld_email`);

--
-- Indexes for table `tbl_admin_team`
--
ALTER TABLE `tbl_admin_team`
  ADD PRIMARY KEY (`fld_admin_id`);

--
-- Indexes for table `tbl_affiliation_certificates`
--
ALTER TABLE `tbl_affiliation_certificates`
  ADD PRIMARY KEY (`fld_affiliation_id`);

--
-- Indexes for table `tbl_alumini`
--
ALTER TABLE `tbl_alumini`
  ADD PRIMARY KEY (`fld_a_id`);

--
-- Indexes for table `tbl_alumini_committee`
--
ALTER TABLE `tbl_alumini_committee`
  ADD PRIMARY KEY (`fld_ac_id`);

--
-- Indexes for table `tbl_board_members`
--
ALTER TABLE `tbl_board_members`
  ADD PRIMARY KEY (`fld_bm_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`fld_contact_id`);

--
-- Indexes for table `tbl_courese_offered`
--
ALTER TABLE `tbl_courese_offered`
  ADD PRIMARY KEY (`fld_co_id`);

--
-- Indexes for table `tbl_enquiry`
--
ALTER TABLE `tbl_enquiry`
  ADD PRIMARY KEY (`fld_enquiry_id`);

--
-- Indexes for table `tbl_fee_structure`
--
ALTER TABLE `tbl_fee_structure`
  ADD PRIMARY KEY (`fld_fee_id`);

--
-- Indexes for table `tbl_gallery_images`
--
ALTER TABLE `tbl_gallery_images`
  ADD PRIMARY KEY (`fld_gallery_id`);

--
-- Indexes for table `tbl_gallery_image_title`
--
ALTER TABLE `tbl_gallery_image_title`
  ADD PRIMARY KEY (`fld_image_title_id`);

--
-- Indexes for table `tbl_marquee`
--
ALTER TABLE `tbl_marquee`
  ADD PRIMARY KEY (`fld_marquee_id`);

--
-- Indexes for table `tbl_placement_cell_member`
--
ALTER TABLE `tbl_placement_cell_member`
  ADD PRIMARY KEY (`fld_pcm_id`);

--
-- Indexes for table `tbl_principal_desk`
--
ALTER TABLE `tbl_principal_desk`
  ADD PRIMARY KEY (`fld_principal_id`);

--
-- Indexes for table `tbl_prize_slider`
--
ALTER TABLE `tbl_prize_slider`
  ADD PRIMARY KEY (`fld_pslider_id`);

--
-- Indexes for table `tbl_result`
--
ALTER TABLE `tbl_result`
  ADD PRIMARY KEY (`fld_student_id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`fld_slider_id`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`fld_staff_id`);

--
-- Indexes for table `tbl_staff_training`
--
ALTER TABLE `tbl_staff_training`
  ADD PRIMARY KEY (`staff_taining_id`);

--
-- Indexes for table `tbl_student_training`
--
ALTER TABLE `tbl_student_training`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_us_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `Department_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `Designation_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `index_count`
--
ALTER TABLE `index_count`
  MODIFY `count_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `fld_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_admin_team`
--
ALTER TABLE `tbl_admin_team`
  MODIFY `fld_admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_affiliation_certificates`
--
ALTER TABLE `tbl_affiliation_certificates`
  MODIFY `fld_affiliation_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_alumini`
--
ALTER TABLE `tbl_alumini`
  MODIFY `fld_a_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_alumini_committee`
--
ALTER TABLE `tbl_alumini_committee`
  MODIFY `fld_ac_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_board_members`
--
ALTER TABLE `tbl_board_members`
  MODIFY `fld_bm_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `fld_contact_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_courese_offered`
--
ALTER TABLE `tbl_courese_offered`
  MODIFY `fld_co_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_enquiry`
--
ALTER TABLE `tbl_enquiry`
  MODIFY `fld_enquiry_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_fee_structure`
--
ALTER TABLE `tbl_fee_structure`
  MODIFY `fld_fee_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_gallery_images`
--
ALTER TABLE `tbl_gallery_images`
  MODIFY `fld_gallery_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `tbl_gallery_image_title`
--
ALTER TABLE `tbl_gallery_image_title`
  MODIFY `fld_image_title_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_marquee`
--
ALTER TABLE `tbl_marquee`
  MODIFY `fld_marquee_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_placement_cell_member`
--
ALTER TABLE `tbl_placement_cell_member`
  MODIFY `fld_pcm_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_principal_desk`
--
ALTER TABLE `tbl_principal_desk`
  MODIFY `fld_principal_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_prize_slider`
--
ALTER TABLE `tbl_prize_slider`
  MODIFY `fld_pslider_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_result`
--
ALTER TABLE `tbl_result`
  MODIFY `fld_student_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `fld_slider_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `fld_staff_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tbl_staff_training`
--
ALTER TABLE `tbl_staff_training`
  MODIFY `staff_taining_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tbl_student_training`
--
ALTER TABLE `tbl_student_training`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=67;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
