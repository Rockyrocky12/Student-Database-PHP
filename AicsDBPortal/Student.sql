create database crud;

use crud;

CREATE TABLE `info` (
  `id` int(11) NOT NULL auto_increment PRIMARY KEY,
  `name` varchar(100) NOT NULL,
  `gradelvl` varchar(100) NOT NULL,
  `strand` varchar(100) NOT NULL,
  `section` varchar(100) NOT NULL,
  `contactnum` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `birth` varchar(100) NOT NULL,
  `dadname` varchar(100) NOT NULL,
  `momname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
);