SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


DROP TABLE IF EXISTS user;
CREATE TABLE  user (
  id int(11) NOT NULL AUTO_INCREMENT,
  name CHAR(255) NOT NULL,
  email CHAR(255) NOT NULL,
  password CHAR(255) NOT NULL,
  role CHAR(255) NOT NULL,
  PRIMARY KEY (id)
);


DROP TABLE IF EXISTS teacher;
CREATE TABLE teacher (
  id int(11) NOT NULL AUTO_INCREMENT,
  firstName CHAR(255) NOT NULL,
  lastName CHAR(255) NOT NULL,
  email CHAR(255) NOT NULL,
  PRIMARY KEY (id)
);

DROP TABLE IF EXISTS student;
CREATE TABLE student (
  id int(11) NOT NULL AUTO_INCREMENT,
  firstName CHAR(255) NOT NULL,
  lastName CHAR(255) NOT NULL,
  email CHAR(255) NOT NULL,
  classroom CHAR(255) NOT NULL,
  PRIMARY KEY (id)
);

DROP TABLE IF EXISTS censor;
CREATE TABLE censor (
  id int(11) NOT NULL AUTO_INCREMENT,
  firstName CHAR(255) NOT NULL,
  lastName CHAR(255) NOT NULL,
  email CHAR(255) NOT NULL,
  PRIMARY KEY (id)
);

DROP TABLE IF EXISTS parents;
CREATE TABLE parents (
  id int(11) NOT NULL AUTO_INCREMENT,
  firstName CHAR(255) NOT NULL,
  lastName CHAR(255) NOT NULL,
  email CHAR(255) NOT NULL,
  PRIMARY KEY (id)
);

DROP TABLE IF EXISTS informatic;
CREATE TABLE informatic (
  id int(11) NOT NULL AUTO_INCREMENT,
  firstName CHAR(255) NOT NULL,
  lastName CHAR(255) NOT NULL,
  email CHAR(255) NOT NULL,
  PRIMARY KEY (id)
);

DROP TABLE IF EXISTS proginterro;
CREATE TABLE proginterro (
  id int(11) NOT NULL AUTO_INCREMENT,
  classroom CHAR(255) NOT NULL,
  course CHAR(255) NOT NULL,
  theDate date NOT NULL,
  theHour time NOT NULL,
  PRIMARY KEY (id)
);

DROP TABLE IF EXISTS progexam;
CREATE TABLE progexam (
  id int NOT NULL AUTO_INCREMENT,
  classroom CHAR(255) NOT NULL,
  course CHAR(255) NOT NULL,
  theDate date NOT NULL,
  theHour time NOT NULL,
  PRIMARY KEY (id)
);

DROP TABLE IF EXISTS progcourse;
CREATE TABLE progcourse (
  id int(11) NOT NULL AUTO_INCREMENT,
  classroom CHAR(255) NOT NULL,
  course CHAR(255) NOT NULL,
  theDate date NOT NULL,
  theHour time NOT NULL,
  PRIMARY KEY (id)
);


DROP TABLE IF EXISTS teaching;
CREATE TABLE teaching (
  id int(11) NOT NULL AUTO_INCREMENT,
  course CHAR(255) NOT NULL,
  classroom CHAR(255) NOT NULL,
  email_teacher CHAR(255) NOT NULL,
  PRIMARY KEY (id)
);
------------------------------------system
DROP TABLE IF EXISTS currentyear;
CREATE TABLE currentyear (
  id int(11) NOT NULL AUTO_INCREMENT,
  isstart DATE NOT NULL,
  isend DATE NOT NULL,
  PRIMARY KEY (id)
);

DROP TABLE IF EXISTS `pa`;
CREATE TABLE `pa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` CHAR(255) NOT NULL,
  `classroom` CHAR(255) NOT NULL,
  `ni1` float NOT NULL,
  `ni2` float NOT NULL,
  `ni3` float NOT NULL,
  `mi` float NOT NULL,
  `nd1` float NOT NULL,
  `nd2` float NOT NULL,
  `md` float NOT NULL,
  `sem` int NOT NULL,
  PRIMARY KEY (`id`)
);

