-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-09-2014 a las 20:34:06
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `puls4`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos`
--

CREATE TABLE IF NOT EXISTS `archivos` (
  `id_archivo` int(11) NOT NULL AUTO_INCREMENT,
  `id_post` int(11) NOT NULL,
  `ruta_archivo` varchar(255) NOT NULL COMMENT 'ruta, nombre y extension ?',
  `nombre_orig` varchar(15) NOT NULL COMMENT 'nombre original del archivo',
  PRIMARY KEY (`id_archivo`),
  KEY `id_post` (`id_post`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id_comen` int(11) NOT NULL AUTO_INCREMENT,
  `contenido_comen` text NOT NULL COMMENT 'contenido del comentario',
  `id_post` int(11) NOT NULL COMMENT 'al post q pertenece',
  `id_user` int(11) NOT NULL COMMENT 'el usuario q lo hace',
  `fecha_comen` datetime NOT NULL,
  PRIMARY KEY (`id_comen`),
  KEY `id_user` (`id_user`),
  KEY `id_post` (`id_post`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `crear_post`
--

CREATE TABLE IF NOT EXISTS `crear_post` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id del post',
  `titulo` varchar(100) NOT NULL COMMENT 'titulo del post',
  `contenido` text NOT NULL COMMENT 'contenido del post',
  `fecha` datetime NOT NULL COMMENT 'fecha y hora de la creacion del post',
  `id_user` int(11) NOT NULL COMMENT 'llave foranea del usuario creando el post',
  `like` int(11) NOT NULL DEFAULT '0' COMMENT 'likes del post',
  PRIMARY KEY (`id_post`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Creacion de Posts' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos`
--

CREATE TABLE IF NOT EXISTS `favoritos` (
  `id_favoritos` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL COMMENT 'fk',
  `id_post` int(11) NOT NULL COMMENT 'fk',
  PRIMARY KEY (`id_favoritos`),
  KEY `id_user` (`id_user`),
  KEY `id_post` (`id_post`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post_temas`
--

CREATE TABLE IF NOT EXISTS `post_temas` (
  `id_post_temas` int(11) NOT NULL AUTO_INCREMENT,
  `id_post` int(11) NOT NULL,
  `id_tema` int(11) NOT NULL,
  PRIMARY KEY (`id_post_temas`),
  KEY `id_tema` (`id_tema`),
  KEY `id_post` (`id_post`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas`
--

CREATE TABLE IF NOT EXISTS `temas` (
  `id_tema` int(11) NOT NULL AUTO_INCREMENT,
  `nom_tema` varchar(30) NOT NULL COMMENT 'Descripcion del Tema',
  PRIMARY KEY (`id_tema`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `alias_usuario` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contrasena` varchar(20) NOT NULL COMMENT 'limite 20 caracteres',
  `avatar` varchar(10) NOT NULL COMMENT 'ruta de la imagen',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD CONSTRAINT `archivos_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `crear_post` (`id_post`);

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id_user`),
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`id_post`) REFERENCES `crear_post` (`id_post`);

--
-- Filtros para la tabla `crear_post`
--
ALTER TABLE `crear_post`
  ADD CONSTRAINT `crear_post_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id_user`);

--
-- Filtros para la tabla `favoritos`
--
ALTER TABLE `favoritos`
  ADD CONSTRAINT `favoritos_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id_user`),
  ADD CONSTRAINT `favoritos_ibfk_2` FOREIGN KEY (`id_post`) REFERENCES `crear_post` (`id_post`);

--
-- Filtros para la tabla `post_temas`
--
ALTER TABLE `post_temas`
  ADD CONSTRAINT `post_temas_ibfk_2` FOREIGN KEY (`id_post`) REFERENCES `crear_post` (`id_post`),
  ADD CONSTRAINT `post_temas_ibfk_1` FOREIGN KEY (`id_tema`) REFERENCES `temas` (`id_tema`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
