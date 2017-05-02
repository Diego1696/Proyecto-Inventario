-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-04-2017 a las 17:45:51
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichamaterial`
--

CREATE TABLE `fichamaterial` (
  `idreferencia` int(11) NOT NULL,
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
  `observaciones` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `fichamaterial`
--

INSERT INTO `fichamaterial` (`idreferencia`, `aparato`, `categoria`, `proveedor`, `marca`, `modelo`, `nserie`, `cantidad`, `fechaentrada`, `autorizadapor`, `garantia`, `ubicacion`, `ninterno`, `fechabaja`, `observaciones`) VALUES
(1, 'material1', 'material1', 'material1', 'material1', 'material1', 'material1', 'material1', '0000-00-00 00:00:00', 'material1', 'material1', 'material1', 'material1', '0000-00-00 00:00:00', 'material1'),
(2, 'material2', 'material2', 'material2', 'material2', 'material2', 'material2', 'material2', '0000-00-00 00:00:00', 'material2', 'material2', 'material2', 'material2', '0000-00-00 00:00:00', 'material2'),
(3, 'material3', 'material3', 'material3', 'material3', 'material3', 'material3', 'material3', '0000-00-00 00:00:00', 'material3', 'material3', 'material3', 'material3', '0000-00-00 00:00:00', 'material3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencias`
--

CREATE TABLE `incidencias` (
  `idincidencia` int(11) NOT NULL,
  `fechaincidencia` datetime NOT NULL,
  `incidencia` longtext COLLATE utf8_unicode_ci NOT NULL,
  `fechasolucion` datetime NOT NULL,
  `solucion` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `incidencias`
--

INSERT INTO `incidencias` (`idincidencia`, `fechaincidencia`, `incidencia`, `fechasolucion`, `solucion`) VALUES
(1, '0000-00-00 00:00:00', 'incidencia1', '0000-00-00 00:00:00', 'incidencia1'),
(2, '0000-00-00 00:00:00', 'incidencia2', '0000-00-00 00:00:00', 'incidencia2'),
(3, '0000-00-00 00:00:00', 'incidencia3', '0000-00-00 00:00:00', 'incidencia3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revisiones`
--

CREATE TABLE `revisiones` (
  `idrevision` int(11) NOT NULL,
  `fecharevision` datetime NOT NULL,
  `realizadapor` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `observaciones` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

CREATE TABLE `usuarios` (
  `dni` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `clave` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(9) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`dni`, `clave`, `nombre`, `email`, `telefono`) VALUES
('111111111', '111111111', 'admin', 'admin@admin.com', '111111111'),
('777777777', '777777777', 'encargado', 'encargado@encargado.com', '777777777'),
('888888888', '888888888', 'profesor', 'profesor@profesor.com', '888888888'),
('999999999', '999999999', 'sat', 'sat@sat.com', '999999999');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `fichamaterial`
--
ALTER TABLE `fichamaterial`
  ADD PRIMARY KEY (`idreferencia`);

--
-- Indices de la tabla `incidencias`
--
ALTER TABLE `incidencias`
  ADD PRIMARY KEY (`idincidencia`);

--
-- Indices de la tabla `revisiones`
--
ALTER TABLE `revisiones`
  ADD PRIMARY KEY (`idrevision`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`dni`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fichamaterial`
--
ALTER TABLE `fichamaterial`
  MODIFY `idreferencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `incidencias`
--
ALTER TABLE `incidencias`
  MODIFY `idincidencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `revisiones`
--
ALTER TABLE `revisiones`
  MODIFY `idrevision` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
