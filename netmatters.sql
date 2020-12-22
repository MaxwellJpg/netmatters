-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2020 at 10:40 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netmatters`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_details`
--

CREATE TABLE `contact_us_details` (
  `contact-us-id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(320) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `market_preference` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news_article`
--

CREATE TABLE `news_article` (
  `article_id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_published` date NOT NULL,
  `service` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `author_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_article`
--

INSERT INTO `news_article` (`article_id`, `title`, `img`, `description`, `date_published`, `service`, `type`, `author_id`) VALUES
(1, 'Ever thought of outsourcing your IT? Here\'s 8 reasons to consider it', 'https://www.netmatters.co.uk/uploads/article/1003/outsourcing-it-support-tYL8.jpg', 'Each and every business needs IT to work effectively, this information is true no matter which industry your business is in.', '2020-12-02', 'it', 'insights', 1),
(2, 'Netmatters Raises £435 For The CCHS Foundation', 'https://www.netmatters.co.uk/uploads/article/2231/netmatters-raises-gbp435-7gDj.jpg', 'This year Netmatters challenged their staff to clock up some mileage to raise money for the CCHS foundation.', '2020-12-02', 'web', 'news', 1),
(3, 'Why You Should Shop Local For Your Corporate Gifts And Incentives', 'https://www.netmatters.co.uk/uploads/article/2242/why-you-should-tZRv.jpg', 'We wanted to start this post by talking about the importance of Christmas here at Netmatters! Traditionally, we reward our staff for a job well done with a month of celebrations and events – everything from food in the office, to guessing games, culminating in a company-wide Christmas night out. It provides us a chance to celebrate as a family before we close down for a few well-earned days off.', '2020-12-04', 'web', 'news', 1),
(4, 'Telemarketing Sales Executive', 'https://www.netmatters.co.uk/uploads/article/2104/telemarketing-sales-executive-GeFZ.jpg', 'SALARY: Negotiable (based on experience) + Commission + Benefits Hours: 40 hours per week, Monday - Friday', '2020-11-25', 'web', 'careers', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news_author`
--

CREATE TABLE `news_author` (
  `author_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `author_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_author`
--

INSERT INTO `news_author` (`author_id`, `name`, `author_img`) VALUES
(1, 'Netmatters Ltd', 'https://www.netmatters.co.uk/assets/images/thumbnails/article_contact_thumb/netmatters-ltd-VXAv.png'),
(2, 'Mark Reilly', 'https://www.netmatters.co.uk/assets/images/thumbnails/article_contact_thumb/mark-reilly-NoPp.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us_details`
--
ALTER TABLE `contact_us_details`
  ADD PRIMARY KEY (`contact-us-id`);

--
-- Indexes for table `news_article`
--
ALTER TABLE `news_article`
  ADD PRIMARY KEY (`article_id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `news_author`
--
ALTER TABLE `news_author`
  ADD PRIMARY KEY (`author_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us_details`
--
ALTER TABLE `contact_us_details`
  MODIFY `contact-us-id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news_article`
--
ALTER TABLE `news_article`
  MODIFY `article_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news_author`
--
ALTER TABLE `news_author`
  MODIFY `author_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news_article`
--
ALTER TABLE `news_article`
  ADD CONSTRAINT `news_article_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `news_author` (`author_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
