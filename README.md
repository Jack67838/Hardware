En el http://localhost/phpmyadmin hay que crear varios bases de datos:

CREATE DATABASE IF NOT EXISTS `hardware`;
USE `hardware`;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `usuarios` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', 'admin', '2026-03-16 16:11:23');

CREATE TABLE `ram` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Manufacturer` varchar(50) NOT NULL,
  `P/N` varchar(100) NOT NULL,
  `Capacity` varchar(50) NOT NULL,
  `Model` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `ram` (`Id`, `Manufacturer`, `P/N`, `Capacity`, `Model`) VALUES
(1, 'ASint', 'SLA302G08-GGNHC', '4gb', 'DDR3');

CREATE TABLE `hard_disk` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `S/N` varchar(50) NOT NULL,
  `Space` varchar(50) NOT NULL,
  `Age` varchar(50) NOT NULL,
  `Model` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `hard_disk` (`Id`, `S/N`, `Space`, `Age`, `Model`) VALUES
(1, 'WCAV2AD11035', '320GB', '9543H', 'Western Digital');
