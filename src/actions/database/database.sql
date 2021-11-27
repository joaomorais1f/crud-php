CREATE DATABASE CRUD;

use CRUD;

CREATE TABLE User (
  idUser INT AUTO_INCREMENT,
  userName VARCHAR(30) NOT NULL,
  userEmail VARCHAR(20) NOT NULL,
  userPassword VARCHAR(16) NOT NULL,
  userPicture VARCHAR(100),
  PRIMARY KEY (idUser)
);

CREATE TABLE Product (
  idProduct INT AUTO_INCREMENT,
  productName VARCHAR(20) NOT NULL,
  productPrice float NOT NULL,
  productCategory VARCHAR(25),
  productImage VARCHAR(100),
  idUser INT NOT NULL,
  PRIMARY KEY (idProduct),
  FOREIGN KEY (idUser) REFERENCES User(idUser)
);