DROP TABLE IF EXISTS `api`;
CREATE TABLE IF NOT EXISTS `api` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` CHAR(255) NOT NULL,
  `classroom` CHAR(255) NOT NULL,
  `ni1` float NOT NULL,
  `ni2` float NOT NULL,
  `ni3` float NOT NULL,
  `mi` float NOT NULL,
  `nd1` float NOT NULL,
  `nd2` float NOT NULL,
  `md` float NOT NULL,
  `sem` int NOT NULL,
  PRIMARY KEY (`id`)
);

DROP TABLE IF EXISTS `asl`;
CREATE TABLE IF NOT EXISTS `asl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` CHAR(255) NOT NULL,
  `classroom` CHAR(255) NOT NULL,
  `ni1` float NOT NULL,
  `ni2` float NOT NULL,
  `ni3` float NOT NULL,
  `mi` float NOT NULL,
  `nd1` float NOT NULL,
  `nd2` float NOT NULL,
  `md` float NOT NULL,
  `sem` int NOT NULL,
  PRIMARY KEY (`id`)
);

DROP TABLE IF EXISTS `nginx`;
CREATE TABLE IF NOT EXISTS `nginx` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` CHAR(255) NOT NULL,
  `classroom` CHAR(255) NOT NULL,
  `ni1` float NOT NULL,
  `ni2` float NOT NULL,
  `ni3` float NOT NULL,
  `mi` float NOT NULL,
  `nd1` float NOT NULL,
  `nd2` float NOT NULL,
  `md` float NOT NULL,
  `sem` int NOT NULL,
  PRIMARY KEY (`id`)
);

DROP TABLE IF EXISTS `htpp`;
CREATE TABLE IF NOT EXISTS `htpp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` CHAR(255) NOT NULL,
  `classroom` CHAR(255) NOT NULL,
  `ni1` float NOT NULL,
  `ni2` float NOT NULL,
  `ni3` float NOT NULL,
  `mi` float NOT NULL,
  `nd1` float NOT NULL,
  `nd2` float NOT NULL,
  `md` float NOT NULL,
  `sem` int NOT NULL,
  PRIMARY KEY (`id`)
);

DROP TABLE IF EXISTS `coursemoysem`;
CREATE TABLE IF NOT EXISTS `coursemoysem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` CHAR(255) NOT NULL,
  `classroom` CHAR(255) NOT NULL,
  `course` CHAR(255) NOT NULL,
  `average` float NOT NULL,
  `sem` int NOT NULL,
  PRIMARY KEY (`id`)
);

DROP TABLE IF EXISTS `moysem`;
CREATE TABLE IF NOT EXISTS `moysem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` CHAR(255) NOT NULL,
  `classroom` CHAR(255) NOT NULL,
  `average` float NOT NULL,
  `sem` int NOT NULL,
  PRIMARY KEY (id)
);


DROP TABLE IF EXISTS yearresult;
CREATE TABLE yearresult (
  id int(11) NOT NULL AUTO_INCREMENT,
  email CHAR(255) NOT NULL,
  classroom CHAR(255) NOT NULL,
  average float NOT NULL,
  result CHAR(255) NOT NULL,
  PRIMARY KEY (id)
);

DROP TABLE IF EXISTS publication;
CREATE TABLE publication (
  id INTEGER NOT NULL AUTO_INCREMENT,
  autorisation CHAR(255) NOT NULL,
  sem INTEGER NOT NULL,
  nbr INTEGER NOT NULL,
  PRIMARY KEY (id)
);

-----------INSERTION DE DONNEES-----------------

INSERT INTO student(firstName, lastName, email, classroom) VALUES
  ('jfk', 'ASHBORN', 'ash@gmail.com', 'seconde'),
  ('john', 'MAGENGO', 'magengo@gmail.com', 'première'),
  ('Giovanni', 'ATCHAOUE', 'aagmaougnon@gmail.com', 'terminal');

INSERT INTO teacher(firstName, lastName, email) VALUES
  ('Prof', 'PROF', 'prof@gmail.com');

INSERT INTO censor(firstName, lastName, email) VALUES
  ('Censor', 'CENSOR', 'censor@gmail.com');

INSERT INTO parents(firstName, lastName, email) VALUES
  ('parent1', 'PARENT1', 'parent1@gmail.com'),
  ('parent2', 'PARENT2', 'parent2@gmail.com');
----------------------------------