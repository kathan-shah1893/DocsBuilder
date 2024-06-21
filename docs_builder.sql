-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 05:43 PM
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
-- Database: `docs builder`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievement`
--

CREATE TABLE `achievement` (
  `id` int(30) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `user_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `achievement`
--

INSERT INTO `achievement` (`id`, `title`, `description`, `date`, `user_id`) VALUES
(9, 'Project on PHP', 'PHP project in last year ', '2000-03-20', 61);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `name`, `email`, `password`, `date`, `contact`) VALUES
(1, 'Suraj Bhatt', 'surajbhatt1357@gmail.com', 'kk', '2022-01-11', ''),
(2, 'Kathan shah', 'shahkathanshah@gmail.com', '12345', '2021-12-26', ''),
(13, 'Jatin Vadher', 'jatin@gmail.com', 'jt0410', '2022-01-12', ''),
(14, 'Kathan Shah', 'kathan@gmail.com', '12345', '2022-01-13', ''),
(15, 'pranav yadav', 'pranav@gmail.com', '12345', '2022-01-16', ''),
(17, 'kathan shah', 'shahkathanshah@gmil.com', '12345', '2022-01-30', ''),
(18, 'kathan shah', 'shahkathanshah1@gmil.com', '123344', '2022-01-30', '');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `i_id` int(11) NOT NULL,
  `C_name` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `post` varchar(50) NOT NULL,
  `address` longtext NOT NULL,
  `phone` bigint(15) NOT NULL,
  `profile` longtext NOT NULL,
  `logo` longtext NOT NULL,
  `DOB` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`i_id`, `C_name`, `name`, `post`, `address`, `phone`, `profile`, `logo`, `DOB`, `email`, `user_id`) VALUES
(58, 'KMS Life science', 'kathan shah', 'Marketing manger', 'naroda', 9898117731, '20220401001042.jpg', '20220401001042L.jpg', '2022-03-01', 'shahkathanshah@gmil.com', 61);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_id`, `name`, `email`, `phone`, `message`) VALUES
(3, 'Suraj Bhatt', 'mr.brahman1358@gmail', 9104141376, 'Hiii'),
(4, 'Shah Kathan', 'shahkathan@gmail.com', 9898117731, 'Hello'),
(21, 'kathan shah', 'shahkathanshah@gmail', 9898117731, 'hiii contact us page'),
(22, 'kathan shah', 'shahkathanshah@gmail', 9898117731, 'kathan shah'),
(23, 'kathan shah', 'shahkathanshah@gmail', 9898117731, 'krm'),
(24, 'kathan ', 'shahkathanshah@gmail', 9898117731, 'contact us'),
(25, 'kathan ', 'shahkathanshah@gmail', 9898117731, 'hiii'),
(26, 'btr5', 'g@b.com', 0, 'trtr'),
(27, 'kathan ', 'h@h.v', 9898117731, '1ws@'),
(28, 'kathan ', 'h@h.v', 9898117731, '1ws@'),
(29, 'kathan ', 'h@h.v', 9898117731, '1ws@'),
(30, 'kathan ', 'h@h.v', 9898117731, '1ws@'),
(31, 'kathan ', 'h@h.v', 9898117731, '1ws@'),
(32, 'kathan ', 'h@h.v', 8234567899, 'yuihjk'),
(33, 'kathan ', 'shahkathanshah@gmail', 9898117731, 'contact me');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `e_Id` int(20) NOT NULL,
  `degree` varchar(20) NOT NULL,
  `collage` varchar(50) NOT NULL,
  `univercity` varchar(50) NOT NULL,
  `passing_year` int(20) NOT NULL,
  `u_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`e_Id`, `degree`, `collage`, `univercity`, `passing_year`, `u_id`) VALUES
(35, 'SSC', 'NV', 'GSCB', 2019, 61),
(36, 'Diploma in Computer ', 'Gov. Poly. Ahmedabad', 'GTU', 2022, 61);

-- --------------------------------------------------------

--
-- Table structure for table `hobbies`
--

