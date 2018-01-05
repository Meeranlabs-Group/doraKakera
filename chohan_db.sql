-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2018 at 08:45 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chohan_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `block`
--

CREATE TABLE `block` (
  `id` int(10) UNSIGNED NOT NULL,
  `phase_id` int(11) NOT NULL,
  `block_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `block`
--

INSERT INTO `block` (`id`, `phase_id`, `block_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'DHA Phase 1 - Block A', NULL, NULL),
(2, 1, 'DHA Phase 1 - Block B', NULL, NULL),
(3, 1, 'DHA Phase 1 - Block C', NULL, NULL),
(4, 1, 'DHA Phase 1 - Block D', NULL, NULL),
(5, 1, 'DHA Phase 1 - Block E', NULL, NULL),
(6, 1, 'DHA Phase 1 - Block F', NULL, NULL),
(7, 1, 'DHA Phase 1 - Block G', NULL, NULL),
(8, 1, 'DHA Phase 1 - Block H', NULL, NULL),
(9, 1, 'DHA Phase 1 - Block J', NULL, NULL),
(10, 1, 'DHA Phase 1 - Block K', NULL, NULL),
(11, 1, 'DHA Phase 1 - Block L', NULL, NULL),
(12, 1, 'DHA Phase 1 - Block M', NULL, NULL),
(13, 1, 'DHA Phase 1 - Block N', NULL, NULL),
(14, 1, 'DHA Phase 1 - Block P', NULL, NULL),
(15, 2, 'DHA Phase 2 - Block S', NULL, NULL),
(16, 2, 'DHA Phase 2 - Block S', NULL, NULL),
(17, 2, 'DHA Phase 2 - Block Q', NULL, NULL),
(18, 2, 'DHA Phase 2 - Block R', NULL, NULL),
(19, 2, 'DHA Phase 2 - Block T', NULL, NULL),
(20, 2, 'DHA Phase 2 - Block U', NULL, NULL),
(21, 2, 'DHA Phase 2 - Block V', NULL, NULL),
(22, 3, 'DHA Phase 3 - Block W', NULL, NULL),
(23, 3, 'DHA Phase 3 - Block X', NULL, NULL),
(24, 3, 'DHA Phase 3 - Block XX', NULL, NULL),
(25, 3, 'DHA Phase 3 - Block Y', NULL, NULL),
(26, 3, 'DHA Phase 3 - Block Z', NULL, NULL),
(27, 4, 'DHA Phase 4 - Block AA', NULL, NULL),
(28, 4, 'DHA Phase 4 - Block BB', NULL, NULL),
(29, 4, 'DHA Phase 4 - Block CC', NULL, NULL),
(30, 4, 'DHA Phase 4 - Block DD', NULL, NULL),
(31, 4, 'DHA Phase 4 - Block EE', NULL, NULL),
(32, 4, 'DHA Phase 4 - Block FF', NULL, NULL),
(33, 4, 'DHA Phase 4 - Block GG', NULL, NULL),
(34, 4, 'DHA Phase 4 - Block HH', NULL, NULL),
(35, 4, 'DHA Phase 4 - Block JJ', NULL, NULL),
(36, 4, 'DHA Phase 4 - Block CC', NULL, NULL),
(37, 5, 'DHA Phase 5 - Block A', NULL, NULL),
(38, 5, 'DHA Phase 5 - Block B', NULL, NULL),
(39, 5, 'DHA Phase 5 - Block C', NULL, NULL),
(40, 5, 'DHA Phase 5 - Block D', NULL, NULL),
(41, 5, 'DHA Phase 5 - Block E', NULL, NULL),
(42, 5, 'DHA Phase 5 - Block F', NULL, NULL),
(43, 5, 'DHA Phase 5 - Block G', NULL, NULL),
(44, 5, 'DHA Phase 5 - Block H', NULL, NULL),
(45, 5, 'DHA Phase 5 - Block J', NULL, NULL),
(46, 5, 'DHA Phase 5 - Block K', NULL, NULL),
(47, 5, 'DHA Phase 5 - Block L', NULL, NULL),
(48, 5, 'DHA Phase 5 - Block M', NULL, NULL),
(49, 5, 'DHA Phase 5 - CCA Block', NULL, NULL),
(50, 5, 'Penta Square By DHA Lahore', NULL, NULL),
(51, 6, 'DHA Phase 6 - Block A', NULL, NULL),
(52, 6, 'DHA Phase 6 - Block B', NULL, NULL),
(53, 6, 'DHA Phase 6 - Block C', NULL, NULL),
(54, 6, 'DHA Phase 6 - Block D', NULL, NULL),
(55, 6, 'DHA Phase 6 - Block E', NULL, NULL),
(56, 6, 'DHA Phase 6 - Block F', NULL, NULL),
(57, 6, 'DHA Phase 6 - Block G', NULL, NULL),
(58, 6, 'DHA Phase 6 - Block H', NULL, NULL),
(59, 6, 'DHA Phase 6 - Block J', NULL, NULL),
(60, 6, 'DHA Phase 6 - Block K', NULL, NULL),
(61, 6, 'DHA Phase 6 - Block L', NULL, NULL),
(62, 6, 'DHA Phase 6 - Block M', NULL, NULL),
(63, 6, 'DHA Phase 6 - Block N', NULL, NULL),
(64, 6, 'DHA Phase 6 - CCA 2 Block', NULL, NULL),
(65, 6, 'DHA Phase 6 - CCA Block', NULL, NULL),
(66, 6, 'DHA Phase 6 - Main Boulevard', NULL, NULL),
(67, 7, 'DHA Phase 7 - Block P', NULL, NULL),
(68, 7, 'DHA Phase 7 - Block Q', NULL, NULL),
(69, 7, 'DHA Phase 7 - Block R', NULL, NULL),
(70, 7, 'DHA Phase 7 - Block S', NULL, NULL),
(71, 7, 'DHA Phase 7 - Block T', NULL, NULL),
(72, 7, 'DHA Phase 7 - Block U', NULL, NULL),
(73, 7, 'DHA Phase 7 - Block V', NULL, NULL),
(74, 7, 'DHA Phase 7 - Block W', NULL, NULL),
(75, 7, 'DHA Phase 7 - Block X', NULL, NULL),
(76, 7, 'DHA Phase 7 - Block Y', NULL, NULL),
(77, 7, 'DHA Phase 7 - Block Z', NULL, NULL),
(78, 7, 'DHA Phase 7 - Block Z1', NULL, NULL),
(79, 7, 'DHA Phase 7 - Block Z2', NULL, NULL),
(80, 7, 'DHA Phase 7 - CCA 1', NULL, NULL),
(81, 7, 'DHA Phase 7 - CCA 2', NULL, NULL),
(82, 7, 'DHA Phase 7 - CCA 3', NULL, NULL),
(83, 7, 'DHA Phase 7 - CCA 4', NULL, NULL),
(84, 8, 'DHA Phase 8 Proper', NULL, NULL),
(85, 8, 'DHA Phase 8 - Block S', NULL, NULL),
(86, 8, 'DHA Phase 8 - Block T', NULL, NULL),
(87, 8, 'DHA Phase 8 - Block U', NULL, NULL),
(88, 8, 'DHA Phase 8 - Block V', NULL, NULL),
(89, 8, 'DHA Phase 8 - Block W', NULL, NULL),
(90, 8, 'DHA Phase 8 - Block X', NULL, NULL),
(91, 8, 'DHA Phase 8 - Block Y', NULL, NULL),
(92, 8, 'DHA Phase 8 - Block Z1', NULL, NULL),
(93, 8, 'DHA Phase 8 - Block Z2', NULL, NULL),
(94, 8, 'DHA Phase 8 - Block Z3', NULL, NULL),
(95, 8, 'DHA Phase 8 - Block Z4', NULL, NULL),
(96, 8, 'DHA Phase 8 - Block Z5', NULL, NULL),
(97, 8, 'DHA Phase 8 - Block Z', NULL, NULL),
(98, 8, 'DHA Phase Park View - Block A', NULL, NULL),
(99, 8, 'DHA Phase Park View - Block B', NULL, NULL),
(100, 8, 'DHA Phase 8 Park View - Block C', NULL, NULL),
(101, 8, 'DHA Phase 8 Park View - Block D', NULL, NULL),
(102, 8, 'DHA Phase 8 Park View - Block E', NULL, NULL),
(103, 8, 'DHA Phase 8 Air Avenue', NULL, NULL),
(104, 8, 'DHA Phase 8 Air Avenue â€“ Block L', NULL, NULL),
(105, 8, 'DHA Phase 8 Air Avenue â€“ Block M', NULL, NULL),
(106, 8, 'DHA Phase 8 Air Avenue â€“ Block N', NULL, NULL),
(107, 8, 'DHA Phase 8 Air Avenue â€“ Block P', NULL, NULL),
(108, 8, 'DHA Phase 8 Air Avenue â€“ Block Q', NULL, NULL),
(109, 8, 'DHA Phase 8 Air Avenue â€“ Block R', NULL, NULL),
(110, 8, 'Phase 8 - CCA 1', NULL, NULL),
(111, 8, 'Phase 8 - CCA 1', NULL, NULL),
(112, 8, 'Phase 8 Broadway - A', NULL, NULL),
(113, 8, 'Phase 8 Broadway - B', NULL, NULL),
(114, 8, 'Phase 8 Broadway - C', NULL, NULL),
(115, 8, 'Phase 8 Broadway - D', NULL, NULL),
(116, 9, 'DHA 9 Town - Block A', NULL, NULL),
(117, 9, 'DHA 9 Town - Block D', NULL, NULL),
(118, 9, 'DHA 9 Town - Block C', NULL, NULL),
(119, 9, 'DHA 9 Town - Block B', NULL, NULL),
(120, 9, 'DHA 9 Town - Block E', NULL, NULL),
(121, 9, 'DHA 9 Town â€“ CCA', NULL, NULL),
(122, 9, 'DHA Phase 9 Prism - Block J', NULL, NULL),
(123, 9, 'DHA Phase 9 Prism - Block F', NULL, NULL),
(124, 9, 'DHA Phase 9 Prism - Block R', NULL, NULL),
(125, 9, 'DHA Phase 9 Prism - Block C', NULL, NULL),
(126, 9, 'DHA Phase 9 Prism - Block K', NULL, NULL),
(127, 9, 'DHA Phase 9 Prism - Block D', NULL, NULL),
(128, 9, 'DHA Phase 9 Prism - Block A', NULL, NULL),
(129, 9, 'DHA Phase 9 Prism - Block H', NULL, NULL),
(130, 9, 'DHA Phase 9 Prism - Block P', NULL, NULL),
(131, 9, 'DHA Phase 9 Prism - Block M', NULL, NULL),
(132, 9, 'DHA Phase 9 Prism - Block L', NULL, NULL),
(133, 9, 'DHA Phase 9 Prism - Block Q', NULL, NULL),
(134, 9, 'DHA Phase 9 Prism - Block G', NULL, NULL),
(135, 9, 'DHA Phase 9 Prism - Block N', NULL, NULL),
(136, 9, 'DHA Phase 9 Prism - Block E', NULL, NULL),
(137, 9, 'DHA Phase 9 Prism - Block B', NULL, NULL),
(138, 9, 'DHA Phase 9 Prism - Oval Complex', NULL, NULL),
(139, 9, 'DHA Phase 9 Prism â€“ Commercial Zone 1', NULL, NULL),
(140, 9, 'DHA Phase 9 Prism â€“ Commercial Zone 2', NULL, NULL),
(141, 9, 'DHA Phase 9 Prism â€“ Commercial Zone 3', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `title`, `description`, `path`, `status`, `created_at`, `updated_at`) VALUES
(1, '3', 'HALY Tower a Project Chohan Estate', 'HALY Tower\r\nChohan Estate proudly presents ” The HALY TOWER“https://www.facebook.com/ChohanEstatePk/\r\n12 story commercial complex of DHA which is the\r\nheart beat of DHA Commercial property.\r\n\r\nAbout\r\n\r\nDHA Haly Tower Lahore is a complete eleven-story commercial complex in the heart of Lahore Defence area known to be the posh area in the province of Punjab. The project DHA Haly Tower is now 95% complete and is about to open for business on ground, first, second and third floor for shopping and food court area. Offices are almost complete to take possession, Now its your turn to open your own lavish offices/business centers in the heart of DHA.\r\n\r\nSo do not waste your single minute and make us a call as the units are in limited quantity and are available on first come first serve basis.\r\n\r\nThe project is comprised of four basements parking to accommodate over 300 to 400 cars. Ground, First and Second floor for a state of the art shopping mall and nine stories will be utilized for offices. The DHA Haly Tower has become a high rise landmark in the city of Lahore.\r\n\r\n \r\n\r\nFOR BOOKING DETAILS:\r\n0302-8 444 706\r\n0321-9 124 124\r\n\r\n#UAN: 042 111 124 124\r\n042 111 125 125\r\n\r\n \r\n\r\nHALY Tower\r\nChohan Estate proudly presents ” The HALY TOWER“https://www.facebook.com/ChohanEstatePk/\r\n12 story commercial complex of DHA which is the\r\nheart beat of DHA Commercial property.\r\n\r\nAbout\r\n\r\nDHA Haly Tower Lahore is a complete eleven-story commercial complex in the heart of Lahore Defence area known to be the posh area in the province of Punjab. The project DHA Haly Tower is now 95% complete and is about to open for business on ground, first, second and third floor for shopping and food court area. Offices are almost complete to take possession, Now its your turn to open your own lavish offices/business centers in the heart of DHA.\r\n\r\nSo do not waste your single minute and make us a call as the units are in limited quantity and are available on first come first serve basis.\r\n\r\nThe project is comprised of four basements parking to accommodate over 300 to 400 cars. Ground, First and Second floor for a state of the art shopping mall and nine stories will be utilized for offices. The DHA Haly Tower has become a high rise landmark in the city of Lahore.\r\n\r\n \r\n\r\nFOR BOOKING DETAILS:\r\n0302-8 444 706\r\n0321-9 124 124\r\n\r\n#UAN: 042 111 124 124\r\n042 111 125 125\r\n\r\n \r\n\r\nHALY Tower\r\nChohan Estate proudly presents ” The HALY TOWER“https://www.facebook.com/ChohanEstatePk/\r\n12 story commercial complex of DHA which is the\r\nheart beat of DHA Commercial property.\r\n\r\nAbout\r\n\r\nDHA Haly Tower Lahore is a complete eleven-story commercial complex in the heart of Lahore Defence area known to be the posh area in the province of Punjab. The project DHA Haly Tower is now 95% complete and is about to open for business on ground, first, second and third floor for shopping and food court area. Offices are almost complete to take possession, Now its your turn to open your own lavish offices/business centers in the heart of DHA.\r\n\r\nSo do not waste your single minute and make us a call as the units are in limited quantity and are available on first come first serve basis.\r\n\r\nThe project is comprised of four basements parking to accommodate over 300 to 400 cars. Ground, First and Second floor for a state of the art shopping mall and nine stories will be utilized for offices. The DHA Haly Tower has become a high rise landmark in the city of Lahore.\r\n\r\n \r\n\r\nFOR BOOKING DETAILS:\r\n0302-8 444 706\r\n0321-9 124 124\r\n\r\n#UAN: 042 111 124 124\r\n042 111 125 125\r\n\r\n \r\n\r\nChohan Estate proudly presents ” The HALY TOWER“https://www.facebook.com/ChohanEstatePk/\r\n12 story commercial complex of DHA which is the\r\nheart beat of DHA Commercial property.\r\n\r\nAbout\r\n\r\nDHA Haly Tower Lahore is a complete eleven-story commercial complex in the heart of Lahore Defence area known to be the posh area in the province of Punjab. The project DHA Haly Tower is now 95% complete and is about to open for business on ground, first, second and third floor for shopping and food court area. Offices are almost complete to take possession, Now its your turn to open your own lavish offices/business centers in the heart of DHA.\r\n\r\nSo do not waste your single minute and make us a call as the units are in limited quantity and are available on first come first serve basis.\r\n\r\nThe project is comprised of four basements parking to accommodate over 300 to 400 cars. Ground, First and Second floor for a state of the art shopping mall and nine stories will be utilized for offices. The DHA Haly Tower has become a high rise landmark in the city of Lahore.', 'HALY Tower a Project Chohan Estate\\22550170_1597121747069032_5320681864211488699_o.jpg', 0, '2018-01-05 01:06:11', '2018-01-05 01:06:11'),
(2, '3', 'The Reality Behind Properties of Gwadar', 'The Reality Behind Properties of Gwadar\r\n Posted on October 4, 2017  By adeel-afzal  Categories: Blog Comments are off for this post\r\nMaster Plan of Gwadar\r\nThe master plan of Gwadar has been redesigned by GDA under the supervision of Chinese govt. where it is expected that 30 percent of the land would be utilized for industrial use and 70 percent would be located for residential and other commercial activities. The topographic survey has been completed and issuance of master plan is expected in the next 3 to 5 month.\r\n\r\n\r\n\r\nSinghar Housing Society\r\nThe core question of this blog is that how Pakistani investor can secure a good deal in Gwadar and multiply their investment in sense of returns. Some major residential options are Singhar Housing society and New Town. You can even build your own houses there and rent them out on good rates. The current rates are as follow:\r\n\r\nSinghar Housing Society phase 1\r\nEdit\r\nSize	Price\r\n500 sq. yard	40 lac - 45 lac\r\n600 sq. yard	45 lac -55 lac\r\n1000 sq. yard	65 lac -80 lac\r\nSinghar Housing Society phase 2\r\nEdit\r\nSize	Price\r\n500 sq. yard	26 lac\r\n600 sq. yard	30 lac\r\n1000 sq. yard	50-55 lac\r\nSinghar Housing Society Phase 3\r\nEdit\r\nSize	Price\r\n500 sq. yard	28-30 lac\r\n600 sq. yard	30-35 lac\r\n1000 sq. yard	50-60 lac\r\nSinghar phase 4 commercial\r\nEdit\r\nSize	Price\r\n1000 sq. yard	180 to 250 lac\r\n2000 sq. yard	325 to 450 lac\r\n1 acre	500 lac\r\n3 acre	1500 lac\r\n5 acre	2500 lac\r\nEntertainment and Services\r\nMarine drive seems to be the ideal option for ‘entertainment and services’ business in near future as it is facing to deep blue sea, which is suitable for beach resort and hoteling.\r\nGwadar has a very vast potential for hoteling industry as more and more people are arriving in Gwadar but there are very few options available in sense of hoteling and restaurants. If one can secure a good location right now, then big chances are there that he/she might get big profits in longer term.\r\n\r\nIndustrial Purpose in Gwadar\r\nGIEDA is best available option for industrial purpose in Gwadar. It is independent body under the supervision of GOVT and is linked with GDA in a large perspective. It offers 1 to 8 acres plots for industrial purpose. The prices of one acre plots are as below\r\n\r\nEdit\r\nSize	price\r\n1 acre	36 to 65 lac\r\n3 acre	150 to 250 lac\r\n5 acre	3000 to 500 lac\r\nDevelopment Activities\r\nThe development activities have been started along with reservoirs, road links and offices. By the end of 2018 it is expected to get in industrialist so they can start their work. Electricity has been there but the only issue is lack of water, which is very common in all over Gwadar and government has planned to establish the desalination plants for industrial and household usage in Gwadar.\r\n\r\nOpen land would be a good opportunity in Gwadar as it is much cheaper but contains high risks as well. You can buy land from 1 to 40lac depending upon the area along with front. There are few black sheep’s in the market who misguided the clients for their  own interests , which has built cast in the air as clients are unaware of local conditions. So they get trapped and local agents disappear. One has to make sure that only to deal with big houses because they are more inclined towards their reputation rather than money.\r\n\r\nGDA has suspended 17 NOCs of different societies in past one year due to their incompetence or deliberately late tactics. Before Investing you have to make sure that wherever you buy something it should have NOC from GDA and development work kicks off that is the Reality Behind Properties of Gwadar.', 'The Reality Behind Properties of Gwadar\\gwadar5-2.jpg', 0, '2018-01-05 01:13:02', '2018-01-05 01:13:02'),
(3, '3', 'Dream turns into reality at Gwadar', 'Dream turns into reality at Gwadar\r\n Posted on May 11, 2017  By adeel-afzal  Categories: Blog Comments are off for this post\r\nGwadar is a port city on the southwestern coast of Baluchistan Pakistan. The city is located on the shores of the Arabian Sea approximately 700 kilometers to the west of Pakistan’s largest city Karachi. Gwadar is near the border with Iran and is located to the east of the Persian Gulf and opposite Oman.\r\n\r\nOne belt one road is a development strategy started by the Chinese government in 2013. It refers to the New Silk Road Economic Belt, which will link China with Europe through Central and Western Asia, and the 21st Century Maritime Silk Road, which will connect China with Southeast Asian countries, Africa and Europe. Under china one belt one road trade policy known as CPEC in Pakistan it is the prime target of Chinese GOVT to enhance export and production capacity of northwestern Chinese provinces.\r\n\r\nXinjiang is the largest province in china and it exchanges its border with eight countries. Chinese government allocates 450 $ billion dollars funds for this province alone in next five years development plan\r\n\r\nAs dispute arises in South China Sea which is life line of Chinese export to the world china desperately required a second route in Indian Ocean to counter American influence in the region. Some 60% of the world’s oil is transported through the Strait of Hormuz Gulf of Oman and Persian Gulf. China is heavily dependent on Persian Gulf oil which passes through the Strait of Malacca all the way through the Indian and Pacific Oceans. Once the oil reaches China’s east coast ports, it is transported thousands of miles inland to western China. The Gwadar port   Karakoram Highway (KKH) route is safer, cheaper and shorter than transporting the oil by ocean tanker. Chinese goods flowing in the opposite direction will find an easier, shorter and secure route to the Middle East.\r\n\r\nGwadar has become a fundamental tool to fulfill the one belt one road (CPEC) dream. To keeping alive this dream china planned to invest 45 $ billion dollar in electricity and infrastructure Connective by road, railway and sea.\r\n\r\n\r\n\r\nChina trade volume with GCC (gulf cooperation council) is around 220 $ billion dollar. Having this perspective in mind one can easily imagine how it shift the paradigm of trade by using this route. Pakistan could collect billions from transit and levies fee.\r\n\r\n\r\n\r\nCPEC definitely gives boost to Chinese export and lower the production cost as per oil and gas pipeline start working most of the oil and gas goes to the Xinjiang the future financial hub northwestern china and the   Goods exported to the central Asian and European countries. Exports for Middle East and African countries will used Gwadar port at first stage with the passage of time Chinese firms will establish industries in Gwadar. So far so now limited auto, small ship making companies shown interest in Gwadar but time is not far away when mega companies will invest in Gwadar.\r\n\r\nThe Government of Pakistan is doing excellent job on its part to link the Gwadar port to the rest of the country and establishing basic necessities of life. So far few project like hospital, stadium has been functional, an international Air Port proposes to the master plan.\r\n\r\nThe second part of this blog would be based on investment opportunities for Pakistani people.', 'Dream turns into reality at Gwadar\\montage-kapalua-bay-maui-WBABEACH0417-2.jpg', 0, '2018-01-05 01:27:17', '2018-01-05 01:27:17'),
(4, '3', 'Disappointed amnesty for realestate', 'Disappointed amnesty for realestate\r\n Posted on March 15, 2017  By adeel-afzal  Categories: Blog Comments are off for this post\r\nDisappointed amnesty for realestate\r\nThe federal government is out of ideas as one can witness in amnesty scheme in 2016 where it looks like FBR dominate in policy making process though it has failed to check the nerves of real estate market. Prices have decreased around 15 to 20% and there is genuine buyer in the market though investor is a bit hesitant at this stage especially commercial plots.\r\nAccording to amnesty scheme “W236”, 2016 filler and non-filler has to pay 3% Difference between FBR value and DC rate value though filler can claim these 3 percent when he or she submit their return, question arises why GOVT include filler in this amnesty if one analysis across history of amnesty scheme across the globe at first it is the intention of any GOVT to make the economy documented and increase the tax net but they never include those people who are already in tax net.\r\nLast year GOVT was rest assures by increasing the value of plots they shall get maximum taxes but all went against GOVT interest and revenue collection fallen around 35%. Investors which were mostly overseas Pakistani dis-hoarded and moved to Dubai. As now Dubai has become the signatory of CRS common reporting standard it has become a bit complicated for the investor across the globe to invest blindly. Nonresident in Dubai can be asked about their tax status in their homeland.\r\nAccording to state bank report in last quarter of previous year a decline in remittance has been witness around the figure of 300$ million (30 billion rupees which is a big reason to worry for an economy where growth rate is around 4.5% it is dire need of GOVT to received remittance and taxes as much as it can. GOVT has to revisit its policies especially for overseas Pakistani and local resident. A big critique on real estate sector is that it’s non-productive and no big contributions towards economy although they forget that there are 36 industries are directly or indirectly linked with real estate except labor force.\r\nTime has come for the GOVT of Pakistan to think out of the box solutions for recovery in real estate sector. A parallel Economy exist in every country on this planet earth and most of the time it is beyond the control of GOVT. Its better be good to encourage the people to come in tax net by giving lucrative amnesty if it keep pushing like this amnesty than not only investor but genuine buyer will disturb.', 'Disappointed amnesty for realestate\\3-3.jpg', 0, '2018-01-05 01:29:38', '2018-01-05 01:29:38');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(10) UNSIGNED NOT NULL,
  `city_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city_name`, `created_at`, `updated_at`) VALUES
