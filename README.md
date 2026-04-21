-- En el http://localhost/phpmyadmin hay que crear varios bases de datos:

-- Creación de la base de datos
CREATE DATABASE IF NOT EXISTS `hardware`;
USE `hardware`;

-- --------------------------------------------------------
-- Estructura y datos para la tabla `ram`
-- --------------------------------------------------------

CREATE TABLE `ram` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Manufacturer` varchar(50) NOT NULL,
  `P/N` varchar(100) NOT NULL,
  `Capacity` varchar(50) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Installed` varchar(10) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `ram` (`Manufacturer`, `P/N`, `Capacity`, `Model`, `Installed`) VALUES
('ASint', 'SLA302G08-GGNHC', '4gb', 'DDR3', 'NO');

-- --------------------------------------------------------
-- Estructura y datos para la tabla `hard_disk`
-- --------------------------------------------------------

CREATE TABLE `hard_disk` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `S/N` varchar(50) NOT NULL,
  `Space` varchar(50) NOT NULL,
  `Age` varchar(50) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Installed` varchar(10) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `hard_disk` (`S/N`, `Space`, `Age`, `Model`, `Installed`) VALUES
('WCAV2AD11035', '320GB', '9543H', 'Western Digital', 'NO');

-- --------------------------------------------------------
-- Estructura y datos para la tabla `pc`
-- --------------------------------------------------------

CREATE TABLE `pc` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `PC` varchar(50) NOT NULL,
  `RAM` varchar(50) NOT NULL,
  `CPU` varchar(50) NOT NULL,
  `TYPE` varchar(50) NOT NULL,
  `RAM_Installed` varchar(5) NOT NULL,
  `CPU_Installed` varchar(5) NOT NULL,
  `text` varchar(1000) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `pc` (`PC`, `RAM`, `CPU`, `TYPE`, `RAM_Installed`, `CPU_Installed`, `text`) VALUES
('cszcszc', 'fgsggdrg', 'zsczsc', 'Desktop', 'SÍ', 'SÍ', 'Note'),
('ko', 'kop', 'kpokpo', 'Laptop', 'SÍ', 'SÍ', 'da');
