CREATE DATABASE techemp;

SET SQL_SAFE_UPDATES = 0; -- set the environment variables to prevent deletes and updates without the where especification

USE techemp; 
CREATE TABLE employeedata(    -- Create a table and create the information that I want in the table
company VARCHAR (60) NOT NULL, 
employeeID VARCHAR (50) NOT NULL,
name VARCHAR (50) NOT NULL, 
telephone VARCHAR (30) NOT NULL,   
email VARCHAR (60) NOT NULL, 
hours INT NOT NULL, 
date DATE NOT NULL,
PRIMARY KEY (employeeID)); -- Set the primary key as the employeeID
 
USE techemp; 
SELECT * FROM employeedata;
