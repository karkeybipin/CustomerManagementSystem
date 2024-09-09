-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2018 at 01:48 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET
  AUTOCOMMIT = 0;

START TRANSACTION;

SET
  time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;

/*!40101 SET NAMES utf8mb4 */
;

--
-- Database: `my_account`
--
-- --------------------------------------------------------
--
-- Table structure for table `costumers`
--
CREATE TABLE `costumers` (
  `cos_id` int(10) NOT NULL,
  `cos_name` text NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `village` text NOT NULL,
  `p_status` text NOT NULL,
  `cos_address` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--
-- Dumping data for table `costumers`
--
INSERT INTO
  `costumers` (
    `cos_id`,
    `cos_name`,
    `mobile`,
    `village`,
    `p_status`,
    `cos_address`,
    `date`
  )
VALUES
  (
    1,
    'Ambir kumar katuwal',
    '014037699',
    'Illam',
    'due',
    'baajar_ilam',
    '2023-05-31 21:25:12'
  ),
  (
    2,
    'User25589',
    '+9 779842759872',
    'Kathmandu',
    'due',
    'Sitapaila_salesBerry',
    '2023-05-31 17:24:48'
  ),
  (
    3,
    'Anju Karki',
    '9841077783',
    'kathmandu',
    'due',
    'DandaPauwa',
    '2023-05-28 14:58:03'
  ),
  (
    4,
    'Anju Karki',
    '9841077783',
    'kathmandu',
    'due',
    'DandaPauwa',
    '2023-05-28 14:58:03'
  ),
  (
    5,
    'Anju Karki',
    '9841077783',
    'kathmandu',
    'due',
    'DandaPauwa',
    '2023-05-28 14:58:03'),
    (
    6,
    'Anju Karki',
    '9841077783',
    'kathmandu',
    'due',
    'DandaPauwa',
    '2023-05-28 14:58:03'),
    (
    7,
    'Anju Karki',
    '9841077783',
    'kathmandu',
    'due',
    'DandaPauwa',
    '2023-05-28 14:58:03');

-- --------------------------------------------------------
--
-- Table structure for table `entery`
--
CREATE TABLE `entery` (
  `entery_id` int(50) NOT NULL,
  `cos_id` int(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `work` text NOT NULL,
  `wr_desc` text NOT NULL,
  `price` int(20) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--
-- Dumping data for table `entery`
--
INSERT INTO
  `entery` (
    `entery_id`,
    `cos_id`,
    `date`,
    `work`,
    `wr_desc`,
    `price`
  )
VALUES
  (
    20,
    14,
    '2018-09-06 10:53:07',
    'mobile recharge',
    'jio 398 recharge',
    398
  ),
  (
    21,
    13,
    '2018-09-06 10:53:46',
    'light bill',
    'light bill worth 500',
    500
  ),
  (
    22,
    12,
    '2018-09-06 10:55:04',
    'forms',
    'police form & ration card',
    600
  ),
  (
    23,
    11,
    '2018-09-06 10:55:29',
    'photo',
    'photo 4*6 color photo 2',
    60
  ),
  (
    24,
    10,
    '2018-09-06 10:56:09',
    'recharge',
    'application form ssc & mobile recharge',
    800
  ),
  (
    26,
    8,
    '2018-09-06 10:57:28',
    'form',
    'application form vetnary',
    320
  ),
  (
    27,
    5,
    '2018-09-06 10:58:10',
    'mob recharge 1',
    'fruits list & mobilr recharge &',
    270
  ),
  (
    28,
    7,
    '2018-09-06 10:58:56',
    'form ',
    'application from jvnl',
    490
  ),
  (
    29,
    4,
    '2018-09-06 10:59:42',
    'copy ',
    '20 photo copy 2 side',
    60
  ),
  (
    30,
    15,
    '2018-09-06 11:01:18',
    'form',
    'application form',
    50
  ),
  (
    31,
    16,
    '2018-09-06 11:19:05',
    'forms',
    'application form bed',
    370
  );

--
-- Indexes for dumped tables
--
--
-- Indexes for table `costumers`
--
ALTER TABLE
  `costumers`
ADD
  PRIMARY KEY (`cos_id`);

--
-- Indexes for table `entery`
--
ALTER TABLE
  `entery`
ADD
  PRIMARY KEY (`entery_id`);

--
-- AUTO_INCREMENT for dumped tables
--
--
-- AUTO_INCREMENT for table `costumers`
--
ALTER TABLE
  `costumers`
MODIFY
  `cos_id` int(10) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 17;

--
-- AUTO_INCREMENT for table `entery`
--
ALTER TABLE
  `entery`
MODIFY
  `entery_id` int(50) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 32;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;