-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-12-2015 a las 03:45:28
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `salonfiestas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `direccion` text NOT NULL,
  `telefono` text NOT NULL,
  `pass` text NOT NULL,
  `fullname` text NOT NULL,
  `correo` text NOT NULL,
  `distingido` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `direccion`, `telefono`, `pass`, `fullname`, `correo`, `distingido`) VALUES
(1, 'ivan', 'adassd', '123123', 'popo', 'ivan israel', 'aojdaoidjasodi', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE IF NOT EXISTS `evento` (
  `id_c` int(11) NOT NULL,
  `fecha` int(11) NOT NULL,
  `costo_e` int(11) NOT NULL,
  `hora_i` int(11) NOT NULL,
  `hora_f` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`id_c`, `fecha`, `costo_e`, `hora_i`, `hora_f`) VALUES
(1, 123456, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mobiliario`
--

CREATE TABLE IF NOT EXISTS `mobiliario` (
  `id_m` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mobiliariodelevento`
--

CREATE TABLE IF NOT EXISTS `mobiliariodelevento` (
  `fecha` int(11) NOT NULL,
  `id_m` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE IF NOT EXISTS `servicios` (
  `id_s` int(11) NOT NULL,
  `costo_s` int(11) NOT NULL,
  `nombre` int(11) NOT NULL,
  `descripcion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serviciosdelevento`
--

CREATE TABLE IF NOT EXISTS `serviciosdelevento` (
  `fecha` int(11) NOT NULL,
  `id_s` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id_c`);

--
-- Indices de la tabla `mobiliario`
--
ALTER TABLE `mobiliario`
  ADD PRIMARY KEY (`id_m`);

--
-- Indices de la tabla `mobiliariodelevento`
--
ALTER TABLE `mobiliariodelevento`
  ADD KEY `id_m` (`id_m`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_s`);

--
-- Indices de la tabla `serviciosdelevento`
--
ALTER TABLE `serviciosdelevento`
  ADD KEY `id_s` (`id_s`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `id_c` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `mobiliario`
--
ALTER TABLE `mobiliario`
  MODIFY `id_m` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_s` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `evento_ibfk_1` FOREIGN KEY (`id_c`) REFERENCES `cliente` (`id`);

--
-- Filtros para la tabla `mobiliariodelevento`
--
ALTER TABLE `mobiliariodelevento`
  ADD CONSTRAINT `mobiliariodelevento_ibfk_1` FOREIGN KEY (`id_m`) REFERENCES `mobiliario` (`id_m`);

--
-- Filtros para la tabla `serviciosdelevento`
--
ALTER TABLE `serviciosdelevento`
  ADD CONSTRAINT `serviciosdelevento_ibfk_1` FOREIGN KEY (`id_s`) REFERENCES `servicios` (`id_s`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
