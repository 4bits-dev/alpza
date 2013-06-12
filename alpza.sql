-- phpMyAdmin SQL Dump
-- version 3.5.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-06-2013 a las 02:01:46
-- Versión del servidor: 5.5.28
-- Versión de PHP: 5.3.15

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `alpza`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alpza_banner`
--

CREATE TABLE IF NOT EXISTS `alpza_banner` (
  `id_alpza_banner` int(11) NOT NULL AUTO_INCREMENT,
  `id_alpza_banner_tipo` int(11) NOT NULL,
  `path_contenido` varchar(200) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `fecha_edicion` date DEFAULT NULL,
  `estado` int(11) DEFAULT '1',
  `url_tracking` varchar(200) DEFAULT NULL,
  `url_destino` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_alpza_banner`),
  KEY `fk_alpza_banner_alpza_banner_tipo1` (`id_alpza_banner_tipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Volcado de datos para la tabla `alpza_banner`
--

INSERT INTO `alpza_banner` (`id_alpza_banner`, `id_alpza_banner_tipo`, `path_contenido`, `nombre`, `fecha_ingreso`, `fecha_edicion`, `estado`, `url_tracking`, `url_destino`) VALUES
(25, 1, '8f8219dfaee2b8ee44aafeb3d9ae9e67df7dad4c.jpg', 'XX CONGRESSO ALPZA 2013 | Fundação Parque Zoológico de São Paulo', '2013-04-19', '2013-04-19', 1, '', 'http://www.zoologico.com.br/alpza2013/?lang=es'),
(26, 1, 'bae731c5a66970a87d2f758ef403c4365057dafe.jpg', 'BECAS para CUIDADORES XX Congreso ALPZA, SÃO PAULO, BRASIL 2013', '2013-04-19', '2013-04-19', 1, '', 'http://www.google.cl'),
(27, 1, 'c9167bb5eaedead0974c0c7b77f2bfef3155ab2d.jpg', '4', '2008-01-16', '2012-11-23', 1, '', 'http://www.tarreo.cl'),
(28, 1, 'c96c31038ea8a3999599b48d94296b2858c733bd.jpg', '5', '2008-02-16', '2012-11-23', 1, '', 'http://www.tarreo.cl'),
(29, 1, 'ce933c8bfdcc79b65be3b4f4cf8eaec077d7d43f.jpg', '6', '2009-01-02', '2012-11-23', 1, '', 'http://www.hola.cl');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alpza_banner_tipo`
--

CREATE TABLE IF NOT EXISTS `alpza_banner_tipo` (
  `id_alpza_banner_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_alpza_banner_tipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `alpza_banner_tipo`
--

INSERT INTO `alpza_banner_tipo` (`id_alpza_banner_tipo`, `nombre`) VALUES
(1, 'Slider Central'),
(2, 'Banner Lateral Derecho');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alpza_beca`
--

CREATE TABLE IF NOT EXISTS `alpza_beca` (
  `id_alpza_beca` int(11) NOT NULL AUTO_INCREMENT,
  `alpza_miembro_id_alpza_miembro` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `extracto` varchar(254) DEFAULT NULL,
  `beca` text,
  `estado` int(11) DEFAULT '1',
  `fecha_ingreso` date DEFAULT NULL,
  `fecha_edicion` date DEFAULT NULL,
  `fecha_publicacion` date DEFAULT NULL,
  PRIMARY KEY (`id_alpza_beca`),
  KEY `fk_alpza_beca_alpza_miembro1` (`alpza_miembro_id_alpza_miembro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alpza_comite`
--

CREATE TABLE IF NOT EXISTS `alpza_comite` (
  `id_alpza_comite` int(11) NOT NULL AUTO_INCREMENT,
  `id_alpza_miembro` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `mision` text,
  `vision` text,
  `objetivo` text,
  `informacion` text,
  `email` varchar(100) DEFAULT NULL,
  `coordinador` varchar(100) DEFAULT NULL,
  `email_coordinador` varchar(100) DEFAULT NULL,
  `estado` int(11) DEFAULT '1',
  `fecha_ingreso` date DEFAULT NULL,
  `fecha_edicion` date DEFAULT NULL,
  `fecha_publicacion` date DEFAULT NULL,
  PRIMARY KEY (`id_alpza_comite`),
  KEY `fk_alpza_comite_alpza_miembro1` (`id_alpza_miembro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `alpza_comite`
--

INSERT INTO `alpza_comite` (`id_alpza_comite`, `id_alpza_miembro`, `nombre`, `mision`, `vision`, `objetivo`, `informacion`, `email`, `coordinador`, `email_coordinador`, `estado`, `fecha_ingreso`, `fecha_edicion`, `fecha_publicacion`) VALUES
(1, 1, 'jwndiwnfonqwjenf', '<p>&ntilde;asfk&ntilde;amsfk&acute;ma&ntilde;smfd&ntilde;ams&ntilde;fm&ntilde;asmfk&ntilde;asmf&ntilde;kmk sma&ntilde;f m</p>', '<p>&ntilde;lm k&ntilde;lmsfma&ntilde;lsmdf&ntilde;ldmas&ntilde;lmf&ntilde;maf s&ntilde;adlk lkm lm lam</p>', '<p>lkmwlfkmasdlfl&ntilde;as dlf&ntilde; dl&ntilde;akmf lkmdas mf&acute;samdfm asdf</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '<p>&nbsp;&ntilde;lfmsl&ntilde;dmfamfl&ntilde;mas&ntilde;lmdfamsdfm&ntilde;lasmfd&ntilde;maksk</p>', 'prueba@gmail.com', 'XXXXXXX', 'prueba@gmail.com', 1, '2012-12-17', '2012-12-17', '2012-12-17'),
(2, 1, 'yyyyyyyyyy', '<p>dlksadn&ntilde;lamD&Ntilde;LKMa&ntilde;ldm&ntilde;lamD&Ntilde;M&Ntilde;ALKM k&ntilde;d&ntilde;&Ntilde;D</p>', '<p>dlksadn&ntilde;lamD&Ntilde;LKMa&ntilde;ldm&ntilde;lamD&Ntilde;M&Ntilde;ALKM k&ntilde;d&ntilde;&Ntilde;D</p>', '<p>dlksadn&ntilde;lamD&Ntilde;LKMa&ntilde;ldm&ntilde;lamD&Ntilde;M&Ntilde;ALKM k&ntilde;d&ntilde;&Ntilde;D</p>', '<p>dlksadn&ntilde;lamD&Ntilde;LKMa&ntilde;ldm&ntilde;lamD&Ntilde;M&Ntilde;ALKM k&ntilde;d&ntilde;&Ntilde;D</p>', 'prueba@gmail.com', 'XXXXXXX', 'bayro.monsalve@4bits.cl', 1, '2012-12-17', '2012-12-17', '2012-12-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alpza_congreso`
--

CREATE TABLE IF NOT EXISTS `alpza_congreso` (
  `id_alpza_congreso` int(11) NOT NULL AUTO_INCREMENT,
  `id_alpza_miembro` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `extracto` varchar(254) DEFAULT NULL,
  `congreso` text,
  `estado` int(11) DEFAULT '1',
  `fecha_ingreso` date DEFAULT NULL,
  `fecha_edicion` date DEFAULT NULL,
  `fecha_publicacion` date DEFAULT NULL,
  PRIMARY KEY (`id_alpza_congreso`),
  KEY `fk_alpza_congreso_alpza_miembro1` (`id_alpza_miembro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alpza_evento`
--

CREATE TABLE IF NOT EXISTS `alpza_evento` (
  `id_alpza_evento` int(11) NOT NULL AUTO_INCREMENT,
  `alpza_miembro_id_alpza_miembro` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `extracto` varchar(254) DEFAULT NULL,
  `evento` text,
  `estado` int(11) DEFAULT '1',
  `fecha_ingreso` date DEFAULT NULL,
  `fecha_edicion` date DEFAULT NULL,
  `fecha_publicacion` date DEFAULT NULL,
  PRIMARY KEY (`id_alpza_evento`),
  KEY `fk_alpza_evento_alpza_miembro1` (`alpza_miembro_id_alpza_miembro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alpza_informacion`
--

CREATE TABLE IF NOT EXISTS `alpza_informacion` (
  `id_alpza_informacion` int(11) NOT NULL AUTO_INCREMENT,
  `alpza_miembro_id_alpza_miembro` int(11) NOT NULL,
  `mision` text,
  `vision` text,
  `aliado` text,
  `boletin` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `rss` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `descripcion` text,
  `telefono` varchar(100) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `fax` varchar(100) DEFAULT NULL,
  `estado` int(11) DEFAULT '1',
  `fecha_ingreso` date DEFAULT NULL,
  `fecha_edicion` date DEFAULT NULL,
  `fecha_publicacion` date DEFAULT NULL,
  PRIMARY KEY (`id_alpza_informacion`),
  KEY `fk_alpza_informacion_alpza_miembro1` (`alpza_miembro_id_alpza_miembro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `alpza_informacion`
--

INSERT INTO `alpza_informacion` (`id_alpza_informacion`, `alpza_miembro_id_alpza_miembro`, `mision`, `vision`, `aliado`, `boletin`, `twitter`, `facebook`, `rss`, `email`, `descripcion`, `telefono`, `direccion`, `fax`, `estado`, `fecha_ingreso`, `fecha_edicion`, `fecha_publicacion`) VALUES
(1, 2, '<p>Somos una plataforma que promueve el <strong>desarrollo integral de sus miembros</strong> e inspira a obtener el mayor impacto en <strong>conservaci&oacute;n de biodiversidad</strong>, integrando los <strong>esfuerzos</strong> de la regi&oacute;n latinoamericana a los objetivos de conservaci&oacute;n global.</p>', '<p style="text-align: justify;">Asegurar la <strong>conservaci&oacute;n de la megabiodiversidad latinoamericana</strong> integrando arm&oacute;nicamente el ser humano con la naturaleza.</p>\r\n<p style="text-align: justify;">Objetivos estrat&eacute;gicos:</p>\r\n<ol>\r\n<li>Promover estrategias para el <strong>desarrollo integral</strong> de los asociados.</li>\r\n<li>Impactar positivamente en la <strong>conservaci&oacute;n de la biodiversidad latinoamericana</strong> (Desarrollo de un programa regional de conservaci&oacute;n).</li>\r\n<li>Garantizar la <strong>viabilidad de las poblaciones</strong> de los zool&oacute;gicos y acuarios latinoamericanos.</li>\r\n</ol>', '', '', 'https://twitter.com/ALPZA_Zoos', 'https://www.facebook.com/alpza.zoos', '', 'info@alpza.com', '<p style="text-align: justify;">La Asociaci&oacute;n Latinoamericana de Parques Zool&oacute;gicos y Acuarios (ALPZA) es el organismo regional m&aacute;s importante que incluye a las m&aacute;s prestigiosas e influyentes instituciones zool&oacute;gicas de Latinoam&eacute;rica. Como tal, su funci&oacute;n es facilitar la asociatividad de sus miembros, as&iacute; como promover su desarrollo integral, con enfoque en la conservaci&oacute;n de la biodiversidad, el bienestar animal y la educaci&oacute;n ambiental. Es, adem&aacute;s, el representante de Latinoam&eacute;rica en la Asociaci&oacute;n Mundial de Zool&oacute;gicos y Acuarios (WAZA) as&iacute; como frente a otros organismos como IUCN y CITES, entre otros. ALPZA promueve, coordina y certifica importantes programas de conservaci&oacute;n de nuestra biodiversidad Latinoamericana.</p>', '+56 962364020', 'Av. Cristóbal Colón 4840, dpto 124-A, Las Condes, Santiago, Chile', '', 1, '2013-06-03', '2013-06-03', '2013-06-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alpza_junta`
--

CREATE TABLE IF NOT EXISTS `alpza_junta` (
  `id_alpza_junta` int(11) NOT NULL AUTO_INCREMENT,
  `id_alpza_miembro` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `presidente` varchar(100) DEFAULT NULL,
  `vicepresidente` varchar(100) DEFAULT NULL,
  `secretario` varchar(100) DEFAULT NULL,
  `tesorero` varchar(100) DEFAULT NULL,
  `fiscal` varchar(100) DEFAULT NULL,
  `director_ejecutivo` varchar(100) DEFAULT NULL,
  `estado` int(11) DEFAULT '1',
  `fecha_ingreso` date DEFAULT NULL,
  `fecha_edicion` date DEFAULT NULL,
  `fecha_publicacion` date DEFAULT NULL,
  PRIMARY KEY (`id_alpza_junta`),
  KEY `fk_alpza_junta_alpza_miembro1` (`id_alpza_miembro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `alpza_junta`
--

INSERT INTO `alpza_junta` (`id_alpza_junta`, `id_alpza_miembro`, `nombre`, `presidente`, `vicepresidente`, `secretario`, `tesorero`, `fiscal`, `director_ejecutivo`, `estado`, `fecha_ingreso`, `fecha_edicion`, `fecha_publicacion`) VALUES
(1, 1, '', 'Mauricio Fabry, Zoológico Nacional, Parque Metropolitano de Santiago-Chile', 'Joao Batista Cruz, Fundación Parque Zoológico de Sao Paulo-Brasil', 'Frank Carlos Camacho, Africam Safari Puebla-México', 'Haydy Monsalve, Fundación Zoológico Santacruz -Colombia', 'Ximena Pazmiño, Zoológico de Quito -Ecuador', 'Andrea Caiozzi', 1, '2012-12-15', '2012-12-15', '2012-12-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alpza_miembro`
--

CREATE TABLE IF NOT EXISTS `alpza_miembro` (
  `id_alpza_miembro` int(11) NOT NULL AUTO_INCREMENT,
  `id_alpza_miembro_tipo` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  `fecha_ingreso` date NOT NULL,
  `fecha_edicion` date NOT NULL,
  `fecha_publicacion` date NOT NULL,
  PRIMARY KEY (`id_alpza_miembro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `alpza_miembro`
--

INSERT INTO `alpza_miembro` (`id_alpza_miembro`, `id_alpza_miembro_tipo`, `nombre`, `estado`, `fecha_ingreso`, `fecha_edicion`, `fecha_publicacion`) VALUES
(1, 0, 'Alpza', 1, '2012-11-25', '2012-11-25', '2012-11-25'),
(2, 0, 'Prueba', 1, '2013-01-07', '2013-01-07', '2013-02-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alpza_miembro_asignado`
--

CREATE TABLE IF NOT EXISTS `alpza_miembro_asignado` (
  `id_sf_guard_user` int(11) NOT NULL,
  `id_alpza_miembro` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `fk_alpza_miembro_asignado_alpza_usuario1` (`id_sf_guard_user`),
  KEY `fk_alpza_miembro_asignado_alpza_miembro1` (`id_alpza_miembro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `alpza_miembro_asignado`
--

INSERT INTO `alpza_miembro_asignado` (`id_sf_guard_user`, `id_alpza_miembro`, `id`) VALUES
(2, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alpza_miembro_asociados`
--

CREATE TABLE IF NOT EXISTS `alpza_miembro_asociados` (
  `id_alpza_miembro_asociados` int(11) NOT NULL AUTO_INCREMENT,
  `alpza_miembro_id_alpza_miembro` int(11) NOT NULL,
  `nombre_formal` varchar(100) DEFAULT NULL,
  `sigla` varchar(45) DEFAULT NULL,
  `tipo_institucion` varchar(100) DEFAULT NULL,
  `numero_identificacion` varchar(100) DEFAULT NULL,
  `ano_fundacion` date DEFAULT NULL,
  `ano_ingreso_alpza` date DEFAULT NULL,
  `director_nombre` varchar(100) DEFAULT NULL,
  `director_email` varchar(100) DEFAULT NULL,
  `delegado_nombre` varchar(100) DEFAULT NULL,
  `delegado_apellido` varchar(100) DEFAULT NULL,
  `delegado_cargo` varchar(100) DEFAULT NULL,
  `delegado_profesion` varchar(100) DEFAULT NULL,
  `delegado_email` varchar(100) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `codigo_postal` varchar(100) DEFAULT NULL,
  `pais` varchar(100) DEFAULT NULL,
  `telefono_cod_ciudad` varchar(45) DEFAULT NULL,
  `telefono_cod_pais` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `fax` varchar(45) DEFAULT NULL,
  `sitio_web` varchar(254) DEFAULT NULL,
  `descripcion` text,
  `mision` text,
  `vision` text,
  `objetivos` text,
  `acreditacion_aza` int(11) DEFAULT NULL,
  `acreditacion_iso14001` int(11) DEFAULT NULL,
  `acreditacion_iso9001` int(11) DEFAULT NULL,
  `acreditacion_otra` int(11) DEFAULT NULL,
  `asociacion_waza` int(11) DEFAULT NULL,
  `asociacion_aza` int(11) DEFAULT NULL,
  `asociacion_eaza` int(11) DEFAULT NULL,
  `asociacion_ize` int(11) DEFAULT NULL,
  `asociacion_amaczoa` int(11) DEFAULT NULL,
  `asociacion_isis` int(11) DEFAULT NULL,
  `asociacion_otra` int(11) DEFAULT NULL,
  `marca_anillo` int(11) DEFAULT NULL,
  `marca_banda` int(11) DEFAULT NULL,
  `marca_caliente` int(11) DEFAULT NULL,
  `marca_fria` int(11) DEFAULT NULL,
  `marca_microchip` int(11) DEFAULT NULL,
  `marca_natura` int(11) DEFAULT NULL,
  `marca_piquete` int(11) DEFAULT NULL,
  `marca_raya` int(11) DEFAULT NULL,
  `marca_tatuaje` int(11) DEFAULT NULL,
  `marca_otra` int(11) DEFAULT NULL,
  `visitas_anuales` varchar(45) DEFAULT NULL,
  `propietario` varchar(45) DEFAULT NULL,
  `administrador` varchar(45) DEFAULT NULL,
  `lucro` int(11) DEFAULT NULL,
  `ofrece_asesoria` int(11) DEFAULT NULL,
  `personal_permanente` varchar(45) DEFAULT NULL,
  `personal_temporal` varchar(45) DEFAULT NULL,
  `horario_atencion` text,
  `objetivo` text,
  `senalizacion_porcentaje` varchar(100) DEFAULT NULL,
  `zoologico_contacto` varchar(100) DEFAULT NULL,
  `boletin` varchar(100) DEFAULT NULL,
  `programa_enriquecimiento` varchar(100) DEFAULT NULL,
  `programa_entrenamiento` varchar(100) DEFAULT NULL,
  `programa_manejo_ambiental` varchar(100) DEFAULT NULL,
  `programa_medicina_preventiva` varchar(100) DEFAULT NULL,
  `consulta_externa_veterinaria` varchar(100) DEFAULT NULL,
  `show` varchar(100) DEFAULT NULL,
  `documento_estrategico` varchar(100) DEFAULT NULL,
  `proyecto_conservacion_exsitu` varchar(100) DEFAULT NULL,
  `proyecto_conservacion_insitu` varchar(100) DEFAULT NULL,
  `asociacion_lista_asociaciones` varchar(100) DEFAULT NULL,
  `asociacion_lista_instituciones` varchar(100) DEFAULT NULL,
  `asociacion_apoyo_desde_alpza` varchar(100) DEFAULT NULL,
  `asociacion_apoyo_hacia_alpza` varchar(100) DEFAULT NULL,
  `asociacion_estatutos` varchar(100) DEFAULT NULL,
  `asociacion_organigrama` varchar(100) DEFAULT NULL,
  `asociacion_panorama_pais` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_alpza_miembro_asociados`),
  KEY `fk_alpza_miembro_asociados_alpza_miembro1` (`alpza_miembro_id_alpza_miembro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alpza_miembro_coleccion`
--

CREATE TABLE IF NOT EXISTS `alpza_miembro_coleccion` (
  `id_alpza_miembro_coleccion` int(11) NOT NULL AUTO_INCREMENT,
  `id_alpza_miembro` int(11) NOT NULL,
  `numero_especies` varchar(45) DEFAULT NULL,
  `porcentaje_especies_nativas` varchar(45) DEFAULT NULL,
  `especies_amenazadas_iucn` varchar(45) DEFAULT NULL,
  `numero_ejemplares` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_alpza_miembro_coleccion`),
  KEY `fk_alpza_miembro_coleccion_alpza_miembro1` (`id_alpza_miembro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alpza_miembro_estado_financiero_historial`
--

CREATE TABLE IF NOT EXISTS `alpza_miembro_estado_financiero_historial` (
  `id_alpza_miembro_finanzas_historial` int(11) NOT NULL AUTO_INCREMENT,
  `id_alpza_miembro_finanzas` int(11) NOT NULL,
  PRIMARY KEY (`id_alpza_miembro_finanzas_historial`),
  KEY `fk_alpza_miembro_estado_financiero_historial_alpza_miembro_fi1` (`id_alpza_miembro_finanzas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alpza_miembro_finanzas`
--

CREATE TABLE IF NOT EXISTS `alpza_miembro_finanzas` (
  `id_alpza_miembro_finanzas` int(11) NOT NULL AUTO_INCREMENT,
  `id_alpza_miembro` int(11) NOT NULL,
  `cuenta` varchar(100) DEFAULT NULL,
  `institucion` varchar(100) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `duracion` varchar(100) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `fecha_edicion` date DEFAULT NULL,
  `fecha_publicacion` date DEFAULT NULL,
  PRIMARY KEY (`id_alpza_miembro_finanzas`),
  KEY `fk_alpza_miembro_finanzas_alpza_miembro1_idx` (`id_alpza_miembro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alpza_miembro_nacionales`
--

CREATE TABLE IF NOT EXISTS `alpza_miembro_nacionales` (
  `id_alpza_miembro_nacionales` int(11) NOT NULL AUTO_INCREMENT,
  `alpza_miembro_id_alpza_miembro` int(11) NOT NULL,
  `nombre_formal` varchar(100) DEFAULT NULL,
  `sigla` varchar(100) DEFAULT NULL,
  `numero_identificacion` varchar(100) DEFAULT NULL,
  `ano_fundacion` date DEFAULT NULL,
  `ano_ingreso_alpza` date DEFAULT NULL,
  `director_nombre` varchar(100) DEFAULT NULL,
  `director_email` varchar(100) DEFAULT NULL,
  `personal_permanente` varchar(100) DEFAULT NULL,
  `personal_temporal` varchar(100) DEFAULT NULL,
  `delegado_nombre` varchar(100) DEFAULT NULL,
  `delegado_apellido` varchar(100) DEFAULT NULL,
  `delegado_profesion` varchar(100) DEFAULT NULL,
  `delegado_cargo` varchar(100) DEFAULT NULL,
  `delegado_email` varchar(100) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `codigo_postal` varchar(100) DEFAULT NULL,
  `pais` varchar(100) DEFAULT NULL,
  `telefono_cod_ciudad` varchar(45) DEFAULT NULL,
  `telefono_cod_pais` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `fax` varchar(45) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `sitio_web` varchar(254) DEFAULT NULL,
  `naturaleza_juridica_publica` int(11) DEFAULT NULL,
  `naturaleza_juridica_privada` int(11) DEFAULT NULL,
  `naturaleza_juridica_mixta` int(11) DEFAULT NULL,
  `propietario` varchar(45) DEFAULT NULL,
  `lucro` int(11) DEFAULT NULL,
  `numero_instituciones_miembro` varchar(45) DEFAULT NULL,
  `porcentaje_covertura_nacional` varchar(45) DEFAULT NULL,
  `lista_instituciones_miembro` text,
  `estatutos` varchar(100) DEFAULT NULL,
  `organigrama` varchar(100) DEFAULT NULL,
  `otra_asociacion` text,
  `descripcion` text,
  `mision` text,
  `vision` text,
  `objetivo` text,
  `panorama_general` text,
  `proyectos` text,
  `area_trabajo` text,
  `considera_apoyo_alpza` text,
  PRIMARY KEY (`id_alpza_miembro_nacionales`),
  KEY `fk_alpza_miembro_nacionales_alpza_miembro1` (`alpza_miembro_id_alpza_miembro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alpza_miembro_profesional`
--

CREATE TABLE IF NOT EXISTS `alpza_miembro_profesional` (
  `id_alpza_miembro_profesional` int(11) NOT NULL AUTO_INCREMENT,
  `alpza_miembro_id_alpza_miembro` int(11) NOT NULL,
  `nombre_formal` varchar(100) DEFAULT NULL,
  `sigla` varchar(45) DEFAULT NULL,
  `numero_identificacion` date DEFAULT NULL,
  `ano_ingreso_alpza` date DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `profesion` varchar(100) DEFAULT NULL,
  `trabajo` varchar(100) DEFAULT NULL,
  `cargo` varchar(100) DEFAULT NULL,
  `otra_asociacion` varchar(100) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `codigo_postal` varchar(100) DEFAULT NULL,
  `pais` varchar(100) DEFAULT NULL,
  `telefono_cod_ciudad` varchar(45) DEFAULT NULL,
  `telefono_cod_pais` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `fax` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `sitio_web` varchar(254) DEFAULT NULL,
  `intereses_principales` text,
  `area_tematica_interes` text,
  `area_experiencia` text,
  `proyecto` text,
  `publicacion` text,
  PRIMARY KEY (`id_alpza_miembro_profesional`),
  KEY `fk_alpza_miembro_profesional_alpza_miembro1` (`alpza_miembro_id_alpza_miembro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alpza_miembro_regional`
--

CREATE TABLE IF NOT EXISTS `alpza_miembro_regional` (
  `id_alpza_miembro_regional` int(11) NOT NULL AUTO_INCREMENT,
  `alpza_miembro_id_alpza_miembro` int(11) NOT NULL,
  `nombre_formal` varchar(100) DEFAULT NULL,
  `sigla` varchar(100) DEFAULT NULL,
  `director_nombre` varchar(100) DEFAULT NULL,
  `director_email` varchar(100) DEFAULT NULL,
  `numero_identificacion` varchar(100) DEFAULT NULL,
  `ano_fundacion` date DEFAULT NULL,
  `ano_ingreso_alpza` date DEFAULT NULL,
  `delegado_nombre` varchar(100) DEFAULT NULL,
  `delegado_apellido` varchar(100) DEFAULT NULL,
  `delegado_profesion` varchar(100) DEFAULT NULL,
  `delegado_cargo` varchar(100) DEFAULT NULL,
  `delegado_email` varchar(100) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `telefono_cod_ciudad` varchar(45) DEFAULT NULL,
  `telefono_cod_pais` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `fax` varchar(45) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `sitio_web` varchar(254) DEFAULT NULL,
  `mision` text,
  `vision` text,
  `descripcion` text,
  `objetivo` text,
  `proyectos` text,
  `pais` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_alpza_miembro_regional`),
  KEY `fk_alpza_miembro_regional_alpza_miembro1` (`alpza_miembro_id_alpza_miembro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alpza_noticia`
--

CREATE TABLE IF NOT EXISTS `alpza_noticia` (
  `id_alpza_noticia` int(11) NOT NULL AUTO_INCREMENT,
  `alpza_miembro_id_alpza_miembro` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `extracto` varchar(254) DEFAULT NULL,
  `noticia` text,
  `estado` int(11) DEFAULT '1',
  `fecha_ingreso` date DEFAULT NULL,
  `fecha_edicion` date DEFAULT NULL,
  `fecha_publicacion` date DEFAULT NULL,
  PRIMARY KEY (`id_alpza_noticia`),
  KEY `fk_alpza_noticia_alpza_miembro1` (`alpza_miembro_id_alpza_miembro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `alpza_noticia`
--

INSERT INTO `alpza_noticia` (`id_alpza_noticia`, `alpza_miembro_id_alpza_miembro`, `nombre`, `extracto`, `noticia`, `estado`, `fecha_ingreso`, `fecha_edicion`, `fecha_publicacion`) VALUES
(1, 1, 'Prueba', 'La ingeniería es el conjunto de conocimientos y técnicas científicas aplicadas a la creación, perfeccionamiento e implementación de estructuras', '<p>La ingenier&iacute;a es el conjunto de conocimientos y t&eacute;cnicas cient&iacute;ficas aplicadas a la creaci&oacute;n, perfeccionamiento e implementaci&oacute;n de estructuras (tanto f&iacute;sicas como te&oacute;ricas) para la resoluci&oacute;n de problemas que afectan la actividad cotidiana de la sociedad. Aunque se considera una disciplina muy antigua, actualmente se obtiene en las universidades del mundo en su nivel b&aacute;sico de Diplomado, as&iacute; como Licenciatura, llegando a especialidades; extendiendose a niveles superiores como Posgrado, Maestr&iacute;as y Doctorado. Para ella, el estudio, conocimiento, manejo y dominio de las matem&aacute;ticas, la f&iacute;sica y otras ciencias es aplicado profesionalmente tanto para el desarrollo de tecnolog&iacute;as, como para el manejo eficiente de recursos y fuerzas de la naturaleza en beneficio de la sociedad. La ingenier&iacute;a es la actividad de transformar el conocimiento en algo pr&aacute;ctico. Otra caracter&iacute;stica que define a la ingenier&iacute;a es la aplicaci&oacute;n de los conocimientos cient&iacute;ficos a la invenci&oacute;n o perfeccionamiento de nuevas t&eacute;cnicas. Esta aplicaci&oacute;n se caracteriza por usar el ingenio principalmente de una manera m&aacute;s pragm&aacute;tica y &aacute;gil que el m&eacute;todo cient&iacute;fico, puesto que la ingenier&iacute;a, como actividad, est&aacute; limitada al tiempo y recursos dados por el entorno en que ella se desenvuelve. Su estudio como campo del conocimiento est&aacute; directamente relacionado con el comienzo de la revoluci&oacute;n industrial, constituyendo una de las actividades pilares en el desarrollo de las sociedades modernas.</p>', 1, '2013-01-07', '2013-01-07', '2012-12-08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alpza_publicacion`
--

CREATE TABLE IF NOT EXISTS `alpza_publicacion` (
  `id_alpza_publicacion` int(11) NOT NULL AUTO_INCREMENT,
  `alpza_miembro_id_alpza_miembro` int(11) NOT NULL,
  `id_alpza_publicacion_tipo` int(11) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `extracto` varchar(254) DEFAULT NULL,
  `proyecto` text,
  `estado` int(11) DEFAULT '1',
  `fecha_ingreso` date DEFAULT NULL,
  `fecha_edicion` date DEFAULT NULL,
  `fecha_publicacion` date DEFAULT NULL,
  PRIMARY KEY (`id_alpza_publicacion`),
  KEY `fk_alpza_publicacion_alpza_publicacion_tipo1` (`id_alpza_publicacion_tipo`),
  KEY `fk_alpza_publicacion_alpza_miembro1` (`alpza_miembro_id_alpza_miembro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alpza_publicacion_tipo`
--

CREATE TABLE IF NOT EXISTS `alpza_publicacion_tipo` (
  `id_alpza_publicacion_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_alpza_publicacion_tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sf_guard_group`
--

CREATE TABLE IF NOT EXISTS `sf_guard_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sf_guard_group_U_1` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `sf_guard_group`
--

INSERT INTO `sf_guard_group` (`id`, `name`, `description`) VALUES
(2, 'administrador-root', ''),
(3, 'administrador', ''),
(4, 'miembro', ''),
(5, 'usuario', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sf_guard_group_permission`
--

CREATE TABLE IF NOT EXISTS `sf_guard_group_permission` (
  `group_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  PRIMARY KEY (`group_id`,`permission_id`),
  KEY `sf_guard_group_permission_FI_2` (`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sf_guard_group_permission`
--

INSERT INTO `sf_guard_group_permission` (`group_id`, `permission_id`) VALUES
(2, 6),
(3, 6),
(4, 6),
(5, 6),
(2, 7),
(3, 7),
(4, 7),
(5, 7),
(2, 8),
(3, 8),
(4, 8),
(5, 8),
(2, 9),
(3, 9),
(4, 9),
(5, 9),
(2, 10),
(2, 11),
(2, 12),
(2, 13),
(2, 14),
(3, 14),
(2, 15),
(3, 15),
(2, 16),
(3, 16),
(2, 17),
(3, 17),
(4, 17),
(5, 17),
(2, 18),
(3, 18),
(4, 18),
(5, 18),
(2, 19),
(3, 19),
(4, 19),
(5, 19),
(2, 20),
(3, 20),
(4, 20),
(5, 20),
(2, 21),
(3, 21),
(2, 22),
(2, 23),
(3, 23),
(2, 24),
(3, 24),
(2, 25),
(3, 25),
(2, 26),
(3, 26),
(4, 26),
(2, 27),
(3, 27),
(2, 28),
(3, 28),
(4, 28),
(5, 28),
(2, 29),
(3, 29),
(4, 29),
(5, 29),
(2, 30),
(3, 30),
(4, 30),
(5, 30),
(2, 31),
(3, 31),
(4, 31),
(5, 31),
(2, 32),
(2, 33),
(2, 34),
(2, 35),
(2, 36),
(3, 36),
(2, 37),
(3, 37),
(2, 38),
(3, 38),
(2, 39),
(3, 39),
(4, 39),
(5, 39),
(2, 40),
(3, 40),
(4, 40),
(5, 40),
(2, 41),
(3, 41),
(4, 41),
(5, 41),
(2, 42),
(3, 42),
(4, 42),
(5, 42),
(2, 43),
(2, 44),
(2, 45),
(2, 46),
(2, 47),
(3, 47),
(2, 48),
(3, 48),
(2, 49),
(3, 49);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sf_guard_permission`
--

CREATE TABLE IF NOT EXISTS `sf_guard_permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sf_guard_permission_U_1` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Volcado de datos para la tabla `sf_guard_permission`
--

INSERT INTO `sf_guard_permission` (`id`, `name`, `description`) VALUES
(6, 'ingresar_noticia', ''),
(7, 'ingresar_evento', ''),
(8, 'ingresar_beca', ''),
(9, 'ingresar_publicacion', ''),
(10, 'ingresar_junta', ''),
(11, 'ingresar_comite', ''),
(12, 'ingresar_congreso', ''),
(13, 'ingresar_informacion', ''),
(14, 'ingresar_banner', ''),
(15, 'ingresar_miembro', ''),
(16, 'ingresar_usuario', ''),
(17, 'editar_noticia', ''),
(18, 'editar_evento', ''),
(19, 'editar_beca', ''),
(20, 'editar_publicacion', ''),
(21, 'editar_junta', ''),
(22, 'editar_comite', ''),
(23, 'editar_congreso', ''),
(24, 'editar_informacion', ''),
(25, 'editar_banner', ''),
(26, 'editar_miembro', ''),
(27, 'editar_usuario', ''),
(28, 'eliminar_noticia', ''),
(29, 'eliminar_evento', ''),
(30, 'eliminar_beca', ''),
(31, 'eliminar_publicacion', ''),
(32, 'eliminar_junta', ''),
(33, 'eliminar_comite', ''),
(34, 'eliminar_congreso', ''),
(35, 'eliminar_informacion', ''),
(36, 'eliminar_banner', ''),
(37, 'eliminar_miembro', ''),
(38, 'eliminar_usuario', ''),
(39, 'activar_noticia', ''),
(40, 'activar_evento', ''),
(41, 'activar_beca', ''),
(42, 'activar_publicacion', ''),
(43, 'activar_junta', ''),
(44, 'activar_comite', ''),
(45, 'activar_congreso', ''),
(46, 'activar_informacion', ''),
(47, 'activar_banner', ''),
(48, 'activar_miembro', ''),
(49, 'activar_usuario', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sf_guard_profile`
--

CREATE TABLE IF NOT EXISTS `sf_guard_profile` (
  `id_sf_guard_profile` int(11) NOT NULL AUTO_INCREMENT,
  `id_sf_guard_user` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `fecha_edicion` date DEFAULT NULL,
  PRIMARY KEY (`id_sf_guard_profile`),
  KEY `fk_alpza_usuario_profile_alpza_usuario1` (`id_sf_guard_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `sf_guard_profile`
--

INSERT INTO `sf_guard_profile` (`id_sf_guard_profile`, `id_sf_guard_user`, `nombre`, `apellido`, `email`, `telefono`, `celular`, `fecha_nacimiento`, `fecha_ingreso`, `fecha_edicion`) VALUES
(2, 1, 'Root', 'Root', '', '', '', '2012-05-05', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sf_guard_remember_key`
--

CREATE TABLE IF NOT EXISTS `sf_guard_remember_key` (
  `user_id` int(11) NOT NULL,
  `remember_key` varchar(32) DEFAULT NULL,
  `ip_address` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`,`ip_address`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sf_guard_user`
--

CREATE TABLE IF NOT EXISTS `sf_guard_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `algorithm` varchar(128) NOT NULL DEFAULT 'sha1',
  `salt` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  `is_super_admin` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `sf_guard_user_U_1` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `sf_guard_user`
--

INSERT INTO `sf_guard_user` (`id`, `username`, `algorithm`, `salt`, `password`, `created_at`, `last_login`, `is_active`, `is_super_admin`) VALUES
(1, 'root', 'sha1', 'd143fa5bc2f5e2f26beaf07c665137ac', '3995bc2cb220c297e7b4410add46d2ca83f596da', '2012-10-20 17:49:59', '2013-06-03 20:52:53', 1, 1),
(2, 'alpza', 'sha1', '937b033c47fe2889dcb2461daaf6db89', '3ad87843e49adecc2c76ce652ce6366a614b6eb5', '2012-10-20 17:50:36', '2013-06-02 19:13:42', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sf_guard_user_group`
--

CREATE TABLE IF NOT EXISTS `sf_guard_user_group` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`),
  KEY `sf_guard_user_group_FI_2` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sf_guard_user_group`
--

INSERT INTO `sf_guard_user_group` (`user_id`, `group_id`) VALUES
(1, 2),
(2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sf_guard_user_permission`
--

CREATE TABLE IF NOT EXISTS `sf_guard_user_permission` (
  `user_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`),
  KEY `sf_guard_user_permission_FI_2` (`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alpza_banner`
--
ALTER TABLE `alpza_banner`
  ADD CONSTRAINT `alpza_banner_FK_1` FOREIGN KEY (`id_alpza_banner_tipo`) REFERENCES `alpza_banner_tipo` (`id_alpza_banner_tipo`);

--
-- Filtros para la tabla `alpza_beca`
--
ALTER TABLE `alpza_beca`
  ADD CONSTRAINT `alpza_beca_FK_1` FOREIGN KEY (`alpza_miembro_id_alpza_miembro`) REFERENCES `alpza_miembro` (`id_alpza_miembro`);

--
-- Filtros para la tabla `alpza_comite`
--
ALTER TABLE `alpza_comite`
  ADD CONSTRAINT `alpza_comite_FK_1` FOREIGN KEY (`id_alpza_miembro`) REFERENCES `alpza_miembro` (`id_alpza_miembro`);

--
-- Filtros para la tabla `alpza_congreso`
--
ALTER TABLE `alpza_congreso`
  ADD CONSTRAINT `alpza_congreso_FK_1` FOREIGN KEY (`id_alpza_miembro`) REFERENCES `alpza_miembro` (`id_alpza_miembro`);

--
-- Filtros para la tabla `alpza_evento`
--
ALTER TABLE `alpza_evento`
  ADD CONSTRAINT `alpza_evento_FK_1` FOREIGN KEY (`alpza_miembro_id_alpza_miembro`) REFERENCES `alpza_miembro` (`id_alpza_miembro`);

--
-- Filtros para la tabla `alpza_informacion`
--
ALTER TABLE `alpza_informacion`
  ADD CONSTRAINT `alpza_informacion_FK_1` FOREIGN KEY (`alpza_miembro_id_alpza_miembro`) REFERENCES `alpza_miembro` (`id_alpza_miembro`);

--
-- Filtros para la tabla `alpza_junta`
--
ALTER TABLE `alpza_junta`
  ADD CONSTRAINT `alpza_junta_FK_1` FOREIGN KEY (`id_alpza_miembro`) REFERENCES `alpza_miembro` (`id_alpza_miembro`);

--
-- Filtros para la tabla `alpza_miembro_asignado`
--
ALTER TABLE `alpza_miembro_asignado`
  ADD CONSTRAINT `alpza_miembro_asignado_FK_1` FOREIGN KEY (`id_sf_guard_user`) REFERENCES `sf_guard_user` (`id`),
  ADD CONSTRAINT `alpza_miembro_asignado_FK_2` FOREIGN KEY (`id_alpza_miembro`) REFERENCES `alpza_miembro` (`id_alpza_miembro`);

--
-- Filtros para la tabla `alpza_miembro_asociados`
--
ALTER TABLE `alpza_miembro_asociados`
  ADD CONSTRAINT `alpza_miembro_asociados_FK_1` FOREIGN KEY (`alpza_miembro_id_alpza_miembro`) REFERENCES `alpza_miembro` (`id_alpza_miembro`);

--
-- Filtros para la tabla `alpza_miembro_coleccion`
--
ALTER TABLE `alpza_miembro_coleccion`
  ADD CONSTRAINT `alpza_miembro_coleccion_FK_1` FOREIGN KEY (`id_alpza_miembro`) REFERENCES `alpza_miembro` (`id_alpza_miembro`);

--
-- Filtros para la tabla `alpza_miembro_estado_financiero_historial`
--
ALTER TABLE `alpza_miembro_estado_financiero_historial`
  ADD CONSTRAINT `alpza_miembro_estado_financiero_historial_FK_1` FOREIGN KEY (`id_alpza_miembro_finanzas`) REFERENCES `alpza_miembro_finanzas` (`id_alpza_miembro_finanzas`);

--
-- Filtros para la tabla `alpza_miembro_finanzas`
--
ALTER TABLE `alpza_miembro_finanzas`
  ADD CONSTRAINT `alpza_miembro_finanzas_FK_1` FOREIGN KEY (`id_alpza_miembro`) REFERENCES `alpza_miembro` (`id_alpza_miembro`);

--
-- Filtros para la tabla `alpza_miembro_nacionales`
--
ALTER TABLE `alpza_miembro_nacionales`
  ADD CONSTRAINT `alpza_miembro_nacionales_FK_1` FOREIGN KEY (`alpza_miembro_id_alpza_miembro`) REFERENCES `alpza_miembro` (`id_alpza_miembro`);

--
-- Filtros para la tabla `alpza_miembro_profesional`
--
ALTER TABLE `alpza_miembro_profesional`
  ADD CONSTRAINT `alpza_miembro_profesional_FK_1` FOREIGN KEY (`alpza_miembro_id_alpza_miembro`) REFERENCES `alpza_miembro` (`id_alpza_miembro`);

--
-- Filtros para la tabla `alpza_miembro_regional`
--
ALTER TABLE `alpza_miembro_regional`
  ADD CONSTRAINT `alpza_miembro_regional_FK_1` FOREIGN KEY (`alpza_miembro_id_alpza_miembro`) REFERENCES `alpza_miembro` (`id_alpza_miembro`);

--
-- Filtros para la tabla `alpza_noticia`
--
ALTER TABLE `alpza_noticia`
  ADD CONSTRAINT `alpza_noticia_FK_1` FOREIGN KEY (`alpza_miembro_id_alpza_miembro`) REFERENCES `alpza_miembro` (`id_alpza_miembro`);

--
-- Filtros para la tabla `alpza_publicacion`
--
ALTER TABLE `alpza_publicacion`
  ADD CONSTRAINT `alpza_publicacion_FK_1` FOREIGN KEY (`alpza_miembro_id_alpza_miembro`) REFERENCES `alpza_miembro` (`id_alpza_miembro`),
  ADD CONSTRAINT `alpza_publicacion_FK_2` FOREIGN KEY (`id_alpza_publicacion_tipo`) REFERENCES `alpza_publicacion_tipo` (`id_alpza_publicacion_tipo`);

--
-- Filtros para la tabla `sf_guard_group_permission`
--
ALTER TABLE `sf_guard_group_permission`
  ADD CONSTRAINT `sf_guard_group_permission_FK_1` FOREIGN KEY (`group_id`) REFERENCES `sf_guard_group` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sf_guard_group_permission_FK_2` FOREIGN KEY (`permission_id`) REFERENCES `sf_guard_permission` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `sf_guard_profile`
--
ALTER TABLE `sf_guard_profile`
  ADD CONSTRAINT `sf_guard_profile_FK_1` FOREIGN KEY (`id_sf_guard_user`) REFERENCES `sf_guard_user` (`id`);

--
-- Filtros para la tabla `sf_guard_remember_key`
--
ALTER TABLE `sf_guard_remember_key`
  ADD CONSTRAINT `sf_guard_remember_key_FK_1` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `sf_guard_user_group`
--
ALTER TABLE `sf_guard_user_group`
  ADD CONSTRAINT `sf_guard_user_group_FK_1` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sf_guard_user_group_FK_2` FOREIGN KEY (`group_id`) REFERENCES `sf_guard_group` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `sf_guard_user_permission`
--
ALTER TABLE `sf_guard_user_permission`
  ADD CONSTRAINT `sf_guard_user_permission_FK_1` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sf_guard_user_permission_FK_2` FOREIGN KEY (`permission_id`) REFERENCES `sf_guard_permission` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
