DROP DATABASE IF EXISTS Registration;
CREATE DATABASE Registration;
USE Registration;

  CREATE TABLE IF NOT EXISTS users (
`ID` INT PRIMARY KEY AUTO_INCREMENT,
`forename` VARCHAR(45) NOT NULL,
`surname` VARCHAR(45) NOT NULL,
`username` VARCHAR(45) NOT NULL,
`password` VARCHAR(45) NOT NULL,
`email` VARCHAR(45) NOT NULL,
`occupation` VARCHAR(45) NOT NULL,
`score` INT 
);




 

