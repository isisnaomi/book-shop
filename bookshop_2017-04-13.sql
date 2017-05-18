-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 18, 2017 at 06:33 AM
-- Server version: 5.6.33
-- PHP Version: 5.6.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `bookshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `editor` varchar(100) NOT NULL,
  `rating` int(11) NOT NULL,
  `category` varchar(80) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `ammount` int(11) NOT NULL DEFAULT '0',
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `author`, `editor`, `rating`, `category`, `description`, `price`, `ammount`, `photo`) VALUES
(1, 'The Light Between Oceans', 'M. l. Stedman', 'Scribner', 5, 'Novel', 'After four harrowing years on the Western Front, Tom Sherbourne returns to Australia and takes a job as the lighthouse keeper on Janus Rock, nearly half a day\'s journey from the coast.', 14.99, 12, '1.jpg'),
(2, 'To Kill a Mockingbird', 'Harper Lee ', 'Grand Central Publishing', 4, 'Drama', 'Now featuring a new introduction by the author, this specially packaged, popularly priced hardcover edition of an American classic (with more than 30 million copies sold) celebrates the 35th anniversary of its original publication.', 11.99, 4, '2.jpg'),
(3, 'Fahrenheit 451', 'Ray Bradbury', 'Simon & Schuster', 5, 'Novel', 'Ray Bradbury\'s internationally acclaimed novel Fahrenheit 451 is a masterwork of twentieth-century literature set in a bleak, dystopian future. ', 18.95, 9, '3.jpg'),
(4, 'In Cold Blood', 'Truman Capote', 'Vintage Books', 5, 'Horror', 'As Truman Capote reconstructs the murder and the investigation that led to the capture, trial, and execution of the killers, he generates both mesmerizing suspense and astonishing empathy. ', 20, 4, '4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;