-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 28, 2023 at 08:51 AM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `EU_DATABASE`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--
CREATE DATABASE EU_DATABASE;
USE EU_DATABASE;
CREATE TABLE `books` (
  `ID` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Author` varchar(50) NOT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Price` float DEFAULT NULL,
  `ISBN` bigint(20) DEFAULT NULL,
  `Publisher` varchar(50) DEFAULT NULL,
  `Published_Date` date DEFAULT NULL,
  `Language` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`ID`, `Title`, `Author`, `Description`, `Price`, `ISBN`, `Publisher`, `Published_Date`, `Language`) VALUES
(1, 'Book1', 'Author1', 'Description1', 29.99, 1234567890123, 'Publisher1', '2023-01-15', 'English'),
(2, 'Book2', 'Author2', 'Description2', 19.99, 9876543210123, 'Publisher2', '2022-05-20', 'French'),
(3, 'Book3', 'Author3', 'Description3', 24.99, 4567890123456, 'Publisher3', '2021-10-08', 'Spanish'),
(4, 'Book4', 'Author4', 'Description4', 32.99, 7890123456789, 'Publisher4', '2020-03-12', 'German'),
(5, 'Book5', 'Author5', 'Description5', 14.99, 5678901234567, 'Publisher5', '2019-07-25', 'Italian'),
(6, 'Book6', 'Author6', 'Description6', 21.99, 2345678901234, 'Publisher6', '2018-11-30', 'Portuguese'),
(7, 'Book7', 'Author7', 'Description7', 27.99, 8901234567890, 'Publisher7', '2017-04-04', 'Japanese'),
(8, 'Book8', 'Author8', 'Description8', 39.99, 3456789012345, 'Publisher8', '2016-08-19', 'Chinese'),
(9, 'Book9', 'Author9', 'Description9', 18.99, 123456789012, 'Publisher9', '2015-01-23', 'Korean'),
(10, 'Book10', 'Author10', 'Description10', 36.99, 6789012345678, 'Publisher10', '2014-06-17', 'Arabic');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `car_id` int(11) NOT NULL,
  `car_name` varchar(255) NOT NULL,
  `manufacture_year` year(4) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `fuel_type` varchar(50) DEFAULT NULL,
  `transmission_type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `car_name`, `manufacture_year`, `color`, `fuel_type`, `transmission_type`) VALUES
(1, 'Toyota Camry', 2020, 'Blue', 'Gasoline', 'Automatic'),
(2, 'Honda Civic', 2019, 'Red', 'Gasoline', 'Manual'),
(3, 'Ford Mustang', 2022, 'Yellow', 'Petrol', 'Automatic'),
(4, 'Chevrolet Silverado', 2021, 'Black', 'Diesel', 'Automatic'),
(5, 'Nissan Altima', 2018, 'White', 'Gasoline', 'CVT'),
(6, 'BMW 3 Series', 2023, 'Silver', 'Premium Gasoline', 'Automatic'),
(7, 'Mercedes-Benz C-Class', 2020, 'Gray', 'Diesel', 'Automatic'),
(8, 'Hyundai Sonata', 2017, 'Green', 'Hybrid', 'Automatic'),
(9, 'Kia Sportage', 2022, 'Orange', 'Gasoline', 'Manual'),
(10, 'Tesla Model 3', 2021, 'Blue', 'Electric', 'Automatic');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `country` varchar(100) DEFAULT NULL,
  `population` int(11) DEFAULT NULL,
  `establishment_year` int(11) DEFAULT NULL,
  `mayor_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city_name`, `country`, `population`, `establishment_year`, `mayor_name`) VALUES
(1, 'Metropolis', 'Country1', 5000000, 1900, 'John Smith'),
(2, 'Townsville', 'Country2', 300000, 1955, 'Jane Johnson'),
(3, 'Urbanville', 'Country3', 2000000, 1800, 'Bob Brown'),
(4, 'Cityville', 'Country4', 1500000, 1925, 'Alice Adams'),
(5, 'Megalopolis', 'Country5', 8000000, 2000, 'Chris Clark'),
(6, 'Village City', 'Country6', 100000, 1750, 'Eva Evans'),
(7, 'Metroburg', 'Country7', 700000, 1980, 'Mike Miller'),
(8, 'Sunshine City', 'Country8', 1200000, 1995, 'Sara Sanders'),
(9, 'Harbor Town', 'Country9', 400000, 1888, 'Mark Martinez'),
(10, 'Oceanview', 'Country10', 600000, 1935, 'Linda Lewis');

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `university_id` int(11) NOT NULL,
  `university_name` varchar(255) NOT NULL,
  `location` varchar(100) DEFAULT NULL,
  `foundation_year` year(4) DEFAULT NULL,
  `contact_person_name` varchar(255) DEFAULT NULL,
  `contact_person_email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`university_id`, `university_name`, `location`, `foundation_year`, `contact_person_name`, `contact_person_email`) VALUES
