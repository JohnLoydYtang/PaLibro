-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2023 at 07:05 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--
CREATE DATABASE IF NOT EXISTS `user_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `user_db`;

-- --------------------------------------------------------

--
-- Table structure for table `cart_item`
--

DROP TABLE IF EXISTS `cart_item`;
CREATE TABLE `cart_item` (
  `cart_id` int(50) NOT NULL,
  `title_of_the_book` varchar(255) NOT NULL,
  `grade_level` varchar(255) NOT NULL,
  `date_of_published` date NOT NULL,
  `author` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `stock_status` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_item`
--

INSERT INTO `cart_item` (`cart_id`, `title_of_the_book`, `grade_level`, `date_of_published`, `author`, `price`, `stock_status`, `images`) VALUES
(86, 'Science for Smart Learners', 'grade1', '2023-05-13', 'Diwa Publishing', 820, 'out-of-stock', '32012re.jpg'),
(87, 'Realistic Math', 'grade1', '2023-05-13', 'Phoenix Publishing House', 775, 'in-stock', '34989realistic_math_1_1630998192_bc9abee3.jpg'),
(88, 'English This Way', 'grade1', '2023-05-13', 'Phoenix Publishing House', 525, 'in-stock', '52952grade_1_english_this_way_1661177288_67b4d8f5_progressive.jpg'),
(89, 'Exercises for Better Penmanship', 'grade1', '2023-05-13', 'Phoenix Publishing House', 435, 'in-stock', '46424download.jpg'),
(90, 'Across Borders through Reading', 'grade1', '2023-05-13', 'Vibal Publishing House', 700, 'in-stock', '32219across_borders_through_reading_grade_1_1564817022_a8b59303_progressive.jpg'),
(91, 'Pinagyamang Pluma', 'grade1', '2023-05-13', 'Phoenix Publishing House', 335, 'in-stock', '42666download (1).jpg'),
(92, 'Gawi (ESP)', 'grade1', '2023-05-13', 'Abiva publishing', 335, 'in-stock', '532398c923b71bb258e5b963432bd8e0374c9.jpg'),
(93, 'Bisaya: Kabilin sa Atong Kaliwat', 'grade1', '2023-05-13', 'Don Bosco Press', 410, 'in-stock', '64727download (2).jpg'),
(94, 'Living with Music, Art, Physical Education and Health', 'grade1', '2023-05-13', 'Vibal Publishing House', 670, 'in-stock', '99501download (3).jpg'),
(95, 'Kultura, Kasaysayan at Kabuhayan', 'grade1', '2023-05-13', 'Vibal Publishing House', 600, 'in-stock', '45718grade_1_kultura_kasaysayan_at__1608537009_e7935200.jpg'),
(96, 'Computers for Digital Learners 2022', 'grade1', '2023-05-13', 'Phoenix Publishing House', 840, 'in-stock', '89730tawc-1-3-1-692x1024.png');

-- --------------------------------------------------------

--
-- Table structure for table `cart_itemgr2`
--

