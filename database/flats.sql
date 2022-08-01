-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2022 at 03:38 PM
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
-- Database: `be16_cr12_lacasamia_andrea`
--

-- --------------------------------------------------------

--
-- Table structure for table `flats`
--

DROP TABLE IF EXISTS `flats`;
CREATE TABLE `flats` (
  `id` int(10) UNSIGNED NOT NULL,
  `advert_title` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `adress` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `price_reduction` enum('true','false') DEFAULT 'true',
  `number_of_rooms` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flats`
--

INSERT INTO `flats` (`id`, `advert_title`, `picture`, `city`, `price`, `description`, `longitude`, `latitude`, `adress`, `size`, `price_reduction`, `number_of_rooms`) VALUES
(1, 'Apartment', 'flat1.jpg', 'Vienna', '850 000 €', 'A beautiful lovely flat in the heart of area Kahlenberg.', '16.37381890000006\n', '48.2081743', 'Kahlenbergstrasse 20.', '60m²', 'true', 2),
(2, 'Apartment', 'flat2.jpg', 'New York', '500 000 $', 'A modern single flat next to Central Park.', '-73.935242', '40.730610', 'CP Street 30.', '32m²', 'true', 1),
(3, 'Apartment', 'flat3.jpg', 'Oslo', '600 000 €', 'A little family apartment which warms your heart.', '10.757933', '59.911491', 'Snow Street 15.', '80m²', 'true', 2),
(4, 'Landhaus', 'flat4.jpg', 'Innsbruck', '1 500 000 €', 'A  multigeneration family landhaus on the side of mother nature.', '11.39454', '47.26266', 'Bergstrasse 45.', '250m²', 'true', 8),
(5, 'Flat', 'flat5.jpg', 'Vienna', '150 000 €', 'A single flat next to Danube River', '16.37381890000006\n', '48.2081743', 'Ostmarkgasse 52.', '52m²', 'true', 1),
(6, 'Luxury apartment', 'flat6.jpg', 'Miami', '2 000 000 $', 'A luxury apartment on Miami Beach.', '-80.191788', '25.761681', 'Miami Beach 18.', '200m²', 'true', 5),
(7, 'Family Hause', 'flat7.jpg', 'Vienna', '1 800 000 €', 'A big family hause on the edge of the town.', '16.37381890000006\n', '48.2081743', 'Siemenstrasse 50.', '140m²', 'true', 4),
(8, 'Commercial premise', 'flat8.jpg', 'London', '5 000 000 €', 'A commercial building for office, congress usage.', '-0.118092', '51.509865', 'Business street 30.', '', 'true', 25),
(17, 'Beach House', 'flat9.jpg', 'Barcelona', '250 000 €', 'A lovely holiday home in beautiful Barcelona', '2.154007', '41.390205', 'Paella street 15.', '50m²', 'true', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flats`
--
ALTER TABLE `flats`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flats`
--
ALTER TABLE `flats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
