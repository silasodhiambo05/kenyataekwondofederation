-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 20, 2019 at 04:07 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kenyataekwondo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `designation`, `email`, `password`) VALUES
(1, 'Ndegwa', 'cash', 'mwanikisamuel91@gmail.com', '12345678'),
(2, 'Secretary', 'secretary', 'secretary@kenyataekwondo.co.ke', '12345678'),
(3, 'Chairperson', 'chair', 'chair@kenyataekwondo.co.ke', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `athlete`
--

CREATE TABLE IF NOT EXISTS `athlete` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `names` varchar(200) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `county` varchar(100) NOT NULL,
  `coach` varchar(200) NOT NULL,
  `club` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `pob` varchar(200) NOT NULL,
  `pass_number` varchar(200) NOT NULL,
  `id_number` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `dan_number` varchar(50) NOT NULL,
  `lincense` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `primary_name` varchar(200) NOT NULL DEFAULT 'Not provided',
  `primary_grade` varchar(100) NOT NULL DEFAULT 'Not provided',
  `highschool` varchar(200) NOT NULL,
  `highschool_grade` varchar(100) NOT NULL DEFAULT 'Not provided',
  `college` varchar(200) NOT NULL,
  `college_grade` varchar(100) NOT NULL,
  `coaching_course` varchar(200) NOT NULL,
  `master_course` varchar(200) NOT NULL,
  `psport` varchar(200) NOT NULL,
  `pduration` varchar(200) NOT NULL,
  `osport` varchar(200) NOT NULL,
  `oduration` varchar(200) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `birth_cert_image` varchar(500) NOT NULL,
  `nationalid_image` varchar(500) NOT NULL,
  `passport_image` varchar(500) NOT NULL,
  `jobid_image` varchar(500) NOT NULL,
  `nhif_image` varchar(500) NOT NULL,
  `secondary_image` varchar(500) NOT NULL,
  `diploma_image` varchar(500) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT '0',
  `sec_status` varchar(2) NOT NULL DEFAULT '0',
  `chair_status` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `athlete`
--

INSERT INTO `athlete` (`id`, `names`, `gender`, `county`, `coach`, `club`, `country`, `dob`, `pob`, `pass_number`, `id_number`, `phone`, `dan_number`, `lincense`, `email`, `primary_name`, `primary_grade`, `highschool`, `highschool_grade`, `college`, `college_grade`, `coaching_course`, `master_course`, `psport`, `pduration`, `osport`, `oduration`, `photo`, `birth_cert_image`, `nationalid_image`, `passport_image`, `jobid_image`, `nhif_image`, `secondary_image`, `diploma_image`, `password`, `status`, `sec_status`, `chair_status`) VALUES
(30, 'Ephantus Kamau', 'Male', 'Muranga', 'Eliakim Otieno', 'Nairobi Complex Taekwondo', 'Kenya', '20/09/1995', 'Nyeri', 'WT56YT7', '33258304', '0702315302', 'KTF/ATH/0024', 'N/A', 'ephantus@gmail.com', 'Not provided', 'Not provided', '', 'Not provided', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '242018', '0', '0', '0'),
(31, 'Samuel Ndegwa Mwaniki', 'Male', 'Muranga', 'Eliakim Otieno', 'Nairobi Complex Taekwondo', 'Kenya', '20/09/1995', 'Nyeri', 'WT56YT7', '33258304', '0702315302', 'KTF/ATH/0025', 'N/A', 'mwanisamuel91@gmail.com', 'Ngamwa Primary School', '377(A-)', 'Muranga High School', 'A-', 'Kibabii University', 'N/A', 'Class B', 'Class A', 'Taekwondo', '3 yrs', 'Football', '10yrs', 'cv.jpg', 'c4.jpg', 'c10.jpg', 'c9.jpg', 'c6.jpg', 'c11.jpg', 'c1.png', 'c5.jpg', '252018', '1', '0', '0'),
(32, 'Pius ', 'Male', 'Kirinyaga', 'Masimba', 'Nairobi Complex Taekwondo', 'kenya', '2018-12-10', 'Muranga', 'fff', '33258304', '0723456789', 'KTF/ATH/0027', 'vbbb', 'mwanikisamuel91@gmail.com', 'Not provided', 'Not provided', '', 'Not provided', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '272018', '1', '0', '0'),
(33, 'asdfg', 'Male', 'Nyeri', '', '', 'Kenya', '2019-02-05', 'Muranga', '6tt6t6', '38854313', '0723456789', 'KTF/ATH/0028', 'wtasdfgh', 'mwanikisamuel91@gmail.com', 'Not provided', 'Not provided', '', 'Not provided', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '282018', '0', '0', '0'),
(34, 'sdfghjk', 'Male', 'dfghjk', 'cvbnm', '', 'dcfvgbhnm', '2019-02-25', 'sdfghjkl', 'N/A', '223456789', 'w2e3r234567890', 'KTF/ATH/0030', '', 'mwanikisamuel91@gmail.com', 'Not provided', 'Not provided', '', 'Not provided', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '302018', '0', '0', '0'),
(35, 'Jamleck Kamau', 'Male', 'Nyeri', 'Eliakim Otieno', '', 'Kenyan', '1992-01-31', 'Nyeri', 'N/A', '31854313', '+254726159307', 'KTF/ATH/0031', 'N/A', 'mwaniki@gmail.com', 'Ngamwa Primary School', '399', 'Muranga High School', 'A', 'Kibabii University', 'First Class', 'Class B', 'Class C', 'Taekwondo', '3 years', 'Football', '2 years', '', '', '', '', '', '', '', '', '312018', '0', '0', '0'),
(36, 'dfvghnjm', 'Male', 'cvghnjmk', 'sxcvbnm,', '', 'kegntss', '2019-09-18', 'cvbnm,', 'xcvbnm,', '2345678', '+254726159309', 'KTF/ATH/0032', 'dfg', 'mwanikisamuel91@gmail.com', 'Not provided', 'Not provided', '', 'Not provided', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '322018', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `athlete_messages`
--

CREATE TABLE IF NOT EXISTS `athlete_messages` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `ktf_number` varchar(50) NOT NULL,
  `name` varchar(300) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` text NOT NULL,
  `date_sent` varchar(100) NOT NULL,
  `reply` varchar(1000) NOT NULL DEFAULT 'Pending',
  `date_reply` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `athlete_messages`
--

INSERT INTO `athlete_messages` (`id`, `ktf_number`, `name`, `subject`, `message`, `date_sent`, `reply`, `date_reply`) VALUES
(2, 'KTF/011/2018', 'Ephantus Kamau Mwangi', 'Testing', 'Testing my system for messaging', '2018-12-17', '  \r\nok', '  \r\nok'),
(4, 'KTF/011/2018', 'Ephantus Kamau Mwangi', 'Greetings', 'Kameme FM was established in Nairobi in 2000. This radio station broadcasts a wide variety of information and entertainment contents such as national and international news, lifestyle programmes and sports coverage.', '2018-12-18', '  You are out of topic\r\n', '  You are out of topic\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE IF NOT EXISTS `club` (
  `club_id` int(100) NOT NULL AUTO_INCREMENT,
  `club_name` varchar(200) NOT NULL,
  `county` varchar(100) NOT NULL,
  `coach` varchar(200) NOT NULL,
  `coach_id` varchar(50) NOT NULL,
  `date_registered` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`club_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`club_id`, `club_name`, `county`, `coach`, `coach_id`, `date_registered`, `status`) VALUES
(1, 'Kenya Tiger', 'Muranga', 'Jonah Etene', 'KTF/COH/0002', '4/12/2018', '1'),
(4, 'Kibabii University', 'Nairobi', 'Jescah Murumbi', 'KTF/COH/0003', '2019-01-09', '1'),
(5, 'Kisumu', 'Kisumu', 'Jack oyugi', 'KTF/COH/0005', '2019-01-10', '1');

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE IF NOT EXISTS `coach` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `names` varchar(200) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `county` varchar(100) NOT NULL,
  `coach` varchar(200) NOT NULL,
  `club` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `pob` varchar(200) NOT NULL,
  `pass_number` varchar(200) NOT NULL,
  `id_number` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `dan_number` varchar(50) NOT NULL,
  `lincense` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `primary_name` varchar(200) NOT NULL DEFAULT 'Not provided',
  `primary_grade` varchar(100) NOT NULL DEFAULT 'Not provided',
  `highschool` varchar(200) NOT NULL,
  `highschool_grade` varchar(100) NOT NULL DEFAULT 'Not provided',
  `college` varchar(200) NOT NULL,
  `college_grade` varchar(100) NOT NULL,
  `coaching_course` varchar(200) NOT NULL,
  `master_course` varchar(200) NOT NULL,
  `psport` varchar(200) NOT NULL,
  `pduration` varchar(200) NOT NULL,
  `osport` varchar(200) NOT NULL,
  `oduration` varchar(200) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `birth_cert_image` varchar(500) NOT NULL,
  `nationalid_image` varchar(500) NOT NULL,
  `passport_image` varchar(500) NOT NULL,
  `jobid_image` varchar(500) NOT NULL,
  `nhif_image` varchar(500) NOT NULL,
  `secondary_image` varchar(500) NOT NULL,
  `diploma_image` varchar(500) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`id`, `names`, `gender`, `county`, `coach`, `club`, `country`, `dob`, `pob`, `pass_number`, `id_number`, `phone`, `dan_number`, `lincense`, `email`, `primary_name`, `primary_grade`, `highschool`, `highschool_grade`, `college`, `college_grade`, `coaching_course`, `master_course`, `psport`, `pduration`, `osport`, `oduration`, `photo`, `birth_cert_image`, `nationalid_image`, `passport_image`, `jobid_image`, `nhif_image`, `secondary_image`, `diploma_image`, `password`, `status`) VALUES
