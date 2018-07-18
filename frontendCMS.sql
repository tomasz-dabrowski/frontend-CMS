-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2018 at 02:31 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frontendcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` varchar(32) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `content`) VALUES
('content_main', '<p>Our company has been oriented towards the needs of companies to extend their promotion to the international market. The unlimited accessibility establishes the Internet as the key to success.</p>'),
('aside_first', '<ul>\n<li><a href=\"#\">Websites</a></li>\n<li><a href=\"#\">CMS systems</a></li>\n<li><a href=\"#\">Online shops</a></li>\n<li><a href=\"#\">Dedicated applications</a></li>\n</ul>'),
('menu', '<ul>\n<li><a class=\"active\" href=\"#\">Home</a></li>\n<li><a href=\"#\">About Us</a></li>\n<li><a href=\"#\">Our Offer</a></li>\n<li><a href=\"#\">Realizations</a></li>\n<li><a href=\"#\">Contact Us</a></li>\n</ul>'),
('aside_first_title', '<h3>Shortcuts</h3>'),
('aside_second_title', '<h3>Last realization</h3>'),
('aside_second', '<p><img class=\"text-center img-fluid\" src=\"app/res/images/edulive_m.png\" alt=\"\" /></p>\n<p><a href=\"http://www.edu-live.pl\">www.edu-live.pl</a></p>\n<p><br /><br /></p>'),
('aside_third_title', 'Reference'),
('aside_third', '<h3>References</h3>\n<p>Empfehlungen und Meinungen unserer Kunden (...)</p>'),
('slider', '<p><img class=\"img-fluid\" src=\"app/assets/images/slide2.jpg\" alt=\"\" /></p>'),
('extra_box_1', '<h3>Strategic planning</h3>\n<p>A comprehensive marketing strategy and a complete outsourcing task</p>'),
('extra_box_2', '<h3>Dedicated applications</h3>\n<p>We are dedicated to developing advanced, fully functional applications</p>'),
('card_1', 'Websites'),
('card_2', 'Content Management Systems'),
('card_3', 'Online Shops'),
('card_1_back', '<p><a href=\"#\">Jede gute Internetseite sollte wie ein hochwertiger Anzug liegen und nach Mass (...)</a></p>'),
('card_2_back', '<p><a href=\"#\">Internetseiten mit einem CMS System beinhalten ein Adminbereich (...)</a></p>'),
('card_3_back', '<p><a href=\"#\">Wir beschaftigen uns mit dem kompletten Aufbau von funktionalen Shopsystemen (...)</a></p>'),
('clients', '<p>Our Clients:</p>\n<p class=\"text-center\"><a href=\"#\"><img src=\"app/assets/images/02.png\" alt=\"\" /></a> <a href=\"#\"><img src=\"app/assets/images/03.png\" alt=\"\" /></a> <a href=\"#\"><img src=\"app/assets/images/04.png\" alt=\"\" /></a> <a href=\"#\"><img src=\"app/assets/images/10.png\" alt=\"\" /></a> <a href=\"#\"><img src=\"app/assets/images/31.png\" alt=\"\" /></a></p>'),
('footer_1', '<h4>Design <span style=\"color: #fa4b00;\">Media</span></h4>\n<ul>\n<li>Gruner 22, 02826 Gorlitz</li>\n<li>Tel. 0049 01 7748245</li>\n<li>info@design.media.de</li>\n</ul>'),
('footer_2', '<h4>About us</h4>\n<ul>\n<li><a href=\"#\">About DesignMedia</a></li>\n<li><a href=\"#\">Our Clients</a></li>\n<li><a href=\"#\">Refereferences</a></li>\n</ul>'),
('footer_3', '<h4>An offer</h4>\n<ul>\n<li><a href=\"#\">Websites</a></li>\n<li><a href=\"#\">CMS</a></li>\n<li><a href=\"#\">Online shops</a></li>\n</ul>'),
('footer_4', '<h4>Realizations</h4>\n<ul>\n<li><a href=\"#\">Websites</a></li>\n<li><a href=\"#\">Websites with CMS</a></li>\n<li><a href=\"#\">Online shops</a></li>\n</ul>'),
('logo', '<p><a href=\"#\"><img src=\"app/assets/images/logo.png\" alt=\"Design Media\" /></a></p>'),
('menu_mobile', '<ul>\n<li class=\"nav-item\"><a href=\"#\">Start</a></li>\n<li class=\"nav-item\"><a href=\"#\">Uber uns</a></li>\n<li class=\"nav-item\"><a href=\"#\">Angebot</a></li>\n<li class=\"nav-item\"><a href=\"#\">Realisierungen</a></li>\n<li class=\"nav-item\"><a href=\"#\">Kontakt</a></li>\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '2f1b237f8449cd89e6bbfe5755fc61df');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
