-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2020 at 08:07 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `from` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `message`, `from`, `created`) VALUES
(1, 'Hello wolrd', 'grace', '2020-10-28 07:31:08'),
(2, 'Good job dear webmaster', 'eunick', '2020-10-28 07:45:55'),
(3, 'this is what we want come from you', 'eunick', '2020-10-28 07:46:11'),
(4, 'Hey i am not who you think i am', 'Denise', '2020-10-28 07:49:38'),
(5, 'Is it true?', 'Ghost', '2020-10-28 07:50:03'),
(6, 'Or not', 'Ghost', '2020-10-28 07:50:08'),
(7, 'Hey, how are you?', 'Ghost', '2020-10-28 07:53:59'),
(8, 'Good', 'Eunick', '2020-10-28 07:56:19'),
(9, 'Hello eunck', 'Francine', '2020-10-28 07:57:01'),
(10, 'Hello', 'Good', '2020-10-28 07:58:17'),
(11, 'Elaijah', 'Good', '2020-10-28 07:59:56'),
(12, 'Welcome', 'Good', '2020-10-28 08:00:07'),
(13, 'Are you okay', 'Good', '2020-10-28 08:00:18'),
(14, 'Hey #Good', 'Elaijah', '2020-10-28 08:00:52'),
(15, 'How is it?', 'Elaijah', '2020-10-28 08:01:01'),
(16, 'Hello everybody', 'Ariel', '2020-10-28 08:01:56'),
(17, 'Today i want to know the target of this group?', 'Ariel', '2020-10-28 08:02:19'),
(18, 'This group should help student like us to share our knowledge, our problem in programming... this works like stackoverflow', 'Jean-pierre', '2020-10-28 08:03:41'),
(19, 'Is it okay ', 'Peter', '2020-10-28 08:12:39'),
(20, '      ', 'Peter', '2020-10-28 08:12:46'),
(21, 'Good, where are you?', 'Grace', '2020-10-28 08:18:00'),
(22, 'I am in rwanda quarantine', 'Grace', '2020-10-28 12:05:08'),
(23, 'Is here with me', 'Augustin', '2020-10-28 12:06:01'),
(24, 'Here with sniper', 'Israel', '2020-10-28 12:08:25'),
(25, 'Github', 'Grace', '2020-10-29 06:55:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