(35, 'Samuel Ndegwa Mwaniki', 'Male', 'Nyeri', '', '', 'Kenya', '1994-02-09', 'Muranga', 'N/A', '31854313', '0726159307', 'KTF/COH/0001', 'N/A', 'mwanikisamuel91@gmail.com', 'Karaba Primary School', '377(A-)', 'Muranga High School', 'A-', 'Kibabii University', 'Pending...', 'Class B', 'Class A', 'Taekwondo', '4 yrs', 'Football', '2 yrs', 'tet.jpg', 'c1.png', 'c13.jpg', 'c11.jpg', 'c10.jpg', 'c7.jpg', 'c3.jpg', 'c2.jpg', '1', '1'),
(36, 'James Mwaniki', 'Male', 'Nyandarua', '', '', 'kenya', '2019-02-12', 'Muranga', 'KTF/COH/0002', '33258304', '0723456789', 'KTF/COH/0002', 'N/A', 'mwanikisamuel91@gmail.com', 'Not provided', 'Not provided', '', 'Not provided', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2', '0'),
(37, 'James Mwaniki', 'Male', 'Nairobi', '', '', 'Kenya', '2019-02-05', 'Muranga', 'KTF/COH/0003', '676655', '0712522041', 'KTF/COH/0003', 'N/A', 'mwanikisamuel91@gmail.com', 'Not provided', 'Not provided', '', 'Not provided', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '3', '0'),
(38, 'sdfg', 'Male', 'sdfghj', '', '', 'sxdcfghj', '2019-02-26', 'sdfg', 'KTF/COH/0004', 'dcfvgbhn', 'sxdcfvgbhn', 'KTF/COH/0004', 'sxdcfvgbh', 'mwanikisamuel91@gmail.com', 'Not provided', 'Not provided', '', 'Not provided', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '4', '0');

-- --------------------------------------------------------

--
-- Table structure for table `coach_log`
--

CREATE TABLE IF NOT EXISTS `coach_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `coach_log`
--

INSERT INTO `coach_log` (`id`, `number`) VALUES
(1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `coach_messages`
--

CREATE TABLE IF NOT EXISTS `coach_messages` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `ktf_number` varchar(50) NOT NULL,
  `name` varchar(300) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` text NOT NULL,
  `date_sent` varchar(100) NOT NULL,
  `reply` varchar(1000) NOT NULL DEFAULT 'Pending',
  `date_reply` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `coach_messages`
--

INSERT INTO `coach_messages` (`id`, `ktf_number`, `name`, `subject`, `message`, `date_sent`, `reply`, `date_reply`) VALUES
(1, 'KTF/COH/0002', 'Jonah Etene', 'Testing', 'Testing the working of messaging modules', '2018-12-18', '  Home it has woked now\r\n', '  Home it has woked now\r\n'),
(2, 'KTF/COH/0002', 'Jonah Etene', 'Registration', 'How do i register my team', '2018-12-18', 'Pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `counties`
--

CREATE TABLE IF NOT EXISTS `counties` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `officer` varchar(200) NOT NULL,
  `county_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `current_balance`
--

CREATE TABLE IF NOT EXISTS `current_balance` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `amount` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `current_balance`
--

INSERT INTO `current_balance` (`id`, `amount`) VALUES
(1, '1759089');

-- --------------------------------------------------------

--
-- Table structure for table `dan_log`
--

CREATE TABLE IF NOT EXISTS `dan_log` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `number` int(10) NOT NULL,
  `year` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `dan_log`
--

INSERT INTO `dan_log` (`id`, `number`, `year`) VALUES
(1, 32, '2018');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(100) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(500) NOT NULL,
  `event_type` varchar(200) NOT NULL,
  `event_venue` varchar(200) NOT NULL,
  `event_date` varchar(200) NOT NULL,
  `counter_date` varchar(30) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_type`, `event_venue`, `event_date`, `counter_date`) VALUES
(5, 'KUSA Cup', 'Universities Competition', 'Kibabii University', '2018-12-06', '20181206'),
(6, 'East Africa Taekwondo', 'Universities Competition', 'Dodoma, Kampala', '2018-12-15', '20181215'),
(8, 'Kenya Open', 'National Open Championship', 'Kasarani, Nairobi', '2018-12-06', '20181206'),
(9, 'Western Open Championship', 'National', 'Kakamega', '2019-02-26', '20190226'),
(10, 'Nyanza Open  Championship', 'Branch', 'Kisumu', '2019-03-22', '20190322'),
(11, 'Sports First Aid Course ', 'National', 'Nairobi', '2019-04-26', '20190426');

-- --------------------------------------------------------

--
-- Table structure for table `events_application`
--

CREATE TABLE IF NOT EXISTS `events_application` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `event_id` varchar(30) NOT NULL,
  `event_name` varchar(200) NOT NULL,
  `event_date` varchar(100) NOT NULL,
  `ktf_number` varchar(30) NOT NULL,
  `applicant_name` varchar(300) NOT NULL,
  `date_applied` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Not Approved',
  `participation_status` varchar(50) NOT NULL DEFAULT '0',
  `comment` text NOT NULL,
  `award` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `events_application`
--

INSERT INTO `events_application` (`id`, `event_id`, `event_name`, `event_date`, `ktf_number`, `applicant_name`, `date_applied`, `status`, `participation_status`, `comment`, `award`) VALUES
(14, '6', 'East Africa Taekwondo', '2018-12-15', 'KTF/001/2018', 'Samuel Ndegwa Mwaniki', '2018-12-07', 'Approved', '1', 'ok', '347 points'),
(15, '6', 'East Africa Taekwondo', '2018-12-15', 'KTF/011/2018', 'Ephantus Kamau Mwangi', '2018-12-07', 'Approved', '0', 'ok', '');

-- --------------------------------------------------------

--
-- Table structure for table `events_participation`
--

CREATE TABLE IF NOT EXISTS `events_participation` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `event_id` varchar(200) NOT NULL,
  `event_name` varchar(200) NOT NULL,
  `ktf_no` varchar(50) NOT NULL,
  `venue` varchar(100) NOT NULL,
  `position` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `frontgallery`
--

CREATE TABLE IF NOT EXISTS `frontgallery` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `image` varchar(200) NOT NULL,
  `title` text NOT NULL,
  `time_uploaded` varchar(50) NOT NULL,
  `time_counter` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `frontgallery`
--

INSERT INTO `frontgallery` (`id`, `image`, `title`, `time_uploaded`, `time_counter`, `status`) VALUES
(1, '57.jpg', 'Athletee doing practice', '2019-09-15 At 17:10', '201909151710', '1'),
(2, 'open14.jpg', 'Kenya Open at Kasarani, December 2018', '2019-09-15 At 17:17', '201909151717', '1'),
(3, '0.jpg', 'Testing Gallery 2', '2019-09-16 At 17:10', '201909161710', '1'),
(4, 't7.jpg', 'Kenya Open at Kasarani, December 2018', '2019-09-15 At 17:19', '201909151719', '1'),
(5, 'Chair.jpg', 'Testing Gallery', '2019-09-16 At 17:04', '201909161704', '1'),
(6, 'Chair.jpg', 'Testing Gallery', '2019-09-16 At 17:04', '201909161704', '1'),
(7, 'e6.jpg', 'Kenya Taekwondo National Team participated in championship games at Fayoum University in Alexandria City, Egypt', '2019-09-15 At 17:06', '201909151706', '1'),
(8, 'open13.jpg', 'Kenya Open at Kasarani, December 2018', '2019-09-15 At 17:11', '201909151711', '1'),
(9, 'e5.jpg', 'Kenya Taekwondo National Team participated in championship games at Fayoum University in Alexandria City, Egypt', '', '201909151427', '1');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `image` varchar(500) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `time_uploaded` varchar(1000) NOT NULL,
  `time_counter` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `title`, `description`, `time_uploaded`, `time_counter`) VALUES
