-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-05-2017 a las 11:43:57
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichamaterial`
--

CREATE TABLE IF NOT EXISTS `fichamaterial` (
  `idreferencia` int(11) NOT NULL AUTO_INCREMENT,
  `aparato` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `categoria` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `proveedor` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `marca` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `modelo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nserie` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fechaentrada` datetime NOT NULL,
  `autorizadapor` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `garantia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ubicacion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ninterno` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fechabaja` datetime NOT NULL,
  `observaciones` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idreferencia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `fichamaterial`
--

INSERT INTO `fichamaterial` (`idreferencia`, `aparato`, `categoria`, `proveedor`, `marca`, `modelo`, `nserie`, `cantidad`, `fechaentrada`, `autorizadapor`, `garantia`, `ubicacion`, `ninterno`, `fechabaja`, `observaciones`) VALUES
(1, 'material1', 'material1', 'material1', 'material1', 'material1', 'material1', 'material1', '0000-00-00 00:00:00', 'material1', 'material1', 'material1', 'material1', '0000-00-00 00:00:00', 'material1'),
(2, 'material2', 'material2', 'material2', 'material2', 'material2', 'material2', 'material2', '0000-00-00 00:00:00', 'material2', 'material2', 'material2', 'material2', '0000-00-00 00:00:00', 'material2'),
(3, 'material3', 'material3', 'material3', 'material3', 'material3', 'material3', 'material3', '0000-00-00 00:00:00', 'material3', 'material3', 'material3', 'material3', '0000-00-00 00:00:00', 'material3'),
(4, 'material4', 'ordenador', 'material4', 'material4', 'material4', 'material4', 'material4', '0000-00-00 00:00:00', 'material4', 'material4', 'material4', 'material4', '0000-00-00 00:00:00', 'material4'),
(5, 'material5', 'monitor', 'material5', 'material5', 'material5', 'material5', 'material5', '0000-00-00 00:00:00', 'material5', 'material5', 'material5', 'material5', '0000-00-00 00:00:00', 'material5'),
(6, 'material6', 'impresora', 'material6', 'material6', 'material6', 'material6', 'material6', '0000-00-00 00:00:00', 'material6', 'material6', 'material6', 'material6', '0000-00-00 00:00:00', 'material6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `impresoras`
--

CREATE TABLE IF NOT EXISTS `impresoras` (
  `idreferencia` int(11) NOT NULL,
  `tipoi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `consumible` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idreferencia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `impresoras`
--

INSERT INTO `impresoras` (`idreferencia`, `tipoi`, `consumible`) VALUES
(6, 'material6', 'material6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencias`
--

CREATE TABLE IF NOT EXISTS `incidencias` (
  `idincidencia` int(11) NOT NULL AUTO_INCREMENT,
  `fechaincidencia` datetime NOT NULL,
  `incidencia` longtext COLLATE utf8_unicode_ci NOT NULL,
  `fechasolucion` datetime NOT NULL,
  `solucion` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idincidencia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `incidencias`
--

INSERT INTO `incidencias` (`idincidencia`, `fechaincidencia`, `incidencia`, `fechasolucion`, `solucion`) VALUES
(1, '0000-00-00 00:00:00', 'incidencia1', '0000-00-00 00:00:00', 'incidencia1'),
(2, '0000-00-00 00:00:00', 'incidencia2', '0000-00-00 00:00:00', 'incidencia2'),
(3, '0000-00-00 00:00:00', 'incidencia3', '0000-00-00 00:00:00', 'incidencia3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monitores`
--

CREATE TABLE IF NOT EXISTS `monitores` (
  `idreferencia` int(11) NOT NULL,
  `tipom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tamano` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idreferencia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `monitores`
--

INSERT INTO `monitores` (`idreferencia`, `tipom`, `tamano`) VALUES
(5, 'material5', 'material5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenadores`
--

CREATE TABLE IF NOT EXISTS `ordenadores` (
  `idreferencia` int(11) NOT NULL,
  `placa` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `procesador` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ram` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `disco` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tarjetas` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dominio` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `software` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idreferencia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ordenadores`
--

INSERT INTO `ordenadores` (`idreferencia`, `placa`, `procesador`, `ram`, `disco`, `tarjetas`, `ip`, `dominio`, `software`) VALUES
(4, 'material4', 'material4', 'material4', 'material4', 'material4', 'material4', 'material4', 'material4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revisiones`
--

CREATE TABLE IF NOT EXISTS `revisiones` (
  `idrevision` int(11) NOT NULL AUTO_INCREMENT,
  `fecharevision` datetime NOT NULL,
  `realizadapor` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `observaciones` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idrevision`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `revisiones`
--

INSERT INTO `revisiones` (`idrevision`, `fecharevision`, `realizadapor`, `observaciones`) VALUES
(1, '0000-00-00 00:00:00', 'revision1', 'revision1'),
(2, '0000-00-00 00:00:00', 'revision2', 'revision2'),
(3, '0000-00-00 00:00:00', 'revision3', 'revision3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `dni` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `clave` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`dni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`dni`, `clave`, `nombre`, `email`, `telefono`) VALUES
('111111111', '111111111', 'admin', 'admin@admin.com', '111111111'),
('777777777', '777777777', 'encargado', 'encargado@encargado.com', '777777777'),
('888888888', '888888888', 'profesor', 'profesor@profesor.com', '888888888'),
('999999999', '999999999', 'sat', 'sat@sat.com', '999999999');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
