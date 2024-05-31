-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2024 at 07:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inspired_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` bigint(20) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `pass_word` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `user_name`, `pass_word`) VALUES
(1, 'admin', '123'),
(2, 'Jocelyn Rosal', 'rosal123'),
(3, 'Lowell', 'abcdefgh');

-- --------------------------------------------------------

--
-- Table structure for table `archives`
--

CREATE TABLE `archives` (
  `id` int(11) NOT NULL,
  `lrn` bigint(12) UNSIGNED ZEROFILL DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `grade` int(1) DEFAULT NULL,
  `section` varchar(20) DEFAULT NULL,
  `english` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `math` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `science` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `filipino` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `mt` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `ap` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `esp` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `mapeh` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `avg` float DEFAULT NULL,
  `archived_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `archives`
--

INSERT INTO `archives` (`id`, `lrn`, `first_name`, `middle_name`, `last_name`, `grade`, `section`, `english`, `math`, `science`, `filipino`, `mt`, `ap`, `esp`, `mapeh`, `avg`, `archived_date`) VALUES
(1, 104728189553, 'Juan', 'None', 'Dela Cruz', 6, 'Dahlia', 70, 70, 70, 70, 70, 70, 70, 70, 70, '2024-05-08 23:40:25'),
(2, 104728184056, 'Top', 'None', 'Dela Cruz', 6, 'Dahlia', 70, 70, 70, 70, 70, 70, 70, 70, 70, '2024-05-08 23:42:33'),
(3, 104728234567, 'Yvan', 'Trillanes', 'Aquino', 1, 'Mercury', 70, 70, 70, 70, 70, 70, 70, 70, 70, '2024-05-09 07:53:46');

-- --------------------------------------------------------

--
-- Table structure for table `section_1`
--

