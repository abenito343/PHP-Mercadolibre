-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2014 a las 20:29:50
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `hoeleequis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos`
--

CREATE TABLE IF NOT EXISTS `favoritos` (
  `tf_id` int(11) NOT NULL AUTO_INCREMENT,
  `tf_ttid` int(11) NOT NULL,
  `tf_favoriteador` varchar(55) NOT NULL,
  PRIMARY KEY (`tf_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `favoritos`
--

INSERT INTO `favoritos` (`tf_id`, `tf_ttid`, `tf_favoriteador`) VALUES
(1, 2, 'jorge3'),
(2, 2, 'jorge3'),
(3, 2, 'jorge3'),
(4, 2, 'jorge3'),
(5, 2, 'jorge3'),
(6, 2, 'jorge3'),
(7, 2, 'jorge3'),
(8, 2, 'jorge3'),
(9, 2, 'jorge3'),
(10, 2, 'jorge3'),
(11, 2, 'jorge3'),
(12, 2, 'jorge3'),
(13, 2, 'jorge3'),
(14, 2, 'jorge3'),
(15, 2, 'jorge3'),
(16, 2, 'jorge3'),
(17, 2, 'jorge3'),
(18, 3, 'jorge3'),
(19, 3, 'jorge3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tweets`
--

CREATE TABLE IF NOT EXISTS `tweets` (
  `tt_id` int(11) NOT NULL AUTO_INCREMENT,
  `tt_usuario` varchar(55) NOT NULL,
  `tt_contenido` text NOT NULL,
  `tt_retwits` int(11) NOT NULL,
  `tt_favoritos` int(11) NOT NULL,
  `tt_fecha` varchar(155) NOT NULL,
  PRIMARY KEY (`tt_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tweets`
--

INSERT INTO `tweets` (`tt_id`, `tt_usuario`, `tt_contenido`, `tt_retwits`, `tt_favoritos`, `tt_fecha`) VALUES
(1, 'carlos8', 'gerado', 0, 0, ''),
(2, 'jorge3', 'hola mundo', 1, 7, '23/09/2014 09:10 PM'),
(3, 'DE jorge3 RT por jorge3', 'hola mundo', 0, 2, 'tuitiado 23/09/2014 09:10 PM RT 16/10/2014 06:32 PM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `tu_id` int(11) NOT NULL AUTO_INCREMENT,
  `tu_usuario` varchar(30) NOT NULL,
  `tu_contrasena` varchar(30) NOT NULL,
  `tu_mail` varchar(30) NOT NULL,
  `tu_nombre` varchar(55) NOT NULL,
  `tu_apellido` varchar(55) NOT NULL,
  `tu_ano` int(11) NOT NULL,
  `tu_imagen` varchar(55) NOT NULL,
  PRIMARY KEY (`tu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`tu_id`, `tu_usuario`, `tu_contrasena`, `tu_mail`, `tu_nombre`, `tu_apellido`, `tu_ano`, `tu_imagen`) VALUES
(1, 'jorge3', 'hoen4', 'tuhna@tutia.com', 'jorge', 'diaz', 1988, 'komander.jpg'),
(2, 'carlos8', 'jose', 'tuabuela@tutia.com', 'carlos', 'perez', 1901, 'carlos.jpg'),
(6, 'julio5', 'hoen5', 'tuhna@hotmail.com', 'julio', 'pasadore', 1988, '408210_431269523575078_1592065961_n.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
