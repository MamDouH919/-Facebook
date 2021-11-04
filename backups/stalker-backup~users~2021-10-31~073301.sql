-- Database Stalker SQL Dump
--
-- Host: localhost
-- Generation Time: Oct 31, 2021 at 07:33 AM
-- Server Vversion: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- --------------------------------------------------------
--

--
-- Table structure for table `branches_info`
--

DROP TABLE IF EXISTS `branches_info`;
CREATE TABLE IF NOT EXISTS `branches_info` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 CHARACTER SET utf8 COLLATE utf8_general_ci;

--
-- Dumping data for table `branches_info`
--



COMMIT;
-- Database Stalker SQL Dump
--
-- Host: localhost
-- Generation Time: Oct 31, 2021 at 07:33 AM
-- Server Vversion: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- --------------------------------------------------------
--

--
-- Table structure for table `branches_info`
--

DROP TABLE IF EXISTS `branches_info`;
CREATE TABLE IF NOT EXISTS `branches_info` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 CHARACTER SET utf8 COLLATE utf8_general_ci;

--
-- Dumping data for table `branches_info`
--



COMMIT;
