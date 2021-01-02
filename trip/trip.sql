-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2019 at 05:36 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trip`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `admin` ()  SELECT * FROM reservation,roompayment where reservation.id=roompayment.paymentID$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `dining`
--

CREATE TABLE `dining` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `members` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dining`
--

INSERT INTO `dining` (`id`, `name`, `email`, `contact`, `type`, `date`, `members`) VALUES
(1, 'Jeevan Kishore K N', 'jeevankishore21@gmail.com', '9008892001', 'Breakfast', '10/23/2019', 3),
(2, 'Nikhil', 'nikhilsingh@gmail.com', '9343436313', 'Lunch', '11/07/2019', 3),
(3, 'Pavan', 'pavanavittala@gmail.com', '9131213161', 'Dinner', '11/22/2019', 4),
(4, 'Jeevan Kishore K N', 'jeevankishore21@gmail.com', '9008892001', 'Lunch', '10/23/2019', 7),
(8, 'Nikhil', 'aish123@gmail.com', '9343436313', 'Breakfast', '11/07/2019', 2);

--
-- Triggers `dining`
--
DELIMITER $$
CREATE TRIGGER `dining_pay_update` AFTER INSERT ON `dining` FOR EACH ROW INSERT INTO diningpayment(paymentID,amount) VALUES (new.id,500*(new.members))
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `diningpayment`
--

