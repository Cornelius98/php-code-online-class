--- Creating a database
CREATE DATABASE `scratch_db`;

--- Creating a table
CREATE TABLE `person`(
   `name` VARCHAR(30) NOT NULL,
   `height` VARCHAR(3) NOT NULL,
   `city` VARCHAR(30) NOT NULL

);

--- User table creation
CREATE TABLE `users`(
   `fname` VARCHAR(30) NOT NULL DEFAULT 0,
   `mname` VARCHAR(30) NOT NULL DEFAULT 0,
   `sname` VARCHAR(30) NOT NULL DEFAULT 0,
   `mobile` VARCHAR(30) NOT NULL DEFAULT 0,
   `email` VARCHAR(30) NOT NULL DEFAULT 0,
   `password` VARCHAR(30) NOT NULL DEFAULT 0,
   `street_1` VARCHAR(30) NOT NULL DEFAULT 0,
   `street_2` VARCHAR(30) NOT NULL DEFAULT 0,
   `street_3` VARCHAR(30) NOT NULL DEFAULT 0,
   `city` VARCHAR(30) NOT NULL DEFAULT 0,
   `country` VARCHAR(30) NOT NULL DEFAULT "zambia"
);
