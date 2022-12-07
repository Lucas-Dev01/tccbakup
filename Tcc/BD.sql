DROP DATABASE BarberShop;
CREATE DATABASE BarberShop;
use BarberShop;

Create table usuarios (
ID Int(08) NOT NULL AUTO_INCREMENT,
PRIMARY KEY(ID),
nome varchar(10),
sobrenome varchar (40),
email Varchar(30),
celular varchar(11),
senha Varchar(40)
); 

CREATE TABLE `agendamentos` (
  `id_agend` int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nome` varchar(20) DEFAULT NULL,
  `date`varchar(20) DEFAULT NULL,
  `servico` varchar(20) DEFAULT NULL,
  `barbeiro`varchar(20) DEFAULT NULL,
  `horario`varchar(20) DEFAULT NULL,
  `idUser`int(08) DEFAULT NULL
);


Create table Barbeiros (
ID_barbe Int(08) NOT NULL AUTO_INCREMENT,
PRIMARY KEY(ID_barbe),
email Varchar(30),
senha Varchar(40)
); 

INSERT INTO `Barbeiros` (`email`, `senha`) VALUES 
('adm1@gmail.com', '12345'), 
('adm2@gmail.com', '12345'), 
('adm3@gmail.com', '12345');