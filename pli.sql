-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2018 at 03:36 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pli`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `lon` FLOAT(5,5) NOT NULL,
  `lat` FLOAT(5,5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `category`, `location`, `description`, `phone`, `img`, `pname`, `price`,`lon`,`lat`) VALUES
(1, 'rh', 'kurunegala', 'Description\r\nhrh', '86', './uploads/land3.jpg', 'hreh', '20LAK',6.8433, 80.0032),
(2, 'p3', 'homagama', 'Description\r\nwfwygfuiw8eg7w8', '8484', './uploads/land2.jpg', 'p2', '20LAK',6.8433, 80.0032),
(3, 'car', 'kottawa', 'Description\r\negwgAEFUIgiughfiuHBIUBHUIGYFGYFGUYEuyegfuiegfgygfgfuygfiugacuyhabyagefyuahva', '77884954', './uploads/land.jpg', 'p3', '50LAK',6.8412,79.9654),
(4, 'food', 'colombo','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit dolores perferendis quis iusto voluptate culpa, provident recusandae fugiat velit debitis. Ipsa odio nulla, voluptates obcaecati hic inventore necessitatibus animi aliquam delectus! Distinctio eos perspiciatis aspernatur praesentium earum, expedita aliquam ducimus temporibus, consequuntur ad dolor, voluptas, labore tempore cupiditate! Omnis, doloribus.', '995857485', './uploads/land1.jpg', 'p5', '60LAK',6.9271,79.8612);
-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_fullname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `user_fullname`, `password`, `role`, `email`, `phone`) VALUES
(1, 'user1', '', 'user1', 'user', '', ''),
(2, 'user2', '', 'user2', 'user', '', ''),
(3, 'user3', 'user 3', 'user3', 'user', 'user3@gmail.com', '879878');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
