-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2020 at 12:25 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `getacleaner`
--

-- --------------------------------------------------------

--
-- Table structure for table `additionalservice`
--

CREATE TABLE `additionalservice` (
  `Id` int(11) NOT NULL,
  `ServiceName` varchar(50) NOT NULL,
  `ServiceDescription` varchar(250) DEFAULT NULL,
  `AllocatedHours` decimal(18,2) DEFAULT NULL,
  `FlatRate` decimal(18,2) DEFAULT NULL,
  `IsActive` bit(1) NOT NULL,
  `CreateDate` datetime NOT NULL,
  `CreatedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `additionalservice`
--

INSERT INTO `additionalservice` (`Id`, `ServiceName`, `ServiceDescription`, `AllocatedHours`, `FlatRate`, `IsActive`, `CreateDate`, `CreatedBy`) VALUES
(1, 'Cleaning fridge', 'Inside fridge cleaning', '0.00', '35.00', b'1', '0000-00-00 00:00:00', 1),
(2, 'Cleaning oven', 'Inside oven cleaning', '0.00', '35.00', b'1', '0000-00-00 00:00:00', 1),
(3, 'Cleaning basement', 'Finished basement cleaning', '0.00', '35.00', b'1', '0000-00-00 00:00:00', 1),
(4, 'Dish cleaning', 'Cleanign dish', '0.00', '13.00', b'1', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE `quotation` (
  `Id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `AreaToBeCleaned` int(11) NOT NULL,
  `NumberOfBedroom` tinyint(4) DEFAULT NULL,
  `NumberOfBathroom` tinyint(4) DEFAULT NULL,
  `NumberOfPets` tinyint(4) DEFAULT NULL,
  `CleaningFrequency` tinyint(4) NOT NULL,
  `IsMovingOutCleaning` bit(1) NOT NULL,
  `AvailableDays` varchar(50) NOT NULL,
  `CleaningType` tinyint(4) NOT NULL,
  `AdditionalServiceId` int(11) DEFAULT NULL,
  `EstimatedHours` decimal(18,2) NOT NULL,
  `HourlyRate` decimal(18,2) NOT NULL,
  `AdjustedHours` decimal(18,2) DEFAULT NULL,
  `TotalHours` decimal(18,2) NOT NULL,
  `TotalAmount` decimal(18,2) NOT NULL,
  `SpecialNotes` varchar(250) DEFAULT NULL,
  `CreateDate` datetime NOT NULL,
  `CreatedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `Id` int(11) NOT NULL,
  `QuotationId` int(11) NOT NULL,
  `ScheduleDate` datetime NOT NULL,
  `AssignedTo` int(11) DEFAULT NULL,
  `AllocatedHours` decimal(18,2) NOT NULL,
  `HoursWorked` decimal(18,2) DEFAULT NULL,
  `IsAccepted` bit(1) DEFAULT NULL,
  `Remarks` varchar(500) DEFAULT NULL,
  `CreateDate` datetime NOT NULL,
  `CreatedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `servicerate`
--

CREATE TABLE `servicerate` (
  `Id` int(11) NOT NULL,
  `ServiceType` tinyint(10) NOT NULL COMMENT '1= regular cleaning, 2= deep cleaning, 3= move-in/move-out cleaning',
  `HourlyRate` decimal(18,0) NOT NULL,
  `CreateDate` datetime NOT NULL,
  `CreatedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servicerate`
--

INSERT INTO `servicerate` (`Id`, `ServiceType`, `HourlyRate`, `CreateDate`, `CreatedBy`) VALUES
(1, 1, '27', '0000-00-00 00:00:00', 1),
(2, 2, '35', '0000-00-00 00:00:00', 1),
(3, 3, '38', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `GroupId` int(11) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` longtext NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Phone` varchar(50) NOT NULL,
  `EmailAddress` varchar(50) NOT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `PostCode` varchar(50) DEFAULT NULL,
  `CreateDate` datetime NOT NULL,
  `CreatedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `GroupId`, `UserName`, `Password`, `FirstName`, `LastName`, `Phone`, `EmailAddress`, `Address`, `PostCode`, `CreateDate`, `CreatedBy`) VALUES
(1, 2, 'kzislam@gmail.com', '$2y$10$R.S9eIQXllb8bUwwOwbubel0qZuIVDxDA5dTnvoceKCXbJgP7a74G', 'Kazi', 'Islam', '4165748650', 'kzislam@gmail.com', '2114-9 Crescent Place', 'M4C 5L8', '0000-00-00 00:00:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `usergroup`
--

CREATE TABLE `usergroup` (
  `Id` int(11) NOT NULL,
  `GroupName` varchar(50) CHARACTER SET utf8 NOT NULL,
  `IsAdmin` bit(1) NOT NULL,
  `IsActive` bit(1) NOT NULL,
  `CreateDate` datetime NOT NULL,
  `CreatedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usergroup`
--

INSERT INTO `usergroup` (`Id`, `GroupName`, `IsAdmin`, `IsActive`, `CreateDate`, `CreatedBy`) VALUES
(1, 'Administrator', b'1', b'1', '2020-11-10 21:43:42', 1),
(2, 'Manager', b'1', b'1', '2020-11-10 21:43:42', 1),
(3, 'Supervisor', b'1', b'1', '2020-11-10 21:43:42', 1),
(4, 'Client', b'1', b'1', '2020-11-10 21:43:42', 1),
(5, 'Cleaner/Contractor', b'1', b'1', '2020-11-10 21:43:42', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `additionalservice`
--
ALTER TABLE `additionalservice`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `quotation`
--
ALTER TABLE `quotation`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `servicerate`
--
ALTER TABLE `servicerate`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `usergroup`
--
ALTER TABLE `usergroup`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `additionalservice`
--
ALTER TABLE `additionalservice`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `quotation`
--
ALTER TABLE `quotation`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servicerate`
--
ALTER TABLE `servicerate`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usergroup`
--
ALTER TABLE `usergroup`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