DROP TABLE IF EXISTS `cart_itemgr2`;
CREATE TABLE `cart_itemgr2` (
  `cart_id` int(255) NOT NULL,
  `title_of_the_book` varchar(255) NOT NULL,
  `grade_level` varchar(255) NOT NULL,
  `date_of_published` date NOT NULL,
  `author` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `stock_status` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_itemgr2`
--

INSERT INTO `cart_itemgr2` (`cart_id`, `title_of_the_book`, `grade_level`, `date_of_published`, `author`, `price`, `stock_status`, `images`) VALUES
(3, 'Science for Smart Learners', 'grade2', '2023-05-13', 'Diwa Publishing', 820, 'out-of-stock', '69847e0ecaec611fb1ce43d59b9e304fe0e05_tn.jpg'),
(4, 'Realistic Math', 'grade2', '2023-05-13', 'Phoenix Publishing House', 775, 'in-stock', '3265133ea36ebd31755a8308c5fc7e84ad4a6.jpg'),
(5, 'English This Way', 'grade2', '2023-05-13', 'Phoenix Publishing House', 525, 'in-stock', '27587english_this_way_grade_2_1630129582_b3207555.jpg'),
(6, 'Exercises for Better Penmanship', 'grade2', '2023-05-13', 'Phoenix Publishing House', 435, 'in-stock', '22305SS301P-Exercises-for-Better-Penmanship-2-WT-np-350x479.png'),
(7, 'Across Borders through Reading', 'grade2', '2023-05-13', 'Vibal Publishing House', 700, 'in-stock', '13520across_borders_reading_2_1659599986_a32d3746_progressive.jpg'),
(8, 'Pinagyamang Pluma', 'grade2', '2023-05-13', 'Phoenix Publishing House', 805, 'in-stock', '657912aaf54d1f3ac21cb63ceb308df82e656.jpg'),
(9, 'Gawi (ESP)', 'grade2', '2023-05-13', 'Abiva publishing', 335, 'in-stock', '69918download (4).jpg'),
(10, 'Bisaya: Kabilin sa Atong Kaliwat', 'grade2', '2023-05-13', 'Don Bosco Press', 430, 'in-stock', '49302download (5).jpg'),
(11, 'Living with Music, Art, Physical Education and Health', 'grade2', '2023-05-13', 'Vibal Publishing House', 670, 'in-stock', '11176download (6).jpg'),
(12, 'Kultura, Kasaysayan at Kabuhayan', 'grade2', '2023-05-13', 'Vibal Publishing House', 600, 'in-stock', '73818kultura_kasaysayan_at_kabuhaya_1659600283_c8f64084_progressive.jpg'),
(13, 'Computers for Digital Learners 2022', 'grade2', '2023-05-13', 'Phoenix Publishing House', 620, 'in-stock', '82451Screenshot 2023-05-13 133350.png');

-- --------------------------------------------------------

--
-- Table structure for table `cart_itemgr3`
--

DROP TABLE IF EXISTS `cart_itemgr3`;
CREATE TABLE `cart_itemgr3` (
  `cart_id` int(255) NOT NULL,
  `title_of_the_book` varchar(255) NOT NULL,
  `grade_level` varchar(255) NOT NULL,
  `date_of_published` date NOT NULL,
  `author` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `stock_status` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_itemgr3`
--

INSERT INTO `cart_itemgr3` (`cart_id`, `title_of_the_book`, `grade_level`, `date_of_published`, `author`, `price`, `stock_status`, `images`) VALUES
(2, 'Science for Smart Learners', 'grade3', '2023-05-13', 'Diwa Publishing', 820, 'out-of-stock', '91077fcea6bed41f8897f880eaec8bb2baf22.jpg'),
(3, 'Realistic Math', 'grade3', '2023-05-13', 'Phoenix Publishing House', 775, 'in-stock', '49299download (7).jpg'),
(4, 'English This Way', 'grade3', '2023-05-13', 'Phoenix Publishing House', 535, 'in-stock', '487205ef73fa510a1f629e05852b806b6fd11.jpg'),
(5, 'Exercises for Better Penmanship', 'grade3', '2023-05-13', 'Phoenix Publishing House', 435, 'in-stock', '11213download (8).jpg'),
(6, 'Across Borders through Reading', 'grade3', '2023-05-13', 'Vibal Publishing House', 700, 'in-stock', '52237across_borders_through_reading_1599309372_10c7ce43.jpg'),
(7, 'Pinagyamang Pluma', 'grade3', '2023-05-13', 'Phoenix Publishing House', 835, 'in-stock', '85467FI122GWC-768x1052.png'),
(8, 'Gawi (ESP)', 'grade3', '2023-05-13', 'Abiva publishing', 335, 'in-stock', '26675ee6fbf4367fff4613ebc281801aac1d2.jpg'),
(9, 'Bisaya: Kabilin sa Atong Kaliwat', 'grade3', '2023-05-13', 'Don Bosco Press', 430, 'in-stock', '25535Screenshot 2023-05-13 134140.png'),
(10, 'Living with Music, Art, Physical Education and Health', 'grade3', '2023-05-13', 'Vibal Publishing House', 670, 'in-stock', '65494download (9).jpg'),
(11, 'Kultura, Kasaysayan at Kabuhayan', 'grade3', '2023-05-13', 'Vibal Publishing House', 600, 'in-stock', '89702Screenshot 2023-05-13 134346.png'),
(12, 'Computers for Digital Learners 2022', 'grade3', '2023-05-13', 'Phoenix Publishing House', 610, 'in-stock', '30567computers-for-digital-learners-3-768x1136-1-692x1024.png');

-- --------------------------------------------------------

--
-- Table structure for table `cart_itemgr4`
--

DROP TABLE IF EXISTS `cart_itemgr4`;
CREATE TABLE `cart_itemgr4` (
  `cart_id` int(255) NOT NULL,
  `title_of_the_book` varchar(255) NOT NULL,
  `grade_level` varchar(255) NOT NULL,
  `date_of_published` date NOT NULL,
  `author` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `stock_status` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_itemgr4`
--

INSERT INTO `cart_itemgr4` (`cart_id`, `title_of_the_book`, `grade_level`, `date_of_published`, `author`, `price`, `stock_status`, `images`) VALUES
(2, 'Science for Smart Learners', 'grade4', '2023-05-13', 'Diwa Publishing', 820, 'out-of-stock', '31600124799e4e6fc4b12fd2efb9b4d41d32a.jpg'),
(3, 'Realistic Math', 'grade4', '2023-05-13', 'Phoenix Publishing House', 765, 'in-stock', '57329cd89beff7ac2dd32a4d0e193fbfad347.jpg'),
(4, 'English This Way', 'grade4', '2023-05-13', 'Phoenix Publishing House', 525, 'in-stock', '34124download (10).jpg'),
(5, 'Across Borders through Reading', 'grade4', '2023-05-13', 'Vibal Publishing House', 700, 'in-stock', '25174download (11).jpg'),
(6, 'Pinagyamang Pluma', 'grade4', '2023-05-13', 'Phoenix Publishing House', 720, 'in-stock', '81773download (12).jpg'),
(7, 'Gawi (ESP)', 'grade4', '2023-05-13', 'Abiva publishing', 335, 'in-stock', '214910ac7bd0d03869be96764a4444177e1ac.jpg'),
(8, 'Masiglang Pamumuhay para sa kinabukasan', 'grade4', '2023-05-13', 'Phoenix Publishing House', 380, 'in-stock', '731951395f54ffc1b5eed19b6ae9c95a9071e.jpg'),
(9, 'Living with Music, Art, Physical Education and Health', 'grade4', '2023-05-13', 'Vibal Publishing House', 670, 'in-stock', '31769living_with_music_art_physical_1625041411_e7020897_progressive.jpg'),
(10, 'Kultura, Kasaysayan at Kabuhayan', 'grade4', '2023-05-13', 'Vibal Publishing House', 600, 'in-stock', '26371bb52f3b94853fae94572660ad88410b4.jpg'),
(11, 'Computers for Digital Learners 2022', 'grade4', '2023-05-13', 'Phoenix Publishing House', 725, 'in-stock', '33457download (13).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart_itemgr5`
--

DROP TABLE IF EXISTS `cart_itemgr5`;
CREATE TABLE `cart_itemgr5` (
  `cart_id` int(255) NOT NULL,
  `title_of_the_book` varchar(255) NOT NULL,
  `grade_level` varchar(255) NOT NULL,
  `date_of_published` date NOT NULL,
  `author` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `stock_status` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_itemgr5`
--

INSERT INTO `cart_itemgr5` (`cart_id`, `title_of_the_book`, `grade_level`, `date_of_published`, `author`, `price`, `stock_status`, `images`) VALUES
(2, 'Science for Smart Learners', 'grade5', '2023-05-13', 'Diwa Publishing', 820, 'out-of-stock', '14205science_for_smart_learners_5_1657606060_b425f02d.jpg'),
(3, 'Realistic Math', 'grade5', '2023-05-13', 'Phoenix Publishing House', 765, 'in-stock', '98448download (14).jpg'),
(4, 'English This Way', 'grade5', '2023-05-13', 'Phoenix Publishing House', 650, 'in-stock', '92427download (15).jpg'),
(5, 'Across Borders through Reading', 'grade5', '2023-05-13', 'Vibal Publishing House', 700, 'in-stock', '83604grade_5_textbooks_1657107633_6e4b6769_progressive.jpg'),
(6, 'Pinagyamang Pluma', 'grade5', '2023-05-13', 'Phoenix Publishing House', 740, 'in-stock', '51754FI130GW-748x1024.png'),
(7, 'Gawi (ESP)', 'grade5', '2023-05-13', 'Abiva publishing', 335, 'in-stock', '69195download (16).jpg'),
(8, 'Masiglang Pamumuhay para sa kinabukasan', 'grade5', '2023-05-13', 'Phoenix Publishing House', 330, 'in-stock', '52693grade_5_book_masiglang_pamumuh_1600424071_60a74cff_progressive.jpg'),
(9, 'Living with Music, Art, Physical Education and Health', 'grade5', '2023-05-13', 'Vibal Publishing House', 670, 'in-stock', '19904download (17).jpg'),
(10, 'Kultura, Kasaysayan at Kabuhayan', 'grade5', '2023-05-13', 'Vibal Publishing House', 600, 'in-stock', '72849847cd699b095b3a08113d2c9f230baff_tn.jpg'),
(11, 'Computers for Digital Learners 2022', 'grade5', '2023-05-13', 'Phoenix Publishing House', 810, 'in-stock', '96157download (18).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart_itemgr6`
--

DROP TABLE IF EXISTS `cart_itemgr6`;
CREATE TABLE `cart_itemgr6` (
  `cart_id` int(255) NOT NULL,
  `title_of_the_book` varchar(255) NOT NULL,
  `grade_level` varchar(255) NOT NULL,
  `date_of_published` date NOT NULL,
  `author` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `stock_status` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_itemgr6`
--

INSERT INTO `cart_itemgr6` (`cart_id`, `title_of_the_book`, `grade_level`, `date_of_published`, `author`, `price`, `stock_status`, `images`) VALUES
(2, 'Science for Smart Learners', 'grade6', '2023-05-13', 'Diwa Publishing', 820, 'out-of-stock', '85326science_book_for_grade_6__scie_1666832883_94f66527.jpg'),
(3, 'Realistic Math', 'grade6', '2023-05-13', 'Phoenix Publishing House', 765, 'in-stock', '21713realistic_math_scaling_greater_1599906075_19459b28.jpg'),
(4, 'English This Way', 'grade6', '2023-05-13', 'Phoenix Publishing House', 650, 'in-stock', '84016images.jpg'),
(5, 'Across Borders through Reading', 'grade6', '2023-05-13', 'Vibal Publishing House', 700, 'in-stock', '70971preloved_across_borders_throug_1621489046_ce5be839_progressive.jpg'),
(6, 'Pinagyamang Pluma', 'grade6', '2023-05-13', 'Phoenix Publishing House', 740, 'in-stock', '91110download (19).jpg'),
(7, 'Gawi (ESP)', 'grade6', '2023-05-13', 'Abiva publishing', 335, 'in-stock', '79995download (20).jpg'),
(8, 'Masiglang Pamumuhay para sa kinabukasan', 'grade6', '2023-05-13', 'Phoenix Publishing House', 330, 'in-stock', '27195grade_6__k12__books__ap__masiglang_pamumuhay_para_sa_kinabukasan_1562592203_d860ecc00.jpg'),
(9, 'Living with Music, Art, Physical Education and Health', 'grade6', '2023-05-13', 'Vibal Publishing House', 670, 'in-stock', '84318download (21).jpg'),
(10, 'Kultura, Kasaysayan at Kabuhayan', 'grade6', '2023-05-13', 'Vibal Publishing House', 600, 'in-stock', '92805download (22).jpg'),
(11, 'Computers for Digital Learners 2022', 'grade6', '2023-05-13', 'Phoenix Publishing House', 810, 'in-stock', '887977cef59f59d6f6f594dfb4f2d08f559ac.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart_itemhs`
--

DROP TABLE IF EXISTS `cart_itemhs`;
CREATE TABLE `cart_itemhs` (
  `cartid_hs` int(255) NOT NULL,
  `title_of_the_bookHS` varchar(255) NOT NULL,
  `date_of_publishedHS` date NOT NULL,
  `highschool_level` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `prices` int(255) NOT NULL,
  `stock_status` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_itemhs`
--

INSERT INTO `cart_itemhs` (`cartid_hs`, `title_of_the_bookHS`, `date_of_publishedHS`, `highschool_level`, `author`, `prices`, `stock_status`, `images`) VALUES
(9, 'Science for Innovative Minds', '2023-05-14', 'grade7', 'Diwa Publishing', 920, 'out-of-stock', '83923science_for_innovative_minds_f_1660354344_13186100.jpg'),
(10, 'Exploring Life Through Science, Lab Manual', '2023-05-14', 'grade7', 'Phoenix Publishing House', 270, 'in-stock', '66091exploring_life_through_science_new_grade_7_science_laboratory_manual_phoenix_publishing_house_1577639947_88f1df67.jpg'),
(11, 'Math for the 21st Century Learners', '2023-05-14', 'grade7', 'Phoenix Publishing House', 865, 'in-stock', '1567015180cc84b2706a4bf887b2f2b1f413e.jpg'),
(12, 'Basic Probability And Statistics: A Step-by-Step Approach', '2023-05-14', 'grade7', 'Mindshapers Publishing', 345, 'in-stock', '6682397.jpg'),
(13, 'English Communication Arts and Skills Through Philippine Literatures, 8th Edition', '2023-05-14', 'grade7', 'Phoenix Publishing House', 570, 'in-stock', '468622f326e3b4f0f5a75250c1d03eb6195ca.jpg'),
(14, 'Pinagyamang Pluma, Ikalawang Edisyon', '2023-05-14', 'grade7', 'Phoenix Publishing House', 880, 'in-stock', '32590ikalawang_edisyon_pinagyamang__1628672064_985353bb_progressive.jpg'),
(15, 'Pagtugon sa Hamon ng Kasaysayan', '2023-05-14', 'grade7', 'Diwa Publishing', 920, 'in-stock', '34116grade_7_books_1658475206_809acce5_progressive.jpg'),
(16, 'The 21st Century MAPEH in Action', '2023-05-14', 'grade7', 'Rex Bookstore', 600, 'in-stock', '75990grade_7_mapeh_in_action_1596943150_3b5bae37_progressive.jpg'),
(17, 'Cookery, Exploratory Module', '2023-05-14', 'grade7', 'Phoenix Publishing House', 335, 'in-stock', '70279c84e1d30c2ee84b0d6400d4678bb2133.jpg'),
(18, 'Office Productivity 2013', '2023-05-14', 'grade7', 'ㅤ', 700, 'in-stock', '60354203704_239223891_069b26a8.jpg'),
(19, 'ICT Tools for Today, High School Series COmputers for Digital Learners Office Productivity', '2023-05-14', 'grade7', 'Phoenix Publishing House', 635, 'in-stock', '2418732e105bc5e3f442fa918010c90fc409a.jpg'),
(20, 'Edukasyon sa Pagpapakatao', '2023-05-14', 'grade7', 'Vibal Publishing House', 470, 'in-stock', '64417download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart_itemhs8`
--

DROP TABLE IF EXISTS `cart_itemhs8`;
CREATE TABLE `cart_itemhs8` (
  `cartid_hs` int(255) NOT NULL,
  `title_of_the_bookHS` varchar(255) NOT NULL,
  `date_of_publishedHS` date NOT NULL,
  `highschool_level` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `prices` int(255) NOT NULL,
  `stock_status` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_itemhs8`
--

INSERT INTO `cart_itemhs8` (`cartid_hs`, `title_of_the_bookHS`, `date_of_publishedHS`, `highschool_level`, `author`, `prices`, `stock_status`, `images`) VALUES
(2, 'Science for Innovative Minds', '2023-05-14', 'grade8', 'Diwa Publishing', 920, 'out-of-stock', '95647download (1).jpg'),
(3, 'Exploring Life Through Science, Lab Manual', '2023-05-14', 'grade8', 'Phoenix Publishing House', 310, 'in-stock', '39494exploring_life_through_science_new_grade_8_science_laboratory_manual_phoenix_publishing_house_1577640060_d658de81.jpg'),
(4, 'Realistic Math', '2023-05-14', 'grade8', 'Phoenix Publishing House', 730, 'in-stock', '3781346609c5d946d25f8d99102dbea77e9bd.jpg'),
(5, 'English Communication Arts and Skills Through Philippine Literatures, 8th Edition', '2023-05-14', 'grade8', 'Phoenix Publishing House', 590, 'in-stock', '37948download (2).jpg'),
(6, 'Pinagyamang Pluma, Ikalawang Edisyon', '2023-05-14', 'grade8', 'Phoenix Publishing House', 740, 'in-stock', '25071pinagyamang_pluma_8_ikalawang__1660022285_39320bf5.jpg'),
(7, 'Pagtugon sa Hamon ng Kasaysayan', '2023-05-14', 'grade8', 'Diwa Publishing', 920, 'in-stock', '53695download (3).jpg'),
(8, 'The 21st Century MAPEH in Action', '2023-05-14', 'grade8', 'Rex Bookstore', 600, 'in-stock', '62588download (4).jpg'),
(9, 'Technology and Livelihood Education, Front office Services', '2023-05-14', 'grade8', 'Phoenix Publishing House', 320, 'in-stock', '219197906401151cee3748eb5276806ba870d.jpg'),
(10, 'Understanding PC Hardware', '2023-05-14', 'grade8', 'ㅤ', 700, 'in-stock', '13430computer_book_understanding_pc_1620877217_06f6ef21.jpg'),
(11, 'Edukasyon sa Pagpapakatao', '2023-05-14', 'grade8', 'Vibal Publishing House', 486, 'in-stock', '72602874b9c716c3a0efa664808ef0b557100.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart_itemhs9`
--

DROP TABLE IF EXISTS `cart_itemhs9`;
CREATE TABLE `cart_itemhs9` (
  `cartid_hs` int(255) NOT NULL,
  `title_of_the_bookHS` varchar(255) NOT NULL,
  `date_of_publishedHS` date NOT NULL,
  `highschool_level` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `prices` int(255) NOT NULL,
  `stock_status` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_itemhs9`
--

INSERT INTO `cart_itemhs9` (`cartid_hs`, `title_of_the_bookHS`, `date_of_publishedHS`, `highschool_level`, `author`, `prices`, `stock_status`, `images`) VALUES
(2, 'Science for Innovative Minds', '2023-05-14', 'grade9', 'Diwa Publishing', 920, 'out-of-stock', '61886science_for_innovative_minds_g_1660284755_b7908912_progressive.jpg'),
(3, 'Exploring Life Through Science, Lab Manual', '2023-05-14', 'grade9', 'Phoenix Publishing House', 345, 'in-stock', '55706grade_9_exploring_life_through_science_laboratory_manual_1567554115_827add260.jpg'),
(4, 'Realistic Math', '2023-05-14', 'grade9', 'Phoenix Publishing House', 730, 'in-stock', '31314realistic_math_9_1598325351_c7134f46.jpg'),
(5, 'English Communication Arts and Skills Through Philippine Literatures, 8th Edition', '2023-05-14', 'grade9', 'Phoenix Publishing House', 665, 'in-stock', '41875ecas_english_communication_art_1615978094_231c46af.jpg'),
(6, 'Skill Builders for Efficient Reading', '2023-05-14', 'grade9', 'Phoenix Publishing House', 570, 'in-stock', '90825203704_239223896_8bd5a652.jpg'),
(7, 'Pinagyamang Pluma, Ikalawang Edisyon', '2023-05-14', 'grade9', 'Phoenix Publishing House', 1105, 'in-stock', '33573download (5).jpg'),
(8, 'Pagtugon sa Hamon ng Kasaysayan', '2023-05-14', 'grade9', 'Diwa Publishing', 920, 'in-stock', '95961download (6).jpg'),
(9, 'The 21st Century MAPEH in Action', '2023-05-14', 'grade9', 'Rex Bookstore', 600, 'in-stock', '54915grade_9_exploring_life_through_science_laboratory_manual_1567554115_827add260.jpg'),
(10, 'TLE Cookery 9,K-to-12 complient', '2023-05-14', 'grade9', 'The Library Publishing House', 365, 'in-stock', '63118695a80a47fa2cd4c5db08c8b1ffd1c53.jpg'),
(11, 'Front Office Services, TLE-TVL Series', '2023-05-14', 'grade9', 'Phoenix Publishing House', 335, 'in-stock', '92263front-office-services-9-to-12-768x1169-1.png'),
(12, 'Computer Hardware Servicing, TLE-TVL Series', '2023-05-14', 'grade9', 'ㅤ', 335, 'in-stock', '296657d8e5ff767b1f032416e19165d84c5a1.jpg'),
(13, 'Animation and Multimedia Window Movie Maker', '2023-05-14', 'grade9', 'Learning Publication', 700, 'in-stock', '15464shs_book_visual_guide_animatio_1628408175_a7ad85c5.jpg'),
(14, 'Edukasyon sa Pagpapakatao', '2023-05-14', 'grade9', 'Vibal Publishing House', 490, 'in-stock', '90694grade_8_edukasyon_ng_pagpapaka_1618210565_624391c8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart_itemhs10`
--

DROP TABLE IF EXISTS `cart_itemhs10`;
CREATE TABLE `cart_itemhs10` (
  `cartid_hs` int(255) NOT NULL,
  `title_of_the_bookHS` varchar(255) NOT NULL,
  `date_of_publishedHS` date NOT NULL,
  `highschool_level` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `prices` int(255) NOT NULL,
  `stock_status` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_itemhs10`
--

INSERT INTO `cart_itemhs10` (`cartid_hs`, `title_of_the_bookHS`, `date_of_publishedHS`, `highschool_level`, `author`, `prices`, `stock_status`, `images`) VALUES
(2, 'Science for Innovative Minds', '2023-05-14', 'grade10', 'Diwa Publishing', 920, 'out-of-stock', '82251download (7).jpg'),
(3, 'Exploring Life Through Science, Lab Manual', '2023-05-14', 'grade10', 'Phoenix Publishing House', 380, 'in-stock', '54685download (8).jpg'),
(4, 'English Communication Arts and Skills Through Philippine Literatures, 8th Edition', '2023-05-14', 'grade10', 'Phoenix Publishing House', 665, 'in-stock', '30599download (9).jpg'),
(5, 'Skill Builders for Efficient Reading', '2023-05-14', 'grade10', 'Phoenix Publishing House', 570, 'in-stock', '44926grade_10_books_science_mapeh_e_1629805567_6e5b245f_progressive.jpg'),
(6, 'Pinagyamang Pluma, Ikalawang Edisyon', '2023-05-14', 'grade10', 'Phoenix Publishing House', 980, 'in-stock', '23910grade_10_pinagyamang_pluma_akl_1595675672_4081353e_progressive.jpg'),
(7, 'Pagtugon sa Hamon ng Kasaysayan', '2023-05-14', 'grade10', 'Diwa Publishing', 920, 'in-stock', '76158download (10).jpg'),
(8, 'The 21st Century MAPEH in Action', '2023-05-14', 'grade10', 'Rex Bookstore', 600, 'in-stock', '71717download (11).jpg'),
(9, 'TLE Cookery 10,K-to-12 complient', '2023-05-14', 'grade10', 'St. Bernadette Publishing', 370, 'in-stock', '98774grade_10_tle_textbook_and_apso_1600968653_7355293c_progressive.jpg'),
(10, 'Local Guiding Services, TLE-TVL Series', '2023-05-14', 'grade10', 'Phoenix Publishing House', 530, 'in-stock', '63804local-guiding-services.png'),
(11, 'Computer System Servicing 3: PC Troubleshooting with Basic Computer', '2023-05-14', 'grade10', 'Cal Publishing', 530, 'in-stock', '53703computer_systems_servicing_3_1644833882_4aa02a38_progressive.jpg'),
(12, '2D Animations, TLE-TVL Series', '2023-05-14', 'grade10', 'Phoenix Publishing House', 380, 'in-stock', '50245animation_tletvl_book_1636263042_cebc8daa_progressive.jpg'),
(13, 'Edukasyon sa Pagpapakatao', '2023-05-14', 'grade10', 'Vibal Publishing House', 510, 'in-stock', '59653download (12).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `checkout_item`
--

DROP TABLE IF EXISTS `checkout_item`;
CREATE TABLE `checkout_item` (
  `Reference_No` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `cart_id` int(255) NOT NULL,
  `title_of_the_book` varchar(255) NOT NULL,
  `dates_of_purchase` date NOT NULL,
  `total` int(255) NOT NULL,
  `grade_level` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout_item`
--

INSERT INTO `checkout_item` (`Reference_No`, `fullname`, `cart_id`, `title_of_the_book`, `dates_of_purchase`, `total`, `grade_level`, `order_status`) VALUES
(13303, 'user', 87, 'Realistic Math', '2023-05-19', 775, 'grade1', 'Claimed'),
(13304, 'John Loyd M. Ytang', 89, 'Exercises for Better Penmanship', '2023-05-20', 435, 'grade1', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `checkout_itemhs`
--

DROP TABLE IF EXISTS `checkout_itemhs`;
CREATE TABLE `checkout_itemhs` (
  `Reference_No` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `cartid_hs` int(255) NOT NULL,
  `title_of_the_bookHS` varchar(255) NOT NULL,
  `highschool_level` varchar(255) NOT NULL,
  `dates_of_purchase` date NOT NULL,
  `total` int(255) NOT NULL,
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout_itemhs`
--

INSERT INTO `checkout_itemhs` (`Reference_No`, `fullname`, `cartid_hs`, `title_of_the_bookHS`, `highschool_level`, `dates_of_purchase`, `total`, `order_status`) VALUES
(30, 'user', 3, 'Exploring Life Through Science, Lab Manual', 'grade9', '2023-05-19', 1740, 'Pending'),
(33, 'John Loyd M. Ytang', 3, 'Exploring Life Through Science, Lab Manual', 'grade9', '2023-05-19', 345, 'Claimed'),
(34, 'John Loyd M. Ytang', 4, 'English Communication Arts and Skills Through Philippine Literatures, 8th Edition', 'grade10', '2023-05-20', 665, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

DROP TABLE IF EXISTS `user_form`;
CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passwords` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `phonenumber` bigint(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `fullname`, `email`, `passwords`, `user_type`, `phonenumber`, `images`) VALUES
(6, 'admin', 'admin@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'admin', 9287505435, '77163680971.jpg'),
(11, 'user', 'user@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'user', 9287505435, '48630desktop-1680x1050.jpg'),
(16, 'John Loyd M. Ytang', 'ytangjohnloyd@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', 'user', 9287505435, '95331desktop-1680x1050.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `cart_itemgr2`
--
ALTER TABLE `cart_itemgr2`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `cart_itemgr3`
--
ALTER TABLE `cart_itemgr3`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `cart_itemgr4`
--
ALTER TABLE `cart_itemgr4`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `cart_itemgr5`
--
ALTER TABLE `cart_itemgr5`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `cart_itemgr6`
--
ALTER TABLE `cart_itemgr6`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `cart_itemhs`
--
ALTER TABLE `cart_itemhs`
  ADD PRIMARY KEY (`cartid_hs`);

--
-- Indexes for table `cart_itemhs8`
--
ALTER TABLE `cart_itemhs8`
  ADD PRIMARY KEY (`cartid_hs`);

--
-- Indexes for table `cart_itemhs9`
--
ALTER TABLE `cart_itemhs9`
  ADD PRIMARY KEY (`cartid_hs`);

--
-- Indexes for table `cart_itemhs10`
--
ALTER TABLE `cart_itemhs10`
  ADD PRIMARY KEY (`cartid_hs`);

--
-- Indexes for table `checkout_item`
--
ALTER TABLE `checkout_item`
  ADD PRIMARY KEY (`Reference_No`);

--
-- Indexes for table `checkout_itemhs`
--
ALTER TABLE `checkout_itemhs`
  ADD PRIMARY KEY (`Reference_No`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `cart_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `cart_itemgr2`
--
ALTER TABLE `cart_itemgr2`
  MODIFY `cart_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cart_itemgr3`
--
ALTER TABLE `cart_itemgr3`
  MODIFY `cart_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cart_itemgr4`
--
ALTER TABLE `cart_itemgr4`
  MODIFY `cart_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cart_itemgr5`
--
ALTER TABLE `cart_itemgr5`
  MODIFY `cart_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cart_itemgr6`
--
ALTER TABLE `cart_itemgr6`
  MODIFY `cart_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cart_itemhs`
--
ALTER TABLE `cart_itemhs`
  MODIFY `cartid_hs` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `cart_itemhs8`
--
ALTER TABLE `cart_itemhs8`
  MODIFY `cartid_hs` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cart_itemhs9`
--
ALTER TABLE `cart_itemhs9`
  MODIFY `cartid_hs` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cart_itemhs10`
--
ALTER TABLE `cart_itemhs10`
  MODIFY `cartid_hs` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `checkout_item`
--
ALTER TABLE `checkout_item`
  MODIFY `Reference_No` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13305;

--
-- AUTO_INCREMENT for table `checkout_itemhs`
--
ALTER TABLE `checkout_itemhs`
  MODIFY `Reference_No` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