(1, '12.jpg', 'Testing', 'This is a testing Image', '2019-09-13 At 16:43', '201909131643'),
(2, '37.png', 'Testin 2', 'Were are testing this Image', '2019-09-15 At 14:27', '201909151427'),
(3, '32.jpg', 'Testin 3', 'This is image testing 3', '2019-09-13 At 16:43', '201909131643'),
(4, '10.jpg', 'Testin 4', 'Testing Image 4', '2019-09-13 At 16:47', '201909131647'),
(5, '19.jpg', 'sdghj', 'sdfghjk', '2019-09-13 At 16:53', '201909131653'),
(6, '20.jpg', 'asdfghjkl', 'asdfg sdfghjkl', '2019-09-13 At 16:58', '201909131658'),
(7, 'ribbon.jpg', 'xdcfvghnm,', 'sdfgbhnjm,', '2019-09-15 At 16:11', '201909151611'),
(8, '15.png', 'xcvb n', 'dcvbnm', '2019-09-15 At 16:21', '201909151621'),
(9, 'Kenya_NOC_logo.jpg', 'dgggvv', 'dsbbhbbe', '2019-09-15 At 16:23', '201909151623'),
(10, '7.jpg', 'dfghj', 'dfgbhnjm', '2019-09-15 At 16:32', '201909151632'),
(11, 'e1.jpg', 'Kenya Taekwondo National Team participated in championship games at Fayoum University in Alexandria City, Egypt', 'Kenya Taekwondo National Team participated in championship games at Fayoum University in Alexandria City, Egypt', '2019-09-15 At 17:01', '201909151701'),
(12, 'e2.jpg', 'Kenya Taekwondo National Team participated in championship games at Fayoum University in Alexandria City, Egypt', 'Kenya Taekwondo National Team participated in championship games at Fayoum University in Alexandria City, Egypt', '2019-09-15 At 17:02', '201909151702'),
(13, 'e4.jpg', 'Kenya Taekwondo National Team participated in championship games at Fayoum University in Alexandria City, Egypt', 'Kenya Taekwondo National Team participated in championship games at Fayoum University in Alexandria City, Egypt', '2019-09-15 At 17:02', '201909151702'),
(14, 'e5.jpg', 'Kenya Taekwondo National Team participated in championship games at Fayoum University in Alexandria City, Egypt', 'Kenya Taekwondo National Team participated in championship games at Fayoum University in Alexandria City, Egypt', '2019-09-15 At 17:05', '201909151705'),
(15, 'e6.jpg', 'Kenya Taekwondo National Team participated in championship games at Fayoum University in Alexandria City, Egypt', 'Kenya Taekwondo National Team participated in championship games at Fayoum University in Alexandria City, Egypt', '2019-09-15 At 17:06', '201909151706'),
(16, '57.jpg', 'Athletee doing practice', 'Athletee doing practice', '2019-09-15 At 17:10', '201909151710'),
(17, 'open13.jpg', 'Kenya Open at Kasarani, December 2018', 'Kenya Open at Kasarani, December 2018', '2019-09-15 At 17:11', '201909151711'),
(18, 'open14.jpg', 'Kenya Open at Kasarani, December 2018', 'Kenya Open at Kasarani, December 2018', '2019-09-15 At 17:17', '201909151717'),
(19, 't7.jpg', 'Kenya Open at Kasarani, December 2018', 'Kenya Open at Kasarani, December 2018', '2019-09-15 At 17:19', '201909151719'),
(20, '17.jpg', 'Testing Replace', 'This image is ment', '2019-09-16 At 13:08', '201909161308'),
(21, '29.png', 'Testing Replace 2', 'sdfghjkl', '2019-09-16 At 13:12', '201909161312'),
(22, 'Chair.jpg', 'Testing Gallery', 'fffff', '2019-09-16 At 17:04', '201909161704'),
(23, '20150613_170503.jpg', 'sdcfvghnj', 'dcfvgbhnm,.', '2019-10-20 At 06:57', '201910200657');