(1, 'University of Example1', 'City1, Country1', 1990, 'John Doe', 'john.doe@example1.com'),
(2, 'Example State University', 'Town2, Country2', 1985, 'Jane Smith', 'jane.smith@example2.com'),
(3, 'ABC University', 'City3, Country3', 2000, 'Bob Johnson', 'bob.johnson@example3.com'),
(4, 'Global Institute', 'Town4, Country4', 1975, 'Alice Brown', 'alice.brown@example4.com'),
(5, 'City University', 'City5, Country5', 1995, 'Chris Wilson', 'chris.wilson@example5.com'),
(6, 'Tech University', 'Town6, Country6', 1980, 'Eva White', 'eva.white@example6.com'),
(7, 'National College', 'City7, Country7', 2005, 'Mike Davis', 'mike.davis@example7.com'),
(8, 'Ocean State Institute', 'Town8, Country8', 1965, 'Sara Green', 'sara.green@example8.com'),
(9, 'Sunshine University', 'City9, Country9', 2010, 'Mark Turner', 'mark.turner@example9.com'),
(10, 'Innovation College', 'Town10, Country10', 1998, 'Linda Lee', 'linda.lee@example10.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `username`, `email`, `birthdate`, `registration_date`) VALUES
(1, 'John', 'Doe', 'john_doe', 'john.doe@example.com', '1990-05-15', '2023-12-27 23:03:44'),
(2, 'Alice', 'Smith', 'alice_smith', 'alice.smith@example.com', '1985-08-22', '2023-12-27 23:03:44'),
(3, 'Bob', 'Johnson', 'bob_johnson', 'bob.johnson@example.com', '1992-02-10', '2023-12-27 23:03:44'),
(4, 'Sara', 'Williams', 'sara_williams', 'sara.williams@example.com', '1988-11-28', '2023-12-27 23:03:44'),
(5, 'Mike', 'Taylor', 'mike_taylor', 'mike.taylor@example.com', '1995-07-03', '2023-12-27 23:03:44'),
(6, 'Emily', 'Miller', 'emily_miller', 'emily.miller@example.com', '1983-04-17', '2023-12-27 23:03:44'),
(7, 'David', 'Brown', 'david_brown', 'david.brown@example.com', '1998-09-05', '2023-12-27 23:03:44'),
(8, 'Sophia', 'Jones', 'sophia_jones', 'sophia.jones@example.com', '1980-12-12', '2023-12-27 23:03:44'),
(9, 'Matthew', 'Clark', 'matthew_clark', 'matthew.clark@example.com', '1993-06-25', '2023-12-27 23:03:44'),
(10, 'Olivia', 'White', 'olivia_white', 'olivia.white@example.com', '1987-03-08', '2023-12-27 23:03:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`university_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `universities`
--
ALTER TABLE `universities`
  MODIFY `university_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
