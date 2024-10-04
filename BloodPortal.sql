-- phpMyAdmin SQL Dump
-- version 5.2.1deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 04, 2024 at 11:37 PM
-- Server version: 10.11.6-MariaDB-0+deb12u1
-- PHP Version: 8.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BloodPortal`
--

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(11) NOT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `donation_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `blood_group` varchar(3) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `name`, `phone`, `email`, `blood_group`, `city`, `state`, `created_at`) VALUES
(315, 'Aarav Patil', '+91-9876543210', 'aarav.patil@example.com', 'A+', 'Mumbai', 'Maharashtra', '2024-10-04 22:18:05'),
(316, 'Ananya Joshi', '+91-9123456789', 'ananya.joshi@example.com', 'A+', 'Mumbai', 'Maharashtra', '2024-10-04 22:18:05'),
(317, 'Rohan Shetty', '+91-9345678901', 'rohan.shetty@example.com', 'A+', 'Mumbai', 'Maharashtra', '2024-10-04 22:18:05'),
(318, 'Vikram Rao', '+91-9876123456', 'vikram.rao@example.com', 'A-', 'Mumbai', 'Maharashtra', '2024-10-04 22:18:05'),
(319, 'Sana Khan', '+91-9876345678', 'sana.khan@example.com', 'A-', 'Mumbai', 'Maharashtra', '2024-10-04 22:18:05'),
(320, 'Ria Sharma', '+91-9988776655', 'ria.sharma@example.com', 'A-', 'Mumbai', 'Maharashtra', '2024-10-04 22:18:05'),
(321, 'Karan Mehta', '+91-9900887766', 'karan.mehta@example.com', 'B+', 'Mumbai', 'Maharashtra', '2024-10-04 22:18:05'),
(322, 'Priya Desai', '+91-9333444555', 'priya.desai@example.com', 'B+', 'Mumbai', 'Maharashtra', '2024-10-04 22:18:05'),
(323, 'Nikhil Kapoor', '+91-9556677888', 'nikhil.kapoor@example.com', 'B+', 'Mumbai', 'Maharashtra', '2024-10-04 22:18:05'),
(324, 'Pooja Verma', '+91-9445566778', 'pooja.verma@example.com', 'B-', 'Mumbai', 'Maharashtra', '2024-10-04 22:18:05'),
(325, 'Aditi Singh', '+91-9333221100', 'aditi.singh@example.com', 'B-', 'Mumbai', 'Maharashtra', '2024-10-04 22:18:05'),
(326, 'Vivek Choudhury', '+91-9654321098', 'vivek.choudhury@example.com', 'B-', 'Mumbai', 'Maharashtra', '2024-10-04 22:18:05'),
(327, 'Neha Gupta', '+91-9098765432', 'neha.gupta@example.com', 'AB+', 'Mumbai', 'Maharashtra', '2024-10-04 22:18:05'),
(328, 'Siddharth Jain', '+91-9801234567', 'siddharth.jain@example.com', 'AB+', 'Mumbai', 'Maharashtra', '2024-10-04 22:18:05'),
(329, 'Riya Yadav', '+91-9123456780', 'riya.yadav@example.com', 'AB-', 'Mumbai', 'Maharashtra', '2024-10-04 22:18:05'),
(330, 'Rahul Sharma', '+91-9808765432', 'rahul.sharma@example.com', 'AB-', 'Mumbai', 'Maharashtra', '2024-10-04 22:18:05'),
(331, 'Arjun Khatri', '+91-9393939393', 'arjun.khatri@example.com', 'O+', 'Mumbai', 'Maharashtra', '2024-10-04 22:18:05'),
(332, 'Tina Mehta', '+91-9505050505', 'tina.mehta@example.com', 'O+', 'Mumbai', 'Maharashtra', '2024-10-04 22:18:05'),
(333, 'Simran Singh', '+91-9606060606', 'simran.singh@example.com', 'O+', 'Mumbai', 'Maharashtra', '2024-10-04 22:18:05'),
(334, 'Lakshmi Rao', '+91-9707070707', 'lakshmi.rao@example.com', 'O-', 'Mumbai', 'Maharashtra', '2024-10-04 22:18:05'),
(335, 'Anjali Saini', '+91-9808080808', 'anjali.saini@example.com', 'O-', 'Mumbai', 'Maharashtra', '2024-10-04 22:18:05'),
(336, 'Aniket Sharma', '+91-9912345678', 'aniket.sharma@example.com', 'A+', 'New Delhi', 'Delhi', '2024-10-04 22:18:05'),
(337, 'Riya Kapoor', '+91-9923456789', 'riya.kapoor@example.com', 'A+', 'New Delhi', 'Delhi', '2024-10-04 22:18:05'),
(338, 'Karan Singh', '+91-9934567890', 'karan.singh@example.com', 'A+', 'New Delhi', 'Delhi', '2024-10-04 22:18:05'),
(339, 'Vikram Mehta', '+91-9945678901', 'vikram.mehta@example.com', 'A-', 'New Delhi', 'Delhi', '2024-10-04 22:18:05'),
(340, 'Tanya Verma', '+91-9956789012', 'tanya.verma@example.com', 'A-', 'New Delhi', 'Delhi', '2024-10-04 22:18:05'),
(341, 'Rohit Aggarwal', '+91-9967890123', 'rohit.aggarwal@example.com', 'A-', 'New Delhi', 'Delhi', '2024-10-04 22:18:05'),
(342, 'Priya Bansal', '+91-9978901234', 'priya.bansal@example.com', 'B+', 'New Delhi', 'Delhi', '2024-10-04 22:18:05'),
(343, 'Siddharth Yadav', '+91-9989012345', 'siddharth.yadav@example.com', 'B+', 'New Delhi', 'Delhi', '2024-10-04 22:18:05'),
(344, 'Nikita Jain', '+91-9990123456', 'nikita.jain@example.com', 'B+', 'New Delhi', 'Delhi', '2024-10-04 22:18:05'),
(345, 'Anjali Nair', '+91-9001234567', 'anjali.nair@example.com', 'B-', 'New Delhi', 'Delhi', '2024-10-04 22:18:05'),
(346, 'Rahul Iyer', '+91-9012345678', 'rahul.iyer@example.com', 'B-', 'New Delhi', 'Delhi', '2024-10-04 22:18:05'),
(347, 'Pooja Reddy', '+91-9023456789', 'pooja.reddy@example.com', 'B-', 'New Delhi', 'Delhi', '2024-10-04 22:18:05'),
(348, 'Shivam Roy', '+91-9034567890', 'shivam.roy@example.com', 'AB+', 'New Delhi', 'Delhi', '2024-10-04 22:18:05'),
(349, 'Rhea Singh', '+91-9045678901', 'rhea.singh@example.com', 'AB+', 'New Delhi', 'Delhi', '2024-10-04 22:18:05'),
(350, 'Nandita Das', '+91-9056789012', 'nandita.das@example.com', 'AB-', 'New Delhi', 'Delhi', '2024-10-04 22:18:05'),
(351, 'Varun Paul', '+91-9067890123', 'varun.paul@example.com', 'AB-', 'New Delhi', 'Delhi', '2024-10-04 22:18:05'),
(352, 'Mohan Ranjan', '+91-9078901234', 'mohan.ranjan@example.com', 'O+', 'New Delhi', 'Delhi', '2024-10-04 22:18:05'),
(353, 'Aditi Khanna', '+91-9089012345', 'aditi.khanna@example.com', 'O+', 'New Delhi', 'Delhi', '2024-10-04 22:18:05'),
(354, 'Tanya Sethi', '+91-9090123456', 'tanya.sethi@example.com', 'O+', 'New Delhi', 'Delhi', '2024-10-04 22:18:05'),
(355, 'Raghav Das', '+91-9101234567', 'raghav.das@example.com', 'O-', 'New Delhi', 'Delhi', '2024-10-04 22:18:05'),
(356, 'Nisha Gupta', '+91-9112345678', 'nisha.gupta@example.com', 'O-', 'New Delhi', 'Delhi', '2024-10-04 22:18:05'),
(357, 'Suresh Bhat', '+91-9123456789', 'suresh.bhat@example.com', 'A+', 'Bangalore', 'Karnataka', '2024-10-04 22:18:05'),
(358, 'Aarav Kiran', '+91-9134567890', 'aarav.kiran@example.com', 'A+', 'Bangalore', 'Karnataka', '2024-10-04 22:18:05'),
(359, 'Nidhi Rao', '+91-9145678901', 'nidhi.rao@example.com', 'A+', 'Bangalore', 'Karnataka', '2024-10-04 22:18:05'),
(360, 'Chaitanya Shetty', '+91-9156789012', 'chaitanya.shetty@example.com', 'A-', 'Bangalore', 'Karnataka', '2024-10-04 22:18:05'),
(361, 'Meera Joshi', '+91-9167890123', 'meera.joshi@example.com', 'A-', 'Bangalore', 'Karnataka', '2024-10-04 22:18:05'),
(362, 'Rohit Nair', '+91-9178901234', 'rohit.nair@example.com', 'A-', 'Bangalore', 'Karnataka', '2024-10-04 22:18:05'),
(363, 'Shivani Ramesh', '+91-9189012345', 'shivani.ramesh@example.com', 'B+', 'Bangalore', 'Karnataka', '2024-10-04 22:18:05'),
(364, 'Deepak Verma', '+91-9190123456', 'deepak.verma@example.com', 'B+', 'Bangalore', 'Karnataka', '2024-10-04 22:18:05'),
(365, 'Sneha Agarwal', '+91-9201234567', 'sneha.agarwal@example.com', 'B+', 'Bangalore', 'Karnataka', '2024-10-04 22:18:05'),
(366, 'Priya Kulkarni', '+91-9212345678', 'priya.kulkarni@example.com', 'B-', 'Bangalore', 'Karnataka', '2024-10-04 22:18:05'),
(367, 'Vikas Patil', '+91-9223456789', 'vikas.patil@example.com', 'B-', 'Bangalore', 'Karnataka', '2024-10-04 22:18:05'),
(368, 'Sofia Gupta', '+91-9234567890', 'sofia.gupta@example.com', 'B-', 'Bangalore', 'Karnataka', '2024-10-04 22:18:05'),
(369, 'Tarun Menon', '+91-9245678901', 'tarun.menon@example.com', 'AB+', 'Bangalore', 'Karnataka', '2024-10-04 22:18:05'),
(370, 'Lavanya Rao', '+91-9256789012', 'lavanya.rao@example.com', 'AB+', 'Bangalore', 'Karnataka', '2024-10-04 22:18:05'),
(371, 'Amit Kumar', '+91-9267890123', 'amit.kumar@example.com', 'AB-', 'Bangalore', 'Karnataka', '2024-10-04 22:18:05'),
(372, 'Tania Singh', '+91-9278901234', 'tania.singh@example.com', 'AB-', 'Bangalore', 'Karnataka', '2024-10-04 22:18:05'),
(373, 'Pavan Nayak', '+91-9289012345', 'pavan.nayak@example.com', 'O+', 'Bangalore', 'Karnataka', '2024-10-04 22:18:05'),
(374, 'Geeta Shetty', '+91-9290123456', 'geeta.shetty@example.com', 'O+', 'Bangalore', 'Karnataka', '2024-10-04 22:18:05'),
(375, 'Rahul Verma', '+91-9301234567', 'rahul.verma@example.com', 'O+', 'Bangalore', 'Karnataka', '2024-10-04 22:18:05'),
(376, 'Prathap Reddy', '+91-9312345678', 'prathap.reddy@example.com', 'O-', 'Bangalore', 'Karnataka', '2024-10-04 22:18:05'),
(377, 'Neha Rao', '+91-9323456789', 'neha.rao@example.com', 'O-', 'Bangalore', 'Karnataka', '2024-10-04 22:18:05'),
(378, 'Aadhav Ramesh', '+91-9334567890', 'aadhav.ramesh@example.com', 'A+', 'Chennai', 'Tamil Nadu', '2024-10-04 22:18:05'),
(379, 'Vani Suresh', '+91-9345678901', 'vani.suresh@example.com', 'A+', 'Chennai', 'Tamil Nadu', '2024-10-04 22:18:05'),
(380, 'Kavitha Kumar', '+91-9356789012', 'kavitha.kumar@example.com', 'A+', 'Chennai', 'Tamil Nadu', '2024-10-04 22:18:05'),
(381, 'Pavan Selvan', '+91-9367890123', 'pavan.selvan@example.com', 'A-', 'Chennai', 'Tamil Nadu', '2024-10-04 22:18:05'),
(382, 'Meera Kannan', '+91-9378901234', 'meera.kannan@example.com', 'A-', 'Chennai', 'Tamil Nadu', '2024-10-04 22:18:05'),
(383, 'Nishant Reddy', '+91-9389012345', 'nishant.reddy@example.com', 'A-', 'Chennai', 'Tamil Nadu', '2024-10-04 22:18:05'),
(384, 'Kiran Suresh', '+91-9390123456', 'kiran.suresh@example.com', 'B+', 'Chennai', 'Tamil Nadu', '2024-10-04 22:18:05'),
(385, 'Geetha Sharma', '+91-9401234567', 'geetha.sharma@example.com', 'B+', 'Chennai', 'Tamil Nadu', '2024-10-04 22:18:05'),
(386, 'Ravi Mohan', '+91-9412345678', 'ravi.mohan@example.com', 'B+', 'Chennai', 'Tamil Nadu', '2024-10-04 22:18:05'),
(387, 'Swathi Iyer', '+91-9423456789', 'swathi.iyer@example.com', 'B-', 'Chennai', 'Tamil Nadu', '2024-10-04 22:18:05'),
(388, 'Rajesh Karthik', '+91-9434567890', 'rajesh.karthik@example.com', 'B-', 'Chennai', 'Tamil Nadu', '2024-10-04 22:18:05'),
(389, 'Sakshi Rani', '+91-9445678901', 'sakshi.rani@example.com', 'B-', 'Chennai', 'Tamil Nadu', '2024-10-04 22:18:05'),
(390, 'Ananya Das', '+91-9456789012', 'ananya.das@example.com', 'AB+', 'Chennai', 'Tamil Nadu', '2024-10-04 22:18:05'),
(391, 'Kumar Raja', '+91-9467890123', 'kumar.raja@example.com', 'AB+', 'Chennai', 'Tamil Nadu', '2024-10-04 22:18:05'),
(392, 'Vikrant Prasad', '+91-9478901234', 'vikrant.prasad@example.com', 'AB-', 'Chennai', 'Tamil Nadu', '2024-10-04 22:18:05'),
(393, 'Puja Naik', '+91-9489012345', 'puja.naik@example.com', 'AB-', 'Chennai', 'Tamil Nadu', '2024-10-04 22:18:05'),
(394, 'Arun Raj', '+91-9490123456', 'arun.raj@example.com', 'O+', 'Chennai', 'Tamil Nadu', '2024-10-04 22:18:05'),
(395, 'Sanjana Rao', '+91-9501234567', 'sanjana.rao@example.com', 'O+', 'Chennai', 'Tamil Nadu', '2024-10-04 22:18:05'),
(396, 'Lakshmi Kannan', '+91-9512345678', 'lakshmi.kannan@example.com', 'O+', 'Chennai', 'Tamil Nadu', '2024-10-04 22:18:05'),
(397, 'Nisha Devi', '+91-9523456789', 'nisha.devi@example.com', 'O-', 'Chennai', 'Tamil Nadu', '2024-10-04 22:18:05'),
(398, 'Vikram Nair', '+91-9534567890', 'vikram.nair@example.com', 'O-', 'Chennai', 'Tamil Nadu', '2024-10-04 22:18:05'),
(399, 'Rohan Chatterjee', '+91-9545678901', 'rohan.chatterjee@example.com', 'A+', 'Kolkata', 'West Bengal', '2024-10-04 22:18:05'),
(400, 'Maya Basu', '+91-9556789012', 'maya.basu@example.com', 'A+', 'Kolkata', 'West Bengal', '2024-10-04 22:18:05'),
(401, 'Sourav Mukherjee', '+91-9567890123', 'sourav.mukherjee@example.com', 'A+', 'Kolkata', 'West Bengal', '2024-10-04 22:18:05'),
(402, 'Siddhartha Ghosh', '+91-9578901234', 'siddhartha.ghosh@example.com', 'A-', 'Kolkata', 'West Bengal', '2024-10-04 22:18:05'),
(403, 'Ananya Dutta', '+91-9589012345', 'ananya.dutta@example.com', 'A-', 'Kolkata', 'West Bengal', '2024-10-04 22:18:05'),
(404, 'Partha Roy', '+91-9590123456', 'partha.roy@example.com', 'A-', 'Kolkata', 'West Bengal', '2024-10-04 22:18:05'),
(405, 'Suman Halder', '+91-9601234567', 'suman.halder@example.com', 'B+', 'Kolkata', 'West Bengal', '2024-10-04 22:18:05'),
(406, 'Nandita Bhattacharya', '+91-9612345678', 'nandita.bhattacharya@example.com', 'B+', 'Kolkata', 'West Bengal', '2024-10-04 22:18:05'),
(407, 'Soham Sen', '+91-9623456789', 'soham.sen@example.com', 'B+', 'Kolkata', 'West Bengal', '2024-10-04 22:18:05'),
(408, 'Sabrina Choudhury', '+91-9634567890', 'sabrina.choudhury@example.com', 'B-', 'Kolkata', 'West Bengal', '2024-10-04 22:18:05'),
(409, 'Shyam Sundar', '+91-9645678901', 'shyam.sundar@example.com', 'B-', 'Kolkata', 'West Bengal', '2024-10-04 22:18:05'),
(410, 'Pooja Banerjee', '+91-9656789012', 'pooja.banerjee@example.com', 'B-', 'Kolkata', 'West Bengal', '2024-10-04 22:18:05'),
(411, 'Arjun Bhattacharjee', '+91-9667890123', 'arjun.bhattacharjee@example.com', 'AB+', 'Kolkata', 'West Bengal', '2024-10-04 22:18:05'),
(412, 'Nisha Paul', '+91-9678901234', 'nisha.paul@example.com', 'AB+', 'Kolkata', 'West Bengal', '2024-10-04 22:18:05'),
(413, 'Rudra Nandi', '+91-9689012345', 'rudra.nandi@example.com', 'AB-', 'Kolkata', 'West Bengal', '2024-10-04 22:18:05'),
(414, 'Kavita Saha', '+91-9690123456', 'kavita.saha@example.com', 'AB-', 'Kolkata', 'West Bengal', '2024-10-04 22:18:05'),
(415, 'Rahul Roy', '+91-9701234567', 'rahul.roy@example.com', 'O+', 'Kolkata', 'West Bengal', '2024-10-04 22:18:05'),
(416, 'Debashis Mukherjee', '+91-9712345678', 'debashis.mukherjee@example.com', 'O+', 'Kolkata', 'West Bengal', '2024-10-04 22:18:05'),
(417, 'Subhas Chatterjee', '+91-9723456789', 'subhas.chatterjee@example.com', 'O+', 'Kolkata', 'West Bengal', '2024-10-04 22:18:05'),
(418, 'Priti Saha', '+91-9734567890', 'priti.saha@example.com', 'O-', 'Kolkata', 'West Bengal', '2024-10-04 22:18:05'),
(419, 'Tania Dey', '+91-9745678901', 'tania.dey@example.com', 'O-', 'Kolkata', 'West Bengal', '2024-10-04 22:18:05');

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE `registered_users` (
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `bloodgroup` varchar(10) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `weight` varchar(15) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `zipcode` varchar(10) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `landmark` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`name`, `email`, `phone`, `password`, `bloodgroup`, `gender`, `birthdate`, `weight`, `state`, `zipcode`, `district`, `area`, `landmark`) VALUES
('gojo', 'acrtyo746@gmail.com', '8452856283', '$2y$10$W8Cd1PwkqdiWb6t9sawt7.h3O1EKtmRhPgAx7Prvso8xrtagn5wOW', 'B+', 'Male', '1999-01-01', '0', 'maharashtra', '400043', 'mumbai', 'mankhurd', 'Mankhurd'),
('Andha', 'andha01@gmail.com', '4578124578', '$2y$10$57FjkpTr6DfQsUE4cWKwAuS6IN9SnYy5sgBRXV.IBy./zyczGn8Zi', 'A+', 'Male', '1995-01-01', '80', 'Tamil Nadu', '50006', 'Chennai', 'anntavau', 'gigarya');

-- --------------------------------------------------------

--
-- Table structure for table `response_back`
--

CREATE TABLE `response_back` (
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `blood_group` varchar(3) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `name`, `email`, `phone`, `blood_group`, `date`, `time`, `created_at`) VALUES
(1, 'gojo', 'acrtyo746@gmail.com', '8828739678', 'B+', '2024-01-11', '19:33:00', '2024-10-04 21:31:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_email` (`user_email`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered_users`
--
ALTER TABLE `registered_users`
  ADD UNIQUE KEY `unique_email` (`email`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=420;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donations`
--
ALTER TABLE `donations`
  ADD CONSTRAINT `donations_ibfk_1` FOREIGN KEY (`user_email`) REFERENCES `registered_users` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