-- --------------------------------------------------------

--
-- Table structure for table `hot_advert`
--

CREATE TABLE IF NOT EXISTS `hot_advert` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hot_advert`
--

INSERT INTO `hot_advert` (`id`, `description`) VALUES
(1, 'Kenya Taekwondo Federation wishes to inform our athletes that we are in process of obtaining a national team in of one player in each category..  Kenya Taekwondo Federation value your views and opinions, feel free to contacts our officials.');

-- --------------------------------------------------------

--
-- Table structure for table `money_in_out`
--

CREATE TABLE IF NOT EXISTS `money_in_out` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `giver_receiver` varchar(200) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `amount_in` varchar(50) NOT NULL,
  `amount_out` varchar(100) NOT NULL,
  `ref_number` varchar(400) NOT NULL,
  `transaction_date` varchar(100) NOT NULL,
  `transaction_year` varchar(30) NOT NULL,
  `user` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `money_in_out`
--

INSERT INTO `money_in_out` (`id`, `giver_receiver`, `comment`, `amount_in`, `amount_out`, `ref_number`, `transaction_date`, `transaction_year`, `user`) VALUES
(1, 'Donor', 'To fund daily activities', '100000', '', 'MLH098767Y', '2019-01-01', '2019', 'Ndegwa'),
(3, 'Sponsor', 'Annual Leaague', '200000', '', 'JTG45678H', '2019-01-01', '2019', 'Ndegwa'),
(4, 'Ministry Fund', 'To construct new office', '500000', '', 'HTS23456GH', '2019-01-01', '2019', 'Ndegwa'),
(5, 'Donor', 'Kenya open fund', '100000', '', 'FGD234567G', '2019-01-01', '2019', 'Ndegwa'),
(6, 'Western Conference', 'To be used in hosting kenya opens 2019', '', '100000', '', '2019-01-01', '2019', 'Ndegwa'),
(7, 'Coach ID Number 3634555', 'Registration', '1000', '', 'GHF34567D', '2019-01-01', '2019', 'Ndegwa'),
(8, 'Athletee ID Number 33258304', 'Registration', '1000', '', 'ML7734VG7', '2019-01-01', '2019', 'Ndegwa'),
(9, 'Referee ID Number 10293847', 'Registration', '1000', '', 'MKGHJ23H34', '2019-01-01', '2019', 'Ndegwa'),
(10, 'Techno Kenya', 'Payment for software delivery to ktf.', '', '50000', '', '2019-01-02', '2019', 'Ndegwa'),
(11, 'Kibabii University', 'Registration', '1000', '', 'GS5557D7', '2019-01-10', '2019', 'Ndegwa'),
(12, 'Coach ID Number 31854313', 'Registration', '1000', '', 'KY254DDRWR', '2019-01-10', '2019', 'Ndegwa'),
(13, 'Mutwe', 'Registration', '1000', '', 'HH353FRH', '2019-01-10', '2019', 'Ndegwa'),
(14, 'Coach ID Number 23212863', 'Registration', '1000', '', 'VTYY45688H', '2019-01-10', '2019', 'Ndegwa'),
(15, 'Kisumu', 'Registration', '1000', '', 'GYGD345678j', '2019-01-10', '2019', 'Ndegwa'),
(16, 'Donor', 'air ticket', '1000089', '', 'qwrtrytty', '2019-01-10', '2019', 'Ndegwa'),
(17, 'Athletee ID Number 31854313', 'Registration', '1000', '', 'MV234567DR', '2019-09-20', '2019', 'Ndegwa');

-- --------------------------------------------------------

--
-- Table structure for table `payment_log`
--

CREATE TABLE IF NOT EXISTS `payment_log` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `purpose` varchar(200) NOT NULL,
  `amount` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `payment_log`
--

INSERT INTO `payment_log` (`id`, `category`, `purpose`, `amount`) VALUES
(1, 'athlete', 'Registration', '1500');

-- --------------------------------------------------------

--
-- Table structure for table `public_messages`
--

CREATE TABLE IF NOT EXISTS `public_messages` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `subject` varchar(500) NOT NULL,
  `message` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `date_sent` varchar(100) NOT NULL,
  `reply` varchar(1000) NOT NULL DEFAULT 'Pending',
  `date_replied` varchar(100) NOT NULL DEFAULT 'Pending',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `public_messages`
--

INSERT INTO `public_messages` (`id`, `subject`, `message`, `email`, `date_sent`, `reply`, `date_replied`) VALUES
(1, 'Registration', 'Kindly assist how to register as a coach', 'mwanikisamuel91@gmail.com', '20181213', 'Pending', 'Pending'),
(2, 'Payement', 'Kindly assist me on how to pay registration fees', 'mwanikisamuel91@gmail.com', '2018-12-13', 'Pending', 'Pending'),
(3, 'Hello', 'Hellooo there', 'mwanikisamuel91@gmail.com', '2018-12-14', 'Pending', 'Pending'),
(4, 'Concern', 'Hello Hello', 'mwanikisamuel91@gmail.com', '2018-12-14', '1', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `referee`
--

CREATE TABLE IF NOT EXISTS `referee` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `names` varchar(200) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `county` varchar(100) NOT NULL,
  `coach` varchar(200) NOT NULL,
  `club` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `pob` varchar(200) NOT NULL,
  `pass_number` varchar(200) NOT NULL,
  `id_number` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `dan_number` varchar(50) NOT NULL,
  `lincense` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `primary_name` varchar(200) NOT NULL DEFAULT 'Not provided',
  `primary_grade` varchar(100) NOT NULL DEFAULT 'Not provided',
  `highschool` varchar(200) NOT NULL,
  `highschool_grade` varchar(100) NOT NULL DEFAULT 'Not provided',
  `college` varchar(200) NOT NULL,
  `college_grade` varchar(100) NOT NULL,
  `coaching_course` varchar(200) NOT NULL,
  `master_course` varchar(200) NOT NULL,
  `psport` varchar(200) NOT NULL,
  `pduration` varchar(200) NOT NULL,
  `osport` varchar(200) NOT NULL,
  `oduration` varchar(200) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `birth_cert_image` varchar(500) NOT NULL,
  `nationalid_image` varchar(500) NOT NULL,
  `passport_image` varchar(500) NOT NULL,
  `jobid_image` varchar(500) NOT NULL,
  `nhif_image` varchar(500) NOT NULL,
  `secondary_image` varchar(500) NOT NULL,
  `diploma_image` varchar(500) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `referee`
--

INSERT INTO `referee` (`id`, `names`, `gender`, `county`, `coach`, `club`, `country`, `dob`, `pob`, `pass_number`, `id_number`, `phone`, `dan_number`, `lincense`, `email`, `primary_name`, `primary_grade`, `highschool`, `highschool_grade`, `college`, `college_grade`, `coaching_course`, `master_course`, `psport`, `pduration`, `osport`, `oduration`, `photo`, `birth_cert_image`, `nationalid_image`, `passport_image`, `jobid_image`, `nhif_image`, `secondary_image`, `diploma_image`, `password`, `status`) VALUES
(1, 'Samuel Ndegwa Mwaniki', 'Male', 'Nyeri', '', '', 'Kenya', '2019-02-05', 'Muranga', 'N/A', '31854313', '+254726159307', 'KTF/REF/0005', 'N/A', 'mwanikisamuel91@gmail.com', 'Karaba Primary School', '377(A-)', 'Muranga High School', 'A-', 'Kibabii University', 'N/A', 'Class A', 'Level 2', 'Taekwondo', '2 yrs', 'Football', '2 yrs', '', '', '', '', '', '', '', '', '5', '0');

-- --------------------------------------------------------

--
-- Table structure for table `referee_log`
--

CREATE TABLE IF NOT EXISTS `referee_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `referee_log`
--