CREATE TABLE `hobbies` (
  `hobbi_id` int(11) NOT NULL,
  `hobbi` longtext NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hobbies`
--

INSERT INTO `hobbies` (`hobbi_id`, `hobbi`, `user_id`) VALUES
(4, 'Reading', 61),
(5, 'coding', 61);

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `f_id` int(30) NOT NULL,
  `F_name` varchar(15) NOT NULL,
  `L_name` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `message` longtext NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `rating` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`f_id`, `F_name`, `L_name`, `email`, `phone`, `message`, `date`, `rating`) VALUES
(1, 'Suraj', 'Bhatt', 'surajbhatt1357@gmail.com', 910414376, 'Hello Admin Here!!!!', '2022-01-12', 0),
(2, 'kathan', 'shah', 'shahkathanshah3@gmail.com', 9898117731, 'kathan shah web ', '2022-01-16', 0),
(3, 'kathan', 'shah', 'shahkathanshah@gmail.com', 9898117731, 'hii kem chhe', '2022-01-19', 0),
(10, 'kathan', 'shah', 'shahkathanshah@gmil.com', 98981177331, 'FHH8R-7WC4H-BH696-VBV6D-VCBMB', '2022-02-04', 0),
(14, 'kathan', 'shah', 'shahkathanshah@gmil.com', 98981177331, 'FHH8R-7WC4H-BH696-VBV6D-VCBMB', '2022-02-04', 5),
(15, 'kathan', 'shah', 'shahkathanshah1@gmil.com', 98981177331, 'FHH8R-7WC4H-BH696-VBV6D-VCBMB', '2022-02-09', 5),
(16, 'kathan', 'shah', 'shahkathanshah@gmil.com', 98981177331, 'kathan', '2022-03-04', 4),
(17, 'kathan', 'shah', 'shahkathanshah@gmil.com', 9898117731, 'hiii i am inquery wala', '2022-03-31', 5);

-- --------------------------------------------------------

--
-- Table structure for table `resume_data`
--

CREATE TABLE `resume_data` (
  `Tech_Id` int(20) NOT NULL,
  `Skill` varchar(30) NOT NULL,
  `Skill_exprience` varchar(30) NOT NULL,
  `Description` longtext NOT NULL,
  `user_id` int(20) NOT NULL,
  `objective` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resume_data`
--

INSERT INTO `resume_data` (`Tech_Id`, `Skill`, `Skill_exprience`, `Description`, `user_id`, `objective`) VALUES
(6, 'PHP', '3', 'Project work in php', 61, 'PHP developer');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` bigint(15) NOT NULL,
  `pincode` int(6) NOT NULL,
  `Address` longtext NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `state` varchar(40) NOT NULL,
  `image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `city`, `gender`, `password`, `email`, `contact`, `pincode`, `Address`, `date`, `state`, `image`) VALUES
(29, 'Kathan shah', 'Ahmedabad', 'Male', 'kathan', 'shahkathanshah@gmail.com', 9898117731, 380015, 'c/8 naroda', '2022-01-23', 'Gujarat', '20220314085734.jpg'),
(60, 'shah kathan', 'Ahmedabad', 'm', 'kathan', 'shahkathanshah123@gmail.com', 9898117731, 380015, 'c/8 naroda', '2022-03-11', 'Gujarat', '20220311012216.png'),
(61, 'shah kathan', 'Ahmedabad', 'm', '123456', 'gpce@gmail.com', 9898117731, 380015, 'c/8 naroda', '2022-03-31', 'Gujarat', '20220331235917.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievement`
--
ALTER TABLE `achievement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`i_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`e_Id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `hobbies`
--
ALTER TABLE `hobbies`
  ADD PRIMARY KEY (`hobbi_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `resume_data`
--
ALTER TABLE `resume_data`
  ADD PRIMARY KEY (`Tech_Id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievement`
--
ALTER TABLE `achievement`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `e_Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `hobbies`
--
ALTER TABLE `hobbies`
  MODIFY `hobbi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `f_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `resume_data`
--
ALTER TABLE `resume_data`
  MODIFY `Tech_Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `achievement`
--
ALTER TABLE `achievement`
  ADD CONSTRAINT `achievement_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `card`
--
ALTER TABLE `card`
  ADD CONSTRAINT `card_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `education_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `hobbies`
--
ALTER TABLE `hobbies`
  ADD CONSTRAINT `hobbies_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `resume_data`
--
ALTER TABLE `resume_data`
  ADD CONSTRAINT `resume_data_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
