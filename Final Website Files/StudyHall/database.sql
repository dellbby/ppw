-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jun 21, 2016 at 08:02 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `studyhall`
--

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) unsigned NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(2) DEFAULT NULL,
  `zip` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `rating` decimal(9,2) DEFAULT NULL,
  `coffee` tinyint(1) NOT NULL,
  `outdoor` tinyint(1) NOT NULL,
  `breakfast` tinyint(1) NOT NULL,
  `wifi` tinyint(1) NOT NULL,
  `pets` tinyint(1) NOT NULL,
  `indoor` tinyint(1) NOT NULL,
  `bigtables` tinyint(1) NOT NULL,
  `solo` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `name`, `address`, `city`, `state`, `zip`, `phone`, `type`, `rating`, `coffee`, `outdoor`, `breakfast`, `wifi`, `pets`, `indoor`, `bigtables`, `solo`) VALUES
(1, '<a href="revo.php" class="link2">Revo Cafe</a>', '3134 Glendale Blvd', 'Los Angeles', 'CA', '90039', '(323) 664-7386', 'Cafe', '5.00', 1, 1, 1, 1, 0, 1, 0, 1),
(2, '<a href=zephs.php class="link2">Zephyr''s Coffee House & Art Gallery</a>', '2419 E Colorado Blvd', 'Pasadena', 'CA', '91107', '(626) 793-7330', 'Lounge', '5.00', 1, 1, 1, 1, 1, 1, 1, 1),
(3, '<a href=bpig.php>Bourgeois Pig</a>', '5931 Franklin Ave', 'Los Angeles', 'CA', '90028', '(323) 464-6008', 'Cafe', '5.00', 1, 0, 0, 1, 0, 1, 0, 1),
(4, '<a href=bandb.php>Bricks and Scones</a>', '403 N Larchmont Blvd', 'Los Angeles', 'CA', '90004', '(323) 463-0811', 'Cafe', '5.00', 1, 1, 1, 1, 1, 1, 1, 1),
(5, '<a href=priscillas.php>Priscillas Gourmet Coffee Tea & Gifts</a>', '4150 W Riverside Dr', 'Burbank', 'CA', '91505', '(818) 843-5707', 'Cafe', '5.00', 1, 1, 1, 1, 0, 1, 0, 1),
(6, '<a href=simply.php>Simply Coffee</a>', '940 N Lima St', 'Burbank', 'CA', '91505', '(818) 394-6831', 'Cafe', '5.00', 1, 1, 1, 1, 1, 1, 0, 1),
(7, '<a href=crave.php>Crave Cafe</a>', '11992 Ventura Blvd', 'Studio City', 'CA', '91604', '(818) 763-9000', 'Cafe', '5.00', 1, 1, 1, 1, 0, 1, 1, 1),
(8, '<a href="uratu.php" class="link2">Urartu Coffee</a>', '119 N Maryland Ave', 'Glendale', 'CA', '91206', '(818) 242-9666', 'Cafe', '5.00', 1, 0, 1, 1, 0, 1, 0, 1),
(9, '<a href="aroma.php" class="link2">Aroma Coffee & Tea</a>', '4360 Tujunga Ave', 'Studio City', 'CA', '91604', '(818) 508-6505', 'Cafe', '5.00', 1, 1, 1, 1, 0, 1, 1, 1),
(10, '<a href="beabeas.php" class="link2">Bea Bea''s</a>', '353 N Pass Ave', 'Burbank', 'CA', '91505', '(818) 846-2327', 'Resturant', '5.00', 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `zephyrs` int(11) NOT NULL DEFAULT '0',
  `revo` int(11) NOT NULL DEFAULT '0',
  `simply` int(11) NOT NULL DEFAULT '0',
  `bpig` int(11) NOT NULL DEFAULT '0',
  `bns` int(11) NOT NULL DEFAULT '0',
  `prisgourmet` int(11) NOT NULL DEFAULT '0',
  `crave` int(11) NOT NULL DEFAULT '0',
  `uratu` int(11) NOT NULL DEFAULT '0',
  `aroma` int(11) NOT NULL DEFAULT '0',
  `beabeas` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `zephyrs`, `revo`, `simply`, `bpig`, `bns`, `prisgourmet`, `crave`, `uratu`, `aroma`, `beabeas`) VALUES
(1, 'arthur', '0cc175b9c0f1b6a831c399e269772661', 'a@a.com', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'a', '0cc175b9c0f1b6a831c399e269772661', 'a@a.com', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'dellbby', '223a4830801c93311548481c8a1cc591', 'dellbby4@yahoo.com', 0, 0, 0, 1, 1, 1, 1, 1, 1, 1),
(4, 'dakbari', '223a4830801c93311548481c8a1cc591', 'dellbby4@yahoo.com', 0, 1, 1, 0, 1, 1, 1, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;