INSERT INTO `referee_log` (`id`, `number`) VALUES
(1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `image` varchar(200) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `time_uploaded` varchar(50) NOT NULL,
  `time_counter` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `title`, `time_uploaded`, `time_counter`, `status`) VALUES
(1, 'e5.jpg', 'Kenya Taekwondo National Team participated in championship games at Fayoum University in Alexandria City, Egypt', '2019-09-15 At 17:05', '201909151705', '1'),
(2, 'open13.jpg', 'Kenya Open at Kasarani, December 2018', '2019-09-15 At 17:11', '201909151711', '1'),
(3, 'e2.jpg', 'Kenya Taekwondo National Team participated in championship games at Fayoum University in Alexandria City, Egypt', '2019-09-15 At 17:02', '201909151702', '1'),
(4, '17.jpg', 'Testing Replace', '2019-09-16 At 13:08', '201909161308', '1'),
(5, 'e1.jpg', 'Kenya Taekwondo National Team participated in championship games at Fayoum University in Alexandria City, Egypt', '2019-09-15 At 17:01', '201909151701', '1'),
(6, '20150613_170503.jpg', 'sdcfvghnj', '2019-10-20 At 06:57', '201910200657', '1'),
(7, 'e4.jpg', 'Kenya Taekwondo National Team participated in championship games at Fayoum University in Alexandria City, Egypt', '2019-09-15 At 17:02', '201909151702', '1'),
(8, '57.jpg', 'Athletee doing practice', '2019-09-15 At 17:10', '201909151710', '1'),
(9, 'e6.jpg', 'Kenya Taekwondo National Team participated in championship games at Fayoum University in Alexandria City, Egypt', '2019-09-15 At 17:06', '201909151706', '1');