CREATE TABLE `diningpayment` (
  `paymentID` int(255) NOT NULL,
  `amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diningpayment`
--

INSERT INTO `diningpayment` (`paymentID`, `amount`) VALUES
(1, 1500),
(2, 1500),
(3, 2000),
(4, 3500),
(8, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `ID` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Jeevan Kishore K N', 'jeevankishore21@gmail.com', 'Facilities', 'AMAZING!!!!');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `pid` int(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `days` int(255) NOT NULL,
  `nights` int(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `img4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`pid`, `pname`, `days`, `nights`, `amount`, `img1`, `img2`, `img3`, `img4`) VALUES
(1, 'Manali', 3, 2, 45000, 'imgs/ma4.jpg', 'imgs/ma1.jpg', 'imgs/ma3.jpg', 'imgs/manali.jpg'),
(2, 'Singapore', 7, 6, 90000, 'imgs/si2.jpg', 'imgs/si3.jpg', 'imgs/si1.jpg', 'imgs/si4.jpg'),
(3, 'Bali', 5, 4, 35000, 'imgs/ba4.jpg', 'imgs/ba5.jpg', 'imgs/ba6.jpg', 'imgs/ba7.jpg'),
(4, 'Ladakh', 6, 5, 55000, 'imgs/la1.jpg', 'imgs/la2.jpg', 'imgs/lad.jpg', 'imgs/leh.jpg'),
(5, 'Maldives', 10, 9, 150000, 'imgs/mad7.jpg', 'imgs/mad5.jpg', 'imgs/mad4.jpg', 'imgs/mad6.jpg'),
(6, 'Lonavala', 3, 2, 12000, 'imgs/lo.jpg', 'imgs/lo2.jpg', 'imgs/fireflies.jpg', 'imgs/fi1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `members` int(255) NOT NULL,
  `checkin` varchar(255) NOT NULL,
  `package` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `name`, `email`, `contact`, `members`, `checkin`, `package`) VALUES
(26, 'Nikhil', 'admin@gmail.com', '1234567890', 2, '11/04/2019', 5),
(28, 'Pavan', 'admin@gmail.com', '1234567890', 3, '10/31/2019', 2),
(29, 'Jeevan Kishore K N', 'jeevankishore21@gmail.com', '9343436313', 4, '11/05/2019', 5),
(30, 'Nikhil', 'aish123@gmail.com', '9008892001', 1, '09/15/2019', 2),
(31, 'Nikhil', 'aish123@gmail.com', '9008892001', 1, '11/05/2019', 1),
(32, 'Nikhil', 'jeevankishore21@gmail.com', '9008892001', 2, '09/19/2019', 1),
(33, 'Jeevan Kishore K N', 'nikhilsingh@gmail.com', '1234567890', 2, '09/15/2019', 1),
(34, 'Pavan', 'nikhilsingh@gmail.com', '9343436313', 2, '09/19/2019', 1),
(35, 'Nikhil', 'aish123@gmail.com', '9008892001', 6, '09/27/2019', 1),
(36, 'Nikhil', 'aish123@gmail.com', '9343436313', 3, '11/13/2019', 1),
(37, 'Nikhil', 'nikhilsingh@gmail.com', '9323436373', 2, '10/09/2019', 3),
(38, 'Pavan', 'nikhilsingh@gmail.com', '900000000', 1, '09/27/2019', 5),
(39, 'Nikhil', 'nikhilsingh@gmail.com', '9008892001', 2, '11/12/2019', 3),
(43, 'Pavan', 'aish123@gmail.com', '9008892001', 2, '10/09/2019', 1);

-- --------------------------------------------------------

--
-- Table structure for table `roompayment`
--

CREATE TABLE `roompayment` (
  `paymentID` int(255) NOT NULL,
  `amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roompayment`
--

INSERT INTO `roompayment` (`paymentID`, `amount`) VALUES
(28, 270000),
(29, 600000),
(30, 12000),
(32, 45000),
(34, 150000),
(35, 45000),
(36, 55000),
(37, 70000),
(38, 150000),
(39, 70000),
(43, 90000);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`firstname`, `lastname`, `email`, `password`) VALUES
('Aditya', 'Harish', 'aditya@gmail.com', '$2y$10$iM1IYqeMn0xmszELgDQerOKSN5oEKH2AnNoADFREZiCHJFFduYRC.'),
('admin', 'admin', 'admin@gmail.com', '$2y$10$n8gowFqU1xf3Au0NExJfmu9Oo/MkNFO31o14NQNLvyG575YMwoWVG'),
('Aishwarya', 'B J', 'aish123@gmail.com', '$2y$10$PtkFKs4w.gMRbolxb434heVzQdpRixEt6w7aY30wxeSMLo7VaxR2u'),
('Apeksha', 'Bharadwaj', 'apeksha.bharadwaj@gmail.com', '$2y$10$ZJQcXpMMMZ/7OaNtOjxlROL1Mvoi1WArC8xXK3Xde7eumYLs85DHK'),
('fewf', 'dwdw', 'ewff@geg.com', '$2y$10$SIIEwABpFtL4XmFzKkw0G.wFC.XcoSyAplETl93833HCfb2ctKcc2'),
('Goutham', 'Kumar', 'goutham@gmail.com', '$2y$10$KhUzVAFVW15EE1rXndMjze5Q9i5ZCf8sva1RZ3rnuWt6glTxivNly'),
('Jeevan', 'Kishore', 'jeevankishore21@gmail.com', '$2y$10$YWyLPAZyKbcVYsj5qe640.XSgOJRGrwOKvR6JPjsHiwEnckjijKjO'),
('Koushal', 'Bhat', 'koushal@gmail.com', '$2y$10$lmKdE23A7oQ24y14xKR5P.4/K3WI8Rzw4PzCRK7kIT4IkAImBmctC'),
('Nikhil', 'Singh', 'nik@gmail.com', '$2y$10$VaaqnJTFv43QSHnyDQuiguTSh0hU5vAyOOgQ18YglBKwTN4dSN2qu'),
('Nikhil', 'Singh', 'nikhilsingh@gmail.com', '$2y$10$JxDLrkxeZj6epq2PwNCynOe3IxsC3m9pNaCmkemisKbezulAB2Rri'),
('Nitisha', 'J B', 'nitisha@gmail.com', '$2y$10$Ua27YgbGxuKKlDB7oIu0y.NmDzXxEVj0iMVnov.BRSHGAum0UOr/e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dining`
--
ALTER TABLE `dining`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diningpayment`
--
ALTER TABLE `diningpayment`
  ADD PRIMARY KEY (`paymentID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `subject` (`subject`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roompayment`
--
ALTER TABLE `roompayment`
  ADD PRIMARY KEY (`paymentID`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dining`
--
ALTER TABLE `dining`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `diningpayment`
--
ALTER TABLE `diningpayment`
  MODIFY `paymentID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `pid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `roompayment`
--
ALTER TABLE `roompayment`
  MODIFY `paymentID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `diningpayment`
--
ALTER TABLE `diningpayment`
  ADD CONSTRAINT `diningpayment_ibfk_1` FOREIGN KEY (`paymentID`) REFERENCES `dining` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `roompayment`
--
ALTER TABLE `roompayment`
  ADD CONSTRAINT `roompayment_ibfk_1` FOREIGN KEY (`paymentID`) REFERENCES `reservation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
