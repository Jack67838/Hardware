-- En el http://localhost/phpmyadmin hay que crear varios bases de datos:

-- Crear la base de datos si no existe
CREATE DATABASE IF NOT EXISTS `hardware` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hardware`;

-- 1. Tabla: pc
CREATE TABLE IF NOT EXISTS `pc` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `PC` varchar(50) NOT NULL,
  `RAM` varchar(50) NOT NULL,
  `CPU` varchar(50) NOT NULL,
  `TYPE` varchar(50) NOT NULL,
  `RAM_Installed` varchar(5) NOT NULL,
  `CPU_Installed` varchar(5) NOT NULL,
  `text` varchar(1000) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 2. Tabla: pc_client
CREATE TABLE IF NOT EXISTS `pc_client` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `PC` varchar(50) NOT NULL,
  `RAM` varchar(50) NOT NULL,
  `CPU` varchar(50) NOT NULL,
  `TYPE` varchar(50) NOT NULL,
  `RAM_Installed` varchar(50) NOT NULL,
  `CPU_Installed` varchar(50) NOT NULL,
  `text` varchar(1000) NOT NULL,
  `Client` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 3. Tabla: hard_disk
CREATE TABLE IF NOT EXISTS `hard_disk` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `S/N` varchar(50) NOT NULL,
  `Space` varchar(50) NOT NULL,
  `Age` varchar(50) NOT NULL,
  `Model` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 4. Tabla: ram
CREATE TABLE IF NOT EXISTS `ram` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Manufacturer` varchar(50) NOT NULL,
  `P/N` varchar(100) NOT NULL,
  `Capacity` varchar(50) NOT NULL,
  `Model` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 5. Tabla: usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;