-- --------------------------------------------------------

--
-- Table structure for table `testajax`
--

CREATE TABLE IF NOT EXISTS `testajax` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `testajax`
--

INSERT INTO `testajax` (`id`, `name`) VALUES
(1, 'name'),
(2, 'name'),
(3, 'Kario'),
(4, 'Ndegwa'),
(5, 'Mwangi'),
(6, 'Njoro'),
(7, 'Njoro'),
(8, 'Njoro'),
(9, 'Njoro'),
(10, 'Njoro'),
(11, 'Njoro'),
(12, 'terr'),
(13, 'tui'),
(14, 'tui'),
(15, 'tui');

-- --------------------------------------------------------

--
-- Table structure for table `top_story`
--

CREATE TABLE IF NOT EXISTS `top_story` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date_uploaded` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `top_story`
--

INSERT INTO `top_story` (`id`, `image`, `title`, `description`, `date_uploaded`) VALUES
(1, '22.jpg', 'Kenya Taekwondo Federation wishes to inform our athletes that we are in process of obtaining a natio', 'Kenya Taekwondo Federation wishes to inform our athletes that we are in process of obtaining a national team in of one player in each category. Click here to view the proposed athletes to compete for selection of this team', '2019-10-03');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `national_id` varchar(50) NOT NULL,
  `purpose` varchar(200) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `ref_number` varchar(200) NOT NULL,
  `date_paid` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `national_id`, `purpose`, `amount`, `ref_number`, `date_paid`, `status`) VALUES
(2, '31854313', 'Registration', '1000', 'ML95F2EGD5', '2018-12-11', '1'),
(5, '98765432', 'Registration', '1000', 'MKGHJ23H3HH', '2018-12-12', '1'),
(6, '2345678', 'Registration', '1000', 'FGsdfgh23', '2018-12-12', '1'),
(8, 'dfgh', 'Registration', '1000', 'ged6fui3i3w', '2018-12-12', '1'),
(9, 'dfghj', 'Registration', '1000', 'c37663d73', '2018-12-12', '1'),
(10, 'dcfvghj', 'Registration', '1000', 'asdfghj', '2018-12-13', '1'),
(11, '547365645', 'Registration', '1000', 'jbui3324', '2018-12-13', '1'),
(12, '23434343', 'Registration', '1000', 'GW2344SW', '2018-12-13', '1'),
(13, '23232323', 'Registration', '1000', 'ML234VGG', '2018-12-13', '1'),
(14, '232323232', 'Registration', '1000', 'DRDRDR234567', '2018-12-13', '1'),
(15, '23212863', 'Registration', '1000', 'ML345FFG43456', '2018-12-13', '1'),
(16, '33258304', 'Registration', '1000', 'ML675TDH', '2018-12-14', '1'),
(17, '3634555', 'Registration', '1000', 'GHF34567D', '2019-01-01', '1'),
(18, '33258304', 'Registration', '1000', 'ML7734VG7', '2019-01-01', '1'),
(19, '10293847', 'Registration', '1000', 'MKGHJ23H34', '2019-01-01', '1'),
(20, 'Kibabii University', 'Registration', '1000', 'GS5557D7', '2019-01-10', '1'),
(21, '31854313', 'Registration', '1000', 'KY254DDRWR', '2019-01-10', '1'),
(22, 'Mutwe', 'Registration', '1000', 'HH353FRH', '2019-01-10', '1'),
(23, '23212863', 'Registration', '1000', 'VTYY45688H', '2019-01-10', '1'),
(24, 'Kisumu', 'Registration', '1000', 'GYGD345678j', '2019-01-10', '1'),
(25, '31854313', 'Registration', '1000', 'MV234567DR', '2019-09-20', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
