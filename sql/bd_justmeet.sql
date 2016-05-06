-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-05-2016 a las 13:15:10
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_justmeet`
--
CREATE DATABASE IF NOT EXISTS `bd_justmeet` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bd_justmeet`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `complexion`
--

CREATE TABLE IF NOT EXISTS `complexion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `complexion`
--

INSERT INTO `complexion` (`id`, `nombre`) VALUES
(1, 'Delgado'),
(2, 'Normal'),
(3, 'Fuerte'),
(4, 'Corpulento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `denuncia`
--

CREATE TABLE IF NOT EXISTS `denuncia` (
  `id` int(11) NOT NULL,
  `denunciado` int(11) NOT NULL,
  `denunciante` int(11) NOT NULL,
  `motivo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `filtro`
--

CREATE TABLE IF NOT EXISTS `filtro` (
  `id` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `edad_minima` int(11) NOT NULL,
  `edad_maxima` int(11) NOT NULL,
  `sexo` int(11) NOT NULL,
  `proximidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `filtro_avanzado`
--

CREATE TABLE IF NOT EXISTS `filtro_avanzado` (
  `id` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `pelo` int(11) NOT NULL,
  `ojos` int(11) NOT NULL,
  `altura` int(11) NOT NULL,
  `complexion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `match`
--

CREATE TABLE IF NOT EXISTS `match` (
  `id` int(11) NOT NULL,
  `usuario_propio` int(11) NOT NULL,
  `usuario_otro` int(11) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE IF NOT EXISTS `mensaje` (
  `id` int(11) NOT NULL,
  `mensaje` text NOT NULL,
  `usuario1` int(11) NOT NULL,
  `usuario2` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motivo`
--

CREATE TABLE IF NOT EXISTS `motivo` (
  `id` int(11) NOT NULL,
  `texto` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `motivo`
--

INSERT INTO `motivo` (`id`, `texto`) VALUES
(1, 'Spam'),
(2, 'Fotos inapropiadas'),
(3, 'Abuso verbal'),
(4, 'Perfil falso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ojos`
--

CREATE TABLE IF NOT EXISTS `ojos` (
  `id` int(11) NOT NULL,
  `color` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelo`
--

CREATE TABLE IF NOT EXISTS `pelo` (
  `id` int(11) NOT NULL,
  `color` varchar(20) NOT NULL,
  `longitud` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `id` int(11) NOT NULL,
  `sexo` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `pelo` int(11) NOT NULL,
  `ojos` int(11) NOT NULL,
  `altura` int(11) NOT NULL,
  `complexion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE IF NOT EXISTS `sexo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`id`, `nombre`) VALUES
(1, 'Hombre'),
(2, 'Mujer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_match`
--

CREATE TABLE IF NOT EXISTS `tipo_match` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_match`
--

INSERT INTO `tipo_match` (`id`, `nombre`) VALUES
(1, 'Le gustas'),
(2, 'Te gusta'),
(3, 'Match');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `fecha_nacimiento` varchar(50) NOT NULL,
  `perfil` int(11) NOT NULL,
  `conexion` varchar(30) NOT NULL,
  `sexo_id` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellidos`, `username`, `password`, `mail`, `fecha_nacimiento`, `perfil`, `conexion`, `sexo_id`) VALUES
(1, 'David', 'Marin Salvador', 'david.marin', '827ccb0eea8a706c4c34a16891f84e7b', 'david.marin@fje.edu', '01/01/1990', 1, '', 1),
(3, 'Marta', 'df', 'a', '827ccb0eea8a706c4c34a16891f84e7b', 'a@gmail.com', '1993-12-12', 0, '', 2),
(5, 'Jose', 'df', 'josico', '827ccb0eea8a706c4c34a16891f84e7b', 'b@gmail.com', '1993-12-12', 0, '', 1),
(6, 'Pepe', 'df', 'gd', '12345', 'c@gmail.cpm', '1993-12-12', 0, '', 1),
(9, 'Lucia', 'df', 'luci', '827ccb0eea8a706c4c34a16891f84e7b', 'd@gmail.cpm', '1993-12-12', 0, '', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voto`
--

CREATE TABLE IF NOT EXISTS `voto` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `usuario_voto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `complexion`
--
ALTER TABLE `complexion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `denuncia`
--
ALTER TABLE `denuncia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `filtro`
--
ALTER TABLE `filtro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `filtro_avanzado`
--
ALTER TABLE `filtro_avanzado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `match`
--
ALTER TABLE `match`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `motivo`
--
ALTER TABLE `motivo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ojos`
--
ALTER TABLE `ojos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pelo`
--
ALTER TABLE `pelo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_match`
--
ALTER TABLE `tipo_match`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indices de la tabla `voto`
--
ALTER TABLE `voto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `complexion`
--
ALTER TABLE `complexion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `denuncia`
--
ALTER TABLE `denuncia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `filtro`
--
ALTER TABLE `filtro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `filtro_avanzado`
--
ALTER TABLE `filtro_avanzado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `match`
--
ALTER TABLE `match`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `motivo`
--
ALTER TABLE `motivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `ojos`
--
ALTER TABLE `ojos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pelo`
--
ALTER TABLE `pelo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `sexo`
--
ALTER TABLE `sexo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tipo_match`
--
ALTER TABLE `tipo_match`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `voto`
--
ALTER TABLE `voto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
