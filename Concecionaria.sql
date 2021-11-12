-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.17-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para concecionaria
CREATE DATABASE IF NOT EXISTS `concecionaria` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `concecionaria`;

-- Volcando estructura para tabla concecionaria.administradores
CREATE TABLE IF NOT EXISTS `administradores` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) DEFAULT NULL,
  `Clave` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla concecionaria.administradores: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `administradores` DISABLE KEYS */;
REPLACE INTO `administradores` (`ID`, `usuario`, `Clave`) VALUES
	(1, 'admin', '123');
/*!40000 ALTER TABLE `administradores` ENABLE KEYS */;

-- Volcando estructura para tabla concecionaria.autos
CREATE TABLE IF NOT EXISTS `autos` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(50) DEFAULT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `anio` varchar(100) DEFAULT NULL,
  `precio` varchar(100) DEFAULT NULL,
  `descrip` varchar(250) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla concecionaria.autos: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `autos` DISABLE KEYS */;
REPLACE INTO `autos` (`ID`, `marca`, `modelo`, `anio`, `precio`, `descrip`) VALUES
	(1, 'Fiat', 'Siena', '2018', '3.000.000', '60.000');
/*!40000 ALTER TABLE `autos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
