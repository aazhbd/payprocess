-- phpMyAdmin SQL Dump
-- version 2.8.0.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Aug 12, 2006 at 09:49 PM
-- Server version: 5.0.21
-- PHP Version: 5.1.4
-- 
-- Database: `tution_sys`
-- 
CREATE DATABASE `tution_sys` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tution_sys`;

-- --------------------------------------------------------

-- 
-- Table structure for table `studentinfo`
-- 

CREATE TABLE `studentinfo` (
  `student_id` varchar(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(25) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `class` int(11) NOT NULL,
  `pass` varchar(10) NOT NULL,
  PRIMARY KEY  (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `studentinfo`
-- 

INSERT INTO `studentinfo` VALUES ('1', 'name1', '1@1.com', 'address1', '1', 1, '1');
INSERT INTO `studentinfo` VALUES ('2', 'name2', '2@2.com', 'address2', '2', 2, '2');
INSERT INTO `studentinfo` VALUES ('3', 'name3', '3@3.com', 'address3', '3', 3, '3');
INSERT INTO `studentinfo` VALUES ('4', 'name4', '4@4.com', 'address4', '4', 4, '4');

-- --------------------------------------------------------

-- 
-- Table structure for table `tution_book`
-- 

CREATE TABLE `tution_book` (
  `student_id` varchar(10) NOT NULL,
  `admission_fee` int(11) NOT NULL,
  `monthly_fee` int(11) NOT NULL,
  `session_fee` int(11) NOT NULL,
  `library_fee` int(11) NOT NULL,
  `other_fee` int(11) NOT NULL,
  `payment_date` date NOT NULL,
  `payment_month` int(11) NOT NULL,
  `fine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `tution_book`
-- 

INSERT INTO `tution_book` VALUES ('1', 45, 45, 45, 45, 45, '1951-02-02', 2, 0);
INSERT INTO `tution_book` VALUES ('1', 45, 45, 45, 45, 45, '1951-02-02', 2, 0);
INSERT INTO `tution_book` VALUES ('1', 45, 45, 45, 45, 45, '1951-02-02', 2, 0);
INSERT INTO `tution_book` VALUES ('1', 45, 45, 45, 45, 45, '1951-02-02', 2, 0);
INSERT INTO `tution_book` VALUES ('2', 100, 100, 50, 10, 10, '1989-08-10', 0, 0);
INSERT INTO `tution_book` VALUES ('3', 100, 100, 50, 10, 10, '2002-08-22', 0, 0);
INSERT INTO `tution_book` VALUES ('4', 100, 100, 50, 10, 10, '2002-08-22', 0, 0);
INSERT INTO `tution_book` VALUES ('2', 34, 34, 34, 34, 34, '1950-02-01', 7, 50);