CREATE TABLE `section_1` (
  `id` int(11) NOT NULL,
  `lrn` bigint(12) UNSIGNED ZEROFILL DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `grade` int(1) DEFAULT NULL,
  `section` varchar(20) DEFAULT NULL,
  `english` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `math` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `science` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `filipino` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `mt` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `ap` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `esp` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `mapeh` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `avg` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section_1`
--

INSERT INTO `section_1` (`id`, `lrn`, `first_name`, `middle_name`, `last_name`, `grade`, `section`, `english`, `math`, `science`, `filipino`, `mt`, `ap`, `esp`, `mapeh`, `avg`) VALUES
(1, 104728235213, 'Jaime', 'Garcia', 'Reyes', 1, 'Mercury', 91, 95, 93, 88, 92, 90, 94, 87, 91.25),
(2, 104728237895, 'Jose', 'Lopez', 'Rodriguez', 1, 'Mercury', 89, 86, 87, 84, 85, 90, 88, 85, 86.75),
(3, 104728233210, 'Mueller', 'Martinez', 'Hernandez', 1, 'Mercury', 95, 97, 96, 93, 94, 92, 98, 96, 95.13),
(4, 104728238765, 'Gavin', 'Martinez', 'Dela Cruz', 1, 'Mercury', 84, 82, 86, 81, 80, 85, 87, 82, 83.38),
(5, 104728232468, 'Jonas', 'Dela Rosa', 'Gonzales', 1, 'Mercury', 97, 98, 99, 96, 98, 97, 98, 97, 97.5),
(6, 104728231357, 'Kyel', 'Reyes', 'Torres', 1, 'Mercury', 75, 77, 79, 76, 80, 78, 74, 76, 76.88),
(7, 104728231112, 'Kenneth', 'Cruz', 'Rivera', 1, 'Mercury', 88, 90, 85, 89, 86, 92, 87, 88, 88.13),
(8, 104728233334, 'John Mark', 'Santos', 'Gomez', 1, 'Mercury', 82, 83, 81, 85, 80, 86, 83, 84, 83),
(9, 104728237778, 'Cedric', 'Dela Rosa', 'Diaz', 1, 'Mercury', 99, 100, 98, 97, 98, 99, 100, 98, 98.63),
(10, 104728239999, 'Ernie', 'Martinez', 'Alvarez', 1, 'Mercury', 83, 85, 84, 86, 82, 80, 85, 81, 83.25),
(11, 104728238888, 'Jovia', 'Gomez', 'Torres', 1, 'Mercury', 90, 91, 89, 92, 90, 93, 88, 91, 90.5),
(12, 104728237777, 'Sunday', 'Lopez', 'Hernandez', 1, 'Mercury', 78, 75, 76, 80, 79, 81, 77, 78, 78),
(13, 104728236666, 'Myra', 'Rodriguez', 'Martinez', 1, 'Mercury', 86, 89, 88, 87, 85, 90, 86, 88, 87.38),
(14, 104728235555, 'Charmaine', 'Alvarez', 'Garcia', 1, 'Mercury', 94, 93, 95, 91, 90, 92, 95, 93, 92.88);

-- --------------------------------------------------------

--
-- Table structure for table `section_2`
--

CREATE TABLE `section_2` (
  `id` int(11) NOT NULL,
  `lrn` bigint(12) UNSIGNED ZEROFILL DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `grade` int(1) DEFAULT NULL,
  `section` varchar(20) DEFAULT NULL,
  `english` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `math` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `science` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `filipino` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `mt` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `ap` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `esp` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `mapeh` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `avg` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section_2`
--

INSERT INTO `section_2` (`id`, `lrn`, `first_name`, `middle_name`, `last_name`, `grade`, `section`, `english`, `math`, `science`, `filipino`, `mt`, `ap`, `esp`, `mapeh`, `avg`) VALUES
(1, 104728231234, 'Roberto', 'Dela Cruz', 'Santos', 1, 'Venus', 85, 92, 88, 80, 85, 89, 85, 90, 86.75),
(2, 104728235453, 'Lorenzo', 'Garcia', 'Lim', 1, 'Venus', 93, 95, 92, 90, 94, 91, 92, 93, 92.5),
(3, 104728238679, 'Clarissa', 'Ramos', 'Dela', 1, 'Venus', 88, 90, 85, 87, 89, 86, 85, 88, 87.25),
(4, 104728232101, 'Rosalinda', 'Tan', 'Reyes', 1, 'Venus', 96, 97, 98, 95, 96, 97, 98, 97, 96.75),
(5, 104728237865, 'Elena', 'Cruz', 'Gonzales', 1, 'Venus', 80, 78, 85, 79, 82, 83, 81, 80, 81),
(6, 104728234568, 'Fernando', 'Santos', 'Rivera', 1, 'Venus', 91, 93, 90, 89, 92, 91, 90, 92, 91),
(7, 104728233357, 'Isabella', 'Del Rosario', 'Sison', 1, 'Venus', 85, 88, 85, 82, 86, 87, 84, 86, 85.38),
(8, 104728231127, 'Juliana', 'Reyes', 'Marcelo', 1, 'Venus', 99, 98, 100, 97, 99, 98, 100, 98, 98.63),
(9, 104728233338, 'Gabriel', 'Lim', 'Villanueva', 1, 'Venus', 75, 78, 76, 80, 79, 77, 78, 75, 77.25),
(10, 104728237788, 'Lorena', 'Cruz', 'Perez', 1, 'Venus', 86, 83, 85, 88, 85, 84, 87, 86, 85.5),
(11, 104728239999, 'Eduardo', 'Santos', 'Cruz', 1, 'Venus', 94, 91, 92, 93, 90, 92, 91, 94, 92.13),
(12, 104728238888, 'Maricar', 'Dela Cruz', 'Alvarez', 1, 'Venus', 78, 82, 79, 80, 81, 80, 79, 82, 80.13),
(13, 104728237777, 'Romeo', 'Lim', 'Torres', 1, 'Venus', 89, 88, 90, 87, 88, 89, 86, 90, 88.38),
(14, 104728236666, 'Estella', 'Rivera', 'Gomez', 1, 'Venus', 75, 79, 78, 77, 76, 75, 78, 79, 77.13),
(15, 104728235555, 'Antonio', 'Dela Rosa', 'Santos', 1, 'Venus', 96, 94, 95, 97, 95, 94, 96, 97, 95.5);

-- --------------------------------------------------------

--
-- Table structure for table `section_3`
--

CREATE TABLE `section_3` (
  `id` int(11) NOT NULL,
  `lrn` bigint(12) UNSIGNED ZEROFILL DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `grade` int(1) DEFAULT NULL,
  `section` varchar(20) DEFAULT NULL,
  `english` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `math` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `science` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `filipino` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `mt` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `ap` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `esp` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `mapeh` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `avg` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section_3`
--

INSERT INTO `section_3` (`id`, `lrn`, `first_name`, `middle_name`, `last_name`, `grade`, `section`, `english`, `math`, `science`, `filipino`, `mt`, `ap`, `esp`, `mapeh`, `avg`) VALUES
(1, 104728220153, 'Maria', 'Luz', 'Manalang', 2, 'Gold', 92, 87, 88, 85, 90, 85, 86, 89, 87.75),
(2, 104728220277, 'Juan', 'Miguel', 'Santos', 2, 'Gold', 96, 94, 92, 93, 95, 92, 95, 94, 93.88),
(3, 104728220944, 'Ana', 'Teresa', 'Del Rosario', 2, 'Gold', 89, 91, 90, 87, 88, 86, 90, 91, 89),
(4, 104728221008, 'Rodrigo', 'Javier', 'Cruz', 2, 'Gold', 97, 96, 95, 98, 97, 96, 98, 95, 96.5),
(5, 104728222679, 'Sofia', 'Reyes', 'Gonzales', 2, 'Gold', 99, 98, 98, 100, 99, 98, 100, 98, 98.75),
(6, 104728223492, 'Diego', 'Carlo', 'Lim', 2, 'Gold', 83, 80, 78, 85, 82, 80, 79, 84, 81.38),
(7, 104728224173, 'Lorraine', 'Ann', 'Marcelo', 2, 'Gold', 88, 85, 87, 82, 84, 89, 86, 83, 85.5),
(8, 104728224999, 'Rafael', 'Antonio', 'Garcia', 2, 'Gold', 76, 78, 79, 77, 75, 76, 78, 80, 77.38),
(9, 104728225691, 'Andrea', 'Mae', 'Villanueva', 2, 'Gold', 94, 91, 92, 93, 95, 92, 90, 94, 92.63),
(10, 104728226098, 'Gabriel', 'Lorenzo', 'Tan', 2, 'Gold', 81, 85, 83, 80, 82, 84, 86, 85, 83.25),
(11, 104728226701, 'Carla', 'Beatriz', 'Ocampo', 2, 'Gold', 89, 87, 88, 90, 86, 85, 87, 88, 87.5),
(12, 104728227500, 'Mateo', 'Miguel', 'Cruz', 2, 'Gold', 75, 78, 76, 80, 77, 79, 75, 78, 77.25),
(13, 104728228130, 'Angelica', 'Marie', 'Sison', 2, 'Gold', 85, 88, 86, 84, 82, 87, 88, 86, 85.75),
(14, 104728228874, 'Emmanuel', 'Victorio', 'Ramos', 2, 'Gold', 90, 92, 91, 89, 88, 87, 91, 90, 89.75),
(15, 104728229572, 'Janine', 'Patricia', 'Evangelista', 2, 'Gold', 79, 80, 82, 81, 78, 80, 82, 81, 80.38);

-- --------------------------------------------------------

--
-- Table structure for table `section_4`
--

CREATE TABLE `section_4` (
  `id` int(11) NOT NULL,
  `lrn` bigint(12) UNSIGNED ZEROFILL DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `grade` int(1) DEFAULT NULL,
  `section` varchar(20) DEFAULT NULL,
  `english` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `math` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `science` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `filipino` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `mt` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `ap` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `esp` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `mapeh` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `avg` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section_4`
--

INSERT INTO `section_4` (`id`, `lrn`, `first_name`, `middle_name`, `last_name`, `grade`, `section`, `english`, `math`, `science`, `filipino`, `mt`, `ap`, `esp`, `mapeh`, `avg`) VALUES
(1, 104728221856, 'Ivan', 'Aquino', 'Trillanes', 2, 'Silver', 98, 98, 97, 99, 98, 98, 98, 98, 98),
(2, 104728221957, 'Ryujin', 'Manalo', 'Santos', 2, 'Silver', 85, 78, 92, 87, 80, 88, 82, 90, 85.25),
(3, 104728222043, 'Danielle', 'Marsh', 'Bernardo', 2, 'Silver', 90, 93, 92, 82, 95, 92, 91, 92, 90.88),
(4, 104728222184, 'Hinata', 'Sohara', 'Rosal', 2, 'Silver', 75, 80, 72, 78, 85, 76, 80, 70, 77),
(5, 104728221784, 'Yuna', 'Garcia', 'Ocampo', 2, 'Silver', 88, 92, 90, 85, 95, 90, 89, 93, 90.25),
(6, 104728222098, 'Juria', 'Yano', 'Villanueva', 2, 'Silver', 99, 97, 94, 99, 99, 98, 100, 99, 98.13),
(7, 104728221345, 'Sophia', 'Grace', 'Asilum', 2, 'Silver', 91, 92, 94, 90, 97, 96, 94, 92, 93.25),
(8, 104728221512, 'Matthew', 'Cruz', 'Cardenas', 2, 'Silver', 92, 90, 88, 85, 82, 87, 86, 94, 88),
(9, 104728221625, 'Mae', 'Judea', 'Tipay', 2, 'Silver', 90, 95, 96, 97, 98, 96, 97, 92, 95.13),
(10, 104728221922, 'Liam', 'Gonzales', 'Cruz', 2, 'Silver', 89, 85, 80, 88, 85, 82, 86, 88, 85.38),
(11, 104728221777, 'Ella', 'Santos', 'Reyes', 2, 'Silver', 95, 92, 97, 93, 94, 96, 95, 92, 94.25),
(12, 104728221844, 'Adam', 'Lim', 'Tan', 2, 'Silver', 88, 90, 85, 82, 85, 80, 83, 86, 84.88),
(13, 104728221933, 'Olivia', 'Ramos', 'Chua', 2, 'Silver', 92, 94, 93, 90, 95, 92, 94, 96, 93.25),
(14, 104728221677, 'Noah', 'De Guzman', 'Santos', 2, 'Silver', 85, 80, 88, 82, 85, 80, 84, 86, 83.75),
(15, 104728221789, 'Thomas', 'Michael', 'Justine', 2, 'Silver', 85, 88, 82, 90, 80, 86, 83, 92, 85.75);

-- --------------------------------------------------------

--
-- Table structure for table `section_5`
--

CREATE TABLE `section_5` (
  `id` int(11) NOT NULL,
  `lrn` bigint(12) UNSIGNED ZEROFILL DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `grade` int(1) DEFAULT NULL,
  `section` varchar(20) DEFAULT NULL,
  `english` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `math` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `science` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `filipino` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `mt` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `ap` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `esp` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `mapeh` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `avg` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section_5`
--

INSERT INTO `section_5` (`id`, `lrn`, `first_name`, `middle_name`, `last_name`, `grade`, `section`, `english`, `math`, `science`, `filipino`, `mt`, `ap`, `esp`, `mapeh`, `avg`) VALUES
(1, 104728211846, 'Elizabeth', 'Gray', 'Mendoza', 3, 'Butterfly', 85, 88, 82, 90, 80, 86, 83, 92, 85.75),
(2, 104728211857, 'Edward', 'Thomas', 'Villanueva', 3, 'Butterfly', 90, 82, 88, 85, 78, 84, 87, 92, 85.75),
(3, 104728211862, 'Ava', 'Abadiano', 'Hernandez', 3, 'Butterfly', 88, 90, 91, 95, 93, 93, 93, 94, 92.13),
(4, 104728211866, 'Lian', 'Alexander', 'Tomas', 3, 'Butterfly', 92, 85, 88, 80, 78, 84, 87, 90, 85.5),
(5, 104728211813, 'Alexander', 'John', 'Smith', 3, 'Butterfly', 92, 88, 90, 85, 89, 86, 88, 90, 88.5),
(6, 104728211825, 'Sophie', 'Anne', 'Garcia', 3, 'Butterfly', 95, 94, 96, 92, 98, 93, 95, 94, 94.63),
(7, 104728211837, 'Lucas', 'Michael', 'Johnson', 3, 'Butterfly', 88, 86, 89, 90, 85, 88, 87, 90, 87.88),
(8, 104728211849, 'Olivia', 'Elizabeth', 'Brown', 3, 'Butterfly', 90, 92, 91, 88, 94, 90, 92, 91, 91),
(9, 104728211851, 'Liam', 'William', 'Davis', 3, 'Butterfly', 94, 90, 92, 85, 89, 86, 90, 92, 89.75),
(10, 104728211872, 'Emma', 'Grace', 'Bernado', 3, 'Butterfly', 85, 88, 82, 90, 80, 86, 83, 92, 85.75),
(11, 104728211806, 'Harvey', 'Amy', 'Gonzales', 3, 'Butterfly', 96, 98, 96, 95, 95, 93, 94, 93, 95),
(12, 104728211864, 'Bronya', 'Isabella', 'Martinez', 3, 'Butterfly', 91, 83, 89, 86, 82, 88, 85, 94, 87.25),
(13, 104728211869, 'William', 'Joseph', 'Irving', 3, 'Butterfly', 95, 96, 98, 93, 97, 96, 96, 95, 95.75),
(14, 104728211814, 'LeBron', 'Seamp', 'Hernandez', 3, 'Butterfly', 100, 99, 98, 97, 100, 98, 99, 97, 98.5),
(15, 104728211830, 'Mia', 'Josephine', 'Revilla', 3, 'Butterfly', 90, 91, 91, 89, 90, 89, 92, 88, 90);

-- --------------------------------------------------------

--
-- Table structure for table `section_6`
--

CREATE TABLE `section_6` (
  `id` int(11) NOT NULL,
  `lrn` bigint(12) UNSIGNED ZEROFILL DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `grade` int(1) DEFAULT NULL,
  `section` varchar(20) DEFAULT NULL,
  `english` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `math` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `science` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `filipino` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `mt` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `ap` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `esp` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `mapeh` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `avg` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section_6`
--

INSERT INTO `section_6` (`id`, `lrn`, `first_name`, `middle_name`, `last_name`, `grade`, `section`, `english`, `math`, `science`, `filipino`, `mt`, `ap`, `esp`, `mapeh`, `avg`) VALUES
(1, 104728218788, 'Jae', 'Grace', 'Mirko', 3, 'Caterpillar', 70, 70, 70, 70, 70, 70, 70, 70, 70),
(2, 104728217794, 'Rachel', 'Ann', 'Guzman', 3, 'Caterpillar', 85, 88, 87, 90, 89, 86, 83, 92, 87.5),
(3, 104728211872, 'Keanu', 'Charles', 'Reeves', 3, 'Caterpillar', 90, 92, 91, 88, 94, 90, 92, 91, 91),
(4, 104728218334, 'Gwyneth', 'Maria', 'Paltrow', 3, 'Caterpillar', 98, 97, 99, 99, 99, 98, 97, 98, 98.13),
(5, 104728217799, 'Leonardo', 'DiCaprio', 'Da Vinci', 3, 'Caterpillar', 91, 83, 89, 86, 82, 88, 85, 94, 87.25),
(6, 104728211124, 'Angelina', 'Jolie', 'Pitt', 3, 'Caterpillar', 94, 90, 93, 92, 91, 88, 91, 94, 91.63),
(7, 104728213584, 'William', 'Joseph', 'Harris', 3, 'Caterpillar', 90, 82, 88, 85, 78, 84, 87, 92, 85.75),
(8, 104728210086, 'Yunjin', 'Huh', 'Rosal', 3, 'Caterpillar', 95, 88, 85, 92, 95, 93, 91, 92, 91.38),
(9, 104728204249, 'Mina', 'Myoui', 'Rosal', 3, 'Caterpillar', 92, 99, 98, 89, 90, 92, 95, 90, 93.13),
(10, 104728217787, 'Olivia', 'Queenie', 'Balagtas', 3, 'Caterpillar', 85, 88, 82, 90, 80, 86, 83, 92, 85.75),
(11, 104728210060, 'Hanni', 'Pham', 'Rosal', 3, 'Caterpillar', 98, 97, 99, 99, 99, 98, 97, 98, 98.13),
(12, 104728213579, 'Avrille', 'Liz', 'Veralyn', 3, 'Caterpillar', 91, 83, 89, 86, 82, 88, 85, 94, 87.25),
(13, 104728213324, 'Noah', 'Will', 'Perez', 3, 'Caterpillar', 94, 90, 93, 92, 91, 88, 91, 94, 91.63),
(14, 104728218334, 'Isabella', 'Kanto', 'Rivera', 3, 'Caterpillar', 90, 84, 88, 87, 83, 89, 86, 93, 87.5),
(15, 104728217789, 'Conor', 'Mcgregor', 'Nurmagomedov', 3, 'Caterpillar', 95, 97, 96, 93, 92, 90, 97, 98, 94.75);

-- --------------------------------------------------------

--
-- Table structure for table `section_7`
--

CREATE TABLE `section_7` (
  `id` int(11) NOT NULL,
  `lrn` bigint(12) UNSIGNED ZEROFILL DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `grade` int(1) DEFAULT NULL,
  `section` varchar(20) DEFAULT NULL,
  `english` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `math` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `science` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `filipino` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `mt` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `ap` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `esp` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `mapeh` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `avg` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section_7`
--

INSERT INTO `section_7` (`id`, `lrn`, `first_name`, `middle_name`, `last_name`, `grade`, `section`, `english`, `math`, `science`, `filipino`, `mt`, `ap`, `esp`, `mapeh`, `avg`) VALUES
(1, 104728202136, 'Raven', 'Pastrana', 'Abalos', 4, 'Camia', 85, 92, 88, 91, 89, 90, 86, 87, 88.5),
(2, 104728209543, 'Eula', 'Siervo', 'Villanueva', 4, 'Camia', 88, 90, 86, 94, 87, 93, 85, 88, 88.88),
(3, 104728208642, 'Benedict', 'Santos', 'Acosta', 4, 'Camia', 91, 94, 90, 89, 88, 92, 90, 85, 89.88),
(4, 104728207531, 'Jilianne', 'Galang', 'Fegcan', 4, 'Camia', 86, 88, 87, 83, 85, 82, 89, 86, 85.75),
(5, 104728202109, 'Sean', 'Lambo', 'Cabatic', 4, 'Camia', 89, 91, 90, 92, 87, 88, 90, 91, 89.75),
(6, 104728205432, 'Zach', 'Gabrielle', 'Jose', 4, 'Camia', 92, 93, 95, 91, 94, 90, 93, 92, 92.5),
(7, 104728209876, 'Jan Rhenzo', 'Tamo', 'Sunga', 4, 'Camia', 87, 89, 85, 90, 86, 88, 84, 87, 87),
(8, 104728206789, 'Czarina', 'Santiago', 'Torres', 4, 'Camia', 90, 92, 88, 89, 90, 91, 87, 88, 89.38),
(9, 104728204321, 'Kevin Howard', 'Burgos', 'Garcia', 4, 'Camia', 85, 86, 82, 88, 84, 83, 86, 87, 85.13),
(10, 104728203444, 'Bernadette', 'Santos', 'Fernandez', 4, 'Camia', 93, 94, 91, 92, 90, 92, 93, 95, 92.5),
(11, 104728201222, 'Princess Rain', 'Lapitan', 'Cruz', 4, 'Camia', 87, 85, 90, 88, 86, 89, 85, 88, 87.25),
(12, 104728205790, 'Teresa', 'Robles', 'Francisco', 4, 'Camia', 91, 93, 89, 90, 92, 90, 94, 91, 91.25),
(13, 104728206543, 'Kirsten', 'Manicad', 'Manuzon', 4, 'Camia', 89, 90, 88, 91, 87, 85, 90, 88, 88.5),
(14, 104728201098, 'Jasmine', 'Santos', 'Tumibay', 4, 'Camia', 86, 87, 84, 85, 83, 86, 82, 84, 84.63),
(15, 104728205678, 'Angela', 'Castro', 'Aguilar', 4, 'Camia', 90, 91, 92, 92, 93, 91, 92, 90, 91.38);

-- --------------------------------------------------------

--
-- Table structure for table `section_8`
--

CREATE TABLE `section_8` (
  `id` int(11) NOT NULL,
  `lrn` bigint(12) UNSIGNED ZEROFILL DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `grade` int(1) DEFAULT NULL,
  `section` varchar(20) DEFAULT NULL,
  `english` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `math` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `science` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `filipino` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `mt` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `ap` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `esp` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `mapeh` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `avg` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section_8`
--

INSERT INTO `section_8` (`id`, `lrn`, `first_name`, `middle_name`, `last_name`, `grade`, `section`, `english`, `math`, `science`, `filipino`, `mt`, `ap`, `esp`, `mapeh`, `avg`) VALUES
(1, 104728198912, 'Izeaih', 'Castillo', 'Aguilar', 5, 'Ilang-Ilang', 92, 85, 90, 91, 89, 87, 88, 86, 88.5),
(2, 104728194376, 'Charisse', 'Centeno', 'Martin', 5, 'Ilang-Ilang', 90, 88, 94, 86, 87, 93, 85, 88, 88.88),
(3, 104728192098, 'Elijah', 'Dela Cruz', 'Chuacuco', 5, 'Ilang-Ilang', 94, 91, 92, 89, 88, 90, 90, 85, 89.88),
(4, 104728197654, 'Alexa', 'Geronimo', 'Co', 5, 'Ilang-Ilang', 88, 86, 87, 83, 85, 82, 89, 86, 85.75),
(5, 104728193210, 'Samantha', 'Marrion', 'Reyna', 5, 'Ilang-Ilang', 91, 89, 90, 92, 87, 88, 90, 91, 89.75),
(6, 104728199876, 'Gabriel', 'Santos', 'Emperador', 5, 'Ilang-Ilang', 95, 97, 96, 95, 98, 96, 98, 97, 96.5),
(7, 104728195432, 'John Daniel', 'Gonzales', 'Dupra', 5, 'Ilang-Ilang', 89, 87, 85, 90, 86, 88, 84, 87, 87),
(8, 104728194567, 'Ellise', 'Santos', 'Castro', 5, 'Ilang-Ilang', 92, 90, 91, 89, 90, 91, 87, 88, 89.75),
(9, 104728192345, 'Von Carlo', 'Reyes', 'Pangan', 5, 'Ilang-Ilang', 86, 85, 82, 88, 84, 83, 86, 87, 85.13),
(10, 104728196789, 'Terrence', 'Batica', 'Hernandez', 5, 'Ilang-Ilang', 84, 93, 91, 85, 94, 92, 89, 92, 90),
(11, 104728191023, 'Raine', 'Mateo', 'Abelo', 5, 'Ilang-Ilang', 85, 87, 90, 88, 86, 89, 85, 88, 87.25),
(12, 104728198901, 'Zion', 'Williams', 'Yaneza', 5, 'Ilang-Ilang', 86, 88, 89, 90, 83, 90, 87, 80, 86.63),
(13, 104728193456, 'Jenny', 'Hadap', 'Caruncon', 5, 'Ilang-Ilang', 90, 89, 88, 91, 87, 85, 90, 88, 88.5),
(14, 104728196781, 'Jilian', 'Cayco', 'Tolentino', 5, 'Ilang-Ilang', 87, 86, 84, 85, 83, 86, 82, 84, 84.63),
(15, 104728194321, 'Kyle', 'Silva', 'Manimtim', 5, 'Ilang-Ilang', 98, 96, 70, 70, 98, 95, 98, 97, 90.25);

-- --------------------------------------------------------

--
-- Table structure for table `section_9`
--

CREATE TABLE `section_9` (
  `id` int(11) NOT NULL,
  `lrn` bigint(12) UNSIGNED ZEROFILL DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `grade` int(1) DEFAULT NULL,
  `section` varchar(20) DEFAULT NULL,
  `english` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `math` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `science` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `filipino` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `mt` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `ap` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `esp` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `mapeh` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `avg` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section_9`
--

INSERT INTO `section_9` (`id`, `lrn`, `first_name`, `middle_name`, `last_name`, `grade`, `section`, `english`, `math`, `science`, `filipino`, `mt`, `ap`, `esp`, `mapeh`, `avg`) VALUES
(1, 104728189876, 'Francis', 'Bio', 'Padilla', 6, 'Dahlia', 70, 70, 70, 70, 70, 70, 70, 70, 70),
(2, 104728185432, 'Matthew', 'Cortez', 'Alano', 6, 'Dahlia', 91, 89, 86, 94, 87, 92, 85, 88, 89),
(3, 104728181098, 'Abegail', 'Delos Santos', 'Coralde', 6, 'Dahlia', 91, 94, 91, 89, 88, 92, 90, 85, 90),
(4, 104728187654, 'Maribel', 'Santiago', 'Cruz', 6, 'Dahlia', 86, 88, 87, 83, 85, 82, 89, 86, 85.75),
(5, 104728183210, 'Eliseo', 'Ocampo', 'Perez', 6, 'Dahlia', 89, 91, 90, 92, 87, 88, 90, 91, 89.75),
(6, 104728188765, 'Charles', 'Fernandez', 'Cinco', 6, 'Dahlia', 92, 93, 90, 91, 94, 90, 93, 92, 91.88),
(7, 104728184321, 'Mariel', 'Matsuyama', 'Mahusay', 6, 'Dahlia', 87, 89, 85, 90, 86, 88, 84, 87, 87),
(8, 104728183456, 'Jessie', 'Cruz', 'Reyes', 6, 'Dahlia', 90, 92, 88, 89, 90, 91, 87, 88, 89.38),
(9, 104728181234, 'Carlo', 'Cielo', 'Tapnio', 6, 'Dahlia', 85, 86, 82, 88, 84, 83, 86, 87, 85.13),
(10, 104728185678, 'Louis', 'Santiago', 'Fernandez', 6, 'Dahlia', 93, 91, 91, 92, 90, 92, 93, 95, 92.13),
(11, 104728182109, 'Pia', 'Iren', 'Carreon', 6, 'Dahlia', 87, 90, 90, 88, 86, 89, 85, 88, 87.88),
(12, 104728186543, 'Princess', 'Zamora', 'Santos', 6, 'Dahlia', 91, 93, 89, 90, 92, 90, 94, 91, 91.25),
(13, 104728188901, 'Vien', 'Loo', 'Gatus', 6, 'Dahlia', 89, 90, 88, 91, 87, 85, 90, 88, 88.5),
(14, 104728186789, 'Katricia', 'Iony', 'Laredo', 6, 'Dahlia', 86, 87, 84, 85, 83, 86, 82, 84, 84.63);

-- --------------------------------------------------------

--
-- Table structure for table `section_10`
--

CREATE TABLE `section_10` (
  `id` int(11) NOT NULL,
  `lrn` bigint(12) UNSIGNED ZEROFILL DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `grade` int(1) DEFAULT NULL,
  `section` varchar(20) DEFAULT NULL,
  `english` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `math` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `science` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `filipino` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `mt` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `ap` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `esp` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `mapeh` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `avg` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section_10`
--

INSERT INTO `section_10` (`id`, `lrn`, `first_name`, `middle_name`, `last_name`, `grade`, `section`, `english`, `math`, `science`, `filipino`, `mt`, `ap`, `esp`, `mapeh`, `avg`) VALUES
(1, 104728195212, 'Richard', 'None', 'Bernabe', 5, 'Magsaysay', 90, 90, 90, 90, 90, 90, 90, 90, 90);

-- --------------------------------------------------------

--
-- Table structure for table `section_names`
--

CREATE TABLE `section_names` (
  `section_id` varchar(20) NOT NULL,
  `section_name` varchar(50) DEFAULT NULL,
  `grade` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section_names`
--

INSERT INTO `section_names` (`section_id`, `section_name`, `grade`) VALUES
('section_1', 'Mercury', 1),
('section_10', 'Magsaysay', 5),
('section_2', 'Venus', 1),
('section_3', 'Gold', 2),
('section_4', 'Silver', 2),
('section_5', 'Butterfly', 3),
('section_6', 'Caterpillar', 3),
('section_7', 'Camia', 4),
('section_8', 'Ilang-Ilang', 5),
('section_9', 'Dahlia', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `archives`
--
ALTER TABLE `archives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_1`
--
ALTER TABLE `section_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_2`
--
ALTER TABLE `section_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_3`
--
ALTER TABLE `section_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_4`
--
ALTER TABLE `section_4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_5`
--
ALTER TABLE `section_5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_6`
--
ALTER TABLE `section_6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_7`
--
ALTER TABLE `section_7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_8`
--
ALTER TABLE `section_8`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_9`
--
ALTER TABLE `section_9`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_10`
--
ALTER TABLE `section_10`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_names`
--
ALTER TABLE `section_names`
  ADD PRIMARY KEY (`section_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `archives`
--
ALTER TABLE `archives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `section_1`
--
ALTER TABLE `section_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `section_2`
--
ALTER TABLE `section_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `section_3`
--
ALTER TABLE `section_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `section_4`
--
ALTER TABLE `section_4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `section_5`
--
ALTER TABLE `section_5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `section_6`
--
ALTER TABLE `section_6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `section_7`
--
ALTER TABLE `section_7`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `section_8`
--
ALTER TABLE `section_8`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `section_9`
--
ALTER TABLE `section_9`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `section_10`
--
ALTER TABLE `section_10`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
