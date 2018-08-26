-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 14-04-2018 a las 21:34:15
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login_credentials`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `num_empleado` int(8) NOT NULL AUTO_INCREMENT,
  `contrasena` text NOT NULL,
  `nombre` text NOT NULL,
  `nivel` text NOT NULL,
  UNIQUE KEY `num_empleado` (`num_empleado`)
) ENGINE=MyISAM AUTO_INCREMENT=125486 DEFAULT CHARSET=ascii;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`num_empleado`, `contrasena`, `nombre`, `nivel`) VALUES
(125483, '2714', 'Ariel', '2'),
(125482, 'Shin1253', 'Admin', '1'),
(125485, '123456', 'Luis', '2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
