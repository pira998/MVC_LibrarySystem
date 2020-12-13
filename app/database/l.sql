-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 09:25 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `l`
--

-- --------------------------------------------------------

--
-- Table structure for table `books_details`
--

CREATE TABLE `books_details` (
  `id` int(10) NOT NULL,
  `ISBN` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `bookImg` varchar(100) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `language` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `numOfPages` varchar(50) NOT NULL,
  `purchaseDate` varchar(50) NOT NULL,
  `publicationDate` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `available` varchar(50) NOT NULL,
  `librarian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books_details`
--

INSERT INTO `books_details` (`id`, `ISBN`, `title`, `subject`, `bookImg`, `publisher`, `language`, `price`, `author`, `numOfPages`, `purchaseDate`, `publicationDate`, `quantity`, `available`, `librarian`) VALUES
(18, '201343', 'Meendum Jeeno', 'Story book', 'book_images/fe8796d482b57db79e071ea276eea6ecmeendum jeeno.jpg', 'Iyan story industry', 'Tamil', '240', 'Sujatha', '200', '07-05-2020', '06-12-1980', '20', '19', '180476L'),
(20, '55', 'Computer kiramam', 'Novel', 'book_images/99af9b899fe1764c01b0b455e35f03e953d345282593dc27d03a8222d41fa144s-l1600.jpg', 'asdfa', 'Tamil', '2334', 'Sujatha', '233', '1212312', '123123', '111', '111', 'ps'),
(126, 'asfd', 'sadfsd', 'asdf', 'book_images/f89f88e5f2e7f9949ca2f0e1c146a6d41.jpg', 'f', 'asd', 'fa', 'sdfa', 'sd', 'af', 'sd', 'f', 'asdfasdf', '180476L'),
(127, '234234', 'Harry Potter 2', 'Novel', 'book_images/88ef1a7a649d147c7859746e40068d5aeb7dae24cc8803aa92fc7154e2e3a6f1en_iniya_iyanthira.jpg', 'Hari', 'English', '2401', 'KARTHICK S. KARTHICK S.', '233', '20-10-2020', '20-10-2016', '100', '100', '180476L');

-- --------------------------------------------------------

--
-- Table structure for table `borrowed_books`
--

CREATE TABLE `borrowed_books` (
  `id` int(6) NOT NULL,
  `book_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `borrowed_date` text NOT NULL DEFAULT 'current_timestamp(6)',
  `due_date` text NOT NULL DEFAULT 'current_timestamp(6)+604,800',
  `isReturned` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrowed_books`
--

INSERT INTO `borrowed_books` (`id`, `book_id`, `user_id`, `borrowed_date`, `due_date`, `isReturned`) VALUES
(1, '11121', '', '1601765808', '1602370608', 'Yes'),
(2, '112', '12112', '1601766346', '1602371146', 'Yes'),
(3, '1111111', '1122', '1601766425', '1602371225', 'Yes'),
(4, '18', '1111', '1601766851', '1602371651', 'Yes'),
(5, '18', '12112', '1601766920', '1602371720', 'Yes'),
(6, '18', '1122', '1601767609', '1602372409', 'Yes'),
(7, '18', '12112', '1601767661', '1602372461', 'Yes'),
(8, '18', '1122', '1601767737', '1602372537', 'Yes'),
(9, '18', '12112', '1601767774', '1602372574', 'Yes'),
(10, '18', '1', '1601769409', '1602374209', 'Yes'),
(11, '18', '12', '1601769780', '1602374580', 'Yes'),
(12, '2', '1', '1601772983', '1602377783', 'Yes'),
(15, '18', '12', '1601779904', '1602384704', 'Yes'),
(16, '18', '12', '1601779937', '1602384737', 'Yes'),
(17, '18', '12', '1601780013', '1602384813', 'Yes'),
(18, '18', '12', '1601780064', '1602384864', 'Yes'),
(19, '18', '12', '1601780088', '1602384888', 'Yes'),
(20, '18', '12', '1601780138', '1602384938', 'Yes'),
(21, '1', '12', '1601780469', '1602385269', 'Yes'),
(22, '1', '2', '1601780481', '1602385281', 'Yes'),
(23, '1', '222', '1601780618', '1602385418', 'Yes'),
(24, '2222', '222', '1601780628', '1602385428', 'Yes'),
(25, '18', '12', '1601780639', '1602385439', 'Yes'),
(26, '18', '12', '1601781010', '1602385810', 'Yes'),
(27, '18', '12', '1601781044', '1602385844', 'Yes'),
(28, '18', '12', '1601781065', '1602385865', 'Yes'),
(29, '18', '12', '1601781074', '1602385874', 'Yes'),
(30, '18', '12', '1601781075', '1602385875', 'Yes'),
(31, '18', '12', '1601781129', '1602385929', 'Yes'),
(32, '18', '12', '1601781188', '1602385988', 'Yes'),
(33, '20', '12', '1601781238', '1602386038', 'Yes'),
(34, '20', '12', '1601781404', '1602386204', 'Yes'),
(35, '20', '12', '1601781460', '1602386260', 'Yes'),
(36, '1231231231231231', '12121312312', '1601781592', '1602386392', 'Yes'),
(37, '1231231231231231', '12121312312', '1601781599', '1602386399', 'Yes'),
(38, '20', '12', '1601782001', '1602386801', 'Yes'),
(39, '18', '12', '1601782011', '1602386811', 'Yes'),
(41, '18', '12', '1601782125', '1602386925', 'Yes'),
(44, '111', '111', '1601782384', '1602387184', 'Yes'),
(45, '18', '12', '1601783221', '1602388021', 'Yes'),
(46, '18', '12', '1601879499', '1602484299', 'Yes'),
(47, '18', '12', '1601879524', '1602484324', 'Yes'),
(48, '3', '12', '1601880065', '1602484865', 'Yes'),
(50, '18', '12', '1607808906', '1608413706', 'Yes'),
(51, '18', '12', '1607809477', '1608414277', 'Yes'),
(52, '18', '12', '1607847834', '1608452634', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

CREATE TABLE `librarian` (
  `id` int(5) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `date` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `librarian`
--

INSERT INTO `librarian` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `nic`, `date`, `address`) VALUES
(14, 'Piraveen', 'Sivakumar', '180476L', 'eensiv10@gmail.com', '$2y$10$rRJNwa7s6kuqNM.VapyhnOE.uSyUFuP5P2IZVdsDweXYEk7M/MSCO', '982831660V', '1607846300', 'No 600 K.k.s Road');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `body` mediumtext NOT NULL,
  `created_time` text NOT NULL DEFAULT 'current_timestamp(6)',
  `sender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `subject`, `body`, `created_time`, `sender`) VALUES
(6, 'dasdasda', 'adsadasdasdasdasd', '1599920872', ''),
(8, 'dsadasdasdasdasdasdasd', 'dasdasdasdasd231231', '1601139358', ''),
(9, 'dasdadadas', '2321312312edasdas', '1601139363', ''),
(10, 'Welcome', 'Hi EveryBody New Book is arived #2321 # C++', '1601772314', ''),
(11, 'New Book arrived', 'A book that name is atomic habits', '1601879801', ''),
(12, 'Another book is arrived', 'The books is secret', '1601880002', ''),
(13, 'Hi this is very very interesting', 'This is body for new messages', '1607811136', '180476L'),
(14, 'Hi this is very very interesting', 'This is body for new messages', '1607811191', '180476L');

-- --------------------------------------------------------

--
-- Table structure for table `requested_books`
--

CREATE TABLE `requested_books` (
  `id` int(6) NOT NULL,
  `book_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `requested_time` varchar(255) NOT NULL,
  `isIssued` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requested_books`
--

INSERT INTO `requested_books` (`id`, `book_id`, `user_id`, `requested_time`, `isIssued`) VALUES
(28, '18', '12', '1601782099', 'Yes'),
(29, '18', '12', '1601782589', 'Yes'),
(30, '3', '12', '1601879914', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(5) NOT NULL,
  `regis_num` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `grade` varchar(6) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(500) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `password` varchar(500) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `regis_num`, `firstname`, `lastname`, `username`, `grade`, `address`, `email`, `nic`, `password`, `active`) VALUES
(1, '180476V', 'Piraveen ', 'Sivakumar ', '180476L', '10', 'Jaffna', 'Veensiva10@gmail.com', '2343', '1234', 'No'),
(2, '180596E', 'Shanmugabavan', 'Shanmugakumar', 'Shanmu', '12', 'Inuvil West, Inuvil', 'shanmugabavan25621@gmail.com', '180596E', 'Shanmu@25621', 'No'),
(7, '234', 'hari', 'Sivakumar ', '170288D', '11', 'senior lane, Jaffna', 'piraveensivakumar998@gmail.com', '115', '1234', 'Yes'),
(10, '1805', 'asdsa', 'asdasda', 'asda', '11', 'asda', 'shanmugabavan25621@gmail.com', 'asdas', '111', 'Yes'),
(12, '180476V', 'piraveennkk', 'sivakumar', 'ps', '111', '730,K.K.S road', 'veenindustry@gmail.com', '23232', '1234', 'Yes'),
(14, '1118881', 'Piraveen', 'Sivakumar', 'sdfasdfasdfas', '11', 'No 600 K.k.s Road', 'veensiva10@gmail.com', '982831660V', '$2y$10$POXomjxyqilKpltiARGH2u/c35eDxGeNIgL9ZFIvqq5oPln52AB0.', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, '180476L', 'veensiva10@gmail.com', '$2y$10$7VuYE/z6mDKPVRNx4OchLeJu0CU7MBZeMymOMjjivTA1EZbTerj7S');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books_details`
--
ALTER TABLE `books_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrowed_books`
--
ALTER TABLE `borrowed_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `librarian`
--
ALTER TABLE `librarian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requested_books`
--
ALTER TABLE `requested_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
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
-- AUTO_INCREMENT for table `books_details`
--
ALTER TABLE `books_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `borrowed_books`
--
ALTER TABLE `borrowed_books`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `librarian`
--
ALTER TABLE `librarian`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `requested_books`
--
ALTER TABLE `requested_books`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
