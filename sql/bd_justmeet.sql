-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-05-2016 a las 09:31:35
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `denuncia`
--

INSERT INTO `denuncia` (`id`, `denunciado`, `denunciante`, `motivo`) VALUES
(1, 6, 11, 2),
(2, 9, 12, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada`
--

CREATE TABLE IF NOT EXISTS `entrada` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `entrada`
--

INSERT INTO `entrada` (`id`, `usuario_id`, `fecha`) VALUES
(1, 1, '2016-02-03 10:12:28'),
(2, 1, '2016-03-01 18:22:41'),
(3, 1, '2016-03-04 10:30:28'),
(4, 1, '2016-04-15 19:00:41'),
(5, 1, '2016-03-23 10:15:00'),
(6, 1, '2016-03-10 19:23:32'),
(7, 2, '2016-04-05 10:00:00'),
(8, 2, '2016-04-05 21:46:00'),
(9, 2, '2016-04-10 10:00:00'),
(10, 2, '2016-04-12 21:46:00'),
(11, 3, '2016-04-01 11:34:00'),
(12, 3, '2016-04-03 23:48:00'),
(13, 3, '2016-04-05 04:18:48'),
(14, 3, '2016-04-25 18:16:24'),
(15, 4, '2016-03-07 16:00:00'),
(16, 4, '2016-03-09 17:00:00'),
(17, 4, '2016-03-11 16:00:00'),
(18, 2, '2016-04-25 17:00:00'),
(19, 1, '2016-04-25 17:00:00'),
(20, 4, '2016-04-25 19:00:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `filtro`
--

INSERT INTO `filtro` (`id`, `usuario`, `edad_minima`, `edad_maxima`, `sexo`, `proximidad`) VALUES
(1, 5, 21, 27, 2, 81),
(2, 3, 18, 25, 1, 300);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `filtro_avanzado`
--

CREATE TABLE IF NOT EXISTS `filtro_avanzado` (
  `id` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `pelo_color` int(11) NOT NULL,
  `pelo_tipo` int(11) NOT NULL,
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
-- Estructura de tabla para la tabla `juego`
--

CREATE TABLE IF NOT EXISTS `juego` (
  `id` int(11) NOT NULL,
  `usuario_propio` int(11) NOT NULL,
  `usuario_otro` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `juego`
--

INSERT INTO `juego` (`id`, `usuario_propio`, `usuario_otro`, `tipo`, `fecha`) VALUES
(1, 5, 3, 3, '2016-05-16 21:39:26'),
(2, 3, 5, 3, '2016-05-16 21:39:26'),
(3, 3, 10, 1, '2016-05-16 21:39:26'),
(4, 3, 11, 2, '2016-05-16 21:39:26'),
(5, 13, 5, 1, '2016-05-16 21:39:26'),
(6, 12, 5, 2, '2016-05-16 21:39:26');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mensaje`
--

INSERT INTO `mensaje` (`id`, `mensaje`, `usuario1`, `usuario2`, `fecha`) VALUES
(1, 'Holaaa que tal? :)', 3, 6, '2016-05-04 22:00:00'),
(2, 'Bieeen y tu?', 5, 3, '2016-05-09 22:00:00'),
(3, 'Bon dia andrea!', 10, 12, '2016-05-11 09:29:48');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ojos`
--

INSERT INTO `ojos` (`id`, `color`) VALUES
(1, 'Azules'),
(2, 'Verdes'),
(3, 'Marrones'),
(4, 'Grises'),
(5, 'Negros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelo_color`
--

CREATE TABLE IF NOT EXISTS `pelo_color` (
  `id` int(11) NOT NULL,
  `color` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pelo_color`
--

INSERT INTO `pelo_color` (`id`, `color`) VALUES
(1, 'Rubio'),
(2, 'Moreno'),
(3, 'Castaño'),
(4, 'Pelirrojo'),
(5, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelo_tipo`
--

CREATE TABLE IF NOT EXISTS `pelo_tipo` (
  `id` int(11) NOT NULL,
  `tipo` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pelo_tipo`
--

INSERT INTO `pelo_tipo` (`id`, `tipo`) VALUES
(1, 'Liso'),
(2, 'Rizado'),
(3, 'Ondulado'),
(4, 'Rapado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `id` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `sexo_id` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `pelo_tipo_id` int(11) NOT NULL,
  `pelo_color_id` int(11) NOT NULL,
  `ojos_id` int(11) NOT NULL,
  `altura` int(11) NOT NULL,
  `complexion_id` int(11) NOT NULL,
  `fecha_nacimiento` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id`, `usuario`, `sexo_id`, `descripcion`, `pelo_tipo_id`, `pelo_color_id`, `ojos_id`, `altura`, `complexion_id`, `fecha_nacimiento`) VALUES
(1, 5, 1, 'Hola soy programador PHP y quiero conocer a una programadora de Angular JS.', 1, 2, 1, 175, 1, '1994-05-11 07:02:02'),
(2, 3, 2, 'Soy técnica de sistemas', 2, 3, 3, 160, 4, '1993-05-11 07:03:01'),
(3, 9, 2, 'El oscar es un parguelas', 1, 1, 1, 160, 1, '1990-05-10 22:00:00'),
(4, 10, 1, 'Soy un chico que busca gente', 2, 3, 1, 180, 3, '1991-05-10 22:00:00'),
(5, 11, 1, 'Hola :)', 4, 1, 1, 186, 4, '1996-04-21 22:00:00'),
(6, 12, 2, 'Busco gente divertida', 3, 2, 3, 165, 1, '1988-05-01 22:00:00'),
(7, 13, 2, '¿Alguien para quedar?', 3, 3, 2, 171, 0, '1996-05-11 09:28:09'),
(8, 1, 1, 'Hola soy hetero', 2, 2, 4, 199, 3, '1970-05-10 06:27:38');

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
  `conexion` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellidos`, `username`, `password`, `mail`, `conexion`) VALUES
(1, 'David', 'Marin Salvador', 'david.marin', '827ccb0eea8a706c4c34a16891f84e7b', 'david.marin@fje.edu', ''),
(3, 'Marta', 'Perez', 'mperez', '827ccb0eea8a706c4c34a16891f84e7b', 'martaperez@gmail.com', ''),
(5, 'Jose', 'Lopez', 'josico', '827ccb0eea8a706c4c34a16891f84e7b', 'josico@gmail.com', ''),
(6, 'Pepe', 'Ruiz', 'pruiz', '827ccb0eea8a706c4c34a16891f84e7b', 'peperuiz@gmail.com', ''),
(9, 'Lucia', 'Marquez', 'luci', '827ccb0eea8a706c4c34a16891f84e7b', 'luciamarquez@gmail.com', ''),
(10, 'Oscar', 'Parguelas', 'oscarp', '827ccb0eea8a706c4c34a16891f84e7b', 'oscarp@gmail.com', ''),
(11, 'Felipe', 'Reyes', 'pipecalamar', '827ccb0eea8a706c4c34a16891f84e7b', 'pipe@gmail.com', ''),
(12, 'Andrea', 'Ruiz', 'andreaar', '827ccb0eea8a706c4c34a16891f84e7b', 'aruiz@gmail.com', ''),
(13, 'Óscara', 'Díaz', 'laura.diaz', '827ccb0eea8a706c4c34a16891f84e7b', 'oscadiaz@gmail.com', ''),
(14, 'Andrea', 'Hurtado', 'Andreita', '827ccb0eea8a706c4c34a16891f84e7b', 'andrea@fje.edu', ''),
(15, 'Alberto', 'Marques', 'Alberto', '827ccb0eea8a706c4c34a16891f84e7b', 'alberto@fje.edu', ''),
(16, 'Maria', 'Ñigez', 'Maria', '827ccb0eea8a706c4c34a16891f84e7b', 'maria@fje.edu', ''),
(17, 'Felipe', 'Andres', 'Pipe', '827ccb0eea8a706c4c34a16891f84e7b', 'pipe@fje.edu', ''),
(18, 'Claudia', 'Ribiera', 'Claudieta', '827ccb0eea8a706c4c34a16891f84e7b', 'claudia@fje.edu', ''),
(19, 'Raul', 'Perez', 'RuloP', '827ccb0eea8a706c4c34a16891f84e7b', 'raul@fje.edu', ''),
(20, 'Alicia', 'Andro', 'Alicia', '827ccb0eea8a706c4c34a16891f84e7b', 'alicia@fje.edu', ''),
(21, 'Victor', 'Lopez', 'Vic', '827ccb0eea8a706c4c34a16891f84e7b', 'vic@fje.edu', ''),
(22, 'Lucia', 'Gonzalez', 'Lucy', '827ccb0eea8a706c4c34a16891f84e7b', 'lucy@fje.edu', ''),
(23, 'Andres', 'Alozo', 'Andrew', '827ccb0eea8a706c4c34a16891f84e7b', 'andres@fje.edu', ''),
(24, 'Nerea', 'Lopez', 'Nerea', '827ccb0eea8a706c4c34a16891f84e7b', 'nera@fje.edu', ''),
(25, 'Paula', 'Naroz', 'Paulita', '827ccb0eea8a706c4c34a16891f84e7b', 'paula@fje.edu', ''),
(26, 'Alba', 'Koslik', 'Alba', '827ccb0eea8a706c4c34a16891f84e7b', 'alba@fje.edu', ''),
(27, 'Antonio', 'Jesus', 'Toñete', '827ccb0eea8a706c4c34a16891f84e7b', 'antonio@fje.edu', ''),
(28, 'Irina', 'Kosanova', 'Irina', '827ccb0eea8a706c4c34a16891f84e7b', 'irina@fje.edu', ''),
(29, 'Anastasia', 'Livik', 'Anastasia', '827ccb0eea8a706c4c34a16891f84e7b', 'anastasia@fje.edu', ''),
(30, 'Noelia', 'Perez', 'Noelia', '827ccb0eea8a706c4c34a16891f84e7b', 'noelia@fje.edu', ''),
(31, 'Veniciano', 'Domingez', 'Veni', '827ccb0eea8a706c4c34a16891f84e7b', 'veni@fje.edu', ''),
(32, 'Melisa', 'Lipans', 'Meli', '827ccb0eea8a706c4c34a16891f84e7b', 'meli@fje.edu', ''),
(33, 'David', 'Muñoz', 'David', '827ccb0eea8a706c4c34a16891f84e7b', 'dav@fje.edu', ''),
(34, 'Jorge', 'Andres', 'Jorge', '827ccb0eea8a706c4c34a16891f84e7b', 'jorge@fje.edu', ''),
(35, 'Lenadro', 'Gorrolis', 'Lean', '827ccb0eea8a706c4c34a16891f84e7b', 'lean@fje.edu', '');

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
-- Indices de la tabla `entrada`
--
ALTER TABLE `entrada`
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
-- Indices de la tabla `juego`
--
ALTER TABLE `juego`
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
-- Indices de la tabla `pelo_color`
--
ALTER TABLE `pelo_color`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pelo_tipo`
--
ALTER TABLE `pelo_tipo`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `entrada`
--
ALTER TABLE `entrada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `filtro`
--
ALTER TABLE `filtro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
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
-- AUTO_INCREMENT de la tabla `juego`
--
ALTER TABLE `juego`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `motivo`
--
ALTER TABLE `motivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `ojos`
--
ALTER TABLE `ojos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `pelo_color`
--
ALTER TABLE `pelo_color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `pelo_tipo`
--
ALTER TABLE `pelo_tipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT de la tabla `voto`
--
ALTER TABLE `voto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
