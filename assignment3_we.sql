-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 07:14 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment3_we`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `intro` text NOT NULL,
  `detail` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `intro`, `detail`, `img`) VALUES
(1, 'Hey there, I\'m Carlo!', 'I love writing about what’s happening across the globe and giving\r\n            my take on<br />it. I often talk with others about what’s\r\n            happening, which turns into long<br />talks… exciting talks.<br />\r\n            <br />I’ve always wanted to write blog articles, but I never\r\n            really went for it until<br />now. I mainly write my opinions\r\n            about global news, but I also like to write<br />about Tech! My\r\n            writing style is primarily conversational, making it easy to<br />follow.', 'imgs/aboutme.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `subject`, `message`) VALUES
(4, 'da', 'dsas@d', 'asd', 'dsa'),
(5, 'da', 'dsas@d', 'asd', 'fsd');

-- --------------------------------------------------------

--
-- Table structure for table `featurette`
--

CREATE TABLE `featurette` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `featurette`
--

INSERT INTO `featurette` (`id`, `date`, `title`, `description`, `img`) VALUES
(1, 'October 27, 2022', 'Will The Netherlands still Exist in 100 Years?', 'The Netherlands is the world’s second-largest producer of\n            greenhouse gases. The country also has an unfortunate propensity\n            for natural flooding and is therefore highly susceptible to rising\n            sea levels and other consequences of climate change.', 'imgs/content4.png'),
(2, 'August 27, 2022', 'Analytics company RELX', 'Increasingly, brands are also investing in producing their own high-quality feature stories. One example comes from analytics company RELX, who published a powerful overview of the purpose behind their', 'imgs/content5.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `globals`
--

CREATE TABLE `globals` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `globals`
--

INSERT INTO `globals` (`id`, `img`, `date`, `title`) VALUES
(1, './imgs/gc.png', 'October 27, 2022', 'Will The Netherlands still Exist in 100 Years?'),
(2, './imgs/3.jpg', 'October 13, 2022', 'The West could Annihilate Russia’s Troops'),
(3, './imgs/content3.png', 'October 10, 2022', 'A Booming Birthday Gift for Putin'),
(4, './imgs/1.jpg', 'October 17, 2022', 'NASA is Hitting Asteroids to Protect Our Planet'),
(5, './imgs/2.jpg', 'October 06, 2022', 'North Korea on the Move, again');

-- --------------------------------------------------------

--
-- Table structure for table `maincarousel`
--

CREATE TABLE `maincarousel` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maincarousel`
--

INSERT INTO `maincarousel` (`id`, `date`, `img`, `description`) VALUES
(1, 'October 17, 2022', 'imgs/1.jpg', 'NASA is Hitting Asteroids to Protect Our Planet'),
(2, 'October 6, 2022', 'imgs/2.jpg', 'North Korea on the Move'),
(3, 'October 13, 2022', 'imgs/3.jpg', 'The West could Annihilate Russia’s Troops');

-- --------------------------------------------------------

--
-- Table structure for table `marketing`
--

CREATE TABLE `marketing` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marketing`
--

INSERT INTO `marketing` (`id`, `img`, `description`) VALUES
(1, 'imgs/content1.jpg', 'Netflix is Growing-Up'),
(2, 'imgs/content2.jpeg', 'It’s a me, Chris Pratt!'),
(3, 'imgs/content3.png', 'A Booming Birthday Gift for Putin');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `img`, `date`, `title`) VALUES
(1, './imgs/content1.jpg', 'October 12, 2022', 'Netflix is Growing-Up'),
(2, './imgs/content2.jpeg', 'October 8, 2022', 'It’s a me, Chris Pratt!');

-- --------------------------------------------------------

--
-- Table structure for table `space`
--

CREATE TABLE `space` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `space`
--

INSERT INTO `space` (`id`, `img`, `date`, `title`) VALUES
(1, './imgs/1.jpg', 'October 17, 2022', 'NASA is Hitting Asteroids'),
(2, './imgs/2.jpg', 'October 06, 2022', 'North Korea on the Move');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(4, 'amoiez1', '12341234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featurette`
--
ALTER TABLE `featurette`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `globals`
--
ALTER TABLE `globals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maincarousel`
--
ALTER TABLE `maincarousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketing`
--
ALTER TABLE `marketing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `space`
--
ALTER TABLE `space`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `featurette`
--
ALTER TABLE `featurette`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `globals`
--
ALTER TABLE `globals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `maincarousel`
--
ALTER TABLE `maincarousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `marketing`
--
ALTER TABLE `marketing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `space`
--
ALTER TABLE `space`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
