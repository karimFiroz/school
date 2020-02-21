-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2019 at 05:58 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE `dealer` (
  `id` int(11) NOT NULL,
  `customerId` varchar(25) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(25) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dealer`
--

INSERT INTO `dealer` (`id`, `customerId`, `name`, `address`, `city`, `phone`) VALUES
(1, 'c1001', 'Karim', 'CompuSoft', 'Rohanpur', '01818830761'),
(2, 'c1002', 'Basir', 'ComputerGn', 'Nawabgong', '01818830761'),
(3, 'c1003', 'Jabbar', 'CitechoNet', 'Rajshahi', '01823112313'),
(4, 'c1004', 'Hasan', 'ShoftEd', 'Shibgong', '01715383451'),
(5, 'c1005', 'Shahid', 'SysTech', 'Alampur', '01933922125'),
(6, 'c1006', 'Iqbal', 'BIIT', 'Sonaichandi', '01994925951'),
(7, 'c1007', 'Zakri', 'CINT', 'Nachol', '01991945079'),
(8, 'c1001', 'Hossain', 'Amnura', 'Rohanpur', '01534881475');

-- --------------------------------------------------------

--
-- Table structure for table `dhaka_tour`
--

CREATE TABLE `dhaka_tour` (
  `roll` int(11) NOT NULL,
  `name` varchar(15) DEFAULT NULL,
  `gender` varchar(25) DEFAULT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dhaka_tour`
--

INSERT INTO `dhaka_tour` (`roll`, `name`, `gender`, `age`) VALUES
(104, 'Rahima', 'Female', 19),
(105, 'Farjana', 'Female', 17),
(106, 'Mahfuza', 'Female', 16),
(107, 'Shakila', 'Female', 19);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `jobTitle` varchar(25) DEFAULT NULL,
  `department` varchar(25) DEFAULT NULL,
  `address` varchar(25) DEFAULT NULL,
  `joinDate` varchar(25) DEFAULT NULL,
  `salary` double(11,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `jobTitle`, `department`, `address`, `joinDate`, `salary`) VALUES
(1, 'Aminul', 'Accountant', 'Admin', 'Norshingdi', '9/9/90', 9200.00),
(2, 'Morshed', 'Manager', 'Admin', 'Dhaka', '12/11/92', 8500.00),
(3, 'Shahid', 'Officer', 'Finance', 'Khulna', '12/11/92', 7000.00),
(4, 'Ratan', 'Officer', 'Finance', 'Barishal', '10/2/97', 6000.00),
(5, 'Safiq', 'Officer', 'Admin', 'Jessore', '12/12/96', 5400.00),
(6, 'Hasan', 'SalesRep', 'Marketing', 'Sylhet', '10/9/93', 5500.00),
(7, 'Tareq', 'SalesRep', 'Marketing', 'Dhaka', '12/11/94', 4890.00),
(8, 'Zahid', 'SalesRep', 'Marketing', 'Chittagong', '12/11/92', 5400.00),
(9, 'Rafiq', 'Driver', 'Admin', 'Khulna', '9/11/94', 4000.00),
(10, 'Jabber', 'Peon', 'Admin', 'Dhaka', '11/21/94', 2300.00),
(11, 'Shahadat', 'Operator', 'Admin', 'Barishal', '11/19/93', 11400.00),
(12, 'Farhana', 'Operator', 'Admin', 'Dhaka', '9/9/93', 4300.00),
(13, 'Farid', 'Peon', 'Finance', 'Rajshahi', '10/15/92', 2400.00),
(14, 'Shahana', 'Receiptionist', 'Admin', 'Tangail', '11/12/93', 3500.00),
(15, 'Kasem', 'Officer', 'Marketing', 'Khulna', '11/17/93', 5200.00),
(16, 'Yousuf', 'Officer', 'Finance', 'Dhaka', '11/21/93', 4700.00);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `reg_Number` int(11) NOT NULL,
  `roll` int(11) DEFAULT NULL,
  `gpa` double(11,2) DEFAULT NULL,
  `group_Name` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`reg_Number`, `roll`, `gpa`, `group_Name`) VALUES
(20171, 102, 3.25, 'Science'),
(20172, 101, 3.44, 'Arts'),
(20173, 103, 4.00, 'Science'),
(20174, 104, 5.00, 'Commerce'),
(20175, 109, 4.95, 'Commerce');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `billNumber` int(11) DEFAULT NULL,
  `date` varchar(15) DEFAULT NULL,
  `item` varchar(25) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `rate` double(11,2) DEFAULT NULL,
  `paid` varchar(15) DEFAULT NULL,
  `customerId` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `billNumber`, `date`, `item`, `quantity`, `rate`, `paid`, `customerId`) VALUES