(1, 'Islamabad', NULL, NULL),
(2, 'Lahore', NULL, NULL),
(3, 'Karachi', NULL, NULL),
(4, 'Rawalpindi', NULL, NULL),
(5, 'Abbottabad', NULL, NULL),
(6, 'Abdul Hakim', NULL, NULL),
(7, 'Alipur', NULL, NULL),
(8, 'Arifwala', NULL, NULL),
(9, 'Astore', NULL, NULL),
(10, 'Attock', NULL, NULL),
(11, 'Awaran', NULL, NULL),
(12, 'Badin', NULL, NULL),
(13, 'Bagh', NULL, NULL),
(14, 'Bahawalnagar', NULL, NULL),
(15, 'Bahawalpur', NULL, NULL),
(16, 'Bannu', NULL, NULL),
(17, 'Bhakkar', NULL, NULL),
(18, 'Bhalwal', NULL, NULL),
(19, 'Bhimber', NULL, NULL),
(20, 'Buner', NULL, NULL),
(21, 'Burewala', NULL, NULL),
(22, 'Chaghi', NULL, NULL),
(23, 'Chakwal', NULL, NULL),
(24, 'Charsadda', NULL, NULL),
(25, 'Chichawatni', NULL, NULL),
(26, 'Chiniot', NULL, NULL),
(27, 'Chishtian Sharif', NULL, NULL),
(29, 'Chitral', NULL, NULL),
(30, 'Chunian', NULL, NULL),
(31, 'Dadu', NULL, NULL),
(32, 'Daharki', NULL, NULL),
(33, 'Daska', NULL, NULL),
(34, 'Depalpur', NULL, NULL),
(35, 'Dera Ghazi KhanD', NULL, NULL),
(36, 'Dera Ismail Khan', NULL, NULL),
(37, 'Dijkot', NULL, NULL),
(38, 'Duniya Pur', NULL, NULL),
(39, 'FATA', NULL, NULL),
(40, 'Faisalabad', NULL, NULL),
(41, 'Fateh Jang', NULL, NULL),
(42, 'Gaarho', NULL, NULL),
(43, 'Gadoon', NULL, NULL),
(44, 'Galyat', NULL, NULL),
(45, 'Gharo', NULL, NULL),
(46, 'Ghotki', NULL, NULL),
(47, 'Gilgit', NULL, NULL),
(48, 'Gojra', NULL, NULL),
(49, 'Gujar Khan', NULL, NULL),
(50, 'Gujranwala', NULL, NULL),
(51, 'Gujrat', NULL, NULL),
(52, 'Gwadar', NULL, NULL),
(53, 'Hafizabad', NULL, NULL),
(54, 'Hangu', NULL, NULL),
(55, 'Harappa', NULL, NULL),
(56, 'Haripur', NULL, NULL),
(57, 'Haroonabad', NULL, NULL),
(58, 'Hasilpur', NULL, NULL),
(59, 'Hassan Abdal', NULL, NULL),
(60, 'Haveli Lakha', NULL, NULL),
(61, 'Hub (Hub Chowki)', NULL, NULL),
(62, 'Hunza', NULL, NULL),
(63, 'Hyderabad', NULL, NULL),
(65, 'Jacobabad', NULL, NULL),
(66, 'Jahanian', NULL, NULL),
(67, 'Jalalpur Jattan', NULL, NULL),
(68, 'Jampur', NULL, NULL),
(69, 'Jauharabad', NULL, NULL),
(70, 'Jhang', NULL, NULL),
(71, 'Jhelum', NULL, NULL),
(72, 'Kaghan', NULL, NULL),
(73, 'Kahror Pakka', NULL, NULL),
(74, 'Kalat', NULL, NULL),
(75, 'Kamalia', NULL, NULL),
(76, 'Kamoki', NULL, NULL),
(78, 'Karak', NULL, NULL),
(79, 'Kasur', NULL, NULL),
(80, 'Khairpur', NULL, NULL),
(81, 'Khanewal', NULL, NULL),
(82, 'Khanpur', NULL, NULL),
(83, 'Kharian', NULL, NULL),
(84, 'Khushab', NULL, NULL),
(85, 'Khuzdar', NULL, NULL),
(86, 'Kohat', NULL, NULL),
(87, 'Kot Addu', NULL, NULL),
(88, 'Kotli', NULL, NULL),
(89, 'Lahore', NULL, NULL),
(90, 'Lakki Marwat', NULL, NULL),
(91, 'Lalamusa', NULL, NULL),
(92, 'Larkana', NULL, NULL),
(100, 'Lasbela', NULL, NULL),
(101, 'Layyah', NULL, NULL),
(102, 'Liaquatpur', NULL, NULL),
(103, 'Lodhran', NULL, NULL),
(104, 'Loralai', NULL, NULL),
(105, 'Lower Dir', NULL, NULL),
(106, 'Mailsi', NULL, NULL),
(107, 'Makran', NULL, NULL),
(108, 'Malakand', NULL, NULL),
(109, 'Mandi Bahauddin', NULL, NULL),
(110, 'Mansehra', NULL, NULL),
(111, 'Mardan', NULL, NULL),
(112, 'Matiari', NULL, NULL),
(113, 'Mian Channu', NULL, NULL),
(114, 'Mianwali', NULL, NULL),
(115, 'Mirpur', NULL, NULL),
(116, 'Mirpur Khas', NULL, NULL),
(117, 'Mirpur Sakro', NULL, NULL),
(118, 'Multan', NULL, NULL),
(119, 'Murree', NULL, NULL),
(120, 'Muzaffarabad', NULL, NULL),
(121, 'Muzaffargarh', NULL, NULL),
(122, 'Nankana Sahib', NULL, NULL),
(123, 'Naran', NULL, NULL),
(124, 'Narowal', NULL, NULL),
(125, 'Nasirabad', NULL, NULL),
(126, 'Naushahro Feroze', NULL, NULL),
(127, 'Nawabshah', NULL, NULL),
(128, 'Neelum', NULL, NULL),
(129, 'Nowshera', NULL, NULL),
(130, 'Okara', NULL, NULL),
(131, 'Others', NULL, NULL),
(132, 'Others Azad Kashmir', NULL, NULL),
(133, 'Others Balochistan', NULL, NULL),
(134, 'Others Gilgit Baltistan', NULL, NULL),
(135, 'Others Khyber Pakhtunkhwa', NULL, NULL),
(136, 'Others Punjab', NULL, NULL),
(137, 'Others Sindh', NULL, NULL),
(138, 'Pakpattan', NULL, NULL),
(139, 'Peshawar', NULL, NULL),
(140, 'Pind Dadan Khan', NULL, NULL),
(141, 'Pir Mahal', NULL, NULL),
(142, 'Quetta', NULL, NULL),
(143, 'Rahim Yar Khan', NULL, NULL),
(144, 'Rajanpur', NULL, NULL),
(145, 'Ratwal', NULL, NULL),
(146, 'Rawalkot', NULL, NULL),
(148, 'Rohri', NULL, NULL),
(149, 'Sadiqabad', NULL, NULL),
(150, 'Sahiwal', NULL, NULL),
(151, 'Samundri', NULL, NULL),
(152, 'Sanghar', NULL, NULL),
(153, 'Sargodha', NULL, NULL),
(154, 'Sehwan', NULL, NULL),
(155, 'Shahdadpur', NULL, NULL),
(156, 'Shahkot', NULL, NULL),
(157, 'Sheikhupura', NULL, NULL),
(158, 'Shikarpur', NULL, NULL),
(159, 'Shorkot', NULL, NULL),
(160, 'Sialkot', NULL, NULL),
(161, 'Sibi', NULL, NULL),
(162, 'Skardu', NULL, NULL),
(163, 'Sudhnoti', NULL, NULL),
(164, 'Sukkur', NULL, NULL),
(165, 'Swabi', NULL, NULL),
(166, 'Swat', NULL, NULL),
(167, 'Talagang', NULL, NULL),
(168, 'Tando Adam', NULL, NULL),
(169, 'Tando Allahyar', NULL, NULL),
(170, 'Tando Bago', NULL, NULL),
(171, 'Taxila', NULL, NULL),
(172, 'Thatta', NULL, NULL),
(173, 'Toba Tek Singh', NULL, NULL),
(174, 'Vehari', NULL, NULL),
(175, 'Wah', NULL, NULL),
(176, 'Wazirabad', NULL, NULL),
(177, 'Waziristan', NULL, NULL),
(178, 'Zhob', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE `feature` (
  `id` int(10) UNSIGNED NOT NULL,
  `property_id` int(10) UNSIGNED NOT NULL,
  `built_in_year` text COLLATE utf8mb4_unicode_ci,
  `view` text COLLATE utf8mb4_unicode_ci,
  `parking_space` text COLLATE utf8mb4_unicode_ci,
  `double_glazed_window` text COLLATE utf8mb4_unicode_ci,
  `central_air_conditioning` text COLLATE utf8mb4_unicode_ci,
  `central_heating` text COLLATE utf8mb4_unicode_ci,
  `flooring_type` text COLLATE utf8mb4_unicode_ci,
  `electricity_backup_type` text COLLATE utf8mb4_unicode_ci,
  `waste_disposal` text COLLATE utf8mb4_unicode_ci,
  `total_number_of_floors` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_main_feature` text COLLATE utf8mb4_unicode_ci,
  `furnished` text COLLATE utf8mb4_unicode_ci,
  `lobby_in_building` text COLLATE utf8mb4_unicode_ci,
  `floor` text COLLATE utf8mb4_unicode_ci,
  `total_floor_building` text COLLATE utf8mb4_unicode_ci,
  `number_of_elevators_in_building` text COLLATE utf8mb4_unicode_ci,
  `service_elevators_in_building` text COLLATE utf8mb4_unicode_ci,
  `public_parking` text COLLATE utf8mb4_unicode_ci,
  `underground_parking` text COLLATE utf8mb4_unicode_ci,
  `elevator_or_lift` text COLLATE utf8mb4_unicode_ci,
  `number_of_units` text COLLATE utf8mb4_unicode_ci,
  `broadband_internet_access` text COLLATE utf8mb4_unicode_ci,
  `satellite_or_cable_tv_ready` text COLLATE utf8mb4_unicode_ci,
  `intercom` text COLLATE utf8mb4_unicode_ci,
  `other_business_and_communication` text COLLATE utf8mb4_unicode_ci,
  `facilities` text COLLATE utf8mb4_unicode_ci,
  `business_center_or_media_room_building` text COLLATE utf8mb4_unicode_ci,
  `confrence_room_in_building` text COLLATE utf8mb4_unicode_ci,
  `atm_and_machine_in_building` text COLLATE utf8mb4_unicode_ci,
  `number_of_bedrooms` text COLLATE utf8mb4_unicode_ci,
  `number_of_bathrooms` text COLLATE utf8mb4_unicode_ci,
  `number_of_servant_quaters` text COLLATE utf8mb4_unicode_ci,
  `drawing_room` text COLLATE utf8mb4_unicode_ci,
  `dining_room` text COLLATE utf8mb4_unicode_ci,
  `number_of_kitchens` text COLLATE utf8mb4_unicode_ci,
  `study_room` text COLLATE utf8mb4_unicode_ci,
  `prayer_room` text COLLATE utf8mb4_unicode_ci,
  `powder_room` text COLLATE utf8mb4_unicode_ci,
  `gym_room` text COLLATE utf8mb4_unicode_ci,
  `steaming_room` text COLLATE utf8mb4_unicode_ci,
  `number_of_store_rooms` text COLLATE utf8mb4_unicode_ci,
  `lounge_or_sitting_room` text COLLATE utf8mb4_unicode_ci,
  `laundry_room` text COLLATE utf8mb4_unicode_ci,
  `other_room` text COLLATE utf8mb4_unicode_ci,
  `nearby_schools` text COLLATE utf8mb4_unicode_ci,
  `nearby_hospitals` text COLLATE utf8mb4_unicode_ci,
  `nearby_shopping_malls` text COLLATE utf8mb4_unicode_ci,
  `nearby_restaurants` text COLLATE utf8mb4_unicode_ci,
  `distance_from_airport_kms` text COLLATE utf8mb4_unicode_ci,
  `other_nearby_places` text COLLATE utf8mb4_unicode_ci,
  `nearby_public_transport` text COLLATE utf8mb4_unicode_ci,
  `lawn_or_garden` text COLLATE utf8mb4_unicode_ci,
  `swimming_pool` text COLLATE utf8mb4_unicode_ci,
  `sauna` text COLLATE utf8mb4_unicode_ci,
  `jacuzzi` text COLLATE utf8mb4_unicode_ci,
  `other_health_and_recreational` text COLLATE utf8mb4_unicode_ci,
  `maintenance_staff` text COLLATE utf8mb4_unicode_ci,
  `security_staff` text COLLATE utf8mb4_unicode_ci,
  `facilities_for_disabled` text COLLATE utf8mb4_unicode_ci,
  `other_facilities` text COLLATE utf8mb4_unicode_ci,
  `laundry_or_dry_cleaning_facilities` text COLLATE utf8mb4_unicode_ci,
  `communal_or_shared_kitchen_in_building` text COLLATE utf8mb4_unicode_ci,
  `pet_policies` text COLLATE utf8mb4_unicode_ci,
  `cctv_security_installed` text COLLATE utf8mb4_unicode_ci,
  `cafeteria_or_canteen_in_building` text COLLATE utf8mb4_unicode_ci,
  `pet_policy_type` text COLLATE utf8mb4_unicode_ci,
  `possesion` text COLLATE utf8mb4_unicode_ci,
  `corner` text COLLATE utf8mb4_unicode_ci,
  `park_facing` text COLLATE utf8mb4_unicode_ci,
  `disputed` text COLLATE utf8mb4_unicode_ci,
  `file` text COLLATE utf8mb4_unicode_ci,
  `balloted` text COLLATE utf8mb4_unicode_ci,
  `sewerage` text COLLATE utf8mb4_unicode_ci,
  `electricity` text COLLATE utf8mb4_unicode_ci,
  `water_supply` text COLLATE utf8mb4_unicode_ci,
  `sui_gas` text COLLATE utf8mb4_unicode_ci,
  `boundry_wall` text COLLATE utf8mb4_unicode_ci,
  `Irrigation` text COLLATE utf8mb4_unicode_ci,
  `Tube_Wells` text COLLATE utf8mb4_unicode_ci,
  `Accessible_by_Road` text COLLATE utf8mb4_unicode_ci,
  `Perimeter_Fencing` text COLLATE utf8mb4_unicode_ci,
  `Is_Land_Fertile` text COLLATE utf8mb4_unicode_ci,
  `Boundary_Lines` text COLLATE utf8mb4_unicode_ci,
  `Nearby_Water_Resources` text COLLATE utf8mb4_unicode_ci,
  `Other_Land_Features` text COLLATE utf8mb4_unicode_ci,
  `other_plot_features` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`id`, `property_id`, `built_in_year`, `view`, `parking_space`, `double_glazed_window`, `central_air_conditioning`, `central_heating`, `flooring_type`, `electricity_backup_type`, `waste_disposal`, `total_number_of_floors`, `other_main_feature`, `furnished`, `lobby_in_building`, `floor`, `total_floor_building`, `number_of_elevators_in_building`, `service_elevators_in_building`, `public_parking`, `underground_parking`, `elevator_or_lift`, `number_of_units`, `broadband_internet_access`, `satellite_or_cable_tv_ready`, `intercom`, `other_business_and_communication`, `facilities`, `business_center_or_media_room_building`, `confrence_room_in_building`, `atm_and_machine_in_building`, `number_of_bedrooms`, `number_of_bathrooms`, `number_of_servant_quaters`, `drawing_room`, `dining_room`, `number_of_kitchens`, `study_room`, `prayer_room`, `powder_room`, `gym_room`, `steaming_room`, `number_of_store_rooms`, `lounge_or_sitting_room`, `laundry_room`, `other_room`, `nearby_schools`, `nearby_hospitals`, `nearby_shopping_malls`, `nearby_restaurants`, `distance_from_airport_kms`, `other_nearby_places`, `nearby_public_transport`, `lawn_or_garden`, `swimming_pool`, `sauna`, `jacuzzi`, `other_health_and_recreational`, `maintenance_staff`, `security_staff`, `facilities_for_disabled`, `other_facilities`, `laundry_or_dry_cleaning_facilities`, `communal_or_shared_kitchen_in_building`, `pet_policies`, `cctv_security_installed`, `cafeteria_or_canteen_in_building`, `pet_policy_type`, `possesion`, `corner`, `park_facing`, `disputed`, `file`, `balloted`, `sewerage`, `electricity`, `water_supply`, `sui_gas`, `boundry_wall`, `Irrigation`, `Tube_Wells`, `Accessible_by_Road`, `Perimeter_Fencing`, `Is_Land_Fertile`, `Boundary_Lines`, `Nearby_Water_Resources`, `Other_Land_Features`, `other_plot_features`, `created_at`, `updated_at`) VALUES
(1, 1, '2003', NULL, '3', NULL, NULL, NULL, 'Tiles', 'Ups', NULL, '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 'on', 'on', 'Yes', 'Yes', NULL, NULL, NULL, '1', '2', '5', 'on', 'on', '2', 'on', 'on', 'on', 'on', 'on', '5', 'on', 'on', '5', 'on', 'on', 'on', 'on', '5', NULL, 'on', 'on', 'on', 'on', 'on', NULL, 'on', 'on', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-03 01:41:09', '2018-01-03 01:41:09'),
(2, 3, '1996', NULL, '2', 'on', 'on', 'on', 'Wooden', 'Ups', 'on', '5', NULL, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', 'on', 'on', 'business and communication', 'Other Facilities', NULL, NULL, NULL, '3', '4', '8', 'on', 'on', '3', 'on', 'on', 'on', 'on', 'on', '3', 'on', 'on', '5', 'on', 'on', 'on', 'on', '25km', NULL, 'on', 'on', 'on', 'on', 'on', 'Healthcare Recreational', 'on', 'on', 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-03 06:10:19', '2018-01-03 06:10:19'),
(3, 5, '2000', NULL, '1', NULL, 'on', 'on', 'Chip', 'Solar', 'on', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', '2', '2', NULL, NULL, '3', NULL, 'on', 'on', NULL, NULL, '3', NULL, NULL, '2', 'on', NULL, 'on', NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-04 04:55:10', '2018-01-04 04:55:10'),
(4, 8, '1990', NULL, '0', NULL, NULL, NULL, 'Flooring_None', 'Electricity_Backup_None', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '02', '2', NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pet_Policy_Allowed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-05 01:46:18', '2018-01-05 01:46:18'),
(5, 9, '1990', NULL, '0', 'on', 'on', 'on', 'Flooring_None', 'Electricity_Backup_None', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', '3', NULL, NULL, NULL, '0', NULL, NULL, 'on', 'on', NULL, NULL, NULL, 'on', NULL, 'on', NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pet_Policy_Allowed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-01-05 01:50:17', '2018-01-05 01:50:17');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(26, '2014_10_12_000000_create_users_table', 1),
(27, '2014_10_12_100000_create_password_resets_table', 1),
(28, '2017_11_27_064102_create_property_table', 1),
(29, '2017_11_28_093320_create_feature_table', 1),
(30, '2017_12_13_092015_create_photos_table', 1),
(31, '2017_12_20_073343_create_blog_table', 1),
(32, '2017_12_27_104550_create_city_table', 1),
(33, '2017_12_27_104653_create_society_table', 1),
(34, '2017_12_27_104739_create_phase_table', 1),
(35, '2017_12_27_104808_create_block_table', 1),
(36, '2018_01_01_054422_create_agent_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phase`
--

CREATE TABLE `phase` (
  `id` int(10) UNSIGNED NOT NULL,
  `society_id` int(11) NOT NULL,
  `phase_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phase`
--

INSERT INTO `phase` (`id`, `society_id`, `phase_name`, `created_at`, `updated_at`) VALUES
(1, 52, 'DHA Phase 1', NULL, NULL),
(2, 52, 'DHA Phase 2', NULL, NULL),
(3, 52, 'DHA Phase 3', NULL, NULL),
(4, 52, 'DHA Phase 4', NULL, NULL),
(5, 52, 'DHA Phase 5', NULL, NULL),
(6, 52, 'DHA Phase 6', NULL, NULL),
(7, 52, 'DHA Phase 7', NULL, NULL),
(8, 52, 'DHA Phase 8', NULL, NULL),
(9, 52, 'DHA  Phase 9 Town', NULL, NULL),
(10, 52, 'DHA Phase 9 Prism', NULL, NULL),
(11, 52, 'Defence Raya', NULL, NULL),
(12, 52, 'Main Boulevard DHA Defence', NULL, NULL),
(13, 52, 'Defence Chowk', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `property_id` int(11) NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `property_id`, `path`, `rank`, `created_at`, `updated_at`) VALUES
(1, 1, 'Chohan Offers 1 Kanal House for Rent in Cantt Serwar Road\\2e8440159c154cf2ac943a5f6602ad23jpg', '', '2018-01-03 01:41:09', '2018-01-03 01:41:09'),
(2, 1, 'Chohan Offers 1 Kanal House for Rent in Cantt Serwar Road\\3aa8d02c1e864448a59ab95d5c4a3d21jpg', '1', '2018-01-03 01:41:09', '2018-01-03 01:41:09'),
(3, 1, 'Chohan Offers 1 Kanal House for Rent in Cantt Serwar Road\\4d823e9584714de49ebbf1719a20cd56jpg', NULL, '2018-01-03 01:41:09', '2018-01-03 01:41:09'),
(4, 1, 'Chohan Offers 1 Kanal House for Rent in Cantt Serwar Road\\8f2a235d5d3042ff9bc4d5cec1aac7e4jpg', NULL, '2018-01-03 01:41:09', '2018-01-03 01:41:09'),
(5, 1, 'Chohan Offers 1 Kanal House for Rent in Cantt Serwar Road\\026f7fe9fc6c47aab50528b35bf07b42jpg', NULL, '2018-01-03 01:41:09', '2018-01-03 01:41:09'),
(6, 1, 'Chohan Offers 1 Kanal House for Rent in Cantt Serwar Road\\34a93a56048341e881c21f0b10534d5ejpg', NULL, '2018-01-03 01:41:09', '2018-01-03 01:41:09'),
(7, 1, 'Chohan Offers 1 Kanal House for Rent in Cantt Serwar Road\\39cc6dd3e53245d0bb459b30dc49fbbejpg', NULL, '2018-01-03 01:41:09', '2018-01-03 01:41:09'),
(8, 1, 'Chohan Offers 1 Kanal House for Rent in Cantt Serwar Road\\0046cb9095434507a8af5f30beaa404ajpg', NULL, '2018-01-03 01:41:09', '2018-01-03 01:41:09'),
(9, 3, 'dha house Entered by aFiF\\IMG20171208WA0097jpg', NULL, '2018-01-03 06:10:19', '2018-01-03 06:10:19'),
(10, 3, 'dha house Entered by aFiF\\IMG20171208WA0098jpg', NULL, '2018-01-03 06:10:19', '2018-01-03 06:10:19'),
(11, 3, 'dha house Entered by aFiF\\IMG20171208WA0099jpg', NULL, '2018-01-03 06:10:19', '2018-01-03 06:10:19'),
(12, 3, 'dha house Entered by aFiF\\IMG20171208WA0100jpg', NULL, '2018-01-03 06:10:19', '2018-01-03 06:10:19'),
(13, 3, 'dha house Entered by aFiF\\IMG20171208WA0101jpg', NULL, '2018-01-03 06:10:19', '2018-01-03 06:10:19'),
(14, 3, 'dha house Entered by aFiF\\IMG20171208WA0102jpg', NULL, '2018-01-03 06:10:19', '2018-01-03 06:10:19'),
(15, 5, '2 Kanal Self- Constructed Bungalow Phase II DHA lAhore\\20170718123803jpg', NULL, '2018-01-04 04:55:10', '2018-01-04 04:55:10'),
(16, 5, '2 Kanal Self- Constructed Bungalow Phase II DHA lAhore\\20170718123954jpg', NULL, '2018-01-04 04:55:10', '2018-01-04 04:55:10'),
(17, 5, '2 Kanal Self- Constructed Bungalow Phase II DHA lAhore\\20170718123957jpg', NULL, '2018-01-04 04:55:10', '2018-01-04 04:55:10'),
(18, 5, '2 Kanal Self- Constructed Bungalow Phase II DHA lAhore\\20170718124218jpg', NULL, '2018-01-04 04:55:10', '2018-01-04 04:55:10'),
(19, 5, '2 Kanal Self- Constructed Bungalow Phase II DHA lAhore\\20170718124311jpg', NULL, '2018-01-04 04:55:10', '2018-01-04 04:55:10'),
(20, 5, '2 Kanal Self- Constructed Bungalow Phase II DHA lAhore\\20170718124347jpg', NULL, '2018-01-04 04:55:10', '2018-01-04 04:55:10'),
(21, 8, '2 Kanal Brand New Spectacular Bungalow Phase II\\20171030130028ajpg', NULL, '2018-01-05 01:46:18', '2018-01-05 01:46:18'),
(22, 9, '2 Kanal Brand New Spectacular Bungalow Phase II\\IMG0791JPG', NULL, '2018-01-05 01:50:17', '2018-01-05 01:50:17');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `society_id` int(11) DEFAULT NULL,
  `phase_id` int(11) DEFAULT NULL,
  `block_id` int(11) DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `hot` tinyint(4) NOT NULL DEFAULT '0',
  `superhot` tinyint(4) NOT NULL DEFAULT '0',
  `user_id` int(10) UNSIGNED NOT NULL,
  `purpose` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_status` tinyint(4) NOT NULL DEFAULT '1',
  `property_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `price` double DEFAULT NULL,
  `unit_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `title`, `city_id`, `society_id`, `phase_id`, `block_id`, `address`, `status`, `hot`, `superhot`, `user_id`, `purpose`, `ad_status`, `property_type`, `description`, `price`, `unit_type`, `unit_size`, `position`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Chohan Offers 1 Kanal House for Rent in Cantt Serwar Road', 2, 52, 3, 24, NULL, 1, 1, 1, 1, 'Rent', 1, 'Flates', 'Chohan Estate offer:\r\n\r\nIts Having 5 bed attached bath huge car parking beautiful loan near to park all tailed and marble flooring rent silent office and residence use. Nearest To The Commercial Market & Park With Jogging Track, Ideal Living For Foreigners & Multinational Companies Executives, Long Term Lease Only.\r\nSerwar Road\r\nDemand Rent:  200000/-\r\n\r\nFor Further Details Feel Free To Contact With Us.', 2000000, 'Kanal', '1', NULL, NULL, NULL, NULL),
(2, 'Chohan Offers 1 Kanal House for Rent in Cantt Serwar Road', 2, 52, 3, 24, NULL, 1, 1, 1, 1, 'Rent', 0, 'Houses', 'Chohan Estate offer:\r\n\r\nIts Having 5 bed attached bath huge car parking beautiful loan near to park all tailed and marble flooring rent silent office and residence use. Nearest To The Commercial Market & Park With Jogging Track, Ideal Living For Foreigners & Multinational Companies Executives, Long Term Lease Only.\r\nSerwar Road\r\nDemand Rent:  200000/-\r\n\r\nFor Further Details Feel Free To Contact With Us.', 2000000, 'Kanal', '1', NULL, NULL, NULL, NULL),
(3, 'dha house Entered by aFiF', 2, 52, 1, 8, NULL, 0, 0, 0, 1, 'Sale', 1, 'Houses', 'jsndkcwkjenfkjwnecknhfbnmds nm h jsmdsnm m cm,,cmnkk ,mn ,m nndnskjnniw/cN\r\ndjnsdjldnvm,\r\nndjvnjdjknIUUEIFnkjecn\r\nSIJNVNM, INJK N C\r\n\r\nsdnjksdnkjn  n hj jall hya jnba.amdkjcn<>>clm????admcncj?C;pd\r\nmkclalkc', 75000000, 'Kanal', '5', NULL, NULL, '2018-01-03 06:10:19', NULL),
(4, 'Chohan Offers 1 Kanal House for Rent in Cantt Serwar Road', 4, 52, 3, 24, NULL, 1, 1, 1, 1, 'Rent', 1, 'Houses', 'Chohan Estate offer:\r\n\r\nIts Having 5 bed attached bath huge car parking beautiful loan near to park all tailed and marble flooring rent silent office and residence use. Nearest To The Commercial Market & Park With Jogging Track, Ideal Living For Foreigners & Multinational Companies Executives, Long Term Lease Only.\r\nSerwar Road\r\nDemand Rent:  200000/-\r\n\r\nFor Further Details Feel Free To Contact With Us.', 2000000, 'Kanal', '1', NULL, NULL, NULL, NULL),
(5, '2 Kanal Self- Constructed Bungalow Phase II DHA lAhore', 2, 52, 3, 22, NULL, 0, 0, 0, 2, 'Sale', 1, 'Houses', '-	 State of the art self-constructed house with 05 master attached baths, all baths are equipped with Spanish tiles and solid wood used in the house, 13 inch walls, 10 years slightly used house with practical lay out plan, spacious kitchen, 5 Master Size Bed Rooms with attached bath. Full length swimming pool at ground floor, state of the art house\r\nWith 8000 sq ft approx, 02 servant quarters at top floor. Must visit house', 85000000, NULL, NULL, NULL, NULL, '2018-01-04 04:55:10', NULL),
(6, '2 Kanal Brand New Spectacular Bungalow Phase II', 2, 52, 2, 16, NULL, 0, 0, 0, 3, 'Rent', 1, 'Flates', '-	 Superb state of the art 2 kanal bungalow, 5 Master Size Bed Rooms with attached bath, company fitted kitchen, solid teak/ash wood used all over the house, Spanish tiles, marble/tiled/wooden flooring, imported Jacuzzis, all wardrobes and fixtures are imported, spacious dirty kitchen, huge lawn with imported planters, state of the art interior, close to the defence club, excellent location, just 05 minute drive to ring road and airport, in the heart of DHA Lahore, swimming pool in the ground floor gives superb view from all bed rooms, state of the art elevation. Straight line concept, total covered area is approx 9500 sq ft, quarter basement, Home theatre at first floor, projector and sound system installed, all imported appliances, no compromise on quality. Everything one can dream of, a beautiful and amazing bungalow, Must visit house for families looking for living with convenience and style', 69000000, 'Kanal', '2', NULL, NULL, '2018-01-05 01:42:43', NULL),
(7, '2 Kanal Brand New Spectacular Bungalow Phase II', 2, 52, 2, 15, NULL, 0, 0, 0, 3, 'Rent', 0, 'Flates', '-	 Superb state of the art 2 kanal bungalow, 5 Master Size Bed Rooms with attached bath, company fitted kitchen, solid teak/ash wood used all over the house, Spanish tiles, marble/tiled/wooden flooring, imported Jacuzzis, all wardrobes and fixtures are imported, spacious dirty kitchen, huge lawn with imported planters, state of the art interior, close to the defence club, excellent location, just 05 minute drive to ring road and airport, in the heart of DHA Lahore, swimming pool in the ground floor gives superb view from all bed rooms, state of the art elevation. Straight line concept, total covered area is approx 9500 sq ft, quarter basement, Home theatre at first floor, projector and sound system installed, all imported appliances, no compromise on quality. Everything one can dream of, a beautiful and amazing bungalow, Must visit house for families looking for living with convenience and style', 69000000, 'Kanal', '2', NULL, NULL, '2018-01-05 01:45:19', '2018-01-05 01:59:58'),
(8, '2 Kanal Brand New Spectacular Bungalow Phase II', 2, 52, 2, 15, NULL, 0, 0, 0, 3, 'Rent', 1, 'Flates', '-	 Superb state of the art 2 kanal bungalow, 5 Master Size Bed Rooms with attached bath, company fitted kitchen, solid teak/ash wood used all over the house, Spanish tiles, marble/tiled/wooden flooring, imported Jacuzzis, all wardrobes and fixtures are imported, spacious dirty kitchen, huge lawn with imported planters, state of the art interior, close to the defence club, excellent location, just 05 minute drive to ring road and airport, in the heart of DHA Lahore, swimming pool in the ground floor gives superb view from all bed rooms, state of the art elevation. Straight line concept, total covered area is approx 9500 sq ft, quarter basement, Home theatre at first floor, projector and sound system installed, all imported appliances, no compromise on quality. Everything one can dream of, a beautiful and amazing bungalow, Must visit house for families looking for living with convenience and style', 69000000, 'Kanal', '2', NULL, NULL, '2018-01-05 01:46:18', NULL),
(9, '2 Kanal Brand New Spectacular Bungalow Phase II', 2, 52, 2, 15, NULL, 0, 0, 0, 3, 'Sale', 1, 'Flates', '-	 Superb state of the art 2 kanal bungalow, 5 Master Size Bed Rooms with attached bath, company fitted kitchen, solid teak/ash wood used all over the house, Spanish tiles, marble/tiled/wooden flooring, imported Jacuzzis, all wardrobes and fixtures are imported, spacious dirty kitchen, huge lawn with imported planters, state of the art interior, close to the defence club, excellent location, just 05 minute drive to ring road and airport, in the heart of DHA Lahore, swimming pool in the ground floor gives superb view from all bed rooms, state of the art elevation. Straight line concept, total covered area is approx 9500 sq ft, quarter basement, Home theatre at first floor, projector and sound system installed, all imported appliances, no compromise on quality. Everything one can dream of, a beautiful and amazing bungalow, Must visit house for families looking for living with convenience and style', 85000000, 'Kanal', '2', NULL, NULL, '2018-01-05 01:50:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `society`
--

CREATE TABLE `society` (
  `id` int(10) UNSIGNED NOT NULL,
  `city_id` int(11) NOT NULL,
  `society_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `society`
--

INSERT INTO `society` (`id`, `city_id`, `society_name`, `created_at`, `updated_at`) VALUES
(1, 2, 'AWT', NULL, NULL),
(2, 2, 'Aabpara Coop Housing Society', NULL, NULL),
(3, 2, 'Abdalians Housing Society', NULL, NULL),
(4, 2, 'Abid City', NULL, NULL),
(5, 2, 'Abuzar Housing Scheme', NULL, NULL),
(6, 2, 'Aftab Garden', NULL, NULL),
(7, 2, 'Ahmad Housing Society', NULL, NULL),
(8, 2, 'Ahsan Park Housing Scheme', NULL, NULL),
(9, 2, 'Air Avenue', NULL, NULL),
(10, 2, 'Airline Housing Society', NULL, NULL),
(11, 2, 'Al Hafeez Garden - Phase 2', NULL, NULL),
(12, 2, 'Al Hamra Town', NULL, NULL),
(13, 2, 'Al Jalil Garden', NULL, NULL),
(14, 2, 'Al Jannat Housing Scheme', NULL, NULL),
(15, 2, 'Al Kareem Garden', NULL, NULL),
(16, 2, 'Al Madina Avenue', NULL, NULL),
(17, 2, 'Al-Mava Housing Scheme', NULL, NULL),
(18, 2, 'Al-Rehmat Housing', NULL, NULL),
(19, 2, 'Alfalah Town', NULL, NULL),
(20, 2, 'Ali Town', NULL, NULL),
(21, 2, 'Al Rehman Garden', NULL, NULL),
(22, 2, 'Al-Raheem Garden', NULL, NULL),
(23, 2, 'Allama Iqbal Town', NULL, NULL),
(24, 2, 'Alpha Society', NULL, NULL),
(25, 2, 'Aman Town', NULL, NULL),
(26, 2, 'Architects Engineers Housing Society', NULL, NULL),
(27, 2, 'Ashrafi Town', NULL, NULL),
(28, 2, 'Askari', NULL, NULL),
(29, 2, 'Askari 9', NULL, NULL),
(30, 2, 'Askari 10', NULL, NULL),
(31, 2, 'Askari 11', NULL, NULL),
(32, 2, 'Atomic Energy Society - PAEC', NULL, NULL),
(33, 2, 'Audit & Accounts', NULL, NULL),
(34, 2, 'Avicenna City', NULL, NULL),
(35, 2, 'Awasia Housing Society', NULL, NULL),
(36, 2, 'Babar Homes', NULL, NULL),
(37, 2, 'Badduke', NULL, NULL),
(38, 2, 'Bahria Education & Medical City', NULL, NULL),
(39, 2, 'Bahria Nasheman', NULL, NULL),
(40, 2, 'Bahria Orchard', NULL, NULL),
(41, 2, 'Bahria Town', NULL, NULL),
(42, 2, 'Bankers Co-operative Housing Society', NULL, NULL),
(43, 2, 'Beacon House Society', NULL, NULL),
(44, 2, 'Canal Garden', NULL, NULL),
(45, 2, 'Canal View', NULL, NULL),
(46, 2, 'Cavalry Ground', NULL, NULL),
(47, 2, 'Central Park Housing Scheme', NULL, NULL),
(48, 2, 'Chinar Bagh', NULL, NULL),
(49, 2, 'Chinar Court', NULL, NULL),
(50, 2, 'Country Homes', NULL, NULL),
(51, 2, 'DHA - EME Cottages', NULL, NULL),
(52, 2, 'DHA Defence', NULL, NULL),
(53, 2, 'Dawood Residency Housing Scheme', NULL, NULL),
(54, 2, 'Doctors Housing Society', NULL, NULL),
(55, 2, 'Dream Avenue Lahore', NULL, NULL),
(56, 2, 'Dream Gardens', NULL, NULL),
(57, 2, 'EME Society', NULL, NULL),
(58, 2, 'Eden Boulevard', NULL, NULL),
(59, 2, 'Eden City', NULL, NULL),
(60, 2, 'Eden Gardens', NULL, NULL),
(61, 2, 'Eden Lane Villas', NULL, NULL),
(62, 2, 'Eden Lifestyle Homes', NULL, NULL),
(63, 2, 'Eden Park', NULL, NULL),
(64, 2, 'Eden Residencia', NULL, NULL),
(65, 2, 'Elite Town', NULL, NULL),
(66, 2, 'Evergreen Housing Scheme', NULL, NULL),
(67, 2, 'Faisal Town', NULL, NULL),
(68, 2, 'Fazaia Housing Scheme', NULL, NULL),
(69, 2, 'Formanites Housing Scheme', NULL, NULL),
(70, 2, 'GCP Housing Scheme', NULL, NULL),
(71, 2, 'Garden Town', NULL, NULL),
(72, 2, 'Golf View Residencia', NULL, NULL),
(73, 2, 'Gosha-e-Ahbab', NULL, NULL),
(74, 2, 'Government Superior Services', NULL, NULL),
(75, 2, 'Govt Officers Housing Society', NULL, NULL),
(76, 2, 'Grand Avenues Housing Scheme', NULL, NULL),
(77, 2, 'Green Acres Housing Society', NULL, NULL),
(78, 2, 'Green Avenue Housing Society', NULL, NULL),
(79, 2, 'Green City', NULL, NULL),
(80, 2, 'Green Forts', NULL, NULL),
(81, 2, 'Gujjar Colony', NULL, NULL),
(82, 2, 'Gul-e-Damin', NULL, NULL),
(83, 2, 'Gulbahar Colony', NULL, NULL),
(84, 2, 'Gulberg', NULL, NULL),
(85, 2, 'Gulberg 4', NULL, NULL),
(86, 2, 'Gulf Residencia', NULL, NULL),
(87, 2, 'Gulshan-e-Ahbab', NULL, NULL),
(88, 2, 'Gulshan-e-Aiwan Housing Society', NULL, NULL),
(89, 2, 'Gulshan-e-Lahore', NULL, NULL),
(90, 2, 'Gulshan-e-Ravi', NULL, NULL),
(91, 2, 'HBFC Housing Society', NULL, NULL),
(92, 2, 'Haji Park Housing Scheme', NULL, NULL),
(93, 2, 'Hamza Town', NULL, NULL),
(94, 2, 'High Court Society', NULL, NULL),
(95, 2, 'IEP Engineers Town', NULL, NULL),
(96, 2, 'Icon Valley', NULL, NULL),
(97, 2, 'Immad Garden Housing Scheme', NULL, NULL),
(98, 2, 'Imperial Garden Homes', NULL, NULL),
(99, 2, 'Inmol Society', NULL, NULL),
(100, 2, 'International City Country Homes', NULL, NULL),
(101, 2, 'Iqbal Avenue', NULL, NULL),
(102, 2, 'Izmir Town', NULL, NULL),
(103, 2, 'Izmir Town Extension', NULL, NULL),
(104, 2, 'Jaffar Town', NULL, NULL),
(105, 2, 'Jewa Town', NULL, NULL),
(106, 2, 'Johar Town', NULL, NULL),
(107, 2, 'Jubilee Town', NULL, NULL),
(108, 2, 'Judicial Colony', NULL, NULL),
(109, 2, 'Kakezai Housing Society', NULL, NULL),
(110, 2, 'Khayaban-e-Amin', NULL, NULL),
(111, 2, 'LDA Avenue', NULL, NULL),
(112, 2, 'Lahore Avenue', NULL, NULL),
(113, 2, 'Lahore Canal Bank Society', NULL, NULL),
(114, 2, 'Lahore Chamber of Commerce', NULL, NULL),
(115, 2, 'Lahore Motorway City', NULL, NULL),
(116, 2, 'Lake City', NULL, NULL),
(117, 2, 'Land Breez', NULL, NULL),
(118, 2, 'Marghzar Officers Colony', NULL, NULL),
(119, 2, 'Maryam Town', NULL, NULL),
(120, 2, 'Medical Housing Scheme', NULL, NULL),
(121, 2, 'Military Accounts Housing Society', NULL, NULL),
(122, 2, 'Millat Tractors Employees Housing Society', NULL, NULL),
(123, 2, 'Model Town', NULL, NULL),
(124, 2, 'Mohafiz Town', NULL, NULL),
(125, 2, 'Mohlanwal Scheme', NULL, NULL),
(126, 2, 'Mushtaq Park', NULL, NULL),
(127, 2, 'Muslim Nagar Housing Scheme', NULL, NULL),
(128, 2, 'Muslim Town', NULL, NULL),
(129, 2, 'Mustafa Town', NULL, NULL),
(130, 2, 'NFC', NULL, NULL),
(131, 2, 'Nasheman-e-Iqbal', NULL, NULL),
(132, 2, 'Nawab Town', NULL, NULL),
(133, 2, 'Naz Town', NULL, NULL),
(134, 2, 'Nespak Housing Scheme', NULL, NULL),
(135, 2, 'New Kashmir Park Housing Scheme', NULL, NULL),
(136, 2, 'Nobel Town (KCHS)', NULL, NULL),
(137, 2, 'OPF Housing Scheme', NULL, NULL),
(138, 2, 'Olympians Cooperative Housing Society', NULL, NULL),
(139, 2, 'P & D Housing Society', NULL, NULL),
(140, 2, 'PASSCO Housing Society', NULL, NULL),
(141, 2, 'PCSIR Housing Scheme', NULL, NULL),
(142, 2, 'PCSIR Staff Colony', NULL, NULL),
(143, 2, 'PGECHS', NULL, NULL),
(144, 2, 'PIA Housing Scheme', NULL, NULL),
(145, 2, 'Pak Arab Enclave', NULL, NULL),
(146, 2, 'Pak Arab Housing Society', NULL, NULL),
(147, 2, 'Pakistan Medical Housing Society', NULL, NULL),
(148, 2, 'Paragon City', NULL, NULL),
(149, 2, 'Park View', NULL, NULL),
(150, 2, 'Park View Villas', NULL, NULL),
(151, 2, 'Phase 8', NULL, NULL),
(152, 2, 'Pine Villas', NULL, NULL),
(153, 2, 'Prime Homes', NULL, NULL),
(154, 2, 'Public Health Society', NULL, NULL),
(155, 2, 'Punjab Coop Housing Society', NULL, NULL),
(156, 2, 'Punjab Govt Servant Society', NULL, NULL),
(157, 2, 'Punjab University Employees Society', NULL, NULL),
(158, 2, 'Rail Town (Canal City)', NULL, NULL),
(159, 2, 'Rajpoot Town', NULL, NULL),
(160, 2, 'Rehman City', NULL, NULL),
(161, 2, 'Revenue Society', NULL, NULL),
(162, 2, 'River Edge Housing Scheme', NULL, NULL),
(163, 2, 'Sabzazar Scheme', NULL, NULL),
(164, 2, 'Sadaat Town', NULL, NULL),
(165, 2, 'Sadat Cooperative Housing Society (College Town)', NULL, NULL),
(166, 2, 'Safari Garden Housing Scheme', NULL, NULL),
(167, 2, 'Sally Town South', NULL, NULL),
(168, 2, 'Shadman 1', NULL, NULL),
(169, 2, 'Shah Jamal', NULL, NULL),
(170, 2, 'Shalimar Industrial Scheme', NULL, NULL),
(171, 2, 'Sheranwala Heights', NULL, NULL),
(172, 2, 'Sheraz Town', NULL, NULL),
(173, 2, 'Shershah Colony', NULL, NULL),
(174, 2, 'State Life Housing', NULL, NULL),
(175, 2, 'Sui Gas Society', NULL, NULL),
(176, 2, 'Sukh Chayn Gardens', NULL, NULL),
(177, 2, 'Sultan Town', NULL, NULL),
(178, 2, 'Sunflower Housing Society', NULL, NULL),
(179, 2, 'Sunfort Gardens', NULL, NULL),
(180, 2, 'Sunny Park', NULL, NULL),
(181, 2, 'T & T Aabpara Housing Society', NULL, NULL),
(182, 2, 'TECH Society', NULL, NULL),
(183, 2, 'TIP Housing Society', NULL, NULL),
(184, 2, 'Tariq Gardens', NULL, NULL),
(185, 2, 'The Spring Apartment Homes', NULL, NULL),
(186, 2, 'Township', NULL, NULL),
(187, 2, 'UET Housing Society', NULL, NULL),
(188, 2, 'Valencia Housing Society', NULL, NULL),
(189, 2, 'Wapda Finance Officers Subsistence Farm Homes Cooperative Society', NULL, NULL),
(190, 2, 'Wapda Town', NULL, NULL),
(191, 2, 'West Wood Housing Society', NULL, NULL),
(192, 2, 'Women Housing Society', NULL, NULL),
(193, 2, 'Wyeth Employees Coop Housing', NULL, NULL),
(194, 2, 'Zaamin Fazaia Villas', NULL, NULL),
(195, 2, 'Zaheer Villas', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` int(11) DEFAULT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `number`, `email`, `address`, `city`, `password`, `zip`, `path`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ali', '03224531314', 'aliusama1@hotmail.com', 'DHA', 'Lahore', '$2y$10$XMfkVGoyTCMkadoT7KSPb.LkvMLkCim6/a6PKcj8Jyd1azkzzkjj6', 54000, 'Ali\\39cc6dd3-e532-45d0-bb45-9b30dc49fbbe.jpg', NULL, '2018-01-03 01:26:31', '2018-01-03 04:11:20'),
(2, 'kashif', '03244388131', 'kashif.arshad@gmail.com', 'DHA phase 5  A 16', 'lahore', '$2y$10$z6UwO9NmBfkEIFyYKcr.z.lPQz/rSQUGVDZ5.dKVHhEeRUHNi0JYa', 54000, NULL, 'Yyeax6dUHyL3wc8DHzY6ZWyB8GQXlT4d51uV1dWKFiWkduxQPSxZEtSQIq6u', '2018-01-04 03:46:55', '2018-01-04 03:46:55'),
(3, 'Kashif', '03244388132', 'kashif.arshad@chohanestate.com', 'DHA phase 5  A 16', 'Lahoe', '$2y$10$8aHXeqXCHTWtu1PfNKvh8Onaj/3gZdHV2hFkCNN7796JcynCp0WUK', 54000, NULL, 'EBFp7eyv8JPV4lFZNtK0ksvSxhhgdoSnuzNKtgZRvz6pgPuv68uPlUVbja5T', '2018-01-05 00:55:14', '2018-01-05 00:55:14'),
(4, 'Kashif', '03244388135', 'sdmm@chohanestate.com', 'DHA phase 5  A 16', 'Lahoe', '$2y$10$4ZSrVfCZU/FbBvgsi1AaAeOvPdCHVFe.W1jz.A8N1wXtuIH9tc5nO', 54000, NULL, NULL, '2018-01-05 02:39:42', '2018-01-05 02:39:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `block`
--
ALTER TABLE `block`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `phase`
--
ALTER TABLE `phase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `society`
--
ALTER TABLE `society`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_number_unique` (`number`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `block`
--
ALTER TABLE `block`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `feature`
--
ALTER TABLE `feature`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `phase`
--
ALTER TABLE `phase`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `society`
--
ALTER TABLE `society`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
