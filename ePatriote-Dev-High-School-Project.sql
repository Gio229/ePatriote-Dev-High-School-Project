SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);


DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `classroom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);

DROP TABLE IF EXISTS `censor`;
CREATE TABLE IF NOT EXISTS `censor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);

DROP TABLE IF EXISTS `parents`;
CREATE TABLE IF NOT EXISTS `parents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);

DROP TABLE IF EXISTS `informatic`;
CREATE TABLE IF NOT EXISTS `informatic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);

DROP TABLE IF EXISTS `proginterro`;
CREATE TABLE IF NOT EXISTS `proginterro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classroom` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `theDate` date NOT NULL,
  `theHour` time NOT NULL,
  PRIMARY KEY (`id`)
);

DROP TABLE IF EXISTS `progexam`;
CREATE TABLE IF NOT EXISTS `progexam` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classroom` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `theDate` date NOT NULL,
  `theHour` time NOT NULL,
  PRIMARY KEY (`id`)
);

DROP TABLE IF EXISTS `progcourse`;
CREATE TABLE IF NOT EXISTS `progcourse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classroom` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `theDate` date NOT NULL,
  `theHour` time NOT NULL,
  PRIMARY KEY (`id`)
);

DROP TABLE IF EXISTS `teaching`;
CREATE TABLE IF NOT EXISTS `teaching` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course` varchar(255) NOT NULL,
  `classroom` varchar(255) NOT NULL,
  `email_teacher` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);