(1, 101, '11/12/99', 'HDD', 7, 5500.00, 'Yes', 'c1003'),
(2, 102, '11/12/99', 'HDD', 10, 5500.00, 'Yes', 'c1003'),
(3, 103, '11/12/99', 'Monitor', 11, 8500.00, 'Yes', 'c1003'),
(4, 104, '11/12/99', 'HDD', 9, 500.00, 'No', 'c1003'),
(5, 105, '11/12/99', 'Loud Speaker', 8, 1500.00, 'Yes', 'c1003'),
(6, 106, '11/12/99', 'HDD', 4, 5500.00, 'Yes', 'c1001'),
(7, 107, '11/12/99', 'HDD', 6, 5500.00, 'Yes', 'c1002'),
(8, 108, '11/12/99', 'Key Board', 3, 500.00, 'Yes', 'c1006'),
(9, 109, '11/12/99', 'HDD', 9, 5500.00, 'Yes', 'c1004'),
(10, 110, '11/12/99', 'Monitor', 2, 8500.00, 'No', 'c1005'),
(11, 111, '11/12/99', 'HDD', 1, 5500.00, 'Yes', 'c1007'),
(12, 112, '11/12/99', 'CD Rom', 5, 3500.00, 'Yes', 'c1002'),
(13, 113, '11/12/99', 'Casing', 12, 2500.00, 'No', 'c1006'),
(14, 114, '11/12/99', 'Mouse', 45, 300.00, 'Yes', 'c1003'),
(15, 115, '11/12/99', 'HDD', 23, 5500.00, 'Yes', 'c1004'),
(16, 116, '11/12/99', 'HDD', 21, 5500.00, 'No', 'c1001'),
(17, 117, '11/12/99', 'CD Romm', 14, 2500.00, 'Yes', 'c1005'),
(18, 118, '11/12/99', 'HDD', 12, 5500.00, 'Yes', 'c1008'),
(19, 119, '11/12/99', 'Pendrive', 7, 500.00, 'No', 'c1007'),
(20, 120, '11/12/99', 'HDD', 4, 5500.00, 'Yes', 'c1003');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `roll` int(5) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `age` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`roll`, `name`, `gender`, `age`) VALUES
(101, 'Rahim', 'Male', '18'),
(102, 'Karim', 'Male', '20'),
(103, 'firoza', 'Female', '17'),
(104, 'Mahfuz', 'Male', '18'),
(105, 'Farjana', 'Female', '17'),
(106, 'Shahin', 'Male', '24'),
(107, 'Shahina', 'Female', '22'),
(108, 'Sweety', 'Female', '24');

-- --------------------------------------------------------

--
-- Stand-in structure for view `student_view`
--
CREATE TABLE `student_view` (
`roll` int(5)
,`name` varchar(20)
,`gender` varchar(10)
);

-- --------------------------------------------------------

--
-- Table structure for table `sylhet_tour`
--

CREATE TABLE `sylhet_tour` (
  `roll` int(11) NOT NULL,
  `name` varchar(15) DEFAULT NULL,
  `gender` varchar(25) DEFAULT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sylhet_tour`
--

INSERT INTO `sylhet_tour` (`roll`, `name`, `gender`, `age`) VALUES
(101, 'Rahim', 'Male', 18),
(102, 'Karim', 'Male', 17),
(103, 'Sujon', 'Male', 18),
(104, 'Rahima', 'Female', 19);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `salary` double(11,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `salary`) VALUES
(1000, 'Alak Kanti Roy', 35000.00),
(1001, 'Rumel M S PIR', 45000.00),
(1002, 'Saiful Ambia', 32000.00),
(1003, 'Rubel', 9000.00),
(1004, 'Salina', 32000.00),
(1005, 'Asad', 38000.00),
(1006, 'Sohid', 33500.00),
(1007, 'Alin', 33000.00),
(1008, 'Dola Barua', 32000.00),
(1009, 'Karim', 45000.00),
(1010, 'Firoz', 32000.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure for view `student_view`
--
DROP TABLE IF EXISTS `student_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `student_view`  AS  select `student`.`roll` AS `roll`,`student`.`name` AS `name`,`student`.`gender` AS `gender` from `student` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dealer`
--
ALTER TABLE `dealer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dhaka_tour`
--
ALTER TABLE `dhaka_tour`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`reg_Number`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `sylhet_tour`
--
ALTER TABLE `sylhet_tour`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
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
-- AUTO_INCREMENT for table `dealer`
--
ALTER TABLE `dealer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `dhaka_tour`
--
ALTER TABLE `dhaka_tour`
  MODIFY `roll` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `reg_Number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20176;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `roll` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT for table `sylhet_tour`
--
ALTER TABLE `sylhet_tour`
  MODIFY `roll` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1011;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
